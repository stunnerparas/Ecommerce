<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShippingRequest;
use App\Models\ManageShipping;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use File;

class ManageShippingController extends Controller
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
        // abort_unless(Gate::allows('View Page'), 403);

        $manageshippings = ManageShipping::latest()->paginate(10);
        createLog('viewed shipping details'); // activity log

        return view('admin.manageshipping.index', compact('manageshippings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // abort_unless(Gate::allows('Create Page'), 403);

        $customers = User::where('user_type', 'customer')->orWhere('user_type', 'business')->get();
        return view('admin.manageshipping.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShippingRequest $request)
    {
        // abort_unless(Gate::allows('Create Page'), 403);

        $input = $request->except('file');
        $input['file'] = $this->fileUpload($request, 'file');
        ManageShipping::create($input);
        createLog('created a new shipping'); // activity log

        return redirect()->route('admin.manageshipping.index')->with('success', 'New Shipping Created');
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
    public function edit(ManageShipping $manageshipping)
    {
        // abort_unless(Gate::allows('Edit Page'), 403);

        $customers = User::where('user_type', 'customer')->orWhere('user_type', 'business')->get();
        return view('admin.manageshipping.edit', compact('manageshipping', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreShippingRequest $request, ManageShipping $manageshipping)
    {
        // abort_unless(Gate::allows('Edit Page'), 403);

        $input = $request->except('file');
        $image = $this->fileUpload($request, 'file');
        if ($image) {
            $this->removeFile($manageshipping->file);
            $input['file'] = $image;
        }
        $manageshipping->update($input);
        createLog('edited a shipping record'); // activity log

        return redirect()->route('admin.manageshipping.index')->with('success', 'Shipping Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageShipping $manageshipping)
    {
        // abort_unless(Gate::allows('Delete Page'), 403);

        $this->removeFile($manageshipping->file);
        $manageshipping->delete();
        createLog('deleted a shipping record'); // activity log

        return redirect()->back()->with('success', 'Shipping Deleted');
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
