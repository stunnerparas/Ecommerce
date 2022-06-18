@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5">
        <div class="container-fluid d-flex justify-content-center">
            <div class="card change-password-card card-outline-secondary">
                <div class="card-header">
                    <h3 class="mb-0">Change Password</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" method="POST" action="{{ route('change.password.store') }}"
                        autocomplete="off">
                        @include('frontend.includes.messages')
                        @csrf
                        <div class="form-group">
                            <label for="inputPasswordOld">Current Password</label>
                            <input style="width: 100%" type="password" name="current_password" class="form-control" id="inputPasswordOld"
                                required="">
                            @error('current_password')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPasswordNew">New Password</label>
                            <input style="width: 100%" type="password" name="new_password" class="form-control" id="inputPasswordNew"
                                required="">
                            <span class="form-text small text-muted">
                                The password must be 8-20 characters, and must <em>not</em> contain spaces.
                            </span>
                            @error('new_password')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPasswordNewVerify">Confirm Password</label>
                            <input style="width: 100%" type="password" name="new_password_confirmation" class="form-control"
                                id="inputPasswordNewVerify" required="">
                            <span class="form-text small text-muted">
                                To confirm, type the new password again.
                            </span>
                            @error('new_password_confirmation')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group text-center mt-4c">
                            <button type="submit" class="btn primary-btn savePassword-btn p-3 btn-lg">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
