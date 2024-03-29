@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.types.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.types.update', $type->id) }}"
                                method="POST" enctype="multipart/form-data" novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Collection</label>
                                                <input type="text" value="{{ old('type', $type->type) }}" name="type"
                                                    class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Collection is required
                                                </div>
                                                @error('type')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Order Number</label>
                                                <input type="text" value="{{ old('order_number', $type->order_number) }}"
                                                    name="order_number" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Order Number is required
                                                </div>
                                                @error('order_number')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Show In Homepage</label>
                                                <select name="is_featured" class="form-control" id="">
                                                    @foreach (\App\Models\Type::is_featured as $key => $value)
                                                        <option
                                                            {{ old('is_featured', $type->is_featured) == $key ? 'selected' : '' }}
                                                            value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Banner Description</label>
                                                <textarea name="description" class="summernote" style="display: none;">{{ old('description', $type->description) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Image (Web View)</label>
                                                <br>
                                                <input type="file" name="image" class="preview-image">
                                                <br>
                                                <img src="{{ asset('images/' . $type->image) }}" style="height:130px"
                                                    class="preview-image-src" id="view-image" alt="">
                                            </div>
                                            @error('image')
                                                <div class="invalid-feedback" style="display: block;">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                <label>Image (Mobile View)</label>
                                                <br>
                                                <input type="file" name="mobile_image" class="preview-image">
                                                <br>
                                                <img src="{{ asset('images/' . $type->mobile_image) }}"
                                                    style="height:130px" class="preview-image-src" id="view-image"
                                                    alt="">
                                            </div>
                                            @error('mobile_image')
                                                <div class="invalid-feedback" style="display: block;">
                                                    {{ $message }}
                                                </div>
                                            @enderror

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
