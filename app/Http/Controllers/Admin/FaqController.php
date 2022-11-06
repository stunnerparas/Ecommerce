<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FaqController extends Controller
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
        abort_unless(Gate::allows('View Faq'), 403);

        $faqs = Faq::latest()->paginate(10);
        createLog('viewed FAQ details'); // activity log

        return view('admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('Create Faq'), 403);

        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqRequest $request)
    {
        abort_unless(Gate::allows('Create Faq'), 403);

        $input = $request->all();
        Faq::create($input);
        createLog('created new FAQ'); // activity log

        return redirect()->route('admin.faqs.index')->with('success', 'New Faq Created');
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
    public function edit(Faq $faq)
    {
        abort_unless(Gate::allows('Edit Faq'), 403);

        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFaqRequest $request, Faq $faq)
    {
        abort_unless(Gate::allows('Edit Faq'), 403);

        $input = $request->all();
        $faq->update($input);
        createLog('edited FAQ details'); // activity log


        return redirect()->route('admin.faqs.index')->with('success', 'Faq Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        abort_unless(Gate::allows('Delete Faq'), 403);

        $faq->delete();
        createLog('deleted FAQ details'); // activity log

        return redirect()->route('admin.faqs.index')->with('success', 'Faq Deleted');
    }
}
