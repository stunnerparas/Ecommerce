@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 style="float: left" class="card-title">{{ __('User Details') }}</h4>
                        <a class="btn btn-secondary btn-sm" style="float: right"
                            href="{{ route('admin.users.index') }}">Back</a>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>{{ __('ID') }}</th>
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <td>{{ $user->name ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('User Type') }}</th>
                                        <td>{{ $user->user_type ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Mobile') }}</th>
                                        <td>{{ $user->mobile ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Email') }}</th>
                                        <td>{{ $user->email ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Username') }}</th>
                                        <td>{{ $user->username ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Status') }}</th>
                                        <td>{{ $user->status ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Position') }}</th>
                                        <td>{{ $user->position ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Profile Picture') }}</th>
                                        <td>
                                            <a href="{{ asset('images') }}/{{ $user->image ?: 'user.png' }}"
                                                data-fancybox="demo" class="fancybox">
                                                <img style="width: 50px;height:50px"
                                                    src="{{ asset('images') }}/{{ $user->image ?: 'user.png' }}"
                                                    alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Gender') }}</th>
                                        <td>{{ $user->gender ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Date') }}</th>
                                        <td>{{ date('d M, Y', strtotime($user->created_at)) ?? '' }}</td>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
