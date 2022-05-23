@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create</h1>
            <div class="section-header-breadcrumb">

                @if (isset($_GET['parent']) && $_GET['parent'])
                    <a class="btn btn-secondary"
                        href="{{ route('admin.attributes.index', ['parent' => $_GET['parent']]) }}"><i
                            class="fas fa-arrow-left"></i>
                        Back</a>
                @else
                    <a class="btn btn-secondary" href="{{ route('admin.attributes.index') }}"><i
                            class="fas fa-arrow-left"></i>
                        Back</a>
                @endif

            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.attributes.store') }}" method="POST"
                                enctype="multipart/form-data" novalidate="">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
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

                                            <div class="form-group">
                                                <label>Show</label>
                                                <select name="show" id="" class="form-control">
                                                    @foreach (App\Models\Attribute::show as $key => $item)
                                                        <option {{ old('show') == $key ? 'selected' : '' }}
                                                            value="{{ $key }}">{{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    @if (isset($_GET['parent']) && $_GET['parent'])
                                        <input type="hidden" name="parent_id" value="{{ $_GET['parent'] }}"
                                            class="form-control">
                                    @else
                                        <input type="hidden" name="parent_id" value="0" class="form-control">
                                    @endif

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
