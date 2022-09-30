@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.blogs.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.blogs.store') }}" method="POST"
                                enctype="multipart/form-data" novalidate="">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" value="{{ old('title') }}" name="title"
                                                    class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Title is required
                                                </div>
                                                @error('title')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Author</label>
                                                <input type="text" value="{{ old('author') }}" name="author"
                                                    class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Author is required
                                                </div>
                                                @error('author')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" value="{{ old('date') }}" name="date"
                                                    class="form-control datepicker" autocomplete="off" required="">
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
                                                <label>Category</label>
                                                <select name="category_id" id="" class="form-control">
                                                    @foreach ($categories as $category)
                                                        <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="summernote" style="display: none;">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <br>
                                                <input type="file" name="image" class="preview-image">
                                                <br>
                                                <img src="" style="height:130px" class="preview-image-src"
                                                    id="view-image" alt="">

                                                @error('image')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
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
