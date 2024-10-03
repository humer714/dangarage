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
                    <div class="service-card-items"style="position: relative;">
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
                    <a href="tel:{{ $detail_data->contact_number ?? '+1 (866) 499-2110' }}" class="theme-btn"
                        style="float:none; display:inline;">{{ $detail_data->contact_number ?? '+1 (866) 499-2110' }}</a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Start Service area -->
<section class="service-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>Our Services<i
                    class="fa-regular fa-arrow-right-long"></i></h6>
            <h2 class="wow fadeInUp" data-wow-delay=".2s">Comprehensive garage door services for installation, repair,
                and maintenance to<br> ensure reliable operation</h2>
        </div>
        <div class="row">
            @foreach ($services as $key => $item)
            @if ($item->status == 1 && $item->is_active == 1)
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
                                        href="tel:{{ $detail_data->contact_number ?? '+1 (866) 499-2110' }}">{{ $detail_data->contact_number ?? '+1 (866) 499-2110' }}</a>
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
<div class="map-area-top">
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
@endsection