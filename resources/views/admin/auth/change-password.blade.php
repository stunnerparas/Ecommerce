@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Change Password</h1>
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
                            <form class="needs-validation" action="{{ route('admin.change.password.store') }}"
                                method="POST" enctype="multipart/form-data" novalidate="">
                                @csrf
                                @include('admin.includes.messages')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input type="password" name="current_password"
                                                    class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Current Password is required
                                                </div>
                                                @error('current_password')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="new_password"
                                                    class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    New Password is required
                                                </div>
                                                @error('new_password')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Confirm New Password</label>
                                                <input type="password" name="new_password_confirmation"
                                                    class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Confirm New Password is required
                                                </div>
                                                @error('new_password_confirmation')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-danger">Save Changes</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
