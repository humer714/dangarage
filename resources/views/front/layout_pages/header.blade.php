<style>
    .header-1 {
        /* apply sticky */
        position: fixed;
    }
</style>

<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ route('home') }}" class="header-logo">
                            <img src="{{ asset('front/asset2/img/logo/black-logo.png') }}" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix mb-3"></div>

            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>


<!--<< Mouse Cursor Start >>-->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<header class="header-section-22">
    <div id="header-sticky" class="header-1 sticky">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="logo d-none">
                        <a href="{{ route('home') }}" class="header-logo">
                            <img src="{{ asset('front/asset2/img/logo/black-logo.png') }}" alt="logo-img">
                        </a>
                    </div>
                    <div class="header-left">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about_us') }}">About</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('projects') }}">Projects</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('locations') }}">Locations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('blogs') }}">Blogs</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    {{-- show only sm and md screens --}}
                    <div class="header__hamburger  d-block d-lg-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Back To Top Start -->
<button id="back-top" class="back-to-top">
    <i class="fa-regular fa-arrow-up"></i>
</button>
