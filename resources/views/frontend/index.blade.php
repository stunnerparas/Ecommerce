@extends('frontend.layouts.master')

@section('content')
    <!-- Hero Section Started -->
    @if ($mainBanner)
        <section class="hero">
            <div class="hero-menu banner">
                <img src="{{ asset('images/' . ($mainBanner->image ?? '')) }}" class="w-100 h-100" alt="" />
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 hero-container">
                                <div class="hero__text">
                                    <h2>{{ $mainBanner->title ?? '' }}</h2>
                                    <p>
                                        {!! $mainBanner->description ?? '' !!}
                                    </p>
                                    <a href="{{ $mainBanner->btn_link ?? '' }}"
                                        class="primary-btn">{{ $mainBanner->btn_text ?? '' }} <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Hero Section End -->
    <!-- Product Section Started -->
    <section class="product spad my-2">
        <div class="container">
            <h2 class="section-heading text-center py-3">Luxury Cashmere</h2>

            <div class="row" style="margin-top: 20px; display: flex; justify-content: center">
                <div class="col-lg-6 col-md-6 col-sm-12 px-2">
                    <div class="men-cart px-2 py-2">
                        <div class="images">
                            <img src="{{ asset('frontend/assets/images/product-tab/men-cart.jpg') }}"
                                class="w-100 h-100" alt="" />
                        </div>
                        <div class="content">
                            <a href="#" class="secondary-btn">Men</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="women-cart py-2">
                        <div class="images">
                            <img src="{{ asset('frontend/assets/images/product-tab/women-cart.jpg') }}"
                                class="w-100 h-100" alt="" />
                        </div>
                        <div class="content">
                            <a href="#" class="secondary-btn">Women</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row product__filter my-3">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                    <div class="product__item">
                        <div class="product__item__pic">
                            <span class="label">New</span>
                            <img src="{{ asset('frontend/assets/images/product-tab/1840.1.jpg') }}" class="w-100 h-100"
                                alt="" />
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
                            <img src="{{ asset('frontend/assets/images/product-tab/1861.1.jpg') }}" class="w-100 h-100"
                                alt="" />
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
                            <img src="{{ asset('frontend/assets/images/product-tab/1896.1.jpg') }}" class="w-100 h-100"
                                alt="" />
                        </div>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>

                            <h5>$43.48</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men">
                    <div class="product__item">
                        <div class="product__item__pic">
                            <img src="{{ asset('frontend/assets/images/product-tab/20191214 13_32_19.jpg') }}"
                                class="w-100 h-100" alt="" />
                        </div>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>

                            <h5>$60.9</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                    <div class="product__item">
                        <div class="product__item__pic">
                            <img src="{{ asset('frontend/assets/images/product-tab/20200202-142506.jpg') }}"
                                class="w-100 h-100" alt="" />
                        </div>
                        <div class="product__item__text">
                            <h6>Lether Backpack</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>

                            <h5>$31.37</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men">
                    <div class="product__item sale">
                        <div class="product__item__pic">
                            <span class="label">Sale</span>
                            <img src="{{ asset('frontend/assets/images/product-tab/ACC.jpg') }}" class="w-100 h-100"
                                alt="" />
                        </div>
                        <div class="product__item__text">
                            <h6>Ankle Boots</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>

                            <h5>$98.49</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men">
                    <div class="product__item">
                        <div class="product__item__pic">
                            <img src="{{ asset('frontend/assets/images/product-tab/DSC03392.jpg') }}"
                                class="w-100 h-100" alt="" />
                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>

                            <h5>$49.66</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                    <div class="product__item">
                        <div class="product__item__pic">
                            <img src="{{ asset('frontend/assets/images/product-tab/DSC03611.jpg') }}"
                                class="w-100 h-100" alt="" />
                        </div>
                        <div class="product__item__text">
                            <h6>Basic Flowing Scarf</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>

                            <h5>$26.28</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    <!-- Catagories Section Start -->
    <section class="catagories">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="women-catagories catagories-items my-2">
                        <img src="{{ asset('frontend/assets/images/catagories/DSC03656.jpg') }}" class="w-100 h-100"
                            alt="" />
                        <div class="content text-center">
                            <h3>Shop Women</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="men-catagories catagories-items my-2">
                        <img src="{{ asset('frontend/assets/images/catagories/catagories2.jpg') }}"
                            class="w-100 h-100" alt="" />
                        <div class="content text-center">
                            <h3>Shop Men</h3>
                        </div>
                    </div>
                    <div class="accessories-catagories catagories-items my-2">
                        <img src="{{ asset('frontend/assets/images/catagories/DSC04348.jpg') }}" class="w-100 h-100"
                            alt="" />
                        <div class="content text-center">
                            <h3>Shop Accesories</h3>
                        </div>
                    </div>
                    <div class="home-catagories catagories-items">
                        <img src="{{ asset('frontend/assets/images/catagories/c870x524.jpg') }}" class="w-100 h-100"
                            alt="" />
                        <div class="content text-center">
                            <h3>Shop Home</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Catagories Section End -->
    <!-- Signature Collection Section -->
    <section class="signature-collection my-3">
        @if ($signatureBanner)
            <div class="signature-collection-banner banner">
                <img src="{{ asset('images/' . ($signatureBanner->image ?? '')) }}" alt="" />
                <div class="row signature-banner-container">
                    <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                        <div class="signature-collection-text px-4 py-2">
                            <h2>{{ $signatureBanner->title ?? '' }}</h2>
                            <p>
                                {!! $signatureBanner->description ?? '' !!}
                            </p>
                            <a href="{{ $signatureBanner->btn_link ?? '' }}"
                                class="primary-btn">{{ $signatureBanner->btn_text ?? '' }} <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="signature-collection-product py-3">
            <div class="container-fluid">
                <div class="row product_filter">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 signature-link-container">
                        <a href="#" class="my-5 signature-link">The Signature Collection →</a>
                    </div>

                    @foreach ($signatureCollections as $signature)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <span class="label">New</span>
                                    <img src="{{ asset('images/' . $signature->featured_image) }}"
                                        class="w-100 h-100" alt="" />
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $signature->name }}</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>

                                    <h5>${{ $signature->price }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic">
                                <img src="{{ asset('frontend/assets/images/signature-collection/20200202-143034.jpg') }}"
                                    class="w-100 h-100" alt="" />
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
                                <img src="{{ asset('frontend/assets/images/signature-collection/20200202-143920.jpg') }}"
                                    class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Multi-pocket Chest Bag</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$43.48</h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Signature Collection End -->
    <!--  Classic Collection Section -->
    <section class="classic-collection my-2">
        @if ($classicBanner)
            <div class="classic-collection-banner banner">
                <img src="{{ asset('images/' . ($classicBanner->image ?? '')) }}" alt="" />
                <div class="row classic-banner-container">
                    <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                        <div class="classic-collection-text px-4 py-2">
                            <h2>{{ $classicBanner->title ?? '' }}</h2>
                            <p>
                                {!! $classicBanner->description ?? '' !!}
                            </p>
                            <a href="{{ $classicBanner->btn_link ?? '' }}"
                                class="primary-btn">{{ $classicBanner->btn_text ?? '' }} <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="classic-collection-product py-4">
            <div class="container-fluid">
                <div class="row product_filter">
                    @foreach ($classicCollections as $classic)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <span class="label">New</span>
                                    <img src="{{ asset('images/' . $classic->featured_image) }}" class="w-100 h-100"
                                        alt="" />
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $classic->name }}</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>

                                    <h5>${{ $classic->price }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic">
                                <img src="{{ asset('frontend/assets/images/classic-collection/DSC03392.jpg') }}"
                                    class="w-100 h-100" alt="" />
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
                                <img src="{{ asset('frontend/assets/images/classic-collection/DSC03699.jpg') }}"
                                    class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Multi-pocket Chest Bag</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$43.48</h5>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 classic-link-container">
                        <a href="#" class="my-5 classic-link">← The Classic Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classic Collection End -->
    <!-- Deal of the week started -->
    <section class="deal_ofthe_week">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="deal_ofthe_week_img">
                        <img src="{{ asset('frontend/assets/images/deal-of-week/deal_ofthe_week.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-right deal_ofthe_week_col">
                    <div class="deal_ofthe_week_content d-flex flex-column align-items-center">
                        <div class="section_title">
                            <h2>Deal Of The Week</h2>
                        </div>
                        <ul class="timer">
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="day" class="timer_num">03</div>
                                <div class="timer_unit">Day</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="hour" class="timer_num">15</div>
                                <div class="timer_unit">Hours</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="minute" class="timer_num">45</div>
                                <div class="timer_unit">Mins</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="second" class="timer_num">23</div>
                                <div class="timer_unit">Sec</div>
                            </li>
                        </ul>
                        <div class="button my-5">
                            <a href="#" class="primary-btn">Shop now <i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal of week End -->
    <!-- Accessories Collection Started -->
    <section class="accessories-collection my-2">
        @if ($accessoriesBanner)
            <div class="accessories-collection-banner banner">
                <img src="{{ asset('images/' . ($accessoriesBanner->image ?? '')) }}" alt="" />
                <div class="row accessories-banner-container">
                    <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                        <div class="accessories-collection-text px-4 py-2">
                            <h2>{{ $accessoriesBanner->title ?? '' }}</h2>
                            <p>
                                {!! $accessoriesBanner->description ?? '' !!}
                            </p>
                            <a href="{{ $accessoriesBanner->btn_link ?? '' }}"
                                class="primary-btn">{{ $accessoriesBanner->btn_text ?? '' }} <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="accessories-collection-product py-4">
            <div class="container-fluid">
                <div class="row product_filter">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 accessories-link-container">
                        <a href="#" class="my-5 accessories-link">
                            The Accessories Collection →</a>
                    </div>
                    @foreach ($accessoriesCollections as $accessories)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <span class="label">New</span>
                                    <img src="{{ asset('images/' . $accessories->featured_image) }}"
                                        class="w-100 h-100" alt="" />
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $accessories->name }}</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>

                                    <h5>${{ $accessories->price }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic">
                                <img src="{{ asset('frontend/assets/images/accessories-collection/DSC04352.jpg') }}"
                                    class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Piqué Biker Jacket</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$67.24</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix accessories">
                        <div class="product__item sale">
                            <div class="product__item__pic">
                                <span class="label">Sale</span>
                                <img src="{{ asset('frontend/assets/images/accessories-collection/DSC04357.jpg') }}"
                                    class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Multi-pocket Chest Bag</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$43.48</h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Accessories Collection End -->
    <!-- Men Collection Started -->
    <section class="men-collection my-2">
        @if ($menBanner)
            <div class="men-collection-banner banner">
                <img src="{{ asset('images/' . ($menBanner->image ?? '')) }}" alt="" />
                <div class="row men-banner-container">
                    <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                        <div class="men-collection-text px-4 py-2">
                            <h2>{{ $menBanner->title ?? '' }}</h2>
                            <p>
                                {!! $menBanner->description ?? '' !!}
                            </p>
                            <a href="{{ $menBanner->btn_link ?? '' }}"
                                class="primary-btn">{{ $menBanner->btn_text ?? '' }} <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="men-collection-product py-4">
            <div class="container-fluid">
                <div class="row product_filter">
                    @foreach ($menCollections as $men)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <span class="label">New</span>
                                    <img src="{{ asset('images/' . $men->featured_image) }}" class="w-100 h-100"
                                        alt="" />
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $men->name }}</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>

                                    <h5>${{ $men->price }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic">
                                <img src="{{ asset('frontend/assets/images/men-collection/DSC04410.jpg') }}"
                                    class="w-100 h-100" alt="" />
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
                                <img src="{{ asset('frontend/assets/images/men-collection/DSC04415.jpg') }}"
                                    class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Multi-pocket Chest Bag</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$43.48</h5>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 men-link-container">
                        <a href="#" class="my-5 men-link">← The Men Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Men Collection End -->
    <!-- Women Collection Started -->
    <section class="women-collection my-2">
        @if ($womenBanner)
            <div class="women-collection-banner banner">
                <img src="{{ asset('images/' . ($womenBanner->image ?? '')) }}" alt="" />
                <div class="row women-banner-container">
                    <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                        <div class="women-collection-text px-4 py-2">
                            <h2>{{ $womenBanner->title ?? '' }}</h2>
                            <p>
                                {!! $womenBanner->description ?? '' !!}
                            </p>
                            <a href="{{ $womenBanner->btn_link ?? '' }}"
                                class="primary-btn">{{ $womenBanner->btn_text ?? '' }} <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="women-collection-product py-4">
            <div class="container-fluid">
                <div class="row product_filter">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 women-link-containers">
                        <a href="#" class="my-5 women-link"> The Women Collection → </a>
                    </div>
                    @foreach ($womenCollections as $women)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <span class="label">{{ $women->tag }}</span>
                                    <img src="{{ asset('images/' . $women->featured_image) }}" class="w-100 h-100"
                                        alt="" />
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $women->name }}</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>

                                    <h5>${{ $women->price }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic">
                                <img src="{{ asset('frontend/assets/images/women-collection/DSC03541.jpg') }}"
                                    class="w-100 h-100" alt="" />
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
                                <img src="{{ asset('frontend/assets/images/women-collection/DSC03656.jpg') }}"
                                    class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Multi-pocket Chest Bag</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$43.48</h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Women Collection End -->
    <!-- Superfine Collection Started -->
    <section class="superfine-collection my-2">
        <h2 class="section-heading text-center">Superfine Collection</h2>

        <div class="superfine-collection-product py-4">
            <div class="container-fluid">
                <div class="row product_filter">
                    @foreach ($superfineCollections as $superfine)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <span class="label">New</span>
                                    <img src="{{ asset('frontend/assets/images/superfine-collection/1825.1.jpg') }}"
                                        class="w-100 h-100" alt="" />
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $superfine->name }}</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>

                                    <h5>${{ $superfine->price }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women">
                        <div class="product__item">
                            <div class="product__item__pic">
                                <img src="{{ asset('frontend/assets/images/superfine-collection/1833.1.jpg') }}"
                                    class="w-100 h-100" alt="" />
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
                                <img src="{{ asset('frontend/assets/images/superfine-collection/24.jpg') }}"
                                    class="w-100 h-100" alt="" />
                            </div>
                            <div class="product__item__text">
                                <h6>Multi-pocket Chest Bag</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>

                                <h5>$43.48</h5>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 superfine-link-container">
                        <a href="#" class="my-5 superfine-link">← The Superfine Collection
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @if ($superfineBanner)
            <div class="superfine-collection-banner banner">
                <img src="{{ asset('images/' . ($superfineBanner->image ?? '')) }}" alt="" />
                <div class="row superfine-banner-container">
                    <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                        <div class="superfine-collection-text px-4 py-2">
                            <h2>{{ $superfineBanner->title ?? '' }}</h2>
                            <p>
                                {!! $superfineBanner->description ?? '' !!}
                            </p>
                            <a href="{{ $superfineBanner->btn_link ?? '' }}"
                                class="primary-btn">{{ $superfineBanner->btn_text ?? '' }} <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </section>
    <!-- Women Collection End -->

    <!-- Detail Section Start -->
    <section class="detail">
        <div class="container-fluid">
            @if ($footerTop)
                <div class="detail-banner">
                    <img src="{{ asset('images/' . ($footerTop->image ?? '')) }}" class="w-100 h-100" alt="" />
                    <div class="detail-content text-center">
                        <h2 class="section-heading">{{ $footerTop->title ?? '' }}</h2>
                        <h3 class="section-heading">{!! strip_tags($footerTop->description ?? '') !!}</h3>
                    </div>
                </div>
            @endif

            <div class="detail-images">
                <div class="container-fluid">
                    <div class="row">
                        @if ($footerLeft)
                            <div class="col-lg-4 col-md-6 col-sm-12 px-2">
                                <div class="image my-2">
                                    <img src="{{ asset('images/' . $footerLeft->image) }}" class="w-100 h-100"
                                        alt="" />
                                </div>
                            </div>
                        @endif

                        @if ($footerCenter)
                            <div class="col-lg-4 col-md-6 col-sm-12 px-2">
                                <div class="image my-2">
                                    <img src="{{ asset('images/' . ($footerCenter->image ?? '')) }}"
                                        class="w-100 h-100" alt="" />
                                </div>
                            </div>
                        @endif

                        @if ($footerRight)
                            <div class="col-lg-4 col-md-6 col-sm-12 px-2">
                                <div class="image my-2">
                                    <img src="{{ asset('images/' . ($footerRight->image ?? '')) }}"
                                        class="w-100 h-100" alt="" />
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Detail Section End -->

    <!-- Contact Section Start -->
    <section class="contact">
        <div class="container">
            <h2 class="text-center">Keep In Touch</h2>
            <div class="form text-center my-3">
                <form class="form">
                    <input class="form_input" type="text" placeholder="example@gmail.com" />
                    <button class="submit-btn" type="button">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- contact section End -->
@endsection

@section('scripts')
    <script>
        var curday;
        var secTime;
        var ticker;

        function getSeconds() {
            var nowDate = new Date();
            var dy = 6; //Monday through Sunday, 0 to 6
            var countertime = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(),
                12, 59, 59); //24 out of 24 hours = 12pm

            var curtime = nowDate.getTime(); //current time
            var atime = countertime.getTime(); //countdown time
            var diff = parseInt((atime - curtime) / 1000);
            if (diff > 0) {
                curday = dy - nowDate.getDay()
            } else {
                curday = dy - nowDate.getDay() - 1
            } //after countdown time
            if (curday < 0) {
                curday += 7;
            } //already after countdown time, switch to next week
            if (diff <= 0) {
                diff += (86400 * 7)
            }
            startTimer(diff);
        }

        function startTimer(secs) {
            secTime = parseInt(secs);
            ticker = setInterval("tick()", 1000);
            tick(); //initial count display
        }

        function tick() {
            var secs = secTime;
            if (secs > 0) {
                secTime--;
            } else {
                clearInterval(ticker);
                getSeconds(); //start over
            }

            var days = Math.floor(secs / 86400);
            secs %= 86400;
            var hours = Math.floor(secs / 3600);
            secs %= 3600;
            var mins = Math.floor(secs / 60);
            secs %= 60;

            //update the time display
            document.getElementById("day").innerHTML = curday;
            document.getElementById("hour").innerHTML = ((hours < 10) ? "0" : "") + hours;
            document.getElementById("minute").innerHTML = ((mins < 10) ? "0" : "") + mins;
            document.getElementById("second").innerHTML = ((secs < 10) ? "0" : "") + secs;
        }
    </script>

    <script>
        $(document).ready(function() {
            getSeconds();
        });
    </script>
@endsection
