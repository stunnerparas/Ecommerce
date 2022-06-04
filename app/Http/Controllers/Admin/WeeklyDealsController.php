<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WeeklyDeal;
use Illuminate\Http\Request;
use File;

class WeeklyDealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deals = WeeklyDeal::latest()->paginate(10);
        return view('admin.weekly-deals.index', compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $input = $request->except('image');
        $input['image'] = $this->fileUpload($request, 'image');
        WeeklyDeal::create($input);

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
        $input = $request->except('image');
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($deal->image);
            $input['image'] = $image;
        }

        $deal->update($input);
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
        $this->removeFile($deal->image);
        $deal->delete();
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
