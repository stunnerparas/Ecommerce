<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Component;
use App\Models\ComponentType;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class ComponentTypeController extends Controller
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
    public function index(Component $component)
    {
        // abort_unless(Gate::allows('View Component'), 403);

        $components = ComponentType::where('component_id', $component->id)->latest()->paginate(10);
        createLog('viewed component types details'); // activity log

        return view('admin.componenttypes.index', compact('components', 'component'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Component $component)
    {
        // abort_unless(Gate::allows('Create Component'), 403);

        return view('admin.componenttypes.create', compact('component'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Component $component)
    {
        // abort_unless(Gate::allows('Create Component'), 403);

        $input = $request->except('image');
        $input['image'] = $this->fileUpload($request, 'image');
        $input['component_id'] = $component->id;
        $input['slug'] = Str::slug($request->title);
        ComponentType::create($input);
        createLog('created a new component category'); // activity log

        return redirect()->route('admin.componenttypes.index', $component->id)->with('success', 'New Component Category Created');
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
    public function edit(ComponentType $componenttype)
    {
        // abort_unless(Gate::allows('Edit Component'), 403);

        return view('admin.componenttypes.edit', compact('componenttype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComponentType $componenttype)
    {
        // abort_unless(Gate::allows('Edit Component'), 403);

        $input = $request->except('image');
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($componenttype->image);
            $input['image'] = $image;
        }
        $input['slug'] = Str::slug($request->title);

        $componenttype->update($input);
        createLog('edited a component category'); // activity log

        return redirect()->route('admin.componenttypes.index', $componenttype->component_id)->with('success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComponentType $componenttype)
    {
        // abort_unless(Gate::allows('Delete Component'), 403);

        $this->removeFile($componenttype->image);
        $componenttype->delete();
        createLog('deleted a component category'); // activity log

        return redirect()->route('admin.componenttypes.index',$componenttype->component_id)->with('success', 'Component Category Deleted');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/images/';
            $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/images/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
