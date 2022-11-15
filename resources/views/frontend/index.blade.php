@extends('frontend.layouts.master')

@section('content')
<!-- Hero Section Started -->
@if ($mainBanner)
<section class="hero">
    <!-- Hero main Banner -->
    <!-- <div class="hero-menu banner">
        <img src="{{ asset('images/' . ($mainBanner->image ?? '')) }}" class="w-100 h-100 hero-banner-image" alt="" />
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 hero-container">
                        <div class="hero__text">
                            <h2></h2>
                            <p>
                                {!! $mainBanner->description ?? '' !!}
                            </p>
                            <a href="{{ $mainBanner->btn_link ?? '' }}" class="primary-btn">{{ $mainBanner->btn_text ?? '' }} </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-banner-sm">
            <img src="{{ asset('images/' . ($mainBanner->image ?? '')) }}" class="w-100 h-100" alt="">
        </div>
    </div> -->
    <a href="{{ $mainBanner->btn_link ?? '' }}">
        <div class="page-banner-container">
            <!-- Banner image -->
            <div class="hero-banner-desc">
                <img src="{{ asset('images/' . ($mainBanner->image ?? '')) }}" class="w-100 h-100 hero-banner-image" alt="" />

            </div>
            <div class="hero-banner-mob">
                <img src="{{ asset('frontend/assets/images/banners/small-banner.png') }}" class="w-100 h-100" alt="">
            </div>
            <div class="banner-content">
                <div class="row">
                    <div class="col-lg-5 col-md-10">
                        <!-- Banner Heading -->
                        <span class="banner-heading">
                            {{ $mainBanner->title ?? '' }}

                        </span>

                        <!-- Banner content -->
                        <span class="banner-p">
                            {!! $mainBanner->description ?? '' !!}
                        </span>


                    </div>
                </div>

            </div>
        </div>
    </a>

</section>
@endif

<!-- Hero Section End -->
<!-- Product Section Started -->
<section class="product spad my-2">
    <div class="container">
        <h2 class="section-heading text-center py-3">Luxury Cashmere</h2>


        <div class="row" style="margin-top: 20px; display: flex; justify-content: center">
            <!-- luxary cahmere left section -->
            @if ($luxuryLeft)
            <div class="col-lg-6 col-md-6 col-sm-12 px-2">
                <div class="men-cart px-2 py-2">
                    <div class="images">
                        <img src="{{ asset('images/' . ($luxuryLeft->image ?? '')) }}" class="w-100 h-100" alt="" />
                    </div>
                    <div class="content">
                        <a href="{{ $luxuryLeft->btn_link ?? '#' }}" class="secondary-btn">{{ $luxuryLeft->title ?? '' }}</a>
                    </div>
                </div>
            </div>
            @endif

            @if ($luxuryRight)
            <!-- Luxary cashmere right section -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="women-cart py-2">
                    <div class="images">
                        <img src="{{ asset('images/' . ($luxuryRight->image ?? '')) }}" class="w-100 h-100" alt="" />
                    </div>
                    <div class="content">
                        <a href="{{ $luxuryRight->btn_link ?? '#' }}" class="secondary-btn">{{ $luxuryRight->title ?? '' }}</a>
                    </div>
                </div>
            </div>
            @endif

        </div>




    </div>
</section>
<!-- Product Section End -->


<!-- Catagories Section End -->
<!-- Signature Collection Section -->
<section class="signature-collection my-3">
    @if ($signatureBanner)
    <div class="page-banner-container">
        <!-- Banner image -->
        <div class="hero-banner-desc">
            <img src="{{ asset('images/' . ($signatureBanner->image ?? '')) }}" class="w-100 h-100 hero-banner-image" alt="" />

        </div>
        <div class="hero-banner-mob">
            <img src="{{ asset('frontend/assets/images/banners/small-banner.png') }}" class="w-100 h-100" alt="">
        </div>
        <div class="banner-content">
            <div class="row">
                <div class="col-lg-5 col-md-10">
                    <!-- Banner Heading -->
                    <span class="banner-heading">
                        {{ $signatureBanner->title ?? '' }}

                    </span>

                    <!-- Banner content -->
                    <span class="banner-p">
                        {!! $signatureBanner->description ?? '' !!}
                    </span>
                  
                </div>
            </div>

        </div>
    </div>


    <!-- end -->
    @endif
    <!-- Signature collection product -->

    <div class="signature-collection-product py-3">
        <div class="container">
            <div class="row product_filter">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 signature-link-container">
                    <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'signature']) }}" class="my-5 signature-link">The Signature Collection →</a>
                </div>

                @foreach ($signatureCollections as $signature)
                @include('frontend.component.product', ['product' => $signature])
                @endforeach
            </div>
        </div>
    </div>
    <!-- End -->
</section>

<!-- Signature Collection End -->
<!--  Classic Collection Section -->
<section class="classic-collection my-2">
    @if ($classicBanner)

    <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'classic']) }}">
        <div class="page-banner-container">
            <!-- Banner image -->
            <div class="hero-banner-desc">
                <img src="{{ asset('images/' . ($classicBanner->image ?? '')) }}" class="w-100 h-100 hero-banner-image" alt="" />

            </div>
            <div class="hero-banner-mob">
                <img src="{{ asset('frontend/assets/images/banners/small-banner.png') }}" class="w-100 h-100" alt="">
            </div>
            <div class="banner-content">
                <div class="row">
                    <div class="col-lg-5 col-md-10">
                        <!-- Banner Heading -->
                        <span class="banner-heading">
                            {{ $classicBanner->title ?? '' }}

                        </span>

                        <!-- Banner content -->
                        <span class="banner-p">
                            {!! $classicBanner->description ?? '' !!}
                        </span>

                    </div>
                </div>

            </div>
        </div>
    </a>

    <!-- Classic collection banner -->
    <!-- <div class="classic-collection-banner banner">
        <img src="" alt="" />
        <div class="row classic-banner-container">
            <div class="col-xl-9 col-lg-6 col-md-12 col-sm-12">
                <div class="classic-collection-text px-4 py-2">
                    <h2></h2>
                    <p>
                        
                    </p>
                    <a href="" class="primary-btn"> <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end -->
    @endif
    <!-- Classic collection product -->

    <div class="classic-collection-product py-4">
        <div class="container">
            <div class="row product_filter">
                @foreach ($classicCollections as $classic)
                @include('frontend.component.product', ['product' => $classic])
                @endforeach
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 classic-link-container">
                    <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'classic']) }}" class="my-5 classic-link">← The Classic Collection</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
</section>
<!-- Classic Collection End -->

<!-- Accessories Collection Started -->
<section class="accessories-collection my-2">
    @if ($accessoriesBanner)
  <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'accessories']) }}">  <div class="page-banner-container">
        <!-- Banner image -->
        <div class="hero-banner-desc">
            <img src="{{ asset('images/' . ($accessoriesBanner->image ?? '')) }}" class="w-100 h-100 hero-banner-image" alt="" />

        </div>
        <div class="hero-banner-mob">
            <img src="{{ asset('frontend/assets/images/banners/small-banner.png') }}" class="w-100 h-100" alt="">
        </div>
        <div class="banner-content">
            <div class="row">
                <div class="col-lg-5 col-md-10">
                    <!-- Banner Heading -->
                    <span class="banner-heading">
                        {{ $accessoriesBanner->title ?? '' }}

                    </span>

                    <!-- Banner content -->
                    <span class="banner-p">
                        {!! $accessoriesBanner->description ?? '' !!}
                    </span>
                   
                </div>
            </div>

        </div>
    </div></a>

    <!-- aCCESSORIES BANNER  -->
    <!-- <div class="accessories-collection-banner banner">
        <img src="" alt="" />
        <div class="accessories-banner-container">
            <div class="accessories-content">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="accessories-collection-text px-4 py-2">
                            <h2></h2>
                            <p>
                               
                            </p>
                            <a href="" class="primary-btn"> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end -->
    @endif
    <!-- accessories collection product -->
    <div class="accessories-collection-product py-4">
        <div class="container">
            <div class="row product_filter">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 accessories-link-container">
                    <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'accessories']) }}" class="my-5 accessories-link">
                        The Accessories Collection →</a>
                </div>
                @foreach ($accessoriesCollections as $accessories)
                @include('frontend.component.product', ['product' => $accessories])
                @endforeach
            </div>
        </div>
    </div>
    <!-- end -->
</section>
<!-- Accessories Collection End -->
<!-- Men Collection Started -->
<section class="men-collection my-2">
    @if ($menBanner)
  <a href="{{ route('filter', ['type' => 'category', 'slug' => 'men']) }}">
  <div class="page-banner-container">
        <!-- Banner image -->
        <div class="hero-banner-desc">
            <img src="{{ asset('images/' . ($menBanner->image ?? '')) }}" class="w-100 h-100 hero-banner-image" alt="" />

        </div>
        <div class="hero-banner-mob">
            <img src="{{ asset('frontend/assets/images/banners/small-banner.png') }}" class="w-100 h-100" alt="">
        </div>
        <div class="banner-content">
            <div class="row">
                <div class="col-lg-5 col-md-10">
                    <!-- Banner Heading -->
                    <span class="banner-heading">
                        {{ $menBanner->title ?? '' }}

                    </span>

                    <!-- Banner content -->
                    <span class="banner-p">
                        {!! $menBanner->description ?? '' !!}
                    </span>
                   
                </div>
            </div>

        </div>
    </div>
  </a>
    <!-- Men collection 
    banner -->
    <!-- <div class="men-collection-banner banner">
        <img src="" alt="" />
        <div class="row men-banner-container">
            <div class="col-xl-9 col-lg-6 col-md-12 col-sm-12">
                <div class="men-collection-text px-4 py-2">
                    <h2></h2>
                    <p>
                        
                    </p>
                    <a href="" class="primary-btn"> <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end -->
    @endif
    <!-- men collection product -->

    <div class="men-collection-product py-4">
        <div class="container">
            <div class="row product_filter">
                @foreach ($menCollections as $men)
                @include('frontend.component.product', ['product' => $men])
                @endforeach
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 men-link-container">
                    <a href="{{ route('filter', ['type' => 'category', 'slug' => 'men']) }}" class="my-5 men-link">← The Men Collection</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
</section>
<!-- Men Collection End -->
<!-- Women Collection Started -->
<section class="women-collection my-2">
    @if ($womenBanner)
    <a href="{{ route('filter', ['type' => 'category', 'slug' => 'women']) }}">
    <div class="page-banner-container">
        <!-- Banner image -->
        <div class="hero-banner-desc">
            <img src="{{ asset('images/' . ($womenBanner->image ?? '')) }}" class="w-100 h-100 hero-banner-image" alt="" />

        </div>
        <div class="hero-banner-mob">
            <img src="{{ asset('frontend/assets/images/banners/small-banner.png') }}" class="w-100 h-100" alt="">
        </div>
        <div class="banner-content">
            <div class="row">
                <div class="col-lg-5 col-md-10">
                    <!-- Banner Heading -->
                    <span class="banner-heading">
                        {{ $womenBanner->title ?? '' }}

                    </span>

                    <!-- Banner content -->
                    <span class="banner-p">
                        {!! $womenBanner->description ?? '' !!}
                    </span>
                   
                </div>
            </div>

        </div>
    </div>
    </a>
    <!-- <div class="women-collection-banner banner">
        <img src="" alt="" />
        <div class="row women-banner-container">
            <div class="col-xl-9 col-lg-6 col-md-12 col-sm-12">
                <div class="women-collection-text px-4 py-2">
                    <h2></h2>
                    <p>
                        
                    </p>
                    <a href="" class="primary-btn"> <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div> -->

    @endif
    <!-- women collection product -->
    <div class="women-collection-product py-4">
        <div class="container">
            <div class="row product_filter">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 women-link-containers">
                    <a href="{{ route('filter', ['type' => 'category', 'slug' => 'women']) }}" class="my-5 women-link">
                        The Women Collection → </a>
                </div>
                @foreach ($womenCollections as $women)
                @include('frontend.component.product', ['product' => $women])
                @endforeach
            </div>
        </div>
    </div>
    <!-- end -->
</section>
<!-- Women Collection End -->
<!-- Superfine Collection Started -->
<section class="superfine-collection my-2">
@if ($superfineBanner)
    <!-- super fine collection banner -->
   <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'superfine']) }}">
   <div class="page-banner-container">
        <!-- Banner image for desktop -->
        <div class="hero-banner-desc">
            <img src="{{ asset('images/' . ($superfineBanner->image ?? '')) }}" class="w-100 h-100 hero-banner-image" alt="" />

        </div>
         <!-- Banner image for mobile -->
        <div class="hero-banner-mob">
            <img src="{{ asset('frontend/assets/images/banners/small-banner.png') }}" class="w-100 h-100" alt="">
        </div>
        <div class="banner-content">
            <div class="row">
                <div class="col-lg-5 col-md-10">
                    <!-- Banner Heading -->
                    <span class="banner-heading">
                        {{ $superfineBanner->title ?? '' }}

                    </span>

                    <!-- Banner content -->
                    <span class="banner-p">
                        {!! $superfineBanner->description ?? '' !!}
                    </span>
                  
                </div>
            </div>

        </div>
    </div>
   </a>
    <!-- <div class="superfine-collection-banner banner">
        <img src="" alt="" />
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="superfine-banner-container">
                    <div class="superfine-content">
                        <div class="superfine-collection-text px-4 py-2">
                            <h2></h2>
                            <p>
                               
                            </p>
                            <a href="" class="primary-btn"> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!-- end -->
    @endif
    <!-- super fine title -->
   

    <div class="superfine-collection-product py-4">
        <!-- super fine collection product -->
        <div class="container">
            <div class="row product_filter">
                @foreach ($superfineCollections as $superfine)
                @include('frontend.component.product', ['product' => $superfine])
                @endforeach
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 superfine-link-container">
                    <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'superfine']) }}" class="my-5 superfine-link">← The Superfine Collection
                    </a>
                </div>
            </div>
        </div>
        <!-- end -->
    </div>

   

</section>
<!-- superfine Collection End -->

<!-- Detail Section Start -->
<section class="detail">
    <div class="container-fluid">
        @if ($footerTop)
        <!-- Detail banner -->
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
                    <!-- detail image left -->
                    @if ($footerLeft)
                    <div class="col-lg-4 col-md-6 col-sm-12 px-2">
                        <div class="image my-2">
                            <a href="{{ route('detailColor') }}"><img src="{{ asset('images/' . $footerLeft->image) }}" class="w-100 h-100" alt="" /></a>

                        </div>
                        <div class="detail-links">
                            <a href="{{ route('detailColor') }}">Warm Colors</a>
                        </div>
                    </div>
                    <!-- end -->
                    @endif
                    <!-- detail image center -->
                    @if ($footerCenter)
                    <div class="col-lg-4 col-md-6 col-sm-12 px-2">
                        <div class="image my-2">
                            <a href="{{ route('detailYarn') }}"> <img src="{{ asset('images/' . ($footerCenter->image ?? '')) }}" class="w-100 h-100" alt="" /></a>

                        </div>
                        <div class="detail-links">
                            <a href="{{ route('detailYarn') }}">Yarn</a>
                        </div>
                    </div>
                    <!-- end -->
                    @endif
                    <!-- detail image right -->
                    @if ($footerRight)
                    <div class="col-lg-4 col-md-6 col-sm-12 px-2">
                        <div class="image my-2">
                            <a href="{{ route('detailKnit') }}"> <img src="{{ asset('images/' . ($footerRight->image ?? '')) }}" class="w-100 h-100" alt="" /></a>

                        </div>
                        <div class="detail-links">
                            <a href="{{ route('detailKnit') }}">The Knit</a>

                        </div>
                    </div>
                    <!-- end -->
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Detail Section End -->
<!-- Catalogue section start -->
<div class="catalogue py-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="catalogue-content">
                <h2 class="section-heading">Product Catalogue </h2>


                <div class="button">
                    <a href="{{asset('catalogue/kanchanmaggfinal.pdf')}}" download="catalogue" class="tritary-btn">Download <i class="fas fa-arrow-down"></i></a>
                </div>


            </div>

        </div>
        <div class="col-lg-6">
            <div class="catalogue-image">
                <img src="{{ asset('frontend/assets/images/catalogue.jpeg') }}" class="w-100 h-100" alt="" />

            </div>
        </div>
    </div>
</div>
<!-- Catalogue section end -->


<!-- Contact Section Start -->
<section class="contact">
    <div class="container">
        <!-- contact heading -->
        <h2 class="text-center">Keep In Touch</h2>
        <div class="form text-center my-3">
            <!-- contact form -->
            <form class="form d-flex justify-content-center" id="newsletter-form" method="POST">
                @csrf
                <input class="form_input w-50" style="padding:20px 30px ;" id="newsletter-email" name="email" type="email" placeholder="Your email" />
                <div class="submit-button ml-2">
                    <button style="cursor: pointer" class="submit-btn " type="submit">Submit</button>
                </div>
            </form>
            <!-- end -->
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
        var dy = "{{ $dealOfTheWeek->end_day ?? 0 }} "; //Monday through Sunday, 0 to 6
        var countertime = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(),
            23, 59, 59); //24 out of 24 hours = 12pm

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

    $(document).on('submit', '#newsletter-form', function(e) {
        e.preventDefault();

        var email = $('#newsletter-email').val();
        if (!email) {
            toastr.error("Please enter your email");
            return false;
        }

        nthis = $(this);
        var newsletterData = new FormData(nthis[0]);
        $.ajax({
            url: "{{ route('newsletter') }}",
            type: "POST",
            data: newsletterData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                toastr.success("Your email has been sent");
                nthis[0].reset();
            },
            error: function(data) {
                toastr.error("Some Problems Occured!");
            },
        });
    })
</script>
@endsection