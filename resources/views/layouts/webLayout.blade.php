<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نقطة انطلاق</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/media/logos/logo1.png') }}">
    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
</head>

<body>
<header class="site-header site-header__header-one ">
        <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
            <div class="container clearfix">
                <div class="logo-box clearfix">
                    <a class="navbar-brand" href="/website/home">
                        <h3>نقطة إنطلاق</h3>
                    </a>
                    <button class="menu-toggler" data-target=".main-navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                </div>
                <div class=" main-navigation">
                    <ul class=" one-page-scroll-menu navigation-box">
                        <li class="current">
                            <a href="/website/home">الرئيسية</a>
                        </li>
                        <li>
                            <a href="/website/trainingopts">فرص التدريب</a>
                        </li>
                        <li>
                            <a href="/website/about">من نحن</a>
                        </li>
                        <li>
                            <a href="#pricing">المدونة</a>
                        </li>
                        <li class="scrollToLink">
                            <a href="/website/contact">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <div class="right-side-box">
                    <a class="thm-btn header__cta-btn" href="/website/login">تسجيل الدخول</a>
                </div>
            </div>
        </nav>
    </header>
<div class="page-wrapper">
    @yield('content')

    <footer class="site-footer">
        <div class="site-footer__bubble-1"></div>
        <div class="site-footer__line"></div>
        <div class="site-footer__bubble-2"></div>
        <div class="site-footer__upper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widget footer-widget__about">
                            <img src="{{ asset('assets/images/logoe.png')}}" width="88" alt=""
                                class="footer-widget__logo">
                            <p class="footer-widget__contact">طريقك الأمثل للوصول لأماكن التدريب</p>
                            <p class="footer-widget__contact">وبدء حياتك العملية والمهنية
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-between footer-widget__links-wrap">
                        <div class="footer-widget">
                            <ul class="footer-widget__links list-unstyled">
                                <li><a href="#">الرئيسية</a></li>
                                <li><a href="#">فرص التدريب</a></li>
                                <li><a href="#">من نحن</a></li>
                                <li><a href="#">المدونة</a></li>
                                <li><a href="#">تواصل معنا</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-widget footer-widget__mailchimp">
                            <h3 class="footer-widget__title">اشترك في النشرة البريدية</h3>
                            <form action="#" class="footer-widget__mc-form mc-form"
                                data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e">
                                <input type="email" id="mc-email" class="formInput" placeholder="Email address">
                                <button type="submit"><i class="fa fa-location-arrow"></i></button>
                            </form>
                            <div class="mc-form__response"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="inner-container">
                    <p class="site-footer__copy"> &copy; جميع الحقوق محفوظة 2021  فريق نقطة انطلاق </p>
                    <div class="site-footer__social">
                        <a href="#" class="fa fa-facebook-square"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-pinterest-p"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->

    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js')}}"></script>

    <!-- template scripts -->
    <script src="{{ asset('assets/js/theme.js')}}"></script>
</body>

</html>
