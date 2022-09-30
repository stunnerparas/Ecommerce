@extends('frontend.layouts.master')

@section('content')
    <!-- Blog Hero section -->

    <section class="blog-hero py-3">
        <div class="container-fluid">
            <div class="row">
                <!-- Blog left section -->
                <div class="col-lg-3 px-4">
                    <div class="left-sec">

                        <div class="blog-catagories py-3">
                            <h3>Catagories</h3>
                            <ul>
                                <li><a href="{{ route('blogs') }}">All</a></li>
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('blogs', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- Blog right section -->
                <div class="col-lg-9 py-3">
                    <div class="right-sec">
                        <!-- Blog-page Heading -->
                        <h2 class="font-weight-bold">{{ $cat_name ?? '' }}</h2>
                        <p>
                            {{ strip_tags($cat_desc ?? '') }}
                        </p>
                        <div class="blog-container d-flex">
                            @foreach ($blogs as $blog)
                                <div class="blog-card">
                                    <div class="blog-card-container">
                                        <div class="blog-image">
                                            <img src="{{ asset('images/' . $blog->image) }}" class="w-100 h-100"
                                                alt="{{ $blog->title ?? '' }}" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="date">
                                                <h6>{{ date('Y M d', strtotime($blog->date)) }}</h6>
                                            </div>
                                            <div class="heading">
                                                <a href="{{ route('blog', $blog->slug) }}">{{ $blog->title ?? '' }}</a>
                                            </div>
                                            <div class="content">
                                                {{ substr(strip_tags($blog->description ?? ''), 0, 80) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog hero section closed -->
@endsection
