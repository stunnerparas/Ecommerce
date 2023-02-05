@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Details</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.business.users') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Zip Code</th>
                                    <td>{{ $user->zip_code }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $user->phone }}</td>
                                </tr>

                                <tr>
                                    <th>Country Code</th>
                                    <td>{{ $user->country_code }}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>{{ $user->country }}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ $user->city }}</td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td>{{ $user->state }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $user->address }}</td>
                                </tr>
                                <tr>
                                    <th>Company</th>
                                    <td>{{ $user->company }}</td>
                                </tr>
                                <tr>
                                    <th>VAT</th>
                                    <td>{{ $user->vat }}</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>{{ $user->website }}</td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>{{ $user->status }}</td>
                                </tr>

                            </table>

                            <div class="container">
                                <hr>
                                <form action="{{ route('admin.business.users.update', $user->id) }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control" id="">
                                                @foreach (\App\Models\User::status as $key => $val)
                                                    <option {{ $user->status == $key ? 'selected' : '' }}
                                                        value="{{ $key }}">{{ $val }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <button class="btn btn-success btn-sm" type="submit">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
