@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit</h1>
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
                            <form class="needs-validation" action="{{ route('admin.sliders.update', $slider->id) }}"
                                method="POST" enctype="multipart/form-data" novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" value="{{ old('heading', $slider->heading) }}"
                                                    name="heading" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Heading is required
                                                </div>
                                                @error('heading')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" value="{{ old('title', $slider->title) }}" name="title"
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
                                                <input type="text" value="{{ old('btn_text', $slider->btn_text) }}"
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
                                                <input type="text" value="{{ old('btn_link', $slider->btn_link) }}"
                                                    name="btn_link" class="form-control" required="">
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
                                                <textarea name="description" class="summernote"
                                                    style="display: none;">{{ old('description', $slider->description) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <br>
                                                <input type="file" name="image" class="preview-image">
                                                <br>
                                                <img src="{{ asset('images/' . $slider->image) }}" style="height:130px"
                                                    class="preview-image-src" id="view-image" alt="">
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
