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
@section('css')
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

    <!-- Service Details Section Start -->
    <section class="service-details-section section-padding">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-4">
                    <div class="col-12 col-lg-8">
                        <div class="service-details-image">
                            <img src="{{ $detail_data->image ?? asset('front/asset2/img/service/details-1.jpg') }}"
                                alt="img">
                        </div>
                        <div class="service-details-content">
                            <h2>{{ $detail_data->title ?? '' }}</h2>
                            <p>{!! $detail_data->description !!}</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Service Lists</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        @foreach ($list_services as $item)
                                            <li><a href="{{ route('service_detail', $item->slug) }}">{{ $item->title ?? '' }}
                                                </a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                            <div class="service-sidebar-widget">
                                <div class="contact-bg text-center bg-cover"
                                    style="background-image: url('{{ asset('front/asset2/img/service/contact-bg.jpg') }}');">
                                    <p>Do You Need Help? We're Here to Support You</p>

                                    <a href="{{ route('contact') }}" class="theme-btn w-100">
                                        Contact us
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
