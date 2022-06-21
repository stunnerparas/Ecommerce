@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5 p-0">
        <div class="container p-sm-auto p-0">
            <!-- Page Heading -->
            <h4 class="text-center">{{ $page->title ?? '' }}</h4>
            <div class="termsContions-container mt-5 d-flex justify-content-center">
                <!-- Container width control -->
                <div class="col-md-8 col-sm-10 col-12">
                    <div class="terms-sub-container mb-5">
                        {!! $page->description ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
