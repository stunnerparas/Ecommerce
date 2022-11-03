<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class TypeController extends Controller
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
        abort_unless(Gate::allows('View Collection'), 403);

        $types = Type::latest()->paginate(10);
        createLog('viewed type details'); // activity log

        return view('admin.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('Create Collection'), 403);

        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeRequest $request)
    {
        abort_unless(Gate::allows('Create Collection'), 403);

        $input = $request->all();
        $input['slug'] = Str::slug($request->type);
        Type::create($input);
        createLog('created a new type'); // activity log

        return redirect()->route('admin.types.index')->with('success', 'New Type Created');
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
    public function edit(Type $type)
    {
        abort_unless(Gate::allows('Edit Collection'), 403);

        return view('admin.type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTypeRequest $request, Type $type)
    {
        abort_unless(Gate::allows('Edit Collection'), 403);

        $input = $request->all();
        $input['slug'] = Str::slug($request->type);
        $type->update($input);
        createLog('edited a type'); // activity log

        return redirect()->route('admin.types.index')->with('success', 'Type Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        abort_unless(Gate::allows('Delete Collection'), 403);

        $type->delete();
        createLog('deleted a type'); // activity log

        return redirect()->route('admin.types.index')->with('success', 'Type Deleted');
    }
}
