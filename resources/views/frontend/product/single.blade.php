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

                <div class="rate py-2">
                    @if (Session::get('business'))
                    <h3>${{ $product->business_price ?? 0 }}</h3>
                    <h6>Note: Minimum quantity for this product is {{ $product->min_quantity }}</h6>
                    @else
                    <h3>${{ $product->price ?? 0 }}</h3>
                    @endif
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
                    <div class="color2 color-circle color-value" data-attribute="Color" data-value="{{ $color->id }}">
                        {{ $color->name }}
                    </div>
                    @endforeach
                </div>
                <div class="product-button py-2">
                    @if (Session::get('business'))
                    <input type="number" class="form-control py-2 mb-2" value="{{ $product->min_quantity ?? 0 }}" placeholder="Quantity" name="" id="min-quantity">
                    @endif
                    <a href="javascript:void(0)" class="tritary-btn text-center" data-business="{{ Session::get('business') ? 'yes' : 'no' }}" data-quantity="{{ $product->min_quantity }}" data-value="{{ $product->id }}" id="btn-add-to-cart">
                        <i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    <a href="javascript:void(0)" class="tritary-btn text-center" data-value="{{ $product->id }}" id="btn-add-to-wishlist">
                        <i class="fas fa-heart"></i> Add to Wishlist</a>
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
<!-- recommendation section end -->

<!-- comment section created -->
<div class="comment">
    <div class="container">
        <h2 class="section-heading my-4 text-center">Review <span style="color:#e53637 ;">The Product</span></h2>
        <!-- Input comment -->
        <div class="comment-input py-2">
            <form action="">
                <div class="input">
                    <textarea name="comment" id="comment" class="w-100" cols="30" rows="10" placeholder="Your comment here"></textarea>
                </div>
                <div class="button py-1">
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </div>

            </form>
        </div>

        <!-- comment display container -->
        <div class="comment-display py-3">
            <!-- comment box  -->
            <div class="comment-box my-3">

                <div class="content px-3">
                    <div class="user-profiles">
                        <div class="profile-image">
                            <img src="{{ asset('frontend/assets/images/krishnapokharel.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <!-- User Full name -->
                            <h6 class="font-weight-bold">User 1</h6>
                            <!-- comment date -->
                            <p>31 Nov 2022</p>


                        </div>

                    </div>


                    <!-- user Comment -->
                    <div class="user-comment">
                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam cumque minus obcaecati facilis illo error placeat suscipit ducimus aliquid exercitationem quas accusantium cupiditate inventore voluptatem iste, amet totam a eum distinctio assumenda nam eligendi unde dicta odit. Facere, dolor! Animi! </p>
                    </div>
                    <!-- icons -->
                    <div class="comment-icon">

                        <i class="fas fa-reply" onclick="reply()" id="reply"></i>
                    </div>

                </div>

                <div class="comment-reply px-4 py-2" id="commentReply">
                    <input type="text" id="replyComment" placeholder="Your reply">
                </div>

            </div>
            <!-- comment box end -->




        </div>
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
        var isBusiness = $(this).attr('data-business');
        var quantity = parseInt($(this).attr('data-quantity'));
        if (isBusiness == 'yes') {
            if (parseInt($('#min-quantity').val()) < quantity) {
                toastr.error("Minimun Quantity For This Product is " + quantity);
                return false;
            }
        }
        url = "{{ route('cart.store') }}";
        cartData(id, url);
    })

    $('#btn-add-to-wishlist').click(function(e) {
        var id = $(this).attr('data-value');
        url = "{{ route('wishlist.store') }}";
        cartData(id, url);
    })

    function cartData(id, url) {
        if (!size) {
            toastr.error("Select Size");
            return false;
        }

        if (!color) {
            toastr.error("Select Color");
            return false;
        }

        min_quantity = parseInt($('#min-quantity').val() ?? 1);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: url,
            type: "POST",
            data: {
                size: size,
                color: color,
                product_id: id,
                min_quantity: min_quantity
            },
            success: function(data) {
                if (data == 'not-logged-in') {
                    toastr.error("Please Login First");
                    return false;
                }

                if (data == 'already-added') {
                    toastr.error("Already Added To Wishlist");
                    return false;
                }

                if (data == 'success') {
                    toastr.success("Added To Wishlist");
                    return false;
                }

                toastr.success("Added to Cart");
            },
            error: function(data) {
                alert("Some Problems Occured!");
            },
        });
    }
</script>
@endsection