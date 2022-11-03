@extends('frontend.layouts.master')

@section('content')
<div class="track-container container">
    <!-- New order -->
    <div class="track-box my-3">
        <!-- Order number tracking number and estimated date -->
        <div class="track-heading d-flex justify-content-between">
            <!-- order number -->
            <div class="order-no">
                <span class="order-heading">
                    Order: <span style="color:#e53637;"> #3bc878</span>

                </span>

            </div>
            <!-- Tracking number and date -->
            <div class="track-num d-flex flex-column">
                <Span class="num-heading"> DHL 142536475 </Span>


                <Span class="num-heading py-2"> Estimate date : 2079/9/8 </Span>
            </div>


        </div>
        <!-- Order status -->
        <div class="order-status-container py-3">
            <!-- Processing -->
            <div class="status-item first">
                <div class="status-circle"></div>
                <div class="status-text">
                    Processing
                </div>
            </div>
            <!-- Shipped -->
            <div class="status-item second">
                <div class="status-circle"></div>
                <div class="status-text">
                    Shipped
                </div>
            </div>
            <!-- Out for delivery -->
            <div class="status-item third">
                <div class="status-circle"></div>
                <div class="status-text green">
                    <span>Out</span><span>for delivery</span>
                </div>
            </div>
            <!-- Ariving -->
            <div class="status-item">
                <div class="status-circle"></div>
                <div class="status-text green">
                    <span>Ariving</span>

                </div>
            </div>
        </div>
       
        <!-- Download button -->
        <div class="button d-flex justify-content-center">
            <a href="{{asset('catalogue/kanchanmaggfinal.pdf')}}" download="catalogue" class="tritary-btn">Download <i class="fas fa-arrow-down"></i></a>
        </div>
        <!-- Tracking url -->
        <div class="tracking-url py-2">
            <p class="text-center">For futher information for your delivery, please visit <a href="#">Here</a></p>
        </div>
    </div>
    <!-- Previous order -->
    <div class="track-box my-3">
        <!-- Order number tracking number and estimated date -->
        <div class="track-heading d-flex justify-content-between">
            <!-- order number -->
            <div class="order-no">
                <span class="order-heading">
                    Order: <span style="color:#e53637;"> #3bc878</span>

                </span>

            </div>
            <!-- Tracking number and date -->
            <div class="track-num d-flex flex-column">
                <Span class="num-heading"> DHL 142536475 </Span>


                <Span class="num-heading py-2"> Estimate date : 2079/9/8 </Span>
            </div>


        </div>
        <!-- Order status -->
        <div class="order-status-container py-3">
            <!-- Processing -->
            <div class="status-item first">
                <div class="status-circle"></div>
                <div class="status-text">
                    Processing
                </div>
            </div>
            <!-- Shipped -->
            <div class="status-item second">
                <div class="status-circle"></div>
                <div class="status-text">
                    Shipped
                </div>
            </div>
            <!-- Out for delivery -->
            <div class="status-item third">
                <div class="status-circle"></div>
                <div class="status-text green">
                    <span>Out</span><span>for delivery</span>
                </div>
            </div>
            <!-- Ariving -->
            <div class="status-item">
                <div class="status-circle"></div>
                <div class="status-text green">
                    <span>Ariving</span>

                </div>
            </div>
        </div>
       
        <!-- Download button -->
        <div class="button d-flex justify-content-center">
            <a href="{{asset('catalogue/kanchanmaggfinal.pdf')}}" download="catalogue" class="tritary-btn">Download <i class="fas fa-arrow-down"></i></a>
        </div>
        <!-- Tracking url -->
        <div class="tracking-url py-2">
            <p class="text-center">For futher information for your delivery, please visit <a href="#">Here</a></p>
        </div>
    </div>
</div>
@endsection