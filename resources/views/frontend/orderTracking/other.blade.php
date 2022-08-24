@extends('frontend.layouts.master')

@section('content')

<!-- order Tracking Next page -->

<!-- Image -->
<div class="other-image">
    <img src="{{ asset('frontend/assets/images/DHL.jpg') }}" class="w-100 h-100" alt="">
</div>
<!-- order Track details -->
<div class="other-orderTracking container my-5">
    <!-- Client detail -->
    <div class="client-detail">
        <div class="row">
            <div class="col-lg-8 col-md-6 customer-content">
                <!-- client heading -->
                <div class="client-detail-heading">
                    <h3>Client Detail :</h3>

                    <!-- Client Personal Information -->
                    <div class="personal-information my-1">
                        <!-- Name -->
                        <h5>Name : Krishna Pokharel</h5>
                        <!-- Country -->
                        <h5>Country : Nepal</h5>
                        <!-- Address -->
                        <h5>Address : Santinagar, Kathmandu</h5>
                        <!-- Order Number -->
                        <h5>Order Number : 12355566</h5>



                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-center customer-image">
                <!-- Customer logo -->
                <div class="customer-image">
                    <img src="{{ asset('frontend/assets/images/krishnapokharel.jpg') }}" class="w-100 h-100" alt="">
                </div>

            </div>

        </div>





    </div>
    <!-- Delivery status -->
    <div class="delivery-status my-5">
        <h3>Delivery Status : </h3>
        <div class="order-status-container">
            <!-- status -->
            <div class="status-item first">


                <!-- Circle -->
                <div class="status-circle">

                </div>

                <div class="status-text">
                    Processing
                </div>
            </div>
            <!-- status -->
            <div class="status-item second">
                <!-- circle -->
                <div class="status-circle">

                </div>
                <div class="status-text">
                    Shipped
                </div>
            </div>
            <!-- status -->
            <div class="status-item third">
                <!-- Circle -->
                <div class="status-circle">

                </div>
                <div class="status-text green">
                    <span>transit</span>
                </div>
            </div>
            <!-- status -->

            <div class="status-item">
                <!-- Circle -->
                <div class="status-circle"></div>
                <div class="status-text green">
                    <span>Ariving</span>

                </div>
            </div>
        </div>





    </div>
    <!-- delivery status detail -->
    <div class="status-detail my-2">
        <!-- Delivery Status detail box -->
        <div class="row my-3">
            <!-- Date box -->
            <div class="col-lg-1 px-3">
                <!-- date -->
                <div class="date text-center">
                    <h5>22 Nov <br> 2021 </h5>
                </div>


            </div>
            <div class="col-lg-10 px-1">
                <!-- detail -->
                <div class="delivery-detail text-justify">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolores doloribus sint in, distinctio culpa commodi, deserunt magnam molestiae qui debitis odio, obcaecati incidunt sit magni ducimus maiores? Aspernatur quos minus eligendi consequuntur impedit harum et quas quod molestias soluta.</h5>
                </div>


            </div>
        </div>
        <!-- End -->
        <!-- Delivery Status detail box -->
        <div class="row my-3">
            <!-- Date box -->
            <div class="col-lg-1 px-3">
                <!-- date -->
                <div class="date text-center">
                    <h5>27 Nov <br> 2021 </h5>
                </div>


            </div>
            <div class="col-lg-10 px-1">
                <!-- detail -->
                <div class="delivery-detail text-justify">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolores doloribus sint in, distinctio culpa commodi, deserunt magnam molestiae qui debitis odio, obcaecati incidunt sit magni ducimus maiores? Aspernatur quos minus eligendi consequuntur impedit harum et quas quod molestias soluta.</h5>
                </div>


            </div>
        </div>
        <!-- End -->



    </div>

</div>



@endsection