@extends('frontend.layouts.master')
@section('content')
    <div class="productComparision">
        <!-- Comparision hero section -->
        <section class="help-hero">
            <div class="content">
                <h2 class="text-center">Product Comparision</h2>

                <!-- Search box -->
                <div class="compare-box py-3">
                    <form action="#" method="GET">
                        <input type="text" value="{{ request('product1') }}" autocomplete="off" class="search-input"
                            name="product1" placeholder="Product 1">
                        <input type="text" value="{{ request('product2') }}" autocomplete="off" class="search-input"
                            name="product2" placeholder="Product 2">
                        <button type="submit" class="compare-btn">Compare</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Comparision Container -->
        <div class="comparision-container">

            @if (request('product1') && request('product2'))

                <!-- Product comparision -->
                <div class="product-comparision-container section-padding mt-3">
                    <!-- Product nAME -->
                    <div class="row py-1">
                        <!-- First product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5  first-product-name">
                            <h2 class="text-center">{{ $product1->name ?? '' }}</h2>
                            <div class="rating">
                            </div>
                        </div>
                        <!-- Specification -->
                        <div class="col-lg-2 col-2">
                        </div>
                        <!-- Second Product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product-name">
                            <h2 class="text-center">{{ $product2->name ?? '' }}</h2>
                        </div>
                    </div>
                    <!-- Product Image -->
                    <div class="row py-2 product-image">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-image">
                            <img src="{{ asset('images/' . ($product1->featured_image ?? 'no-image.png')) }}"
                                alt="">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2"></div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-image">
                            <img src="{{ asset('images/' . ($product2->featured_image ?? 'no-image.png')) }}"
                                alt="">
                        </div>

                    </div>
                    <!-- Category -->
                    <div class="row py-1">
                        <!-- First product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product">
                            <h4 class="text-center">{{ $category1->name ?? '' }}</h4>
                        </div>
                        <!-- Specification -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 specification-box">
                            <span class="material-symbols-outlined google-icon notranslate">
                                category
                            </span>
                            <h3>Category</h3>
                        </div>
                        <!-- Second Product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product">
                            <h4 class="text-center">{{ $category2->name ?? '' }}</h4>
                        </div>

                    </div>
                    <!-- Price -->
                    <div class="row py-1">
                        <!-- First product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product first-bg">
                            <h4 class="text-center">{{ currencySymbol() }} {{ $product1->price ?? 0 }}</h4>
                        </div>
                        <!-- Specification -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 specification-box">
                            <span class="material-symbols-outlined google-icon notranslate">
                                currency_rupee
                            </span>
                            <h3>Price</h3>
                        </div>
                        <!-- Second Product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product first-bg">
                            <h4 class="text-center">{{ currencySymbol() }} {{ $product2->price ?? 0 }}</h4>

                        </div>

                    </div>

                    <!-- Color -->
                    <div class="row py-1">
                        <!-- First product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product">
                            <h4 class="text-center">
                                @if ($colors1)
                                    @foreach ($colors1 as $key => $color1)
                                        @if ($key > 0)
                                            ,
                                        @endif
                                        {{ $color1->name ?? '' }}
                                    @endforeach
                                @endif
                            </h4>
                        </div>
                        <!-- Specification -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2  specification-box">
                            <span class="material-symbols-outlined google-icon notranslate">
                                palette
                            </span>
                            <h3>Color</h3>
                        </div>
                        <!-- Second Product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product">
                            <h4 class="text-center">
                                @if ($colors2)
                                    @foreach ($colors2 as $key1 => $color2)
                                        @if ($key1 > 0)
                                            ,
                                        @endif
                                        {{ $color2->name ?? '' }}
                                    @endforeach
                                @endif
                            </h4>
                        </div>

                    </div>

                    <!-- Size -->
                    <div class="row py-1">
                        <!-- First product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product first-bg">
                            <h4 class="text-center">
                                @if ($sizes1)
                                    @foreach ($sizes1 as $k => $size1)
                                        @if ($k > 0)
                                            ,
                                        @endif
                                        {{ $size1->name ?? '' }}
                                    @endforeach
                                @endif
                            </h4>
                        </div>
                        <!-- Specification -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 specification-box">
                            <span class="material-symbols-outlined google-icon notranslate">
                                crop
                            </span>
                            <h3>Size</h3>
                        </div>
                        <!-- Second Product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product first-bg">
                            <h4 class="text-center">
                                @if ($sizes2)
                                    @foreach ($sizes2 as $k2 => $size2)
                                        @if ($k2 > 0)
                                            ,
                                        @endif
                                        {{ $size2->name ?? '' }}
                                    @endforeach
                                @endif
                            </h4>
                        </div>

                    </div>

                    <!-- Description -->
                    <div class="row py-1 mb-5">
                        <!-- First product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product p-3">
                            <p class="text-justify">{!! $product1->description ?? '' !!}</p>
                        </div>
                        <!-- Specification -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 specification-box">
                            <span class="material-symbols-outlined google-icon notranslate">
                                description
                            </span>
                            <h3>Description</h3>
                        </div>
                        <!-- Second Product -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product p-3">
                            <p class="text-justify">{!! $product2->description ?? '' !!}</p>
                        </div>

                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection

@section('scripts')
    {{-- autocomplete --}}
    <link rel="stylesheet" href="{{ asset('autocomplete/typeahead-1.2.0.min.css') }}">
    <script src="{{ asset('autocomplete/bloodhound-1.2.0.min.js') }}"></script>
    <script src="{{ asset('autocomplete/typeahead-1.2.0.min.js') }}"></script>

    <script>
        var filterResult = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: "{{ url('compare/auto-complete?query=%QUERY') }}",
                wildcard: '%QUERY',
            },
        })

        $('.search-input').typeahead({
            minLength: 1
        }, {
            name: 'item',
            source: filterResult, // suggestion engine is passed as the source
            display: function(data) { // display: 'name' will also work
                console.log(data);
                return data.name;
            },
            templates: {
                empty: [
                    '<div class="empty-message ml-1"> ',
                    'Not Found....',
                    '</div>'
                ].join('\n'),
                suggestion: function(data) {
                    // return '<div><strong class="p-0">' + data.name +
                    //     '</strong> </div>';

                    return '<div class="search-item"><a href="javascript::void(0)"' +
                        'style="text-decoration:none;color:#6c757d";font-family: Nunito;font-weight:400>' +
                        '<div class="row">' +
                        '<div class="col-md-3">' +
                        '<img class="mr-3 rounded" width="30" src="{{ asset('images') }}/' + (data
                            .featured_image ? data
                            .featured_image : 'no-image.png') + '" alt="' + data.type + '">' +
                        '</div>' +
                        '<div class="col-md-9">' +
                        data.name +
                        '<br><span style="background:#6777ef;color:#ffff;font-size:10px;padding:2px">{{ currencySymbol() }}' +
                        data
                        .price + '</span>' +
                        '</div>' +
                        '</div>' +
                        '</a></div>';
                },
                pending: function(query) {
                    console.log(query);
                    return '<div class="ml-1">Loading .............</div>';
                }
            }
        });
    </script>
@endsection
