<!DOCTYPE html>
<html lang="ru">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Abstract</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">


    <!-- script
    ================================================== -->
    <script src="{{asset('assets/js/modernizr.js')}}"></script>
    <script src="{{asset('assets/js/pace.min.js')}}"></script>

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

</head>

<body id="top">

<header class="short-header">

    <div class="gradient-block"></div>

    <div class="row header-content">

        <div class="logo">
            <a href="index.blade.php">Author</a>
        </div>

        <nav id="main-nav-wrap">
            <ul class="main-navigation sf-menu">
                <li class="current"><a href="index.blade.php" title="">Home</a></li>
                <li class="has-children">
                    <a href="category.html" title="">Categories</a>
                    <ul class="sub-menu">
                        <li><a href="category.html">Wordpress</a></li>
                        <li><a href="category.html">HTML</a></li>
                        <li><a href="category.html">Photography</a></li>
                        <li><a href="category.html">UI</a></li>
                        <li><a href="category.html">Mockups</a></li>
                        <li><a href="category.html">Branding</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="single-standard.html" title="">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="single-video.html">Video Post</a></li>
                        <li><a href="single-audio.html">Audio Post</a></li>
                        <li><a href="single-gallery.html">Gallery Post</a></li>
                        <li><a href="single-standard.html">Standard Post</a></li>
                    </ul>
                </li>
                <li><a href="style-guide.html" title="">Styles</a></li>
                <li><a href="about.html" title="">About</a></li>
                <li><a href="contact.html" title="">Contact</a></li>
            </ul>
        </nav> <!-- end main-nav-wrap -->

        <div class="search-wrap">

            <form role="search" method="get" class="search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#" id="close-search" class="close-btn">Close</a>

        </div> <!-- end search wrap -->

        <div class="triggers">
            <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
            <a class="menu-toggle" href="#"><span>Menu</span></a>
        </div> <!-- end triggers -->

    </div>

</header> <!-- end header -->


@yield('content')

<footer>

    <div class="footer-main">

        <div class="row">

            <div class="col-four tab-full mob-full footer-info">

                <h4>About Our Site</h4>

                <p>
                    Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
                </p>

            </div> <!-- end footer-info -->

            <div class="col-two tab-1-3 mob-1-2 site-links">

                <h4>Site Links</h4>

                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>

            </div> <!-- end site-links -->

            <div class="col-two tab-1-3 mob-1-2 social-links">

                <h4>Social</h4>

                <ul>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Dribbble</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>

            </div> <!-- end social links -->

            <div class="col-four tab-1-3 mob-full footer-subscribe">

                <h4>Subscribe</h4>

                <p>Keep yourself updated. Subscribe to our newsletter.</p>

                <div class="subscribe-form">

                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required="">

                        <input type="submit" name="subscribe" >

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>

                </div>

            </div> <!-- end subscribe -->

        </div> <!-- end row -->

    </div> <!-- end footer-main -->

    <div class="footer-bottom">
        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Abstract 2016</span>
                    <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
                </div>

                <div id="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
                </div>
            </div>

        </div>
    </div> <!-- end footer-bottom -->

</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
