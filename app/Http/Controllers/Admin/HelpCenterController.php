<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHelpCenterRequest;
use App\Http\Requests\UpdateHelpCenterRequest;
use App\Models\HelpCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Facades\Gate;

class HelpCenterController extends Controller
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
        // abort_unless(Gate::allows('View Help Center'), 403);

        $helpcenters = HelpCenter::latest()->paginate(10);
        createLog('viewed help center details'); // activity log

        return view('admin.helpcenter.index', compact('helpcenters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // abort_unless(Gate::allows('Create Help Center'), 403);

        return view('admin.helpcenter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHelpCenterRequest $request)
    {
        // abort_unless(Gate::allows('Create Help Center'), 403);

        $input = $request->except('image');
        $input['image'] = $this->fileUpload($request, 'image');
        $input['slug'] = Str::slug($request->title);
        HelpCenter::create($input);
        createLog('created a new help center'); // activity log

        return redirect()->route('admin.helpcenter.index')->with('success', 'New Help Center Created');
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
    public function edit(HelpCenter $helpcenter)
    {
        // abort_unless(Gate::allows('Edit Help Center'), 403);

        return view('admin.helpcenter.edit', compact('helpcenter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHelpCenterRequest $request, HelpCenter $helpcenter)
    {
        // abort_unless(Gate::allows('Edit Help Center'), 403);

        $input = $request->except('image');
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($helpcenter->image);
            $input['image'] = $image;
        }
        $input['slug'] = Str::slug($request->title);
        $helpcenter->update($input);
        createLog('edited a help center'); // activity log

        return redirect()->route('admin.helpcenter.index')->with('success', 'Help Center Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HelpCenter $helpcenter)
    {
        // abort_unless(Gate::allows('Delete Page'), 403);

        $this->removeFile($helpcenter->image);
        $helpcenter->delete();
        createLog('deleted a help center'); // activity log

        return redirect()->route('admin.helpcenter.index')->with('success', 'Help Center Deleted');
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
