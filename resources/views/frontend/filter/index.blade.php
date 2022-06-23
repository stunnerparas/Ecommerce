@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="category-main-container my-5 pl-2">
            <div class="row">
                <div class="col-md-2 col-12 px-0 pl-2">
                    <button id="toggleDiv" class="navbar-toggler filter-btn" type="button">
                        <i class="bi bi-filter"></i>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="filter-container d-md-block" id="filter-container">
                        <div class="category-type mt-4">
                            <form action="#" method="get">
                                <input type="hidden" value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}"
                                    name="search" id="">
                                <div class="sub-category mb-3">
                                    <h5 class="mb-3 category-filter-heading">Colors</h5>
                                    @foreach ($colors as $color)
                                        <div class="form-group mb-1">
                                            <input type="checkbox"
                                                {{ in_array($color->id, $_GET['color'] ?? []) ? 'checked' : '' }}
                                                onclick="this.form.submit()" name="color[]" id="categoryTops"
                                                value="{{ $color->id }}">
                                            <label class="category-filter-label ml-3"
                                                for="categoryTops">{{ $color->name }}</label>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="color-category mb-3">
                                    <h5 class="mb-3 category-filter-heading">Sizes</h5>
                                    @foreach ($sizes as $size)
                                        <div class="form-group mb-1">
                                            <input onclick="this.form.submit()"
                                                {{ in_array($size->id, $_GET['size'] ?? []) ? 'checked' : '' }}
                                                type="checkbox" id="colorBlack" name="size[]" value="{{ $size->id }}">
                                            <label class="category-filter-label ml-3"
                                                for="colorBlack">{{ $size->name }}</label>
                                        </div>
                                    @endforeach

                                </div>
                                {{-- </form> --}}

                                {{-- <form action="" method="get"> --}}
                                <div class="price-category">
                                    <h5 class="mb-3 category-filter-heading">Price</h5>
                                    <div class="form-group d-flex align-content-center pr-2">
                                        <input name="min-price"
                                            value="{{ isset($_GET['min-price']) ? $_GET['min-price'] : '' }}"
                                            class="price-input p-1" type="text" placeholder="Min">
                                        <p class="mx-2 display-5">-</p>
                                        <input value="{{ isset($_GET['max-price']) ? $_GET['max-price'] : '' }}"
                                            name="max-price" class="price-input p-1" type="text" placeholder="Max">
                                        {{-- <button type="submit" class="btn ml-2 p-1 price-adjust-btn"><i
                                                class="bi bi-caret-right-fill"></i></button> --}}
                                    </div>

                                </div>
                                <div class="btn-wrapper">
                                    <button type="submit" class="btn reset-btn mt-3">Filter</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-12 mt-4 mt-md-0">
                    <div class="category-view-container pl-2">
                        <div class="top-name-container d-flex justify-content-between">
                            <h4 class="category-heading mb-4 pl-3">{{ $filterBy }}</h4>
                            <form action="" method="GET">
                                <select onchange="this.form.submit()" class="mr-4 p-md-2 p-0" id="arrangeOption"
                                    name="order">
                                    <option {{ isset($_GET['order']) && $_GET['order'] == 'latest' ? 'selected' : '' }}
                                        value="latest">Sort by latest</option>
                                    <option
                                        {{ isset($_GET['order']) && $_GET['order'] == 'high-price' ? 'selected' : '' }}
                                        value="high-price">Sort by Higher price</option>
                                    <option
                                        {{ isset($_GET['order']) && $_GET['order'] == 'low-price' ? 'selected' : '' }}
                                        value="low-price">Sort by Lower price</option>
                                </select>
                            </form>
                        </div>
                        <!-- Recomendation Section Start -->
                        <div class="recomendation mt-4">
                            <div class="container-fluid py-2">
                                <div class="men-product active" id="men-product">
                                    <div class="row">
                                        @if ($data && $products->count() > 0)
                                            @foreach ($products as $product)
                                                @include('frontend.component.product', [
                                                    'product' => $product,
                                                ])
                                            @endforeach
                                        @else
                                            <h5>No Products Found</h5>
                                        @endif
                                    </div>
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
