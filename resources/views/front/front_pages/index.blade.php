@extends('front.layout_pages.app')
@section('meta_title')
    {{ __('Home') }}
@endsection
@section('meta_tags')
    {{ __('Home, proschimneyclening') }}
@endsection
@section('meta_description')
    {{ __('Pros Chimney Cleaning is the #1 choice for all your Chimney and air duct needs. Our expert techs have been repairing and cleaning chimneys throughout Houston') }}
@endsection


@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section fix hero-2">
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
            <button class="array-next"><i class="fal fa-arrow-left"></i></button>
        </div>
        <div class="swiper hero-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('{{ asset('front/asset2/img/hero/03.jpg') }}');">
                       
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="hero-content text-center">
                                    <h5 data-animation="fadeInUp" data-delay="1.3s">best Logistic company</h5>
                                    <h1 data-animation="fadeInUp" data-delay="1.5s">
                                        Warehouse Solutions <br> for Your Business
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay="1.7s">
                                        Suspendisse volutpat mi sit amet mauris egesta pellentesque. Phasellus vitae magna <br> posuere, feugiat nunc vitae, placera magna. Fusce non rhoncus lectus.
                                    </p>
                                    <div class="hero-button">
                                        <a href="{{ route('about_us') }}" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="{{ route('contact') }}" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn bg-white">
                                            Contact Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('{{ asset('front/asset2/img/hero/04.jpg') }}');">
                       
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="hero-content text-center">
                                    <h5 data-animation="fadeInUp" data-delay="1.3s">best Logistic company</h5>
                                    <h1 data-animation="fadeInUp" data-delay="1.5s">
                                        Warehouse Solutions <br> for Your Business
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay="1.7s">
                                        Suspendisse volutpat mi sit amet mauris egesta pellentesque. Phasellus vitae magna <br> posuere, feugiat nunc vitae, placera magna. Fusce non rhoncus lectus.
                                    </p>
                                    <div class="hero-button">
                                        <a href="{{ route('about_us') }}" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="{{ route('contact') }}" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn bg-white">
                                            Contact Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('{{ asset('front/asset2/img/hero/05.jpg') }}');">
                       
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="hero-content text-center">
                                    <h5 data-animation="fadeInUp" data-delay="1.3s">best Logistic company</h5>
                                    <h1 data-animation="fadeInUp" data-delay="1.5s">
                                        Warehouse Solutions <br> for Your Business
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay="1.7s">
                                        Suspendisse volutpat mi sit amet mauris egesta pellentesque. Phasellus vitae magna <br> posuere, feugiat nunc vitae, placera magna. Fusce non rhoncus lectus.
                                    </p>
                                    <div class="hero-button">
                                        <a href="{{ route('about_us') }}" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="{{ route('contact') }}" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn bg-white">
                                            Contact Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider Area -->


    <!-- About Section Start -->
    <section class="about-section fix section-padding">
        <div class="about-shape-1 float-bob-x">
            <img src="{{ asset('front/asset2/img/about/about-shape-1.png') }}" alt="img">
        </div>
        <div class="about-shape-2 float-bob-x">
            <img src="{{ asset('front/asset2/img/about/about-shape-2.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ asset('front/asset2/img/about/01.jpg') }}" alt="img" class="wow fadeInLeft" data-wow-delay=".2s">
                            <div class="about-image-2 wow fadeInUp" data-wow-delay=".4s">
                                <img src="{{ asset('front/asset2/img/about/02.jpg') }}" alt="img">
                               
                            </div>
                            <div class="about-line-shape">
                                <img src="{{ asset('front/asset2/img/about/about-shape-3.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>about us<i class="fa-regular fa-arrow-right-long"></i></h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Leading Global Logistic
                                    And Transport Agency</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                                It is a long established fact that a reader will be distracted the readable content of a page when looking at layout the point of using lorem the is Ipsum less normal distribution of letters.
                            </p>
                            <ul class="list-items wow fadeInUp" data-wow-delay=".2s">
                                <li> <i class="fa-solid fa-circle-check"></i>
                                    We will never compromise the safety of our people 
                                </li>
                                <li> <i class="fa-solid fa-circle-check"></i>
                                    With over four decades of experience providing solutions
                                </li>
                                <li> <i class="fa-solid fa-circle-check"></i>
                                    We see projects through and proactively develop solutions
                                </li>
                            </ul>
                            <div class="about-author">
                                <div class="author-image wow fadeInUp" data-wow-delay=".2s">
                                    <img src="{{ asset('front/asset2/img/about/author.png') }}" alt="author-img">
                                    <div class="content">
                                        <p>Transko, CEO</p>
                                        <h4>Brooklyn Simmons</h4>
                                    </div>
                                </div>
                                <img src="{{ asset('front/asset2/img/about/signature.png') }}" alt="img" class="wow fadeInUp" data-wow-delay=".4s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ENd About Section-->

    <!-- Start Service area -->
    <section class="service-section fix section-padding bg-cover" style="background-image: url('{{ asset('front/asset2/img/service/service-bg.jpg') }}');">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>Services<i class="fa-regular fa-arrow-right-long"></i></h6>
                <h2 class="wow fadeInUp text-white" data-wow-delay=".2s">Best Service for<br>
                    door cleanning</h2>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                <button class="array-next"><i class="fa-regular fa-arrow-right-long"></i></button>
            </div>
        </div>
        <div class="container-fluid">
            <div class="swiper service-slider">
                <div class="swiper-wrapper">
                    @foreach($services as $key => $item)
                        @if ($item->status == 1 && $item->is_active == 1)
                            <div class="swiper-slide">
                                <div class="service-box-items">
                                    <div class="service-thumb">
                                        <img src="{{ $item->image ?? asset('front/asset2/img/service/01.jpg') }}" alt="img">
                                    </div>
                                    <div class="service-content">
                                        <h2 class="number">{{$key + 1 }}</h2>
                                        <h3><a href="{{ route('service_detail', $item->slug) }}">
                                            {{ $item->title ?? '' }}</a></h3>
                                        <p>
                                            {{ $item->excerpt ?? '' }}
                                        </p>
                                        <a href="{{ route('service_detail', $item->slug) }}" class="link-btn">Explore More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- End Service area --> 

            <!-- Achivements Section Start -->
            <section class="achivements-section fix section-bg-2 section-padding bg-cover" style="background-image: url('{{ asset('front/asset2/img/achivements-bg-shape.png')}}');">
            <div class="container">
                <div class="achivements-wrapper">
                    <div class="row g-4 justify-content-between">
                        <div class="col-xxl-6 col-xl-7 col-lg-8">
                            <div class="achivements-content">
                                <div class="section-title">
                                    <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>ACHIVEMENTS<i class="fa-regular fa-arrow-right-long"></i></h6>
                                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Let's Get Started We are <br> now Transport a dream.</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp">
                                    It is a long established fact that a reader will be distracted the readable content of a page when looking at layout the point of using lorem the is Ipsum less Transko normal distribution of letters.
                                </p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="counter-items">
                                            <div class="content">
                                                <div class="icon">
                                                    <img src="{{ asset('front/asset2/img/icon/11.svg')}}" alt="img">
                                                </div>
                                                <h2><span class="count">45</span>k+</h2>
                                                <p>project Complete</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="counter-items">
                                            <div class="content">
                                                <div class="icon">
                                                    <img src="{{ asset('front/asset2/img/icon/12.svg')}}" alt="img">
                                                </div>
                                                <h2><span class="count">25</span>k+</h2>
                                                <p>Active On Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="counter-items">
                                            <div class="content">
                                                <div class="icon">
                                                    <img src="{{ asset('front/asset2/img/icon/13.svg')}}" alt="img">
                                                </div>
                                                <h2><span class="count">2.5</span>+</h2>
                                                <p>Experience Team</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="counter-items">
                                            <div class="content">
                                                <div class="icon">
                                                    <img src="{{ asset('front/asset2/img/icon/14.svg')}}" alt="img">
                                                </div>
                                                <h2><span class="count">2.4</span>k+</h2>
                                                <p>Winning Awards</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="achivements-image">
                                <img src="{{ asset('front/asset2/img/achivements-image.jpg')}}" alt="img">
                                <div class="achivements-image-2 float-bob-y">
                                    <img src="{{ asset('front/asset2/img/achivements-image-2.jpg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Achivements Section -->

    <!-- Cta Banner Section Start -->
    <section class="cta-section-2 bg-cover fix" style="background-image: url('{{ asset('front/asset2/img/cta-bg-2.jpg') }}');">
        <div class="container">
            <div class="cta-banner-wrapper-2">
                <div class="cta-content">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Do You Have Any Questions <br> About the Project Plan?</h2>
                    <a href="{{ route('contact') }}" class="theme-btn wow fadeInUp" data-wow-delay=".4s">
                        GET IN TOUCH
                        <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
                <div class="cta-image wow fadeInUp" data-wow-delay=".3s">
                    <img src="{{ asset('front/asset2/img/engineer-holding.png') }}" alt="img">
                </div>
            </div>
        </div>
    </section>

    <!-- Start project Area -->
    <section class="project-section section-padding pt-5 fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>latest project gallery<i class="fa-regular fa-arrow-right-long"></i></h6>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Explore Our Project</h2>
                </div>
                <a href="{{ route('services') }}" class="theme-btn wow fadeInUp" data-wow-delay=".4s">View all Projects <i class="fa-regular fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="project-wrapper-2">
            <div class="swiper project-slider">
                <div class="swiper-wrapper">
                    @foreach ($projects as $key => $item)
                        @if ($item->status == 1 && $item->is_active == 1)
                            <div class="swiper-slide">
                                <div class="project-thumb">
                                    <img src="{{ $item->image ?? asset('front/asset2/img/project/06.jpg') }}" alt="img">
                                    <div class="project-content">
                                        <div class="content">
                                            <h3><a href="{{ route('project_detail', $item->slug) }}">{{ $item->title ?? '' }}</a></h3>
                                            <span>{{ $item->category ?? '' }}</span>
                                        </div>
                                        <h2 class="number">{{$key + 1 }}</h2>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="project-dot"></div>
            </div>
        </div>
    </section>
    <!-- End project Area -->

    <!-- Testimonial Section -->
    <section class="testimonial-section-2 fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>testimonial<i class="fa-regular fa-arrow-right-long"></i></h6>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">What our client say</h2>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                <button class="array-next"><i class="fa-solid fa-arrow-right-long"></i></button>
            </div>
            <div class="swiper testimonial-slider-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="shape-img">
                                <img src="{{ asset('front/asset2/img/testimonial/shape-left.png') }}" alt="img">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nunc viverra laoreet est, a pretium metus aliquam eget. Maecenas porta is nunc ut viverra. Aenean pulvinar maximus leo, non pharetra quam feugiat et. Suspendisse vitae nunc sed ligula.
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <img src="{{ asset('front/asset2/img/testimonial/client-4.png') }}" alt="img">
                                    <div class="content">
                                        <h4>Shikhon Islam</h4>
                                        <span>Web Developer</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('front/asset2/img/testimonial/amazon.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items style-2">
                            <div class="shape-img">
                                <img src="{{ asset('front/asset2/img/testimonial/shape-right.png') }}" alt="img">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nunc viverra laoreet est, a pretium metus aliquam eget. Maecenas porta is nunc ut viverra. Aenean pulvinar maximus leo, non pharetra quam feugiat et. Suspendisse vitae nunc sed ligula.
                            </p>
                            <div class="client-info-items">
                                <div class="client-info">
                                    <img src="{{ asset('front/asset2/img/testimonial/client-5.png') }}" alt="img">
                                    <div class="content">
                                        <h4>Rony Ahmed</h4>
                                        <span>Web Development</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('front/asset2/img/testimonial/envato.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Testimonial Section -->

    <!--Blog Area Start-->
    <section class="news-section fix section-padding pt-0">
        <div class="shape-3 float-bob-y">
            <img src="{{ asset('front/asset2/img/news/shape-3.png') }}" alt="img">
        </div>
        <div class="shape-4 float-bob-y">
            <img src="{{ asset('front/asset2/img/news/shape-4.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>Blog & News<i class="fa-regular fa-arrow-right-long"></i></h6>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Latest News & Blog</h2>
                </div>
                <a href="news-grid.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">View all post <i class="fa-regular fa-arrow-right"></i></a>
            </div>
            <div class="row">
                @foreach ($blogs as $item)
                    @if ($item->status == 1 && $item->is_active == 1)

                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="news-box-items">
                                <div class="news-image">
                                    <img src="{{ $item->image ?? asset('front/asset2/img/news/04.jpg') }}" alt="img">
                                    <img src="{{ $item->image ?? asset('front/asset2/img/news/04.jpg') }}" alt="img">
                                </div>
                                <div class="news-content">
                                    <ul class="post-list">
                                        <li>{{ $item->category ?? '' }}</li>
                                        <li>{{ $item->created_at ? $item->created_at->format('d F, Y') : '' }}</li>
                                    </ul>
                                    <h4><a href="{{ route('blog_detail', $item->slug) }}">{{ $item->title ?? '' }}</a></h4>
                                    <div class="author-items">
                                        <div class="author-info">
                                            <div class="content">
                                                <h6>Admin</h6>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog_detail', $item->slug) }}" class="link-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!--End of Blog Area-->
@endsection
