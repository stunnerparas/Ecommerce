<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeRequest;
use App\Models\Attribute as ModelsAttribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('admin.attribute.index', compact('attributes', 'parent', 'parentAttribute', 'params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $input = $request->all();
        ModelsAttribute::create($input);

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
        $input = $request->all();
        $attribute->update($input);

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
        $attribute->delete();
        return redirect()->route('admin.attributes.index')->with('success', 'Attribute Deleted');
    }
}
