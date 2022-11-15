@extends('frontend.layouts.master')

@section('content')
<div class="track-container container">
    <!-- New order -->
    <div class="track-box my-3">
        <!-- Order number tracking number and estimated date -->
        <div class="track-heading d-flex justify-content-between">
            <!-- order number -->
            <div class="order-no">
                <span class="order-heading d-block">
                    Order: <span style="color:#e53637;"> #3bc878</span>

                </span>
                <span class="num-heading d-block py-2">
                   Estimated Date: 2022 Nov 3

                </span>

            </div>
            <!-- Tracking number and date -->
            <div class="track-num d-flex flex-column">
                <Span class="num-heading"> Shipping Method : DHL </Span>

                <Span class="num-heading py-2">URL: <a href="#"> www.dhl.com/trackorder </a></Span>

                <Span class="num-heading"> Tracking Number : 12654789 </Span>
            </div>


        </div>
        <!-- Order status -->
        <div class="order-status py-3">
            <!-- Processing -->
            <div class="status-box my-2">
                <div class="box-container">
                    <!-- icon -->
                    <div class="status-icon">
                        <span class="material-symbols-outlined">
                            autorenew
                        </span>
                    </div>
                    <!-- status content -->
                    <div class="status-content">

                        <span class="status-heading">
                            Processing
                        </span>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quidem nobis, sit delectus id optio deleniti saepe accusantium labore aperiam corporis exercitationem excepturi obcaecati cum ad voluptate nam eaque unde officia velit voluptas mollitia illo? Ad animi veniam, quam quibusdam eaque explicabo sapiente dicta, eius unde ducimus fugiat porro culpa.</p>

                    </div>


                </div>

            </div>
            <!-- Shipped -->
            <div class="status-box my-2">
                <div class="box-container">
                    <!-- icon -->
                    <div class="status-icon">
                        <span class="material-symbols-outlined">
                            inventory
                        </span>
                    </div>
                    <!-- status content -->
                    <div class="status-content">

                        <span class="status-heading">
                            Shipped
                        </span>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quidem nobis, sit delectus id optio deleniti saepe accusantium labore aperiam corporis exercitationem excepturi obcaecati cum ad voluptate nam eaque unde officia velit voluptas mollitia illo? Ad animi veniam, quam quibusdam eaque explicabo sapiente dicta, eius unde ducimus fugiat porro culpa.</p>

                    </div>


                </div>

            </div>
            <!-- Out for delivery-->
            <div class="status-box my-2">
                <div class="box-container">
                    <!-- icon -->
                    <div class="status-icon">
                        <span class="material-symbols-outlined">
                            local_shipping
                        </span>
                    </div>
                    <!-- status content -->
                    <div class="status-content">

                        <span class="status-heading">
                            Out for Delivery
                        </span>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quidem nobis, sit delectus id optio deleniti saepe accusantium labore aperiam corporis exercitationem excepturi obcaecati cum ad voluptate nam eaque unde officia velit voluptas mollitia illo? Ad animi veniam, quam quibusdam eaque explicabo sapiente dicta, eius unde ducimus fugiat porro culpa.</p>

                    </div>


                </div>

            </div>
            <!-- Arriving-->
            <div class="status-box my-2">
                <div class="box-container">
                    <!-- icon -->
                    <div class="status-icon">
                        <span class="material-symbols-outlined">
                            package
                        </span>
                    </div>
                    <!-- status content -->
                    <div class="status-content">

                        <span class="status-heading">
                            Arriving
                        </span>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quidem nobis, sit delectus id optio deleniti saepe accusantium labore aperiam corporis exercitationem excepturi obcaecati cum ad voluptate nam eaque unde officia velit voluptas mollitia illo? Ad animi veniam, quam quibusdam eaque explicabo sapiente dicta, eius unde ducimus fugiat porro culpa.</p>

                    </div>


                </div>

            </div>



        </div>
        <!-- Download button -->
        <div class="button d-flex justify-content-center">
            <a href="{{ asset('catalogue/kanchanmaggfinal.pdf') }}" download="catalogue" class="tritary-btn">Download <i class="fas fa-arrow-down"></i></a>
        </div>
        <!-- Tracking url -->
        <div class="tracking-url py-2">
            <p class="text-center"><a href="#">For futher information for your delivery, please visit Here.</a></p>
        </div>
    </div>
</div>





@endsection
