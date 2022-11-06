<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCurrencyRequest;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CurrencyController extends Controller
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
        abort_unless(Gate::allows('View Currency'), 403);

        $currencies = Currency::latest()->paginate(10);
        createLog('viewed currency details'); // activity log

        return view('admin.currency.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('Create Currency'), 403);

        return view('admin.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrencyRequest $request)
    {
        abort_unless(Gate::allows('Create Currency'), 403);

        $input = $request->all();
        Currency::create($input);
        createLog('created new currency'); // activity log

        return redirect()->route('admin.currency.index')->with('success', 'New Currency Created');
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
    public function edit(Currency $currency)
    {
        abort_unless(Gate::allows('Edit Currency'), 403);

        return view('admin.currency.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCurrencyRequest $request, Currency $currency)
    {
        abort_unless(Gate::allows('Edit Currency'), 403);

        $input = $request->all();
        $currency->update($input);
        createLog('edited currency details'); // activity log


        return redirect()->route('admin.currency.index')->with('success', 'Currency Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        abort_unless(Gate::allows('Delete Currency'), 403);

        $currency->delete();
        createLog('deleted currency details'); // activity log

        return redirect()->route('admin.currency.index')->with('success', 'Currency Deleted');
    }
}
