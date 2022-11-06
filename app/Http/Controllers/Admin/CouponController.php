<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CouponController extends Controller
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
        abort_unless(Gate::allows('View Coupon'), 403);

        $coupons = Coupon::latest()->paginate(10);
        createLog('viewed coupon details'); // activity log

        return view('admin.coupon.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('Create Coupon'), 403);

        return view('admin.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouponRequest $request)
    {
        abort_unless(Gate::allows('Create Coupon'), 403);

        $input = $request->all();
        Coupon::create($input);
        createLog('created new coupon'); // activity log

        return redirect()->route('admin.coupon.index')->with('success', 'New Coupon Created');
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
    public function edit(Coupon $coupon)
    {
        abort_unless(Gate::allows('Edit Coupon'), 403);

        return view('admin.coupon.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        abort_unless(Gate::allows('Edit Coupon'), 403);

        $input = $request->all();
        $coupon->update($input);
        createLog('edited coupon details'); // activity log

        return redirect()->route('admin.coupon.index')->with('success', 'Coupon Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        abort_unless(Gate::allows('Delete Coupon'), 403);

        $coupon->delete();
        createLog('deleted coupon details'); // activity log

        return redirect()->route('admin.coupon.index')->with('success', 'Coupon Deleted');
    }
}
