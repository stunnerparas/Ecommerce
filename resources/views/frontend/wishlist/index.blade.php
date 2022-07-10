@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid main-container">
        <div class="container my-5 text-center">
            <h3 class="page-heading mb-3  fw-bold heading">My Wishlist</h3>
            <div class="cart-info-container">
                @if ($wishlist)
                    @if ($wishlist->count() > 0)
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="product-description-container">
                                    <div class="hr my-4"></div>

                                    @foreach ($wishlist as $item)
                                        <div
                                            class="product-description-child  d-sm-flex justify-content-between align-content-center">
                                            <div class="product-img-container mx-auto">
                                                <a href="{{ route('product', $item->product->slug ?? '') }}">
                                                    <img src="{{ asset('images/' . ($item->product->featured_image ?? '')) }}"
                                                        class="product-img" alt="product" srcset="">
                                                </a>
                                            </div>
                                            <div
                                                class="product-description-content d-flex mt-sm-0 mt-4 justify-content-between flex-grow-1">
                                                <h5
                                                    class="product-name font-weight-bold my-auto d-flex flex-column align-content-start">
                                                    {{ $item->product->name }}
                                                    <p class="product-price my-2 d-flex justify-content-lg-start">
                                                        ${{ $item->product->price }}</p>
                                                </h5>
                                                <div class="mt-5" data-quantity="">
                                                    <p class=" d-flex justify-content-lg-start">
                                                        {{ ($item->size->name ?? '') . ' / ' . ($item->color->name ?? '') }}
                                                    </p>
                                                </div>
                                                <p class="product-total-price my-auto">${{ $item->product->price }}
                                                </p>
                                            </div>
                                            <a href="{{ route('wishlist.destroy', $item->id) }}"
                                                class="btn remove-product btn-remove-cart"
                                                value="{{ $item->product->id }}"><i class="bi bi-trash-fill"></i></a>
                                        </div>
                                        <div class="hr my-4"></div>
                                    @endforeach
                                </div>
                                <a href="{{ route('wishlist.cart') }}" class="btn secondary-btn p-3 mt-4">Add to Cart<i
                                        class="bi bi-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    @else
                        <h5>No Items</h5>
                    @endif
                @else
                    <h5>Login to view wishlist</h5>
                @endif
            </div>
        </div>
    </div>
@endsection
