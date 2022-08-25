@extends('frontend.layouts.master')

@section('content')
<!-- Hero Section Started -->
@if ($mainBanner)
<section class="hero">
    <!-- Hero main Banner -->
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
                            <a href="{{ $mainBanner->btn_link ?? '' }}" class="primary-btn">{{ $mainBanner->btn_text ?? '' }} <i class="fas fa-arrow-right"></i></a>
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

        <!-- Luxary product -->

        <div class="row product__filter my-3">
            @foreach ($luxuryCollections as $luxury)
            @include('frontend.component.product', ['product' => $luxury])
            @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->
<!-- Catagories Section Start -->
<section class="catagories mt-5">
    <div class="container">
        <div class="row">
            @if ($topLeft)
            <!-- Catagories Top left  -->
            <div class="col-lg-6">
                <div class="women-catagories catagories-items my-2">
                    <img src="{{ asset('images/' . $topLeft->image ?? '') }}" class="w-100 h-100" alt="" />
                    <div class="content text-center">
                        <h3>{{ $topLeft->title ?? '' }}</h3>
                    </div>
                </div>
            </div>
            @endif
            <!-- catagories top avobe -->
            <div class="col-lg-6">
                @if ($topAbove)
                <div class="men-catagories catagories-items my-2">
                    <img src="{{ asset('images/' . ($topAbove->image ?? '')) }}" class="w-100 h-100" alt="" />
                    <div class="content text-center">
                        <h3>{{ $topAbove->title ?? '' }}</h3>
                    </div>
                </div>
                <!-- end -->
                @endif
                <!-- catagories top center -->
                @if ($topCenter)
                <div class="accessories-catagories catagories-items my-2">
                    <img src="{{ asset('images/' . ($topCenter->image ?? '')) }}" class="w-100 h-100" alt="" />
                    <div class="content text-center">
                        <h3>{{ $topCenter->title ?? '' }}</h3>
                    </div>
                </div>
                <!-- end -->
                @endif
                <!-- catagories top bottom -->
                @if ($topBelow)
                <div class="home-catagories catagories-items">
                    <img src="{{ asset('images/' . ($topBelow->image ?? '')) }}" class="w-100 h-100" alt="" />
                    <div class="content text-center">
                        <h3>{{ $topBelow->title ?? '' }}</h3>
                    </div>
                </div>
                <!-- end -->
                @endif

            </div>
        </div>
    </div>
</section>
<!-- Catagories Section End -->
<!-- Signature Collection Section -->
<section class="signature-collection my-3">
    @if ($signatureBanner)
    <!-- Signature collection banner -->
    <div class="signature-collection-banner banner">
        <img src="{{ asset('images/' . ($signatureBanner->image ?? '')) }}" alt="" />
        <div class="row signature-banner-container">
            <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                <div class="signature-collection-text px-4 py-2">
                    <h2>{{ $signatureBanner->title ?? '' }}</h2>
                    <p>
                        {!! $signatureBanner->description ?? '' !!}
                    </p>
                    <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'signature']) }}" class="primary-btn">{{ $signatureBanner->btn_text ?? '' }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    @endif
    <!-- Signature collection product -->

    <div class="signature-collection-product py-3">
        <div class="container-fluid">
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
    <!-- Classic collection banner -->
    <div class="classic-collection-banner banner">
        <img src="{{ asset('images/' . ($classicBanner->image ?? '')) }}" alt="" />
        <div class="row classic-banner-container">
            <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                <div class="classic-collection-text px-4 py-2">
                    <h2>{{ $classicBanner->title ?? '' }}</h2>
                    <p>
                        {!! $classicBanner->description ?? '' !!}
                    </p>
                    <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'classic']) }}" class="primary-btn">{{ $classicBanner->btn_text ?? '' }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    @endif
    <!-- Classic collection product -->

    <div class="classic-collection-product py-4">
        <div class="container-fluid">
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
<!-- Deal of the week started -->
@if ($dealOfTheWeek)
<section class="deal_ofthe_week">
    <div class="container">
        <div class="row align-items-center">
            <!-- Deal of weak image sec -->
            <div class="col-lg-6">
                <div class="deal_ofthe_week_img">
                    <img src="{{ asset('images/' . ($dealOfTheWeek->image ?? '')) }}" alt="" />
                </div>
            </div>
            <!-- End -->
            <!-- Deal of the week TIMER  -->
            <div class="col-lg-6 col-md-12 text-right deal_ofthe_week_col">
                <div class="deal_ofthe_week_content d-flex flex-column align-items-center">
                    <div class="section_title">
                        <h2>{{ $dealOfTheWeek->title ?? '' }}</h2>
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
                        <a href="{{ $dealOfTheWeek->btn_link ?? '' }}" class="primary-btn">{{ $dealOfTheWeek->btn_text ?? '' }} <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>
            <!-- END -->
        </div>
    </div>
</section>
@endif

<!-- Deal of week End -->
<!-- Accessories Collection Started -->
<section class="accessories-collection my-2">
    @if ($accessoriesBanner)
    <!-- aCCESSORIES BANNER  -->
    <div class="accessories-collection-banner banner">
        <img src="{{ asset('images/' . ($accessoriesBanner->image ?? '')) }}" alt="" />
        <div class="row accessories-banner-container">
            <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                <div class="accessories-collection-text px-4 py-2">
                    <h2>{{ $accessoriesBanner->title ?? '' }}</h2>
                    <p>
                        {!! $accessoriesBanner->description ?? '' !!}
                    </p>
                    <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'accessories']) }}" class="primary-btn">{{ $accessoriesBanner->btn_text ?? '' }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    @endif
    <!-- accessories collection product -->
    <div class="accessories-collection-product py-4">
        <div class="container-fluid">
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
    <!-- Men collection banner -->
    <div class="men-collection-banner banner">
        <img src="{{ asset('images/' . ($menBanner->image ?? '')) }}" alt="" />
        <div class="row men-banner-container">
            <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                <div class="men-collection-text px-4 py-2">
                    <h2>{{ $menBanner->title ?? '' }}</h2>
                    <p>
                        {!! $menBanner->description ?? '' !!}
                    </p>
                    <a href="{{ route('filter', ['type' => 'category', 'slug' => 'men']) }}" class="primary-btn">{{ $menBanner->btn_text ?? '' }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    @endif
    <!-- men collection product -->

    <div class="men-collection-product py-4">
        <div class="container-fluid">
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
    <!-- women collection banner -->
    <div class="women-collection-banner banner">
        <img src="{{ asset('images/' . ($womenBanner->image ?? '')) }}" alt="" />
        <div class="row women-banner-container">
            <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                <div class="women-collection-text px-4 py-2">
                    <h2>{{ $womenBanner->title ?? '' }}</h2>
                    <p>
                        {!! $womenBanner->description ?? '' !!}
                    </p>
                    <a href="{{ route('filter', ['type' => 'category', 'slug' => 'women']) }}" class="primary-btn">{{ $womenBanner->btn_text ?? '' }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    @endif
    <!-- women collection product -->
    <div class="women-collection-product py-4">
        <div class="container-fluid">
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
    <!-- super fine title -->
    <h2 class="section-heading text-center">Superfine Collection</h2>

    <div class="superfine-collection-product py-4">
        <!-- super fine collection product -->
        <div class="container-fluid">
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

    @if ($superfineBanner)
    <!-- super fine collection banner -->
    <div class="superfine-collection-banner banner">
        <img src="{{ asset('images/' . ($superfineBanner->image ?? '')) }}" alt="" />
        <div class="row superfine-banner-container">
            <div class="col-xl-7 col-lg-10 col-md-9 col-sm-12 mx-5 my-5">
                <div class="superfine-collection-text px-4 py-2">
                    <h2>{{ $superfineBanner->title ?? '' }}</h2>
                    <p>
                        {!! $superfineBanner->description ?? '' !!}
                    </p>
                    <a href="{{ route('filter', ['type' => 'collection', 'slug' => 'superfine']) }}" class="primary-btn">{{ $superfineBanner->btn_text ?? '' }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    @endif

</section>
<!-- superfine Collection End -->
<!-- Help desk section start -->
<section class="help-desk my-4">
    <div class="container-fluid">
        <div class="row">
            <!-- Help desk left sec -->
            <div class="col-lg-5 col-md-6 help-left-sec">
                <!-- Help desk heading -->
                <h2 class="section-heading">Help Desk Support</h2>
                <!-- Help desk paragraph -->
                <p class="py-2 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                    ducimus odit. Inventore quam laboriosam culpa. Obcaecati illo
                    nulla consequatur ex? Repudiandae hic voluptatum dicta, maiores
                    eius eveniet blanditiis. Maiores iste exercitationem sunt
                    minima. Quidem explicabo facere, inventore placeat sunt libero
                    iusto, eveniet sed cupiditate dolores neque totam mollitia minus
                    repellendus incidunt eius? Consequatur, dolorum fugiat velit
                    quos minus quam at sit incidunt ipsam vel molestiae. Repellat
                    perferendis deleniti molestias nesciunt.
                </p>
                <!-- help desk button -->
                <a href="{{ route('helpDesk') }}" class="primary-btn">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Help desk right sec -->
            <div class="col-lg-7 col-md-6">
                <div class="help-desk-image w-100">
                    <img src="{{ asset('frontend/assets/images/help-desk.jpg') }}" class="w-100 h-100" alt="help-desk" />
                </div>
            </div>
        </div>
    </div>
</section>


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
                            <img src="{{ asset('images/' . $footerLeft->image) }}" class="w-100 h-100" alt="" />
                        </div>
                    </div>
                    <!-- end -->
                    @endif
                    <!-- detail image center -->
                    @if ($footerCenter)
                    <div class="col-lg-4 col-md-6 col-sm-12 px-2">
                        <div class="image my-2">
                            <img src="{{ asset('images/' . ($footerCenter->image ?? '')) }}" class="w-100 h-100" alt="" />
                        </div>
                    </div>
                    <!-- end -->
                    @endif
                    <!-- detail image right -->
                    @if ($footerRight)
                    <div class="col-lg-4 col-md-6 col-sm-12 px-2">
                        <div class="image my-2">
                            <img src="{{ asset('images/' . ($footerRight->image ?? '')) }}" class="w-100 h-100" alt="" />
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

                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo esse, laborum velit magni accusantium at et amet laudantium quas quasi a iusto quos accusamus tenetur eveniet non ipsa? Corrupti voluptatibus tenetur consectetur sequi in id! Similique necessitatibus quos, eveniet veniam autem odit, at adipisci illo earum, nostrum ducimus corporis iure.</p>

                <div class="button">
                    <a href="#" class="tritary-btn">Download <i class="fas fa-arrow-down"></i></a>
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
            <form class="form" id="newsletter-form" method="POST">
                @csrf
                <input class="form_input w-50" style="padding:20px 30px ;" id="newsletter-email" name="email" type="email" placeholder="example@gmail.com" />
                <button style="cursor: pointer" class="submit-btn" type="submit">Submit</button>
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