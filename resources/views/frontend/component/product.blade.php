<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
    <div class="product__item">
        <div class="product__item__pic">
            <a href="{{ route('product', $product->slug) }}">
                @if ($product->tag ?? '')
                    <span class="label">{{ $product->tag ?? '' }}</span>
                @endif
                <img src="{{ asset('images/' . $product->featured_image) }}" class="w-100 h-100" alt="" />
            </a>
        </div>
        <div class="product__item__text">
            <h6>{{ $product->name }}</h6>
            <a href="{{ route('product', $product->slug) }}" class="add-cart">+ Add To Cart</a>

            <h5>${{ $product->price }}</h5>
        </div>
    </div>
</div>
