@extends('frontend.layouts.master')

@section('content')
    @foreach ($shippings as $shipping)
        <div class="track-container container">
            <!-- New order -->
            <div class="track-box my-3">
                <!-- Order number tracking number and estimated date -->
                <div class="track-heading d-flex justify-content-between">
                    <!-- order number -->
                    <div class="order-no">
                        <span class="order-heading d-block">
                            Tracking Number: <span style="color:#e53637;"> {{ $shipping->tracking_number ?? '' }}</span>
                        </span>
                        <span class="num-heading d-block py-2">
                            Estimated Date: {{ date('Y M d', strtotime($shipping->estimated_arrival_date)) }}
                        </span>

                    </div>
                    <!-- Tracking number and date -->
                    <div class="track-num d-flex flex-column">
                        <Span class="num-heading"> Shipping Method : {{ $shipping->shipping_method ?? '' }} </Span>
                        <Span class="num-heading py-2">URL: <a href="{{ $shipping->tracking_url ?? '#' }}">
                                {{ $shipping->tracking_url ?? '' }} </a></Span>
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
                                    @if ($shipping->shipping_status == 'Pending')
                                        autorenew
                                    @endif
                                    @if ($shipping->shipping_status == 'Shipped')
                                        inventory
                                    @endif
                                    @if ($shipping->shipping_status == 'Out For Delivery')
                                        local_shipping
                                    @endif
                                    @if ($shipping->shipping_status == 'Arriving')
                                        package
                                    @endif
                                    {{-- inventory/local_shipping/package --}}
                                </span>
                            </div>
                            <!-- status content -->
                            <div class="status-content">

                                <span class="status-heading">
                                    {{ $shipping->shipping_status ?? '' }}
                                </span>
                                <p>{{ $shipping->remarks ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <!-- Shipped -->
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
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quidem nobis, sit delectus
                                    id optio deleniti saepe accusantium labore aperiam corporis exercitationem excepturi
                                    obcaecati cum ad voluptate nam eaque unde officia velit voluptas mollitia illo? Ad animi
                                    veniam, quam quibusdam eaque explicabo sapiente dicta, eius unde ducimus fugiat porro
                                    culpa.</p>
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
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quidem nobis, sit delectus
                                    id optio deleniti saepe accusantium labore aperiam corporis exercitationem excepturi
                                    obcaecati cum ad voluptate nam eaque unde officia velit voluptas mollitia illo? Ad animi
                                    veniam, quam quibusdam eaque explicabo sapiente dicta, eius unde ducimus fugiat porro
                                    culpa.</p>
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
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quidem nobis, sit delectus
                                    id optio deleniti saepe accusantium labore aperiam corporis exercitationem excepturi
                                    obcaecati cum ad voluptate nam eaque unde officia velit voluptas mollitia illo? Ad animi
                                    veniam, quam quibusdam eaque explicabo sapiente dicta, eius unde ducimus fugiat porro
                                    culpa.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <!-- Download button -->
                @if ($shipping->file)
                    <div class="button d-flex justify-content-center">
                        <a href="{{ asset('images/' . $shipping->file) }}" download="catalogue" class="tritary-btn">Download
                            <i class="fas fa-arrow-down"></i></a>
                    </div>
                @endif
                <!-- Tracking url -->
                <div class="tracking-url py-2">
                    <p class="text-center"><a href="{{ $shipping->tracking_url ?? '#' }}">For futher information for your delivery, please visit
                            Here.</a></p>
                </div>
            </div>
        </div>
    @endforeach
@endsection
