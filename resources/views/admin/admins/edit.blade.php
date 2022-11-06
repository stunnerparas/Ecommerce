@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Update</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.admins.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.admins.update', $admin->id) }}"
                                method="POST" enctype="multipart/form-data" novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName1">{{ __('Name') }}</label>
                                        <input type="text" class="form-control validate"
                                            value="{{ old('name', $admin->name) }}" name="name" required
                                            id="exampleInputName1" placeholder="{{ __('Name') }}">
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
                                        <label for="">{{ __('Mobile') }}</label>
                                        <input type="text" class="form-control validate"
                                            value="{{ old('mobile', $admin->phone) }}" name="phone" id=""
                                            placeholder="{{ __('Mobile') }}">
                                        <div class="invalid-feedback">
                                            Mobile is required
                                        </div>
                                        @error('phone')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail3">{{ __('Email') }}</label>
                                        <input type="email" class="form-control validate"
                                            value="{{ old('email', $admin->email) }}" name="email" id="exampleInputEmail3"
                                            placeholder="{{ __('Email') }}">
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
                                        <label for="exampleInputPassword4">{{ __('Password') }}</label>
                                        <input type="password" class="form-control validate" name="password"
                                            id="exampleInputPassword4" placeholder="{{ __('Password') }}">
                                        <div class="invalid-feedback">
                                            Password is required
                                        </div>
                                        @error('password')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword4">{{ __('Confirm Password') }}</label>
                                        <input type="password" class="form-control validate" name="password_confirmation"
                                            id="exampleInputPassword4" placeholder="{{ __('Confirm Password') }}">
                                        <div class="invalid-feedback">
                                            Confirm Password is required
                                        </div>
                                        @error('password_confirmation')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleSelectGender">{{ __('Gender') }}</label><br>
                                        @foreach (App\Models\User::gender as $key => $value)
                                            <input class="validate" type="radio"
                                                {{ old('gender', $admin->gender) == $key ? 'checked' : '' }}
                                                value="{{ $key }}" name="gender"> {{ $value }}
                                        @endforeach
                                        <br>
                                        @error('gender')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputCity1">{{ __('Roles') }}</label>
                                        <select class="form-control" name="roles[]" id="exampleSelectGender">
                                            <option value="">None</option>
                                            @foreach ($roles as $role)
                                                <option @if (in_array($role->id, $user_role)) {{ 'selected' }} @endif
                                                    value="{{ $role->id }}">
                                                    {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('roles')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
