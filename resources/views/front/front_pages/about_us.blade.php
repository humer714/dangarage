@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('About Us') }}
@endsection
@section('meta_tags')
    {{ __('About Us, proschimneyclening') }}
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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">About Us</h1>
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
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- END Header -->

    <!-- About Section -->
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ asset('front/asset2/img/about/01.jpg') }}" alt="img" class="wow fadeInLeft"
                                data-wow-delay=".2s">
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
                                <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>about us<i
                                        class="fa-regular fa-arrow-right-long"></i></h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Leading Global Logistic
                                    And Transport Agency</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                                It is a long established fact that a reader will be distracted the readable content of a
                                page when looking at layout the point of using lorem the is Ipsum less normal distribution
                                of letters.
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
                                <img src="{{ asset('front/asset2/img/about/signature.png') }}" alt="img"
                                    class="wow fadeInUp" data-wow-delay=".4s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Achievement Section-->
    <section class="achivements-section fix">
        <div class="container">
            <div class="achivements-wrapper-2 section-padding">
                <div class="bg-shape">
                    <img src="{{ asset('front/asset2/img/achivements-shape.png') }}" alt="img">
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="achivements-content">
                            <div class="section-title">
                                <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>ACHIVEMENTS<i
                                        class="fa-regular fa-arrow-right-long"></i></h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Industrial Power, <br> Worldwide Influence
                                </h2>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn bg-white mt-3 mt-md-0 wow fadeInUp"
                                data-wow-delay=".4s">
                                Contact Us
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="achivements-right-items">
                            <div class="border-shape">
                                <img src="{{ asset('front/asset2/img/border.png') }}" alt="img">
                            </div>
                            <div class="achivements-item">
                                <div class="counter-items wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon">
                                        <img src="{{ asset('front/asset2/img/icon/21.svg') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">45</span>k+</h2>
                                        <p>project Complete</p>
                                    </div>
                                </div>
                                <div class="counter-items wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon">
                                        <img src="{{ asset('front/asset2/img/icon/22.svg') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">25</span>k+</h2>
                                        <p>Active On Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="achivements-item">
                                <div class="counter-items style-2 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon">
                                        <img src="{{ asset('front/asset2/img/icon/23.svg') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">2.5</span>+</h2>
                                        <p>Experience Team</p>
                                    </div>
                                </div>
                                <div class="counter-items style-2 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon">
                                        <img src="{{ asset('front/asset2/img/icon/24.svg') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">2.4</span>k+</h2>
                                        <p>Winning Awards</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="man-image float-bob-x ">
            <img src="{{ asset('front/asset2/img/man.png') }}" alt="img">
        </div>
    </section>

    <!-- Choose Us Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section-2 fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>testimonial<i
                        class="fa-regular fa-arrow-right-long"></i></h6>
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nunc viverra laoreet est, a
                                pretium metus aliquam eget. Maecenas porta is nunc ut viverra. Aenean pulvinar maximus leo,
                                non pharetra quam feugiat et. Suspendisse vitae nunc sed ligula.
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nunc viverra laoreet est, a
                                pretium metus aliquam eget. Maecenas porta is nunc ut viverra. Aenean pulvinar maximus leo,
                                non pharetra quam feugiat et. Suspendisse vitae nunc sed ligula.
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
@endsection
