<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Component;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Gate;

class ComponentController extends Controller
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
        // abort_unless(Gate::allows('View Component'), 403);

        $components = Component::latest()->paginate(10);
        createLog('viewed component details'); // activity log

        return view('admin.components.index', compact('components'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // abort_unless(Gate::allows('Create Component'), 403);

        return view('admin.components.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // abort_unless(Gate::allows('Create Component'), 403);

        $input = $request->except('image');
        $input['image'] = $this->fileUpload($request, 'image');
        Component::create($input);
        createLog('created a new component'); // activity log

        return redirect()->route('admin.components.index')->with('success', 'New Component Created');
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
    public function edit(Component $component)
    {
        // abort_unless(Gate::allows('Edit Component'), 403);

        return view('admin.components.edit', compact('component'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Component $component)
    {
        // abort_unless(Gate::allows('Edit Component'), 403);

        $input = $request->except('image');
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($component->image);
            $input['image'] = $image;
        }
        $component->update($input);
        createLog('edited a component'); // activity log

        return redirect()->route('admin.components.index')->with('success', 'Component Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Component $component)
    {
        // abort_unless(Gate::allows('Delete Component'), 403);

        $this->removeFile($component->image);
        $component->delete();
        createLog('deleted a component'); // activity log

        return redirect()->route('admin.components.index')->with('success', 'Component Deleted');
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
