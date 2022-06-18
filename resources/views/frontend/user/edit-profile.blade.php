@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5">
        <div class="container">
            <h4>Personal Details</h4>
            <div class="edit-container mt-3">
                <form action="{{ route('profile.update') }}" method="POST">
                    @include('frontend.includes.messages')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4 col-12">
                            <label for="editEmail">Email</label>
                            <input type="email" disabled value="{{ $user->email ?? '' }}" class="form-control">
                        </div>

                        <div class="form-group col-md-4 col12">
                            <label for="editFName">Name</label>
                            <input type="text" name="name" value="{{ $user->name ?? '' }}" class="form-control">
                        </div>

                        <div class="form-group col-md-4 col-12">
                            <label for="editPhone">Gender</label>
                            <select name="gender" class="form-control" id="">
                                @foreach (\App\Models\User::gender as $key => $item)
                                    <option {{ $user->gender == $key ? 'selected' : '' }} value="{{ $key }}">
                                        {{ $item }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-4 col-12">
                            <label for="editPhone">Phone</label>
                            <input type="text" name="phone" value="{{ $user->phone ?? '' }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="saveChangeBtn btn primary-btn p-4">SAVE CHANGES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
