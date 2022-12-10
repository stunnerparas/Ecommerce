@extends('frontend.layouts.master')
@section('content')
    <div class="help-center">
        <!-- banner image -->
        <div class="help-banner-image">
            <img src="{{ asset('frontend/assets/images/kashmeerahelp-center.png') }}" class="w-100 h-100" alt="">
        </div>


        <!-- Help center Content -->
        <div class="container help-center-container">
            <div class="row">
                <!-- Help box -->
                @foreach ($helpcenters as $helpcenter)
                    <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                        <a href="{{ route('frontend.helpcenters.single', $helpcenter->slug) }}">
                            <div class="help-box">
                                <div class="help-image">
                                    <img src="{{ asset('images/' . $helpcenter->image) }}" class="w-100 h-100"
                                        alt="">
                                </div>
                                <!-- Heading -->
                                <div class="help-box-content text-center">
                                    <span class="help-heading">{{ $helpcenter->title ?? '' }}</span>
                                    <p class="pt-2">{{ $helpcenter->sub_title ?? '' }}</p>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
