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

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<style>
    .contact-info-area {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        padding: 40px 30px;
        background: var(--white);
        border-radius: 100px;
    }

    .contact-info-area .contact-info-items {
        display: flex;
        align-items: center;
        gap: 20px;
        justify-content: space-between;
        position: relative;
    }

    .contact-info-area .contact-info-items .icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 70px;
        height: 70px;
        background-color: var(--white);
        border-radius: 50%;
        color: var(--theme);
        border: 1px solid var(--border);
        font-size: 24px;
    }

    .contact-wrapper .contact-content .icon-items .icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 63px;
        height: 63px;
        background-color: transparent;
        border-radius: 50%;
        color: var(--theme);
        border: 1px solid var(--white);
        font-size: 24px;
    }

    /* .contact-wrapper .contact-content .icon-items .icon {
    width: 63px;
    height: 63px;
    line-height: 63px;
    background-color: transparent;
    border-radius: 50%;
    border: 1px solid var(--white);
    text-align: center;
} */

    .fab {
        line-height: 32px;
    }

    .service-thumb img {
        width: 100%;
        height: auto;
        object-fit: cover;
        /* Ensures that images don't stretch */
    }

    .swiper-container {
        overflow: hidden;
        width: 100%;
        padding: 20px 0;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .service-box-items {
        width: 100%;
        max-width: 600px;
        /* Adjust as per your need */
        margin: 0 auto;
        padding: 15px;
        /* Padding for card */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* For better card visibility */
        /* Add max-height */
        /* max-height: 400px; */
        /* Adjust as per your need */
    }

    .swiper-pagination {
        bottom: 60px !important;
        /* Space the pagination */
    }

    .swiper-button-prev,
    .swiper-button-next {
        color: #000;
        /* Arrow color */
        top: 64%;
    }

</style>


<div class="breadcrumb-wrapper bg-cover"
    style="background-image: url('{{ $detail_data->image ?? asset('front/asset2/img/breadcrumb-bg.jpg') }}');">
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

<section class="service-details-section mb-3">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-card-items" style="position: relative;">
                        <div class="tag-img" style="position: absolute; top: 0px; right: 0px; z-index: 10;">
                            <img src="{{ asset('front/asset2/img/tag.png')}}" alt="img">
                        </div>
                        <div class="service-image">
                            <img src="{{ asset('front/asset2/img/service/05.jpg')}}" alt="img">
                        </div>
                        <div class="bar-shape">
                            <img src="{{ asset('front/asset2/img/service/bar.png')}}" alt="img">
                        </div>
                        <div class="icon">
                            <i class="fa-sharp fa-solid fa-plane-arrival"></i>
                        </div>
                        <div class="content">
                            <h3><a href="#">ocean
                                    Freight</a></h3>
                            <p>
                                It is a long established fact xbliuthat a reader will be distracteda the readable content of a page when looking
                            </p>
                            <a href="#" class="link-btn">Explore More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="items-shape">
                            <img src="{{ asset('front/asset2/img/service/items-shape.png')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card-items" style="position: relative;">
                        <div class="tag-img" style="position: absolute; top: 0px; right: 0px; z-index: 10;">
                            <img src="{{ asset('front/asset2/img/tag.png')}}" alt="img">
                        </div>
                        <div class="bar-shape">
                            <img src="{{ asset('front/asset2/img/service/bar.png')}}" alt="img">
                        </div>
                        <div class="icon">
                            <i class="fa-sharp fa-solid fa-plane-arrival"></i>
                        </div>
                        <div class="content">
                            <h3><a href="#">ocean
                                    Freight</a></h3>
                            <p>
                                It is a long established fact xbliuthat a reader will be distracteda the readable content of a page when looking
                            </p>
                            <a href="#" class="link-btn">Explore More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="items-shape">
                            <img src="{{ asset('front/asset2/img/service/items-shape.png')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card-items" style="position: relative;">
                        <div class="tag-img" style="position: absolute; top: 0px; right: 0px; z-index: 10;">
                            <img src="{{ asset('front/asset2/img/tag.png')}}" alt="img">
                        </div>
                        <div class="bar-shape">
                            <img src="{{ asset('front/asset2/img/service/bar.png')}}" alt="img">
                        </div>
                        <div class="icon">
                            <i class="fa-sharp fa-solid fa-plane-arrival"></i>
                        </div>
                        <div class="content">
                            <h3><a href="#">ocean
                                    Freight</a></h3>
                            <p>
                                It is a long established fact xbliuthat a reader will be distracteda the readable content of a page when looking
                            </p>
                            <a href="#" class="link-btn">Explore More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="items-shape">
                            <img src="{{ asset('front/asset2/img/service/items-shape.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-details-section mb-3">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row g-4">
                <div class="col-12 col-lg-12">
                    <div class="service-details-content">
                        <h2>{{ $detail_data->title ?? '' }}</h2>
                        <p>{!! $detail_data->description !!}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="service-details-section section-padding" style="padding: 40px 0 !important;">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row g-4">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="tel:{{ $detail_data->contact_number ?? '+1 (866) 982-4629' }}" class="theme-btn"
                        style="float:none; display:inline;">{{ $detail_data->contact_number ?? '+1 (866) 982-4629' }}</a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Start Service area -->
<section class="service-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h6 class="wow fadeInUp">
                <i class="fa-regular fa-arrow-left-long"></i>Our Services
                <i class="fa-regular fa-arrow-right-long"></i>
            </h6>
            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                Comprehensive Garage Door Services For Installation, Repair, And Maintenance To<br>
                Ensure Reliable Operation
            </h2>
        </div>
        <!-- Swiper Container -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($services as $key => $item)
                @if ($item->status == 1 && $item->is_active == 1)
                <div class="swiper-slide">
                    <div class="service-box-items items-bg">
                        <div class="service-thumb">
                            <img src="{{ $item->image ?? asset('front/asset2/img/service/01.jpg') }}" alt="img">
                        </div>
                        <div class="service-content">
                            <h2 class="number">{{ $key + 1 }}</h2>
                            <h3>
                                <a href="{{ route('service_detail', $item->slug) }}">{{ $item->title ?? '' }}</a>
                            </h3>
                            <p>{{ $item->excerpt ?? '' }}</p>
                            <a href="{{ route('service_detail', $item->slug) }}" class="link-btn">
                                Explore More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

            <!-- Add Pagination if needed -->
            <div class="swiper-pagination"></div>

            <!-- Add Navigation Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>




<!-- End Service area -->

<section class="service-details-section mb-3">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row g-4">
                <div class="col-12 col-lg-12">
                    <div class="service-details-content">
                        <p>{!! $detail_data->excerpt !!}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section class="contact-section fix section-padding bg-cover"
    style="background-image: url('{{ asset('front/asset2/img/contact-bg.jpg') }}');">
    <div class="contact-image float-bob-x">
        <img src="{{ asset('front/asset2/img/contact-img-shape.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="contact-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="contact-items">
                        <h3 class="wow fadeInUp" data-wow-delay=".2s">Get in touch!</h3>
                        @if (Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }} mb-2">
                            {{ Session::get('message') }}
                        </p>
                        @endif
                        <form action="{{ route('contact.store') }}" method="POST" id="contact-form" class="mt-4 mt-md-0">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="form-clt">
                                        <input type="text" id="name" placeholder="Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="form-clt">
                                        <input type="email" class="email" id="eemail" placeholder="Email"
                                            name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="form-clt">
                                        <input type="text" id="msg_subject" placeholder="Subject" name="subject"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="form-clt">
                                        <textarea id="message" rows="7" placeholder="Massage" required name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".4s">
                                    <button type="submit" class="theme-btn">
                                        Submit <i class="fas fa-long-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title">
                            <h6 class="text-white wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>talk to
                                us<i class="fa-regular fa-arrow-right-long"></i></h6>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">building with passion ensuring
                                satisfactions</h2>
                        </div>
                        <p class="text-white mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            It is a long established fact that a reader will be distracted the readable content of a
                            page when looking at layout the point of using lorem the is Ipsum less normal distribution
                            of letters.
                        </p>
                        <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="content">
                                <span>call us</span>
                                <h4><a
                                        href="tel:{{ $detail_data->contact_number ?? '+1 (866) 982-4629' }}">{{ $detail_data->contact_number ?? '+1 (866) 982-4629' }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start Map -->
<div class="map-area-top p-4">
    <div class="container-full">
        <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Start Map -->
                <div class="map-area">
                    <iframe
                        src="{{ $detail_data->google_map ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.547206339729!2d74.33781015!3d31.509127499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919045d068c3be1%3A0xb5921f5500b949c1!2sBlock%20E2%20Block%20E%202%20Gulberg%20III%2C%20Lahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1724777464483!5m2!1sen!2s' }}"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <!-- End Map -->
            </div>
        </div>
    </div>
</div>
<!-- end map -->


<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1, // Initially show 1 slide on small screens
        spaceBetween: 30, // Space between slides
        autoplay: {
            delay: 3000, // Automatically change slides every 3 seconds
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Enable pagination dots to be clickable
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1, // 1 slide per view on small devices
            },
            768: {
                slidesPerView: 2, // 2 slides per view on tablets
            },
            1024: {
                slidesPerView: 3, // 3 slides per view on larger screens (like your current design)
            },
        }
    });
</script>



@endsection