<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeRequest;
use App\Models\Attribute as ModelsAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AttributeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(Gate::allows('View Attribute'), 403);

        $attributes = ModelsAttribute::latest();
        $parent = 0;
        $parentAttribute = '';
        if (isset($_GET['parent']) && $_GET['parent']) {
            $attributes = $attributes->where('parent_id', $_GET['parent']);
            $parent = $_GET['parent'];
            $parentAttribute = ModelsAttribute::findOrFail($parent);
        } else {
            $attributes = $attributes->where('parent_id', 0);
        }

        $attributes = $attributes->paginate(10);

        $params = array('parent' => $parent); // for sub attributes pagination

        createLog('viewed attributes'); // activity log
        return view('admin.attribute.index', compact('attributes', 'parent', 'parentAttribute', 'params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('Create Attribute'), 403);

        return view('admin.attribute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttributeRequest $request)
    {
        abort_unless(Gate::allows('Create Attribute'), 403);

        $input = $request->all();
        ModelsAttribute::create($input);

        createLog('created new attribute'); // activity log

        if ($request->parent_id) {
            return redirect()->route('admin.attributes.index', ['parent' => $request->parent_id])->with('success', 'New Attribute Created');
        }
        return redirect()->route('admin.attributes.index')->with('success', 'New Attribute Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsAttribute $attribute)
    {
        abort_unless(Gate::allows('Edit Attribute'), 403);

        return view('admin.attribute.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsAttribute $attribute)
    {
        abort_unless(Gate::allows('Edit Attribute'), 403);

        $input = $request->all();
        $attribute->update($input);

        createLog('edited attribute'); // activity log

        if ($request->parent_id) {
            return redirect()->route('admin.attributes.index', ['parent' => $request->parent_id])->with('success', 'Attribute Updated');
        }
        return redirect()->route('admin.attributes.index')->with('success', 'Attribute Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsAttribute $attribute)
    {
        abort_unless(Gate::allows('Delete Attribute'), 403);

        $attribute->delete();
        createLog('deleted attribute'); // activity log

        return redirect()->route('admin.attributes.index')->with('success', 'Attribute Deleted');
    }
}
