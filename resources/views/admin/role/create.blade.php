@extends('admin.layouts.master')

@section('content')
    <style>
        .permissions-design {
            background: #ebecf196;
            padding: 18px;
            border-radius: 5px;
            margin: 0px;
            border-right: 1px solid #d5d2d2;
        }
    </style>

    <section class="section">
        <div class="section-header">
            <h1>Create</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.roles.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.roles.store') }}" method="POST"
                                enctype="multipart/form-data" novalidate="">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" value="{{ old('name') }}" name="name"
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

                                            <div class="container">
                                                <label for="permission">{{ __('Permissions') }}</label>
                                                <div class="col-md-12 mb-2 ">
                                                    <div class="row row-cols-3">
                                                        @foreach ($permissions as $key => $permission)
                                                            <div class="div mt-2 permissions-design">
                                                                <input type="checkbox" child-class="{{ $key }}"
                                                                    class="select-all" name="" value="">
                                                                <b>{{ ucwords(str_replace('-', ' ', $key)) }}</b>

                                                                @foreach ($permission as $item)
                                                                    <div class="ml-4">
                                                                        <input type="checkbox" class="{{ $key }}"
                                                                            name="permission[]" value="{{ $item->id }}">
                                                                        {{ ucwords($item->name) }}
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endforeach
                                                        @error('permission')
                                                            <div class="invalid-feedback" style="display: block;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
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

@section('scripts')
    <script>
        $('.select-all').click(function(e) {
            var childclass = $(this).attr('child-class');
            if ($(this).prop('checked')) {
                $('.' + childclass).prop('checked', true);
            } else {
                $('.' + childclass).prop('checked', false);
            }
        })
    </script>
@endsection
