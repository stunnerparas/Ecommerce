@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.currency.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.currency.store') }}" method="POST"
                                enctype="multipart/form-data" novalidate="">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Currency</label>
                                                <input type="text" value="{{ old('currency') }}" name="currency"
                                                    class="form-control" placeholder="example: USD" required="">
                                                <div class="invalid-feedback">
                                                    Currency is required
                                                </div>
                                                @error('currency')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Symbol</label>
                                                <input type="text" value="{{ old('symbol') }}" name="symbol"
                                                    class="form-control" placeholder="example: $" required="">
                                                <div class="invalid-feedback">
                                                    Symbol is required
                                                </div>
                                                @error('symbol')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Rate (1 USD)</label>
                                                <input type="text" value="{{ old('rate') }}" name="rate"
                                                    class="form-control" placeholder="example: 1.03" required="">

                                                <div class="invalid-feedback">
                                                    Rate is required
                                                </div>
                                                @error('rate')
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
