@extends('frontend.layouts.master')

@section('content')
<div class="container-fluid p-0 my-5">
    <div class="container-fluid mx-auto">
        <div class="row d-flex justify-content-center d-flex justify-content-center">
            <!-- Shipping details form -->
            <div class="col-lg-6 col-12 order-lg-0 px-md-5 px-4 order-1 mt-lg-0 mt-4">
                <form action="{{ route('checkout.store') }}" method="POST">
                    @include('frontend.includes.messages')
                    @csrf
                    <input type="hidden" name="coupon_code" id="coupon_code_val">
                    <div class="shipping-form-container">
                        <div class="shipping-form-inner">
                            <div class="h4 mb-3">Shipping Details</div>
                            <div class="row my-3">
                                <div class="col-sm-6 col-12 mb-3 mb-sm-0">
                                    <!-- First Name for shipping -->
                                    <input type="text" value="{{ $shipping->full_name ?? '' }}" name="shipping_full_name" class="form-control p-4" placeholder="Full Name" required>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <!-- Last Name for shipping -->
                                    <input type="email" value="{{ $shipping->email ?? '' }}" name="shipping_email" class="form-control p-4" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <!-- Address of shipping -->
                                    <input type="text" value="{{ $shipping->address ?? '' }}" name="shipping_address" class="form-control p-4" placeholder=" Address " required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <div class="col ">
                                    <!-- Apartment number, suite number -->
                                    <input type="text " value="{{ $shipping->apartment ?? '' }}" name="shipping_apartment" class="form-control p-4 " placeholder="Apartment, suite, (optional) " required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4 col-6">
                                    <!-- City for shipping -->
                                    <input type="text " value="{{ $shipping->city ?? '' }}" name="shipping_city" class="form-control p-4 " placeholder="City" required>
                                </div>
                                <div class="col-sm-4 col-6 mb-3 mb-sm-0">
                                    <!-- State for shipping -->
                                    <input type="text " value="{{ $shipping->state ?? '' }}" name="shipping_state" class="form-control p-4 " placeholder="State"  required>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <!-- Zip code for shipping -->
                                    <input type="text " value="{{ $shipping->postal_code ?? '' }}" name="shipping_postal_code" class="form-control p-4 " placeholder="Postal Code"  required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <div class="col ">
                                    <input type="text " value="{{ $shipping->country ?? '' }}" name="shipping_country" class="form-control p-4 " placeholder="Country"  required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <div class="col ">
                                    <!-- Contact information for shipping -->
                                    <input type="text " value="{{ $shipping->phone ?? '' }}" name="shipping_phone" class="form-control p-4 " placeholder="Phone"  required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <select name="shipping_country" id="shippingCountry"  required>
                                        <option value="" disabled selected>Shipping Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>

                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <select name="Shipping Country" id="shippingCountry"  required>
                                        <option value="" disabled selected>Select Currency</option>
                                        <option value="">USD</option>
                                        <option value="">CAD</option>
                                        <option value="">EUR</option>
                                        <option value="">AUD</option>
                                        <option value="">NPR</option>
                                        <option value="">INR</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row">

                            </div>

                        </div>
                        <div id="billingAddress" class="billing-address-info">
                            <div class="row default-shipping-container mt-3 p-3">
                                <div class="col-12 d-flex align-content-center justify-content-between">
                                    <div class="deafult-billing-info">
                                        <h4>Billing address same as shipping</h4>
                                    </div>
                                    <input type="radio" name="billAddress" value="no" checked id="billSaveAddress">
                                </div>
                            </div>
                            <div class="row default-shipping-container mt-3 p-3">
                                <div class="col-12 d-flex align-content-center justify-content-between">
                                    <div class="deafult-shipping-info">
                                        <h4>Set a new or default billing address</h4>
                                    </div>
                                    <input type="radio" name="billAddress" value="yes" id="billNewAddress">

                                </div>
                            </div>
                            <div id="newBillingAddress" style="display: none;" class="billing-form-inner mt-5">
                                <!-- New Billing address form -->
                                <div class="row mb-3">
                                    <div class="col-sm-6 col-12 mb-3 mb-sm-0">
                                        <!-- First Name for billing -->
                                        <input type="text" value="{{ $billing->full_name ?? '' }}" name="billing_full_name" class="form-control p-4" placeholder="Full Name">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <!-- Last Name for billing -->
                                        <input type="email" value="{{ $billing->email ?? '' }}" name="billing_email" class="form-control p-4" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <!-- Address of billing -->
                                        <input type="text" value="{{ $billing->address ?? '' }}" name="billing_address" class="form-control p-4" placeholder=" Address ">
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col ">
                                        <!-- Apartment number, suite number for billing -->
                                        <input type="text " value="{{ $billing->apartment ?? '' }}" name="billing_apartment" class="form-control p-4 " placeholder="Apartment, suite, (optional) ">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 col-6">
                                        <!-- City for shipping billing -->
                                        <input type="text " value="{{ $billing->city ?? '' }}" name="billing_city" class="form-control p-4 " placeholder="City">
                                    </div>
                                    <div class="col-sm-4 col-6 mb-3 mb-sm-0">
                                        <!-- State for shipping -->
                                        <input type="text " value="{{ $billing->state ?? '' }}" name="billing_state" class="form-control p-4 " placeholder="State">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <!-- Zip code for shipping billing -->
                                        <input type="text " value="{{ $billing->postal_code ?? '' }}" name="billing_postal_code" class="form-control p-4 " placeholder="Postal Code">
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col ">
                                        <input type="text" value="{{ $billing->country ?? '' }}" name="billing_country" class="form-control p-4 " placeholder="Country">
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col ">
                                        <!-- Contact information for billing -->
                                        <input type="text" value="{{ $billing->phone ?? '' }}" name="billing_phone" class="form-control p-4 " placeholder="Phone">
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="row mt-3 d-flex justify-content-center">
                            <button id="quoteBtn" onclick="" class="btn primary-btn get-quote-btn mt-2">Get
                                Quote<i class="bi ml-3 bi-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-12 px-md-0 px-0 order-lg-1 order-0">
                <div class="container d-flex flex-column align-content-center mx-auto">
                    <div class="cart-item-view col-lg-10 col-12">
                        <h4>Have Coupon Code?</h4>
                        <div class="checkout-item-lis my-4">
                            <label for="">Enter coupon code here to get discount</label>
                            <input type="text" class="form-control" name="" id="coupon_code">
                            <button type="button" id="btn_coupon" class="btn btn-secondary btn-sm mt-2">
                                Apply <i style="display: none;" class="fas fa-sync fa-spin discount-loader"></i>
                            </button>
                        </div>
                    </div>
                    <div class="cart-item-view col-lg-10 col-12">
                        <h4>Items in Cart</h4>
                        <div class="checkout-item-lis my-4">

                            @foreach ($cartItems as $item)
                            <div class="cart-single-item mb-3 p-3 d-flex justify-content-between">
                                <div class="product-desciption-container">
                                    <h5 class="font-weight-bold">{{ $item->name }}</h5>
                                    <p>{{ $item->attributes->size . ' / ' . $item->attributes->color }}</p>
                                </div>
                                <p class="item-total">{{ $item->quantity }}</p>
                                <p class="">{{ currencySymbol() }} {{ $item->price * $item->quantity }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-10 col-12">
                        <div class="d-flex justify-content-between">
                            <h4 class="">Cart Summary</h4>
                            <!-- Go back to cart page -->
                            <a href="{{ route('cart.index') }}" class="text-underline">Change Items?</a>
                        </div>
                        <div class="card text-left">
                            <div class="card-body">
                                <div class="items-summary d-flex justify-content-between">
                                    <!-- Total items present in the cart -->
                                    <p class="">Total Items:</p>
                                    <p class="totalCartItem">{{ $cartItems->count() }}</p>
                                </div>
                                <div class="items-summary d-flex justify-content-between">
                                    <!-- Total items present in the cart -->
                                    <p class="">Total Cost:</p>
                                    <p class="totalCartItem">{{ currencySymbol() }} {{ Cart::getTotal() }}</p>
                                </div>

                                <div class="cart-total-container d-flex justify-content-between">
                                    <!-- Total of the cart -->
                                    <p class="">Grand Total:</p>
                                    <p class="totalCartPrice">{{ currencySymbol() }}
                                        {{ Cart::getTotal()  }}
                                    </p>
                                </div>
                                <div class="cart-total-container d-flex justify-content-between view-coupon-details" style="display: none !important">
                                    <!-- Total of the cart -->
                                    <p class="">Coupon Discount:</p>
                                    <p class="">{{ currencySymbol() }} <span id="coupon-discount-amount">0</span></p>
                                </div>
                                <div class="cart-total-container d-flex justify-content-between view-coupon-details" style="display: none !important">
                                    <!-- Total of the cart -->
                                    <p class="">Total Payable Amount:</p>
                                    <p class="">{{ currencySymbol() }} <span id="payable-amount">0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('#btn_coupon').click(function(e) {

        var code = $('#coupon_code').val();
        if (!code) {
            toastr.error("Enter Coupon Code");
            return false;
        }

        $.ajax({
            url: "{{ url('coupon-code') }}/" + code,
            type: "GET",
            beforeSend: function() {
                $('.discount-loader').show();
            },
            success: function(data) {
                $('.discount-loader').hide();
                console.log(data);
                if (data == 'not-found') {
                    invalidCoupon();
                    toastr.error('Invalid Coupon');
                    return false;
                } else if (data == 'limit-crossed') {
                    invalidCoupon();
                    toastr.error('Coupon no longer exist');
                    return false;
                } else {
                    if (data.discount) {
                        totalAmountAfterCoupon(data.discount);
                    } else {
                        invalidCoupon();
                        toastr.error('No discount available in this coupon');
                        return false;
                    }
                }
            },
            error: function(data) {
                $('.discount-loader').hide();
                alert("Some Problems Occured!");
            },
        });
    })

    function totalAmountAfterCoupon(discount) {
        if (discount) {
            $('.view-coupon-details').show();
            var total = "{{ Cart::getTotal() + shippingCharge() }}";
            var net = total - parseFloat(discount);
            $('#coupon-discount-amount').html(discount);
            $('#payable-amount').html(net);
            toastr.success('Coupon Discount Added');

            var code = $('#coupon_code').val();
            $('#coupon_code_val').val(code);
        }
    }

    function invalidCoupon() {
        var total = "{{ Cart::getTotal() + shippingCharge() }}";
        $('.view-coupon-details').hide();
        $('#coupon-discount-amount').html(0);
        $('#payable-amount').html(total);
        $('#coupon_code_val').val('');
    }
</script>
@endsection
