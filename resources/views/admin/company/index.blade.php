@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Company Details</h1>
            <div class="section-header-breadcrumb">
                {{-- <a class="btn btn-secondary" href="{{ route('admin.sliders.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a> --}}
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.company.update', $company->id) }}"
                                method="POST" enctype="multipart/form-data" novalidate="">
                                @csrf
                                @include('admin.includes.messages')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" value="{{ old('name', $company->name) }}" name="name"
                                                    class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Name is required
                                                </div>
                                                @error('name')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" value="{{ old('email', $company->email) }}"
                                                    name="email" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Email is required
                                                </div>
                                                @error('email')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" value="{{ old('address', $company->address) }}"
                                                    name="address" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Address is required
                                                </div>
                                                @error('address')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" value="{{ old('phone', $company->phone) }}"
                                                    name="phone" class="form-control">
                                                <div class="invalid-feedback">
                                                    Phone is required
                                                </div>
                                                @error('phone')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" value="{{ old('date', $company->date) }}" name="date"
                                                    class="form-control">
                                                <div class="invalid-feedback">
                                                    Date is required
                                                </div>
                                                @error('date')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" value="{{ old('website', $company->website) }}"
                                                    name="website" class="form-control">
                                                <div class="invalid-feedback">
                                                    Website is required
                                                </div>
                                                @error('website')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="summernote"
                                                    style="display: none;">{{ old('description', $company->description) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <br>
                                                <input type="file" name="logo" class="preview-image">
                                                <br>
                                                <img src="{{ asset('images/' . $company->logo) }}" style="height:130px"
                                                    class="preview-image-src" id="view-image" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
