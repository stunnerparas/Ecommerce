@extends('frontend.layouts.master')

@section('content')
    <!-- Blog Hero section -->
    <div class="blog-hero-sec">
        <div class="content">
            <h3>Kanchan Blogs</h3>
        </div>
    </div>
    <!-- Blog Hero section end -->
    <!-- Blog Content -->
    <section class="blog-inner-content py-5">
        <div class="container">
            <div class="content-left-sec">
                <!-- Blog Heading -->
                <div class="heading">
                    <h2>
                        {{ $blog->title ?? '' }}
                    </h2>
                </div>
                <div class="blog-detail d-flex">
                    <div class="author">
                        <h5>By {{ $blog->author ?? '' }}</h5>
                    </div>
                    <div class="date px-3">
                        <h5>{{ date('Y M d', strtotime($blog->date)) }}</h5>
                    </div>
                </div>
                <!-- Feature Image -->
                <div class="feature-image">
                    <img src="{{ asset('images/' . $blog->image) }}" class="w-100 h-100" alt="{{ $blog->title }}">

                </div>


                <!-- Feature image end -->
                <!-- Heading End -->
                <!-- Blog Paragraph -->
                <div class="paragraphs py-2">
                    {!! $blog->description ?? '' !!}
                </div>
                <!-- Blog Paragraph end -->

            </div>
        </div>
    </section>
    <!-- Blog Content End -->
@endsection
