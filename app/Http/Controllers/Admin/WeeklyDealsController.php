<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WeeklyDeal;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Gate;

class WeeklyDealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(Gate::allows('View Deal Of The Week'), 403);

        $deals = WeeklyDeal::latest()->paginate(10);
        createLog('viewed weekly deals details'); // activity log

        return view('admin.weekly-deals.index', compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('Create Deal Of The Week'), 403);

        return view('admin.weekly-deals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_unless(Gate::allows('Create Deal Of The Week'), 403);

        $input = $request->except('image');
        $input['image'] = $this->fileUpload($request, 'image');
        WeeklyDeal::create($input);
        createLog('created a weekly deals'); // activity log

        return redirect()->route('admin.deals.index')->with('success', 'New Weekly Deal Created');
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
    public function edit(WeeklyDeal $deal)
    {
        abort_unless(Gate::allows('Edit Deal Of The Week'), 403);

        return view('admin.weekly-deals.edit', compact('deal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeeklyDeal $deal)
    {
        abort_unless(Gate::allows('Edit Deal Of The Week'), 403);

        $input = $request->except('image');
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($deal->image);
            $input['image'] = $image;
        }

        $deal->update($input);
        createLog('edited a weekly deals'); // activity log

        return redirect()->route('admin.deals.index')->with('success', 'Weekly Deal Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeeklyDeal $deal)
    {
        abort_unless(Gate::allows('Delete Deal Of The Week'), 403);

        $this->removeFile($deal->image);
        $deal->delete();
        createLog('deleted a weekly deals'); // activity log

        return redirect()->route('admin.deals.index')->with('success', 'Weekly Deal Deleted');
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
