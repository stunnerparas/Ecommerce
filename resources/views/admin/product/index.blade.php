@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Products</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-primary" href="{{ route('admin.products.create') }}"><i class="fas fa-plus"></i>
                    Create</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($products->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Visibility Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $key => $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>
                                                    <a href="{{ asset('images/' . ($product->featured_image ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($product->featured_image ?: 'no-image.png')) }}"
                                                            alt="{{ $product->name }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                <td>{{ $product->visibility_status }}</td>

                                                <td>
                                                    <div class="row">

                                                        <a class="btn btn-success mr-1"
                                                            href="{{ route('admin.products.edit', $product->id) }}">Edit</a>

                                                        <form class=""
                                                            action="{{ route('admin.products.destroy', $product->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger delete-product" type="submit">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $products->links() }}
                            @else
                                <h5>No Products Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-product').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                html: 'If you delete this, it will be gone forever.',
                showDenyButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: `No`,
                icon: 'warning'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest("form").submit();
                }
            })
        })
    </script>
@endsection
