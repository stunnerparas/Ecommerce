@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.coupon.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.coupon.store') }}" method="POST"
                                enctype="multipart/form-data" novalidate="">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Coupon Code</label>
                                                <input type="text" value="{{ old('code') }}" name="code"
                                                    class="form-control" placeholder="Coupon Code" required="">
                                                <div class="invalid-feedback">
                                                    Code is required
                                                </div>
                                                @error('code')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Limit</label>
                                                <input type="number" value="{{ old('limit') }}" name="limit"
                                                    class="form-control" placeholder="Limit" required="">
                                                <div class="invalid-feedback">
                                                    Limit is required
                                                </div>
                                                @error('limit')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Discount Amount</label>
                                                <input type="text" value="{{ old('discount') }}" name="discount"
                                                    class="form-control" placeholder="Discount Amount" required="">

                                                <div class="invalid-feedback">
                                                    Discount Amount is required
                                                </div>
                                                @error('discount')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
