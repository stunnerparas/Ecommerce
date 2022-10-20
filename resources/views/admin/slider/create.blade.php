@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.sliders.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.sliders.store') }}" method="POST"
                                enctype="multipart/form-data" novalidate="">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        {{-- <div class="col-md-6">


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
                                                <label>Button Text</label>
                                                <input type="text" value="{{ old('btn_text', 'Shop Now') }}"
                                                    name="btn_text" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Button Text is required
                                                </div>
                                                @error('btn_text')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Button Link</label>
                                                <input type="text" value="{{ old('btn_link', '#') }}" name="btn_link"
                                                    class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Button Link is required
                                                </div>
                                                @error('btn_link')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="summernote" style="display: none;">{{ old('description') }}</textarea>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <br>
                                                <input type="file" name="image" class="preview-image">
                                                <br>
                                                <img src="" style="height:130px" class="preview-image-src" id="view-image"
                                                    alt="">
                                            </div>
                                            @error('image')
                                                <div class="invalid-feedback" style="display: block;">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                <label>Position</label>
                                                <input type="text" value="{{ old('category') }}" name="category"
                                                    class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Category is required
                                                </div>
                                                @error('category')
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
