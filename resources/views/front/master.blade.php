<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:06:20 GMT -->
<head>
    <meta charset="utf-8">
    <title>Biztrox Front | @yield('title')</title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}front-assets/plugins/bootstrap/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('/')}}front-assets/plugins/magnific-popup/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('/')}}front-assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}front-assets/plugins/slick/slick-theme.css">
    <!-- themify icon -->
    <link rel="stylesheet" href="{{asset('/')}}front-assets/plugins/themify-icons/themify-icons.css">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('/')}}front-assets/plugins/animate/animate.css">
    <!-- Aos -->
    <link rel="stylesheet" href="{{asset('/')}}front-assets/plugins/aos/aos.css">
    <!-- swiper -->
    <link rel="stylesheet" href="{{asset('/')}}front-assets/plugins/swiper/swiper.min.css">
    <!-- Stylesheets -->
    <link href="{{asset('/')}}front-assets/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('/')}}front-assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{asset('/')}}front-assets/images/favicon.png" type="image/x-icon">

</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('/')}}front-assets/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="{{asset('/')}}front-assets/mailto:info@companyname.com">info@companyname.com</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{asset('/')}}front-assets/callto:1234565523">Call Us Now:
                                <span class="ml-2"> 123 456 5523</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{asset('/')}}front-assets/#" id="searchOpen">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{asset('/')}}front-assets/index.html">
                    <img src="{{asset('/')}}front-assets/images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="{{route('/')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('show.service')}}" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{asset('/')}}front-assets/#" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="{{route('show.team')}}">Team Page</a>
                                <a class="dropdown-item" href="{{route('show.project')}}">project Page</a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('show.blog')}}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Search Form -->
<div class="search-form">
    <a href="{{asset('/')}}front-assets/#" class="close" id="searchClose">
        <i class="ti-close"></i>
    </a>
    <div class="container">
        <form action="#" class="row">
            <div class="col-lg-10 mx-auto">
                <h3>Search Here</h3>
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required>
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /navigation -->

@yield('body')

<!-- footer -->
<footer class="bg-secondary">
    <div class="py-100 border-bottom" style="border-color: #454547 !important">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-5 mb-md-0 text-center text-md-left">
                        <!-- logo -->
                        <img class="mb-30" src="{{asset('/')}}front-assets/images/logo-footer.png" alt="logo">
                        <p class="text-white mb-30">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt
                            labore dolore magna aliqua enim.</p>
                        <!-- social icon -->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="{{asset('/')}}front-assets/#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="{{asset('/')}}front-assets/#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="{{asset('/')}}front-assets/#">
                                    <i class="ti-vimeo-alt"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="{{asset('/')}}front-assets/#">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="{{asset('/')}}front-assets/#">Company History</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}front-assets/about.html">About Us</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}front-assets/contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}front-assets/service.html">Service</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}front-assets/#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6">
                    <h4 class="text-white mb-4">Quick Link</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="{{asset('/')}}front-assets/#">Company History</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}front-assets/about-2.html">About Us</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}front-assets/contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}front-assets/service-2.html">Service</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}front-assets/#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <!-- subscribe form -->
                <div class="col-lg-3 offset-lg-1">
                    <div class="mt-5 mt-lg-0 text-center text-md-left">
                        <h4 class="mb-4 text-white">Subscribe Us</h4>
                        <p class="text-white mb-4">Lorem ipsum dolor sit amet, consect etur adipisicing. elit sed do
                            eiusmod. </p>
                        <form action="#" class="position-relative">
                            <input type="text" class="form-control subscribe" name="subscribe" id="Subscribe"
                                   placeholder="Enter Your Email">
                            <button class="btn-subscribe" type="submit" value="send">
                                <i class="ti-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="pt-4 pb-3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <p class="text-white text-center text-md-left">
                        <span class="text-primary">Bizpro</span> &copy; 2017 All Right Reserved</p>
                </div>
                <div class="col-lg-6 col-md-7">
                    <ul class="list-inline text-center text-md-right">
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="{{asset('/')}}front-assets/#">Legal</a>
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="{{asset('/')}}front-assets/#">Sitemap</a>
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="{{asset('/')}}front-assets/#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item ml-lg-3 my-lg-0 ml-2 my-2 ml-0">
                            <a class="font-secondary text-white" href="{{asset('/')}}front-assets/#">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- back to top -->
        <button class="back-to-top">
            <i class="ti-angle-up"></i>
        </button>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('/')}}front-assets/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('/')}}front-assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="{{asset('/')}}front-assets/plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
<!-- slick slider -->
<script src="{{asset('/')}}front-assets/plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="{{asset('/')}}front-assets/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Google Map -->
<script src="{{asset('/')}}front-assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script  src="{{asset('/')}}front-assets/plugins/google-map/gmap.js"></script>
<!-- Syo Timer -->
<script src="{{asset('/')}}front-assets/plugins/syotimer/jquery.syotimer.js"></script>
<!-- aos -->
<script src="{{asset('/')}}front-assets/plugins/aos/aos.js"></script>
<!-- swiper -->
<script src="{{asset('/')}}front-assets/plugins/swiper/swiper.min.js"></script>
<!-- Main Script -->
<script src="{{asset('/')}}front-assets/js/script.js"></script>

</body>

<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:06:55 GMT -->
</html>
