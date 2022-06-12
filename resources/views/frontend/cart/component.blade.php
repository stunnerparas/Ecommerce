@if ($cartItems->count() > 0)

    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="product-description-container">
                <div class="hr my-4"></div>

                @foreach ($cartItems as $item)
                    <div class="product-description-child  d-sm-flex justify-content-between align-content-center">
                        <div class="product-img-container mx-auto">
                            <img src="{{ asset('images/' . $item->attributes->image) }}" class="product-img"
                                alt="product" srcset="">
                        </div>
                        <div class="product-description-content d-flex mt-sm-0 mt-4 justify-content-between flex-grow-1">
                            <h5 class="product-name font-weight-bold my-auto d-flex flex-column align-content-start">
                                {{ $item->name }}
                                <p class="product-price my-2 d-flex justify-content-lg-start">${{ $item->price }}</p>
                                <p class="product-price d-flex justify-content-lg-start">
                                    {{ $item->attributes->size . ' / ' . $item->attributes->color }}</p>

                            </h5>
                            <p class="product-quantity">
                            <div class="quantity-control" data-quantity="">
                                <button class="quantity-btn btn-decrease" value="{{ $item->id }}"
                                    data-quantity-minus=""><i class="bi bi-plus"></i>-</button>
                                <input type="number" class="quantity-input" data-quantity-target=""
                                    value="{{ $item->quantity }}" step="1" min="1" max="" name="quantity">
                                <button class="quantity-btn btn-increase" value="{{ $item->id }}"
                                    data-quantity-plus=""><i class="bi bi-dash"></i>+</i></button>
                            </div>

                            </p>
                            <p class="product-total-price my-auto">${{ $item->price * $item->quantity }}</p>
                        </div>
                        <div class="btn remove-product btn-remove-cart" value="{{ $item->id }}"><i
                                class="bi bi-trash-fill"></i>X</div>
                    </div>
                    <div class="hr my-4"></div>
                @endforeach


            </div>
            <h5 class="d-flex font-weight-bold justify-content-start">Total Item: {{ $cartItems->count() }}</h5>
        </div>
        <div class="col-lg-4 col-12 mt-4 mt-md-0 px-5">
            <div class="product-summary-container">
                <div class="summary-card">
                    <div class="card-heading p-2">Summary</div>
                    <div class="border-container p-2">
                        <div class="summay-container mt-3">
                            <div class="summary-item d-flex justify-content-between">
                                <p class="text-black">Total Items:</p>
                                <p class="text-black">{{ $cartItems->count() }}</p>
                            </div>
                        </div>
                        <div class="summay-container mt-3">
                            <div class="summary-item d-flex justify-content-between">
                                <p class="text-black">Total Price:</p>
                                <p class="text-black">${{ Cart::getTotal() }}</p>
                            </div>
                        </div>
                        <div class="summay-container mt-3">
                            <div class="summary-item d-flex justify-content-between">
                                <p class="text-black">Shipping Cost:</p>
                                <p class="text-black">$10</p>
                            </div>
                        </div>
                        <div class="summary-card-footer p-2">
                            <div class="total-price-container d-flex p-0 justify-content-between">
                                <p class="text-black">Grand Total:</p>
                                <p class="text-black">${{ Cart::getTotal() + 10 }}</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <a href="{{ route('checkout') }}" class="btn secondary-btn p-3 mt-4">Checkout<i class="bi bi-arrow-right ml-2"></i></a>
        </div>
    </div>
@else
    <h5>No Items</h5>
@endif
