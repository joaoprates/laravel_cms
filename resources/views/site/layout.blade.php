<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <img src="{{asset('assets/img/laravel-logo.png')}}" width="250px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    @foreach($front_menu as $menuslug => $menutitle)
                                    <li>
                                        <a href="{{$menuslug}}">{{$menutitle}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">

                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->

@yield('content')

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="/">
                                <img src="{{asset('assets/img/laravel-logo.png')}}" width="150px" alt="">
                            </a>
                        </div>
<!--                        <p>
                            {{$front_config['subtitle']}}
                        </p>-->
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                                Menu
                        </h3>
                        <ul>
                            @foreach($front_menu as $menuslug => $menutitle)
                            <li>
                                <a href="{{$menuslug}}">{{$menutitle}}</a>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                                Downloads
                        </h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Download from Apple Store
                                </a>
                            </li>
                            <li><a href="#">
                                    Download from Play Store
                                </a>
                            </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserve <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="/" target="_blank">Joao Prates</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

<!-- JS here -->
<script src="{{asset('/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/ajax-form.js')}}"></script>
<script src="{{asset('/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/scrollIt.js')}}"></script>
<script src="{{asset('/assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('/assets/js/wow.min.js')}}"></script>
<script src="{{asset('/assets/js/nice-select.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<script src="{{asset('/assets/js/gijgo.min.js')}}"></script>

<!--contact js-->
<script src="{{asset('/assets/js/contact.js')}}"></script>
<script src="{{asset('/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('/assets/js/mail-script.js')}}"></script>

<script src="{{asset('/assets/js/main.js')}}"></script>



</body>
</html>
