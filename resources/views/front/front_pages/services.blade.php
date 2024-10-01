@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('Services') }}
@endsection
@section('meta_tags')
    {{ __('Services, proschimneyclening') }}
@endsection
@section('meta_description')
    {{ __('Pros Chimney Cleaning is committed to quality customer service and practical, repeatable results in chimney sweeping, air duct cleaning.') }}
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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Services</h1>
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
                            All Services
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- END Header -->
    <!-- Start Service area -->
    <section class="service-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>WHAT WE OFFER<i
                        class="fa-regular fa-arrow-right-long"></i></h6>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Create the building <br> you want here</h2>
            </div>
            <div class="row">
                @foreach ($services as $key => $item)
                    @if ($item->status == 1)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="service-box-items items-bg">
                                <div class="service-thumb">
                                    <img src="{{ $item->image ?? asset('front/asset2/img/service/01.jpg') }}"
                                        alt="img">
                                </div>
                                <div class="service-content">
                                    <h2 class="number">{{ $key + 1 }}</h2>
                                    <h3><a href="{{ route('service_detail', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                    </h3>
                                    <p>
                                        {{ $item->excerpt ?? '' }}
                                    </p>
                                    <a href="{{ route('service_detail', $item->slug) }}" class="link-btn">Explore More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

        </div>
    </section>
    <!-- End Service area -->
@endsection
