@extends('frontend.layouts.master')

@section('content')
    <!-- Main section -->

    <div class="category-main-container  px-2">
        <div class="row">
            <div class="container-fluid">
                <div class="category-view-container px-2">
                    <div class="top-name-container">
                        <div class="filter-heading d-flex justify-content-between">
                            <h2 class="category-heading mb-4 pl-3">{{ $filterBy }}</h2>

                        </div>
                        <!-- Filter toogler button -->

                        <button id="toggleDiv" class="navbar-toggler filter-btn" type="button">
                            <i style="font-size: 30px" class="bi bi-filter"></i>
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        @if (Request::segment(2))
                            <form action="" method="GET">
                                <div class="product-filters mb-3 d-flex justify-content-between">
                                    <!-- Product filter container -->

                                    <div class="filter-container" id="filter-container">
                                        <!-- Product filters -->
                                        <div class="category-type mt-1 d-flex">
                                            <!-- Product catagories -->
                                            {{-- <div class="sub-category mb-3">
                                            <div class="custom-select">
                                                <select>
                                                    <option value="0">Product</option>
                                                    <option value="1">Tops</option>
                                                    <option value="2">Pant</option>
                                                    <option value="3">Hats</option>
                                                    <option value="4">Belt</option>

                                                </select>
                                            </div>
                                        </div> --}}
                                            <!-- product color catagories -->
                                            <div class="color-category mb-3">
                                                <div class="custom-select">
                                                    <select onkeypress="this.form.submit()" class="submit-form" name="color" id="">
                                                        <option value="">Color</option>
                                                        @foreach ($colors as $color)
                                                            <option {{ request('color') == $color->id ? 'selected' : '' }}
                                                                value="{{ $color->id }}">{{ $color->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <!-- product size catagories -->
                                            <div class="size-category mb-3">
                                                <div class="custom-select">
                                                    <select class="submit-form" name="size">
                                                        <option value="">Size</option>
                                                        @foreach ($sizes as $size)
                                                            <option {{ request('size') == $size->id ? 'selected' : '' }}
                                                                value="{{ $size->id }}">{{ $size->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- <div class="size-category mb-3">
                                                <div class="custom-select">
                                                    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <!-- sort out -->
                                    <div class="filter-sort">
                                        <div class="wrapper-dropdown mr-3 mb-2" id="myDropdown">
                                            <div class="custom-select" style="width:200px;">
                                                <select class="submit-form" name="order" id="">
                                                    <option value="">Sort By</option>
                                                    <option {{ request('order') == 'latest' ? 'selected' : '' }}
                                                        value="latest">
                                                        Latest
                                                    </option>
                                                    <option {{ request('order') == 'high-price' ? 'selected' : '' }}
                                                        value="high-price">
                                                        Price:High-Low</option>
                                                    <option {{ request('order') == 'low-price' ? 'selected' : '' }}
                                                        value="low-price">
                                                        Price:Low-High</option>

                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        @endif

                    </div>
                    <!-- Recomendation Section Start -->
                    <div class="recomendation mt-4">
                        <div class="container-fluid py-2">
                            <div class="men-product active" id="men-product">
                                <div class="row">
                                    @foreach ($products as $product)
                                        @include('frontend.component.product', ['product' => $product])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagination-container d-flex justify-content-center mb-4">
        <nav aria-label="Page navigation example">
            {{ $products->appends($params)->links() }}
        </nav>
    </div>
@endsection

@section('scripts')
    <script></script>
@endsection
