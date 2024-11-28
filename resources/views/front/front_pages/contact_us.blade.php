@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('contact Us') }}
@endsection
@section('meta_tags')
    {{ __('contact Us, proschimneyclening') }}
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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact us</h1>
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
                            Contact
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- END Header -->
    <!-- Contact Info Section Start -->
    <section class="contact-info-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp"><i class="fa-regular fa-arrow-left-long"></i>CONTACT US<i
                        class="fa-regular fa-arrow-right-long"></i></h6>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Contact Information</h2>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="contact-box-items">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/img/icon/18.svg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Our Address</h3>
                            <p>
                                United States
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="contact-box-items">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/img/icon/19.svg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Email Address</h3>
                            <p>
                                Mobile:<a href="tel:984756123695">+1 (866) 982-4629</a> <br>
                                Email:<a href="mailto:Support@customerdeskhelp.com">Support@customerdeskhelp.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="contact-box-items">
                        <div class="icon">
                            <img src="{{ asset('front/asset2/img/icon/20.svg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Hours of Operation</h3>
                            <p>
                                Monday-Saturday : 8:00 - <br> 9:00 Sunday : Closed
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section Start -->
    <section class="contact-section-22">
        <div class="container">
            <div class="contact-form-items">
                <div class="title text-center">
                    <h2 class="wow fadeInUp">Get In Touch</h2>
                </div>
                @if (Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }} mb-2">
                        {{ Session::get('message') }}
                    </p>
                @endif
                <form action="{{ route('contact.store') }}" method="POST" id="contact-form">
                    @csrf
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="form-clt">
                                <input type="text" id="name" placeholder="Name" name="name" required>
                                <div class="icon">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="form-clt">
                                <input type="email" class="email" id="eemail" placeholder="Email" name="email"
                                    required>
                                <div class="icon">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="form-clt">
                                <input type="text" id="msg_postal_code" placeholder="Postal code" name="postal_code" required>
                                <div class="icon">
                                    <i class="fa-sharp fa-light fa-pencil"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="form-clt">
                                <input type="text" id="msg_phone_no" placeholder="Phone No" name="phone_number" required>
                                <div class="icon">
                                    <i class="fa-sharp fa-light fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                            <div class="form-clt">
                                <input type="text" id="msg_subject" placeholder="Subject" name="subject" required>
                                <div class="icon">
                                    <i class="fa-sharp fa-light fa-pencil"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Checkboxes -->
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                            <label for="services" class="form-label"><h5>type of service do you need?</h5></label>
                            <div class="form-check" style="background-color: #F2F5FA;">
                                <input class="form-check-input" type="checkbox" id="garage_door_repair" name="garage_door_repair" value="Garage Door Repair">
                                <label class="form-check-label" for="garage_door_repair">Garage Door Repair</label>
                            </div>
                            <div class="form-check" style="background-color: #F2F5FA;">
                                <input class="form-check-input" type="checkbox" id="garage_opener_installation" name="garage_opener_installation" value="Garage Opener Installation">
                                <label class="form-check-label" for="garage_opener_installation">Garage Opener Installation</label>
                            </div>
                            <div class="form-check" style="background-color: #F2F5FA;">
                                <input class="form-check-input" type="checkbox" id="door_out_of_tracks" name="door_out_of_tracks" value="Door Out of Tracks">
                                <label class="form-check-label" for="door_out_of_tracks">Door Out of Tracks</label>
                            </div>
                            <div class="form-check" style="background-color: #F2F5FA;">
                                <input class="form-check-input" type="checkbox" id="garage_door_installation" name="garage_door_installation" value="Garage Door Installation">
                                <label class="form-check-label" for="garage_door_installation">Garage Door Installation</label>
                            </div>
                            <div class="form-check" style="background-color: #F2F5FA;">
                                <input class="form-check-input" type="checkbox" id="other" name="other" value="Other">
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                        </div>

                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                            <div class="form-clt">
                                <textarea id="message" rows="7" placeholder="Massage" required name="message"></textarea>
                                <div class="icon">
                                    <i class="fa-sharp fa-light fa-pencil"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".4s">
                            <button type="submit" class="theme-btn w-100">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <!-- Contact Info Section Start -->
    <div class="office-google-map-wrapper">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd"
            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- End Contact Area -->
@endsection
