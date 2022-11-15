<!-- Footer Section Start -->
<section class="footer" id="footer">
    <div class="container">
        <!-- Footer First column -->
        <div class="row py-2">
            {{-- <div class="col-lg-2 col-md-6 col-sm-12 px-4 py-3">
                <h4>Help</h4>
                <div class="footer-list my-2">
                    <ul class="navbar-nav">
                        <!-- Footer Links -->
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
            <!-- Footer second column -->
            <div class="col-lg-3 col-md-6 col-sm-12 px-4 py-3">
                <h4>Kanchan Cashmere</h4>
                <div class="footer-list my-2">
                    <ul class="navbar-nav">
                        <!-- Footer Links -->
                        <li>
                            <a href="{{ route('aboutUs') }}">About us</a>
                        </li>
                        <li>
                            <a href="{{ route('termCondition') }}">Terms And Conditions</a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}">FAQs</a>
                        </li>


                        <li>
                            <a href="{{ route('blogs') }}">Kanchan Blogs</a>
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
            <!-- Footer Third column-->
            <div class="col-lg-3 col-md-6 col-sm-12 px-4 py-3">
                <h4>Business</h4>
                <div class="footer-list my-2">
                    <ul class="navbar-nav">
                        <!--Footer Links -->
                        <li>
                            <a href="{{ route('colorRequest') }}">Color Card Request</a>
                        </li>
                        <li>
                            <a href="{{ route('catalogueRequest') }}">Catologue Request</a>
                        </li>
                        <li>
                            <a href="{{ route('customMade') }}">Custom Made</a>
                        </li>
                        <li>
                            <a href="{{ route('orderRequest') }}">Made To Order</a>
                        </li>
                        <li>
                            <a href="{{ route('privateLabel') }}">Private Label</a>
                        </li>
                        <li>
                            <a href="{{ route('business.login') }}">B2B</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Footer Fourth column  -->
            <div class="col-lg-3 col-md-6 col-sm-12 px-4 py-3">
                <h4>Track</h4>
                <div class="footer-list my-2">
                    <ul class="navbar-nav">
                        <li>
                            <a href="{{ route('order-tracking') }}">Track My Order</a>
                        </li>
                        <li>
                            <a href="#">Order History</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Footer fifth column -->
            <div class="col-lg-3 col-md-6 col-sm-12 px-3 py-3">
                <h4>Help Center</h4>
                <p class="footer-p">
                    Want to know more about our Yarn Quality,size and color?Take a look at help center,where you can
                    find all the info you need quickly
                </p>
                <div class="help-center my-4">
                    <a href="{{ route('helpDesk') }}">Visit our Help Center</a>
                </div>
                <div class="shipping-partner my-4">
                    <h4>Shipping Partner</h4>
                    <div class="images">
                        <img src="{{ asset('frontend/assets/images/partner/partner1.png') }}" class="w-100"
                            alt="" />
                    </div>
                </div>
                <div class="socialmedia-icon">
                    <h4>Follow Us</h4>
                    <div class="icon">
                    <a href="https://www.linkedin.com/company/kanchan-cashmere-industries/" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://instagram.com/kcinepal?igshid=YmMyMTA2M2Y=" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://twitter.com/CashmereKanchan" target="_blank"><i class="bi bi-twitter"></i></a>

                    </div>

                </div>
            </div>
        </div>
        <!-- Copy right section -->
        <div class="last-footer py-1 d-flex justify-content-around" style="border-top: 1px solid rgb(131, 131, 131)">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <h6 class="my-2">
                        Copyrights © 2012-2022, Kanchan Cashmere Industries Pvt. Ltd. All rights reserved.
                    </h6>
                </div>
                <!-- Payment Partners -->
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('frontend/assets/images/partner/payment.png') }}" class="w-100 h-100"
                        style="object-fit: fill;" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->
