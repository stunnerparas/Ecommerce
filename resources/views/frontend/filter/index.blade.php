@extends('frontend.layouts.master')

@section('content')
<!-- Main section -->

<div class="category-main-container my-5 px-2">
  <div class="row">
    <div class="container-fluid">
      <div class="category-view-container px-2">
        <div class="top-name-container">
          <div class="filter-heading d-flex justify-content-between">
            <h2 class="category-heading mb-4 pl-3">Category Name</h2>

          </div>
          <!-- Filter toogler button -->

          <button id="toggleDiv" class="navbar-toggler filter-btn" type="button">
            <i style="font-size: 30px" class="bi bi-filter"></i>
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="product-filters mb-3 d-flex justify-content-between">
            <!-- Product filter -->


            <div class="filter-container" id="filter-container">
              <!-- Product filters -->
              <div class="category-type mt-1 d-flex">
                <!-- Product catagories -->
                <div class="sub-category mb-3">
                  <div class="custom-select" >
                    <select>
                      <option value="0">Product</option>
                      <option value="1">Tops</option>
                      <option value="2">Pant</option>
                      <option value="3">Hats</option>
                      <option value="4">Belt</option>

                    </select>
                  </div>
                </div>
                <!-- product color catagories -->
                <div class="color-category mb-3">
                  <div class="custom-select" >
                    <select>
                      <option value="0">Color</option>
                      <option value="1">Brown</option>
                      <option value="2">White</option>
                      <option value="3">Grey</option>
                      <option value="4">Black</option>

                    </select>
                  </div>
                </div>
                <!-- product size catagories -->
                <div class="size-category mb-3">
                  <div class="custom-select">
                    <select>
                      <option value="0">Size</option>
                      <option value="1">XL</option>
                      <option value="2">L</option>
                      <option value="3">M</option>
                      <option value="4">S</option>
                      <option value="4">XS</option>

                    </select>
                  </div>
                </div>

                
              </div>
            </div>

            <!-- sort out -->
            <div class="filter-sort">
              <div class="wrapper-dropdown mr-3 mb-2" id="myDropdown">
                <div class="custom-select" style="width:200px;">
                  <select>
                    <option value="0">Sort By</option>
                    <option value="1">Best Seller</option>
                    <option value="2">Top Picks</option>
                    <option value="3">Price:High-Low</option>
                    <option value="4">Price:Low-High</option>

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
                <div class="col-lg-3 col-md-6  col-sm-6 col-6">
                  <div class="product__item">
                    <div class="category__item__pic">
                      <img src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}" class="w-100 h-100" alt="" />
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
                <div class="col-lg-3  col-md-6 col-sm-6 col-6 mix women">
                  <div class="product__item">
                    <div class="category__item__pic">
                      <img src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}" class="w-100 h-100" alt="" />
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mix men">
                  <div class="product__item sale">
                    <div class="category__item__pic">
                      <img src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}" class="w-100 h-100" alt="" />
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
                <div class="col-lg-3 col-md-6  col-sm-6 col-6 mix men">
                  <div class="product__item sale">
                    <div class="category__item__pic">
                      <img src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}" class="w-100 h-100" alt="" />
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mix men">
                  <div class="product__item sale">
                    <div class="category__item__pic">
                      <img src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}" class="w-100 h-100" alt="" />
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mix men">
                  <div class="product__item sale">
                    <div class="category__item__pic">
                      <img src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}" class="w-100 h-100" alt="" />
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mix men">
                  <div class="product__item sale">
                    <div class="category__item__pic">
                      <img src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}" class="w-100 h-100" alt="" />
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mix men">
                  <div class="product__item sale">
                    <div class="category__item__pic">
                      <img src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}" class="w-100 h-100" alt="" />
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