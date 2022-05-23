@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit</h1>
            <div class="section-header-breadcrumb">
                @if (isset($_GET['parent']) && $_GET['parent'])
                    <a class="btn btn-secondary"
                        href="{{ route('admin.categories.index', ['parent' => $_GET['parent']]) }}"><i
                            class="fas fa-arrow-left"></i>
                        Back</a>
                @else
                    <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}"><i
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
                            <form class="needs-validation" action="{{ route('admin.categories.update', $category->id) }}"
                                method="POST" enctype="multipart/form-data" novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" value="{{ old('name', $category->name) }}" name="name"
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
                                                <label>Order</label>
                                                <input type="number" value="{{ old('order', $category->order) }}"
                                                    name="order" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Featured</label>
                                                <select name="featured" id="" class="form-control">
                                                    @foreach (App\Models\Category::featured as $key => $item)
                                                        <option
                                                            {{ old('featured', $category->featured) == $key ? 'selected' : '' }}
                                                            value="{{ $key }}">{{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="summernote"
                                                    style="display: none;">{{ old('description', $category->description) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Banner</label>
                                                <br>
                                                <input type="file" name="banner" class="preview-image">
                                                <br>
                                                <img src="{{ asset('images/' . ($category->banner ?: 'no-image.png')) }}"
                                                    style="height:130px" class="preview-image-src" id="view-image" alt="">
                                            </div>
                                            <div class="form-group">
                                                <label>Image</label>
                                                <br>
                                                <input type="file" name="image" class="preview-image">
                                                <br>
                                                <img src="{{ asset('images/' . ($category->image ?: 'no-image.png')) }}"
                                                    style="height:130px" class="preview-image-src" id="view-image" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="parent_id" value="{{ $category->parent_id }}"
                                        class="form-control">

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
