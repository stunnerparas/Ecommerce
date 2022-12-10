@extends('frontend.layouts.master')
@section('content')
    <div class="help-product">
        <div class="help-product-container container">
            {!! $helpcenter->description ?? '' !!}
        </div>
    </div>
@endsection
