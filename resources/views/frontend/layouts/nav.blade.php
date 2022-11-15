<!-- This website is developed by Elscript Technology Pvt.Ltd
Frontend Developer:Krishna Pokharel, Gaurav Kumar Nepal
Backend Developer : Rudra Rajbanshi.

-->
<!-- Offcanvas Menu Start -->

<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas-close-switch"><i class="bi bi-x-circle" id="canvas-close"></i></div>
    <div class="offcanvas__option">
        <div class="offcanvas__nav__icons">
            <a href="#" class="offcanvas-search"><i class="fas fa-search fa-2x"></i></a>
            <!-- search model -->
            <div class="search-model">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="offcanvas-search-close-switch">+</div>
                    <form class="search-model-form" method="GET" action="{{ route('filter') }}">
                        <input type="text" name="search" id="search-input" autocomplete="off" class="search-input"
                            placeholder="Search here....." />
                    </form>
                </div>
            </div>
            <a href="{{ route('wishlist.index') }}"><i class="fas fa-heart fa-2x"></i></a>
            <a href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart fa-2x"></i></a>
        </div>
        <div class="offcanvas__links">

            @if (Auth::check())
                <a href="{{ route('myaccount') }}">My account</a>
                <a href="{{ route('logout') }}">Logout</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endif

        </div>

    </div>
    <div class="offcanvas_header_menu">
        <ul>
            @foreach (getParentCategories() as $main)
                <li class="offcanvas-li" id="offcanvas-women-li">
                    <a href="{{ route('filter', ['type' => 'category', 'slug' => $main->slug]) }}">{{ $main->name ?? '' }}
                        @if (getChildCategories($main->id)->count() > 0)
                        @endif
                    </a>
                    @if (getChildCategories($main->id)->count() > 0)
                        <ul class="offcanvas-submenu" id="women-submenu">
                            @foreach (getChildCategories($main->id) as $category)
                                <li id="submenu-menu">
                                    <a href="{{ route('filter', ['type' => 'category', 'slug' => $category->slug]) }}">{{ $category->name ?? '' }}
                                        @if (getChildCategories($category->id)->count() > 0)
                                            <i class="fas fa-caret-right" id="rotate-icon1"></i>
                                        @endif
                                    </a>
                                    @if (getChildCategories($category->id)->count() > 0)
                                        <ul class="offcanvas-submenu-menu" id="women-clothes">
                                            @foreach (getChildCategories($category->id) as $sub_category)
                                                <li>
                                                    <a href="{{ route('filter', ['type' => 'category', 'slug' => $sub_category->slug]) }}"
                                                        class="pane-link">{{ $sub_category->name ?? '' }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>
            Kanchan Cashmere : Free shipping, 30-day return or refund guarantee.
        </p>
    </div>
</div>

<!-- Offcanvas Menu End -->
<!-- Navigation Section -->

<header class="header">
    <!-- top Navigation -->
    <div class="header__top">
        <div class="container-fluid header_second">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="header__top__left">
                        <span class="currency">Currency:</span>
                        <div class="header__top__hover">
                            <form action="{{ route('currency.setter') }}" method="POST">
                                @csrf
                                <select name="currency" class="currency-select" onchange="this.form.submit()" id="">
                                    @foreach (currencies() as $currency)
                                        <option {{ Session::get('currency') == $currency->currency ? 'selected' : '' }}
                                            value="{{ $currency->currency }}">{{ $currency->currency }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>

                       
                    </div>
                </div>
                <div class="col-lg-7 col-md-9">
                    <div class="header__top__right">
                        <div class="header__top__links">

                            <a href="{{ route('order-tracking') }}">Order Tracker</a>
                            <a href="{{ route('my-orders') }}">My Orders</a>
                            <a href="{{ route('compare') }}">Compare</a>


                            @if (Auth::check())
                                <a href="{{ route('logout') }}">Logout</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Navigation -->
    <div class="container-fluid navbar_bottom">
        <!-- Navigation Main -->
        <div class="row" id="navbar-row">
            <!-- Logo Section -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-10">
                <div class="header__logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/images/logo/logo.png') }}"
                            class="w-100 h-100" alt="" /></a>
                </div>
            </div>
            <!-- Navigation Links -->
            <div class="col-lg-7 col-md-7 header_nav">
                <nav class="nav__primary">
                    <div class="nav__primary__links">
                        <ul id="menuElem">
                            @foreach (getParentCategories() as $category)
                                <li id="" class="sub-menu-click" data-category="{{ $category->slug }}">
                                    <a
                                        href="{{ route('filter', ['type' => 'category', 'slug' => $category->slug]) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Navigation icons
             -->
            <div class="col-lg-3 col-md-3 text-center px-4 nav-icons">
                <a href="#" class="search-switch"><span class="material-symbols-outlined google-icon notranslate">
                        search
                    </span></a>
                <!-- Search Model -->
                <div class="search-model">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <div class="search-close-switch">+</div>
                        <form class="search-model-form" method="GET" action="{{ route('filter') }}">
                            <input type="text" id="search-input" name="search" autocomplete="off"
                                class="search-input" placeholder="Search here....." />
                        </form>
                    </div>
                </div>
                <a href="{{ route('wishlist.index') }}"><span class="material-symbols-outlined google-icon notranslate">
                        favorite
                    </span></a>
                <a href="{{ route('cart.index') }}"><span class="material-symbols-outlined google-icon notranslate">
                        shopping_cart
                    </span></a>
                @if (Auth::check())
                    <a href="{{ route('myaccount') }}"><span class="material-symbols-outlined google-icon notranslate">
                            account_circle
                        </span></a>
                @endif

            </div>
        </div>
        <!-- Sub menu Section Started -->
        <!-- Cashmere Submenu -->
        @foreach (getParentCategories() as $main)
            <div class="pane {{ $main->slug }}" id="">
                <div class="container-fluid">
                    <div class="row">
                        @foreach (getChildCategories($main->id) as $category)
                            <div class="col-lg-2 pane-column">
                                <a href="{{ route('filter', ['type' => 'category', 'slug' => $category->slug]) }}"
                                    class="pane-heading">{{ $category->name }}</a>
                                <ul>
                                    @foreach (getChildCategories($category->id) as $sub_category)
                                        <li>
                                            <a href="{{ route('filter', ['type' => 'category', 'slug' => $sub_category->slug]) }}"
                                                class="pane-link">{{ $sub_category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach

                        @if ($main->image)
                            <div class="col-lg-2 pane-image-column">
                                <img src="{{ asset('images/' . $main->image) }}" alt="" />
                            </div>
                        @endif
                        @if ($main->banner)
                            <div class="col-lg-2 pane-image-column">
                                <img src="{{ asset('images/' . $main->banner) }}" alt="" />
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        @endforeach

        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header section End -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    var route = "{{ url('autocomplete-search') }}";
    $('.search-input').typeahead({
        source: function(query, process) {
            return $.get(route, {
                query: query
            }, function(data) {
                return process(data);
            });
        }
    });
</script>
