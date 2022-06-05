@extends('frontend.layouts.master')

@section('content')
    <div id="product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 px-5 product-images">
                    <div class="product product-image1">
                        <img src="{{ asset('images/' . $product->featured_image) }}" class="w-100 h-100" alt="" />
                    </div>

                    @foreach ($images as $image)
                        <div class="product product-image2">
                            <img src="{{ asset('images/' . $image->image) }}" class="w-100 h-100" alt="" />
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4 product-desc px-5 my-4">
                    <div class="product-name">
                        <h2 class="section-heading">{{ $product->name ?? '' }}</h2>
                    </div>
                    <div class="rating">
                        @for ($i = 0; $i < $product->rating; $i++)
                            <i class="fas fa-star active"></i>
                        @endfor
                        @for ($i = 0; $i < 5 - $product->rating; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                    <div class="rate py-2">
                        <h3>${{ $product->price ?? 0 }}</h3>
                    </div>
                    <div class="batch">
                        <a href="#" class="pdp-batch">Best Seller</a>
                        <a href="#" class="pdp-batch">Top picks</a>
                    </div>

                    <div class="product-size py-3 d-flex">
                        @foreach ($sizes as $size)
                            <div class="size-circle size-value" data-attribute="Size" data-value="{{ $size->id }}">
                                <span class="size">{{ $size->name }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="product-color d-flex py-3">
                        @foreach ($colors as $color)
                            <div class="color2 color-circle color-value" data-attribute="Color"
                                data-value="{{ $color->id }}">
                                {{ $color->name }}</div>
                        @endforeach
                    </div>
                    <div class="product-button py-2">
                        <a href="javascript:void(0)" class="tritary-btn text-center" data-value="{{ $product->id }}"
                            id="btn-add-to-cart">
                            <i class="fas fa-shopping-bag"></i> Add to Cart</a>
                        <p>Free Shipping & return all over Nepal</p>
                    </div>
                    <div class="product-detail">
                        <h3>Details</h3>
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product section end -->
    <!-- Recomendation Section Start -->
    <div class="recomendation py-5">
        <div class="container-fluid">
            <div class="recomendation-heading d-flex justify-content-between">
                <h2 class="section-heading">You may Also Like</h2>
                <ul class="recomendation-items">
                    <li><a href="javascript:void(0)" id="men-link">Men</a></li>
                    <li><a href="javascript:void(0)" id="women-link">Women</a></li>
                    {{-- <li><a href="#" id="accessories-link">Accessories</a></li> --}}
                </ul>
            </div>
        </div>
        <div class="container-fluid py-2">
            <div class="men-product active" id="men-product">
                <div class="row">
                    @foreach ($menCollections as $men)
                        @include('frontend.component.product', ['product' => $men])
                    @endforeach
                </div>
            </div>
            <div class="women-product" id="women-product">
                <div class="row">
                    @foreach ($womenCollections as $women)
                        @include('frontend.component.product', ['product' => $women])
                    @endforeach
                </div>
            </div>
            {{-- <div class="accessories-product" id="accessories-product">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic">
                                <span class="label">New</span>
                                <img src="./images/accessories/accessories-banner1.jpg" class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Piqué Biker Jacket</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$67.24</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic">
                                <img src="./images/accessories/DSC04306.jpg" class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Piqué Biker Jacket</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$67.24</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men">
                        <div class="product__item sale">
                            <div class="product__item__pic">
                                <span class="label">Sale</span>
                                <img src="./images/accessories/DSC04352.jpg" class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Multi-pocket Chest Bag</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$43.48</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men">
                        <div class="product__item sale">
                            <div class="product__item__pic">
                                <span class="label">Sale</span>
                                <img src="./images/accessories/DSC04357.jpg" class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Multi-pocket Chest Bag</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$43.48</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var size = '';
        var color = '';

        $('.size-value').click(function(e) {
            size = $(this).attr('data-value');
        })

        $('.color-value').click(function(e) {
            color = $(this).attr('data-value');
        })

        $('#btn-add-to-cart').click(function(e) {
            var id = $(this).attr('data-value');
            if (!size) {
                alert("Select Size");
                return false;
            }
            if (!color) {
                alert("Select Color");
                return false;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('cart.store') }}",
                type: "POST",
                data: {
                    size: size,
                    color: color,
                    product_id: id
                },
                // processData: false,
                // cache: false,
                // contentType: false,
                success: function(data) {

                },
                error: function(data) {
                    alert("Some Problems Occured!");
                },
            });

        })
    </script>
@endsection
