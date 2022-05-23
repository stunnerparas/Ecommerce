@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.products.index') }}"><i class="fas fa-arrow-left"></i>
                    Back to list</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.products.update', $product->id) }}"
                                method="POST" enctype="multipart/form-data" novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @include('admin.includes.messages')
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" value="{{ old('name', $product->name) }}" name="name"
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
                                                <label>Price</label>
                                                <input type="number" value="{{ old('price', $product->price) }}"
                                                    name="price" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Price is required
                                                </div>
                                                @error('price')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="summernote"
                                                    style="display: none;">{{ old('description', $product->description) }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Type</label><br>
                                                @foreach (App\Models\Product::type as $key => $item)
                                                    <span class="mr-3">
                                                        <input
                                                            @if ($product->type) @if (in_array($key, json_decode($product->type))) {{ 'checked' }} @endif
                                                            @endif
                                                        type="checkbox" name="type[]" value="{{ $key }}">
                                                        {{ $item }}
                                                    </span>
                                                @endforeach
                                            </div>

                                            <div class="form-group">
                                                <label>Visibility Status</label>
                                                <select name="visibility_status" id="" class="form-control">
                                                    @foreach (App\Models\Product::visibility_status as $key => $item)
                                                        <option
                                                            {{ old('visibility_status', $product->visibility_status) == $key ? 'selected' : '' }}
                                                            value="{{ $key }}">{{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            {{-- <div class="card-footer"> --}}
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            {{-- </div> --}}

                                        </div>
                                        <div class="col-md-4">
                                            @include('admin.product.includes.categories')
                                            @include('admin.product.includes.attributes')
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="panel panel-default">
                                            <div class="panel-header">
                                                <h4>Other Images</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div style="margin:0 auto;text-align: center;">
                                                    @foreach ($gallery as $img)
                                                        <div style="float:left;margin-top:10px;">
                                                            <a class="delete_product_image btn btn-xs btn-danger"
                                                                href="{{ route('admin.image.delete', ['id' => $img->id, 'type' => 'gallery']) }}"
                                                                style="">X</a>
                                                            <img src="{{ asset('images/' . $img->image) }}"
                                                                style="height:100px; object-fit: contain;margin:10px;display:block">
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <form id="product_images"
                                                    action="{{ route('admin.gallery', $product->id) }}"
                                                    class="dropzone" enctype="multipart-formdata"
                                                    style="min-height:300px" method="POST">
                                                    @csrf
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="panel panel-default">
                                            <div class="panel-header">
                                                <h4>Featured Image</h4>
                                            </div>
                                            <div class="panel-body">
                                                <form id="product_image"
                                                    action="{{ route('admin.featured.image', $product->id) }}"
                                                    class="dropzone" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @if ($product->featured_image)
                                                        <div style="text-align:center">
                                                            <a class="delete_product_image btn btn-xs btn-danger"
                                                                href="{{ route('admin.image.delete', ['id' => $product->id, 'type' => 'featured']) }}">X</a>
                                                            <br />
                                                            <img src="{{ asset('images/' . $product->featured_image) }}"
                                                                style="height:100px;object-fit: contain;">
                                                        </div>
                                                    @endif

                                                    <div class="fallback">
                                                        <input name="image" type="file" />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </section>

    <style>
        .product_category {
            height: 400px;
            overflow-x: scroll;
            border: 1px #ddd solid;
            padding: 15px;
        }

        .panel-header {
            background: #efefef;
            padding: 10px;
            text-align: center;

        }

        .panel-header h4 {
            margin: 0;
        }

        ul li label {
            padding-left: 10px;
        }

        ul {
            list-style: none;
            line-height: 20px !important;
        }

    </style>
@endsection

@section('scripts')
    <script>
        // $(function() {
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone('form#product_image', {
            maxFiles: 1,
            acceptedFiles: 'image/*',
            dictInvalidFileType: 'This form only accepts images.',
            dictDefaultMessage: 'Drag or click here to upload',
            maxFilesize: 100,
            timeout: 180000000,

        });

        Dropzone.autoDiscover = false;
        var myDropzone1 = new Dropzone('form#product_images', {
            maxFiles: 10,
            // uploadMultiple: true,
            acceptedFiles: 'image/*',
            dictInvalidFileType: 'This form only accepts images.',
            dictDefaultMessage: 'Drag or click here to upload',
            maxFilesize: 100,
            timeout: 180000000,

        });

        // })
        myDropzone.on("complete", function(file) {
            location.reload();
        });
        myDropzone1.on("complete", function(file) {
            location.reload();
        });
    </script>
@endsection
