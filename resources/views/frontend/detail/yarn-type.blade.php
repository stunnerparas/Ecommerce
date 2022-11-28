@extends('frontend.layouts.master')

@section('content')
    <div class="container py-4">
        <div class="section-padding">
            <!-- cashmere type container -->
            <div class="type-cashmere">
                <div class="type-cashmere-content">
                    <div class="row">
                        <!-- Cashmere type image -->
                        <div class="col-lg-4 col-md-12  col-sm-12">
                            <div class="type-image">
                                <img src="{{ asset('images/' . $componenttype->image) }}" class="w-100 h-100" alt="">

                            </div>
                        </div>
                        <!-- cashmere detail -->
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="cashmere-detail my-3 ">
                                <div class="heading">
                                    <span class="cashmere-detail-heading">
                                        {{ $componenttype->title ?? '' }}

                                    </span>
                                </div>
                                <div class="paragraph py-3">
                                    <p class="text-justify">{!! $componenttype->description ?? '' !!}</p>
                                </div>
                            </div>

                        </div>
                        <!-- Cashmere Featured -->
                        <div class="col-lg-12 my-2">
                            {!! $componenttype->extra_details ?? '' !!}
                        </div>

                    </div>

                </div>

            </div>




        </div>
    </div>
@endsection
