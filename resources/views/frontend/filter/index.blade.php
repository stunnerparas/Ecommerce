@extends('frontend.layouts.master')

@section('content')
       <!-- Main section -->

       <div class="category-main-container my-5 pl-2">
      <div class="row">
        <div class="container-fluid">
          <div class="category-view-container pl-2">
            <div class="top-name-container">
              <div class="filter-heading d-flex justify-content-between">
                <h3 class="category-heading mb-4 pl-3">Category Name</h3>
                <select
                  class="mr-4 p-md-2 p-0"
                  id="arrangeOption"
                  name="arrangeOption"
                >
                  <option value="bestMatch">Sort by best match</option>
                  <option value="highPrice">Sort by Higher price</option>
                  <option value="lowPrice">Sort by Lower price</option>
                </select>
              </div>

              <!-- Product filter -->
              <button
                id="toggleDiv"
                class="navbar-toggler filter-btn"
                type="button"
              >
                <i style="font-size: 30px" class="bi bi-filter"></i>
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="product-filters d-flex justify-content-between">
                <div class="filter-container" id="filter-container">
                  <div class="category-type mt-4 d-flex">
                    <!-- Product catagories -->
                    <div class="sub-category mb-3">
                      <select name="catagories">
                        <option value="none" selected disabled hidden>
                          Catagories
                        </option>
                        <option value="tops">
                          <a href="#">Tops</a>
                        </option>
                        <option value="pants">
                          <a href="#">Pants</a>
                        </option>

                        <option value="Bags">
                          <a href="#">Bags</a>
                        </option>
                        <option value="Belt">
                          <a href="#">Belt</a>
                        </option>
                      </select>
                    </div>
                    <!-- product color catagories -->
                    <div class="color-category mb-3">
                      <select name="color-catagories">
                        <option value="none" selected disabled hidden>
                          Color
                        </option>
                        <option value="black">
                          <a href="#">Black</a>
                        </option>
                        <option value="white">
                          <a href="#">White</a>
                        </option>

                        <option value="pink">
                          <a href="#">Pink</a>
                        </option>
                        <option value="brown">
                          <a href="#">Brown</a>
                        </option>
                        <option value="red">
                          <a href="#">Red</a>
                        </option>
                      </select>
                    </div>
                    <!-- product size catagories -->
                    <div class="size-category mb-3">
                      <select name="size-catagories">
                        <option value="none" selected disabled hidden>
                          Size
                        </option>
                        <option value="extra-small">
                          <a href="#">XS</a>
                        </option>
                        <option value="small">
                          <a href="#">S</a>
                        </option>

                        <option value="medium">
                          <a href="#">M</a>
                        </option>
                        <option value="large">
                          <a href="#">L</a>
                        </option>
                        <option value="extra-large">
                          <a href="#">XL</a>
                        </option>
                      </select>
                    </div>

                    <!-- Product prize range -->
                    <div class="range-category mb-3">
                      <select name="size-catagories">
                        <option value="none" selected disabled hidden>
                          Price
                        </option>
                        <option value="cashmere">
                          <a href="#">$30 - $100</a>
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recomendation Section Start -->
            <div class="recomendation mt-4">
              <div class="container-fluid py-2">
                <div class="men-product active" id="men-product">
                  <div class="row">
                    <!-- Product start -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
                      <div class="product__item">
                        <div class="category__item__pic">
                          <img
                            src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}"
                            class="w-100 h-100"
                            alt=""
                          />
                        </div>
                        <div class="product__item__text">
                          <h6>Piqué Biker Jacket</h6>
                          <a href="#" class="add-cart">+ Add To Cart</a>

                          <h5>$67.24</h5>
                        </div>
                      </div>
                    </div>
                    <!-- product end -->
                    <!-- product start -->
                    <div
                      class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix women"
                    >
                      <div class="product__item">
                        <div class="category__item__pic">
                          <img
                            src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}"
                            class="w-100 h-100"
                            alt=""
                          />
                        </div>
                        <div class="product__item__text mx-auto">
                          <h6>Piqué Biker Jacket</h6>
                          <a href="#" class="add-cart">+ Add To Cart</a>

                          <h5>$67.24</h5>
                        </div>
                      </div>
                    </div>
                    <!-- product end -->
                    <!-- product start -->
                    <div
                      class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men"
                    >
                      <div class="product__item sale">
                        <div class="category__item__pic">
                          <img
                            src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}"
                            class="w-100 h-100"
                            alt=""
                          />
                        </div>
                        <div class="product__item__text">
                          <h6>Multi-pocket Chest Bag</h6>
                          <a href="#" class="add-cart">+ Add To Cart</a>

                          <h5>$43.48</h5>
                        </div>
                      </div>
                    </div>
                    <!-- product-end -->
                    <!-- product start -->
                    <div
                      class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men"
                    >
                      <div class="product__item sale">
                        <div class="category__item__pic">
                          <img
                            src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}"
                            class="w-100 h-100"
                            alt=""
                          />
                        </div>
                        <div class="product__item__text">
                          <h6>Multi-pocket Chest Bag</h6>
                          <a href="#" class="add-cart">+ Add To Cart</a>

                          <h5>$43.48</h5>
                        </div>
                      </div>
                    </div>
                    <!-- product end -->
                    <!-- product start -->
                    <div
                      class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men"
                    >
                      <div class="product__item sale">
                        <div class="category__item__pic">
                          <img
                            src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}"
                            class="w-100 h-100"
                            alt=""
                          />
                        </div>
                        <div class="product__item__text">
                          <h6>Multi-pocket Chest Bag</h6>
                          <a href="#" class="add-cart">+ Add To Cart</a>

                          <h5>$43.48</h5>
                        </div>
                      </div>
                    </div>
                    <!-- product end -->
                    <!-- product start -->
                    <div
                      class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men"
                    >
                      <div class="product__item sale">
                        <div class="category__item__pic">
                          <img
                            src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}"
                            class="w-100 h-100"
                            alt=""
                          />
                        </div>
                        <div class="product__item__text">
                          <h6>Multi-pocket Chest Bag</h6>
                          <a href="#" class="add-cart">+ Add To Cart</a>

                          <h5>$43.48</h5>
                        </div>
                      </div>
                    </div>
                    <!-- product end -->
                    <!-- product start -->
                    <div
                      class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men"
                    >
                      <div class="product__item sale">
                        <div class="category__item__pic">
                          <img
                            src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}"
                            class="w-100 h-100"
                            alt=""
                          />
                        </div>
                        <div class="product__item__text">
                          <h6>Multi-pocket Chest Bag</h6>
                          <a href="#" class="add-cart">+ Add To Cart</a>

                          <h5>$43.48</h5>
                        </div>
                      </div>
                    </div>
                    <!-- product end -->
                    <!-- product start -->
                    <div
                      class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix men"
                    >
                      <div class="product__item sale">
                        <div class="category__item__pic">
                          <img
                            src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}"
                            class="w-100 h-100"
                            alt=""
                          />
                        </div>
                        <div class="product__item__text">
                          <h6>Multi-pocket Chest Bag</h6>
                          <a href="#" class="add-cart">+ Add To Cart</a>

                          <h5>$43.48</h5>
                        </div>
                      </div>
                    </div>
                    <!-- product end -->
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
