<!-- Footer Section Start -->
<footer class="footer-section bg-cover bg-cover" style="background-image: url('assets/img/footer/bg.jpg');">
    <div class="container">
        <div class="contact-info-area">
            <a href="{{ route('home') }}" class="logo-img wow fadeInUp" data-wow-delay=".2s">
                <img src="{{ asset('front/asset2/img/logo/black-logo.png') }}" alt="img">
            </a>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                </div>
                <div class="content">
                    <p>Office location</p>
                    <h3>
                        4648 Rocky, New York
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="content">
                    <p>send email</p>
                    <h3>
                        <a href="mailto:Support@customerdeskhelp.com">Support@customerdeskhelp.com</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="content">
                    <p>call emergency</p>
                    <h3>
                        <a href="tel:+88012365499">+1 (866) 982-4629</a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>About Company</h5>
                        </div>
                        <div class="footer-content">
                            <p>
                                Dan Garage Door Broken Spring Repair offers expert, <br> reliable garage door spring repairs <br> with over 40 years' experience.
                            </p>
                            <div class="social-icon d-flex align-items-center">

                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-yelp"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-yahoo"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Quick Link</h5>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Home
                                </a>
                            </li>
                            <li><a href="{{ route('about_us') }}"> <i class="fa-solid fa-chevrons-right"></i>About us</a></li>
                            <li><a href="{{ route('services') }}"> <i class="fa-solid fa-chevrons-right"></i>Services</a></li>
                            <li><a href="{{ route('projects') }}"> <i class="fa-solid fa-chevrons-right"></i>Projects</a></li>
                            <li><a href="{{ route('contact')}}"> <i class="fa-solid fa-chevrons-right"></i>Contact Us</a></li>
                            <li><a href="{{ route('locations')}}"> <i class="fa-solid fa-chevrons-right"></i>Locations</a></li>
                            <li><a href="{{ route('blogs')}}"> <i class="fa-solid fa-chevrons-right"></i>Blogs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Our Services</h5>
                        </div>
                        <ul class="list-area">
                            @php
                                $services = App\Models\Service::where('is_active', 1)->get();
                            @endphp
                             @foreach ($services as $item)
                            <li>
                                <a href="{{ route('service_detail', $item->slug) }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    {{ $item->title ?? '' }}
                                </a>
                            </li>
                            @endforeach
            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 David garage door spring repair. All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- Footer Bottom Area -->
