@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.manageshipping.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation"
                                action="{{ route('admin.manageshipping.update', $manageshipping->id) }}" method="POST"
                                enctype="multipart/form-data" novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Tracking Number</label>
                                                <input type="text"
                                                    value="{{ old('tracking_number', $manageshipping->tracking_number) }}"
                                                    name="tracking_number" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Tracking Number is required
                                                </div>
                                                @error('tracking_number')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Shipping Method</label>
                                                <input type="text"
                                                    value="{{ old('shipping_method', $manageshipping->shipping_method) }}"
                                                    name="shipping_method" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Shipping Method is required
                                                </div>
                                                @error('shipping_method')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Estimated Arrival Date</label>
                                                <input type="text"
                                                    value="{{ old('estimated_arrival_date', $manageshipping->estimated_arrival_date) }}"
                                                    name="estimated_arrival_date" class="form-control datepicker"
                                                    required="">
                                                <div class="invalid-feedback">
                                                    Estimated Arrival Date is required
                                                </div>
                                                @error('estimated_arrival_date')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Tracking URL</label>
                                                <input type="text"
                                                    value="{{ old('tracking_url', $manageshipping->tracking_url) }}"
                                                    name="tracking_url" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Tracking URL is required
                                                </div>
                                                @error('tracking_url')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Shipping Status</label>
                                                <input type="text"
                                                    value="{{ old('shipping_status', $manageshipping->shipping_status) }}"
                                                    name="shipping_status" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Shipping Status is required
                                                </div>
                                                @error('shipping_status')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Select Customer</label>
                                                <select name="user_id" class="form-control select2" id="">
                                                    <option value="" selected disabled>Select</option>
                                                    @foreach ($customers as $customer)
                                                        <option
                                                            {{ old('user_id', $manageshipping->user_id) == $customer->id ? 'selected' : '' }}
                                                            value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    Customer is required
                                                </div>
                                                @error('tracking_url')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <textarea name="remarks" class="form-control">{{ old('remarks', $manageshipping->remarks) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>File (Optional) </label>
                                                <br>
                                                <input type="file" name="file" class="preview-image">
                                                <br>
                                                <img src="{{ asset('images/' . $manageshipping->file) }}"
                                                    style="height:130px" class="preview-image-src" id="view-image"
                                                    alt="">
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
