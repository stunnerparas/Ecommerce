<!-- Footer Section Start -->
<section class="footer" id="footer">
    <div class="container">
        <div class="row py-2">
            {{-- <div class="col-lg-2 col-md-6 col-sm-12 px-4 py-3">
                <h4>Help</h4>
                <div class="footer-list my-2">
                    <ul class="navbar-nav">
                        <li>
                            <a href="#">Cashmere Care</a>
                        </li>
                        <li>
                            <a href="#">Pilling Remover</a>
                        </li>
                        <li>
                            <a href="#">Product & Services</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">Size Guide</a>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-3 col-md-6 col-sm-12 px-4 py-3">
                <h4>Kanchan Cashmere</h4>
                <div class="footer-list my-2">
                    <ul class="navbar-nav">
                        <li>
                            <a href="{{ route('page', 'about-us') }}">About us</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'terms-and-conditions') }}">Terms And Conditions</a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}">FAQs</a>
                        </li>
                        {{-- <li>
                            <a href="#">Our Natural Yarns</a>
                        </li>
                        <li>
                            <a href="#">Quality Knitwear</a>
                        </li>
                        <li>
                            <a href="#">Production of Cashmere</a>
                        </li>
                        <li>
                            <a href="#">Future</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 px-4 py-3">
                <h4>Business</h4>
                <div class="footer-list my-2">
                    <ul class="navbar-nav">
                        <li>
                            <a href="#">Color Card Request</a>
                        </li>
                        <li>
                            <a href="#">Catologue Request</a>
                        </li>
                        <li>
                            <a href="#">Custom Made</a>
                        </li>
                        <li>
                            <a href="#">Made To Order</a>
                        </li>
                        <li>
                            <a href="#">Private Label</a>
                        </li>
                        <li>
                            <a href="#">B2B</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 px-4 py-3">
                <h4>Track</h4>
                <div class="footer-list my-2">
                    <ul class="navbar-nav">
                        <li>
                            <a href="{{ route('order.tracker') }}">Track My Order</a>
                        </li>
                        <li>
                            <a href="#">Order History</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 px-3 py-3">
                <h4>Help Center</h4>
                <p class="footer-p">
                    Want to know more about our Yarn Quality,size and color?Take a look at help center,where you can
                    find all the info you need quickly
                </p>
                <div class="help-center my-4">
                    <a href="">Visit our Help Center</a>
                </div>
                <div class="shipping-partner my-4">
                    <h4>Shipping Partner</h4>
                    <div class="images">
                        <img src="{{ asset('frontend/assets/images/partner/partner1.png') }}" class="w-100"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="last-footer py-1 d-flex justify-content-around" style="border-top: 1px solid rgb(131, 131, 131)">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <h6 class="my-2">
                        Copyrights © 2012-2022, Kanchan Cashmere Industries Pvt. Ltd. All rights reserved.
                    </h6>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('frontend/assets/images/partner/payment.png') }}" class="w-100 h-100"
                        style="object-fit: fill;" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->
