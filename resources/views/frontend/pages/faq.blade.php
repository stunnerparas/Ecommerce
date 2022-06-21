@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5">
        <div class="container">
            <h4 class="text-center">Frequently Asked Question</h4>
            <div class="faq-wrapper">
                <div class="row">
                    <div class="col-md-6 col-12 order-1 order-md-1">
                        <div class="faq-container mt-5">
                            @foreach ($faqs as $faq)
                                <div class="faq">
                                    <h3 class="faq-title">
                                        {{ $faq->title ?? '' }}
                                    </h3>

                                    <p class="faq-text text-justify">
                                        {{ strip_tags($faq->description ?? '') }}
                                    </p>

                                    <button class="faq-toggle">
                                        <i class="bi bi-chevron-down"></i>
                                        <i class="bi bi-x"></i>
                                    </button>
                                </div>
                            @endforeach


                            {{-- <div class="faq">
                                <h3 class="faq-title">
                                    How do I pay for my order?
                                </h3>
                                <p class="faq-text text-justify">
                                    You can pay for your order by using the payment method you prefer. We accept Visa,
                                    MasterCard, American Express, Discover, and PayPal.
                                </p>
                                <button class="faq-toggle">
                                    <i class="fas bi-chevron-down" aria-hidden="true"></i>
                                    <i class="fas bi-x" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="faq">
                                <h3 class="faq-title">
                                    How do I pay for my order?
                                </h3>
                                <p class="faq-text text-justify">
                                    You can pay for your order by using the payment method you prefer. We accept Visa,
                                    MasterCard, American Express, Discover, and PayPal.
                                </p>
                                <button class="faq-toggle">
                                    <i class="fas bi-chevron-down" aria-hidden="true"></i>
                                    <i class="fas bi-x" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="faq">
                                <h3 class="faq-title">
                                    How do I pay for my order?
                                </h3>
                                <p class="faq-text text-justify">
                                    You can pay for your order by using the payment method you prefer. We accept Visa,
                                    MasterCard, American Express, Discover, and PayPal.
                                </p>
                                <button class="faq-toggle">
                                    <i class="fas bi-chevron-down" aria-hidden="true"></i>
                                    <i class="fas bi-x" aria-hidden="true"></i>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-12 order-0 order-md-0 d-flex align-content-lg-end">
                        <div class="image-wrapper">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/others/undraw_Questions_re_1fy7.png') }}"
                                alt="" srcset="">

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
