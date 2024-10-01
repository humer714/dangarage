@extends('front.layout_pages.app')


@section('meta_title')
    {{ $detail_data->meta_title ?? '' }}
@endsection
@section('meta_tags')
    {{ $detail_data->meta_tag ?? '' }}
@endsection
@section('meta_description')
    {{ $detail_data->meta_description ?? '' }}
@endsection

@section('content')
    <!-- Start Bottom Header -->
    <div class="breadcrumb-wrapper bg-cover"
        style="background-image: url('{{ asset('front/asset2/img/breadcrumb-bg.jpg') }}');">
        <div class="shape-image float-bob-y">
            <img src="{{ asset('front/asset2/img/vector.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="breadcrumb-wrapper-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $detail_data->title ?? '' }}</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-sharp fa-solid fa-slash-forward"></i>
                        </li>
                        <li>
                            {{ $detail_data->title ?? '' }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->

    <!--Blog Area Start-->
    <section class="news-standard fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-12">
                    <div class="blog-post-details">
                        <div class="single-blog-post">
                            <div class="post-featured-thumb bg-cover" style="background-image: url('{{ $detail_data->image ?? asset('front/asset2/img/news/post-4.jpg') }}');"></div>
                            <div class="post-content">
                                <ul class="post-list d-flex align-items-center">
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        Admin
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        {{ $detail_data->created_at ? $detail_data->created_at->format('d F, Y') : '' }}
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        {{ $detail_data->category ?? '' }}
                                    </li>
                                </ul>
                                <h3>{{ $detail_data->title ?? '' }}</h3>
                                <p class="mb-3">
                                    {!! $detail_data->description !!}
                                </p>
                        
            
                            </div>
                        </div>
 
                    </div>
                </div>
           
            </div>
        </div>
    </section>
    <!--End of Blog Area-->
@endsection
