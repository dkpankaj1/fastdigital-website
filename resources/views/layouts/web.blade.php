<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Start Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="NicePe - Your Trusted Partner for Website Development, Hosting Services, and B2B Solutions." />
    <meta name="keywords"
        content="NicePe, web development, hosting, B2B solutions, 24/7 support, digital solutions" />
    <meta name="author" content="Cortex It Solution" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Title of Site -->
    <title>NicePe - Comprehensive Web Solutions for Your Business</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}" />
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/webfonts/flat-icon/flaticon_bantec.css') }}" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/sass/style.css') }}" />
</head>

<body>
    <!-- Preloader Start -->
    <div class="loader">
        <span class="loader-container"></span>
    </div>
    <!-- Preloader End -->

    <!-- Top Bar Start -->
    <div class="top__bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-7">
                    <div class="top__bar-left">
                        <a href="tel:(629)555-0129"><i class="fas fa-phone-alt"></i>+91 8083776655</a>
                        <a href="mailto:support@allnice.in"><i class="fas fa-envelope"></i>support@allnice.in</a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-5">
                    <div class="top__bar-right">
                        <a href="https://maps.app.goo.gl/AfRQLvt6rWZZTcx28" target="_blank"><i
                                class="fas fa-map-marker-alt"></i>Bahabalpur,Paraiya
                            Road,Guraru, Gaya, Bihar,824118</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Header Area Start -->
    <div class="header__area header__sticky four">
        <div class="custom__container">
            <div class="header__area-menubar">
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">
                        <a href="index.html"><img class="dark-n" src="assets/img/logo-dark.png" alt="image" /></a>
                    </div>
                </div>
                <div class="header__area-menubar-center">
                    <div class="header__area-menubar-center-menu menu-responsive">
                        <ul id="mobilemenu">
                            <li class="">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="">
                                <a href="{{ route('about') }}">About Us</a>
                            </li>

                            <li class="">
                                <a href="{{ route('services') }}">Services</a>
                            </li>

                            <li class="">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header__area-menubar-right">
                    <div class="responsive-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area End -->

    {{ $slot }}

    <!-- Footer Two Area Start -->
    <div class="footer__four">
        <div class="container">
            <div class="row gy-4 justify-content-between">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__four-widget">
                        <h4>Quick Link</h4>
                        <div class="footer__four-widget-solution">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__four-widget">
                        <h4>Services</h4>
                        <div class="footer__four-widget-solution">
                            <ul>
                                <li>
                                    <a href="{{ route('services') }}">Hosting Solution</a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}">Website Development</a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}">B2B Web Solution</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__four-widget">
                        <h4>Quick Links</h4>
                        <div class="footer__four-widget-solution">
                            <ul>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('services') }}">Service</a></li>
                                <li><a href="{{ route('contact') }}">Contact US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-7 xl-mb-30">
                    <div class="footer__four-widget">
                        <div class="footer__four-widget-about">
                            <a href="#"><img src="{{ asset('assets/img/logo-light.png') }}" alt="image" /></a>
                            <p>
                                Create stunning websites, offer reliable hosting, and deliver
                                B2B solutions
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__one">
            <div class="container">
                <div class="row justify-content-between copyright__one-container-area">
                    <div class="col-xl-5 col-lg-6">
                        <div class="copyright__one-left">
                            <p>© 2024 RAHUL ENTERPRISES - All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="copyright__one-right">
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Two Area End -->

    <!-- Scroll Btn Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Scroll Btn End -->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Progressbar JS -->
    <script src="{{ asset('assets/js/progressbar.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Swiper Bundle JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Mean Menu JS -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
