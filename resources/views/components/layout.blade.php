<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? 'Tasmem Studio | E-commerce Store Development' }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nouislider.css">
    <link rel="stylesheet" href="assets/css/backtotop.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/elegant-icon.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <!-- loading content here -->
                <div class="preloader__content text-center">
                    <div class="preloader__logo">
                        <img src="assets/img/logo/logo-preloader.svg" alt="">
                    </div>
                    <div id="tp-loading-bar" class="preloader__bar">
                        <div id="tp-loading-line" class="preloader__bar-inner"></div>
                    </div>
                    <h3 class="preloader__title">Tasmem</h3>
                    <div class="preloader__with-text ">
                        <div class="preloader__with-text-wrapper">
                            <span data-text-preloader="h" class="preloader__title-2">h</span>
                            <span data-text-preloader="a" class="preloader__title-2">a</span>
                            <span data-text-preloader="r" class="preloader__title-2">r</span>
                            <span data-text-preloader="r" class="preloader__title-2">r</span>
                            <span data-text-preloader="y" class="preloader__title-2">y</span>
                        </div>
                    </div>
                    <p class="preloader__loading">Loading</p>
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <x-header />
    <!-- header area end -->

    <main>
        {{ $slot }}
    </main>

    <!-- footer area start -->
    <x-footer />
    <!-- footer area end -->


    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/nouislider.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/easing.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>