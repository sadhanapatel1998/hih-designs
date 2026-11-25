<?php include('includes/data.php'); ?>

<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HIH Designs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="fd-home-3">
    <!-- preloader-start -->
    <!-- <div id="preloader">
        <div class="preloader-wrap">
            <div class="loading">
                <div class="icon-ani">
                    <img src="assets/img/preloader.gif" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- preloader-end -->

    <!-- <div class="fx-gap-16"></div> -->
    <?php require_once("includes/header.php") ?>
    <?= $content ?? ''; ?>
    <?php require_once('includes/footer.php') ?>
    <div class="fx-gap-12"></div>

    <!-- offcanvas-start -->
    <div class="txa-offcanvas-box  offcanvas_box_active">
        <button class="txa-offcanvas-box-close offcanvas_box_close" aria-label="name">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="txa-offcanvas-box-container lenis lenis-smooth">

            <!-- services -->
            <div class="txa-offcanvas-services-wrap d-lg-block d-none">
                <h5 class="txa-offcanvas-services-title fx-heading-1 fx-font-400">our services:</h5>

                <ul class="txa-offcanvas-services">
                    <li>
                        <span class="offcanvas-slideup">
                            <a class="txa-offcanvas-services-item fx-heading-1 fx-font-400 " href="#" aria-label="name">
                                <i class="fa-solid fa-arrow-right"></i>
                                Industrial Manufacturing
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="offcanvas-slideup">
                            <a class="txa-offcanvas-services-item fx-heading-1 fx-font-400 " href="#" aria-label="name">
                                <i class="fa-solid fa-arrow-right"></i>
                                Building maintenance
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="offcanvas-slideup">
                            <a class="txa-offcanvas-services-item fx-heading-1 fx-font-400 " href="#" aria-label="name">
                                <i class="fa-solid fa-arrow-right"></i>
                                Engineering
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="offcanvas-slideup">
                            <a class="txa-offcanvas-services-item fx-heading-1 fx-font-400 " href="#" aria-label="name">
                                <i class="fa-solid fa-arrow-right"></i>
                                Construction
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="offcanvas-slideup">
                            <a class="txa-offcanvas-services-item fx-heading-1 fx-font-400 " href="#" aria-label="name">
                                <i class="fa-solid fa-arrow-right"></i>
                                Shipping
                            </a>
                        </span>
                    </li>

                </ul>
            </div>

            <div class="txa-offcanvas-search d-lg-none d-block">
                <form action="#" class="txa-offcanvas-search-form">
                    <input class="txa-offcanvas-search-form-input" type="text" aria-label="name" placeholder="Search">
                    <button class="txa-offcanvas-search-form-btn" type="button" aria-label="name">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>

            <!-- mobile-menu-list -->
            <div class="mobile-menu-navigation d-lg-none d-block">
                <nav class="mobile-main-navigation  clearfix ul-li">
                    <ul id="main-nav2" class="nav navbar-nav clearfix">

                        <li class="dropdown">
                            <a class="is-active" href="!#">home</a>
                            <ul class="dropdown-menu clearfix">
                                <li>
                                    <a class="is-active" href="index.php">Industrial</a>
                                </li>
                                <li>
                                    <a href="index-2.html">Construction</a>
                                </li>
                                <li>
                                    <a href="index-3.html">Building</a>
                                </li>
                                <li>
                                    <a href="index-4.html">Shipping</a>
                                </li>
                                <li>
                                    <a href="index-5.html">manufacturing</a>
                                </li>
                                <li>
                                    <a href="index-6.html">Engineering</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="about.html">about</a>
                        </li>

                        <li class="dropdown">
                            <a href="!#">pages</a>
                            <ul class="dropdown-menu clearfix">


                                <li class="dropdown">
                                    <a href="!#">services</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li>
                                            <a href="services.html">services</a>
                                        </li>
                                        <li>
                                            <a href="services-details.html">services details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="!#">teams</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li>
                                            <a href="team.html">teams</a>
                                        </li>
                                        <li>
                                            <a href="team-details.html">teams details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="!#">career</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li>
                                            <a href="career.html">career</a>
                                        </li>
                                        <li>
                                            <a href="career-single.html">career single</a>
                                        </li>
                                        <li>
                                            <a href="job-apply.html">job apply</a>
                                        </li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="clients.html">clients</a>
                                </li>

                                <li>
                                    <a href="faqs.html">faqs</a>
                                </li>

                                <li>
                                    <a href="pricing.html">pricing</a>
                                </li>
                                <li>
                                    <a href="process.html">process</a>
                                </li>

                                <li>
                                    <a href="testimonial.html">testimonial</a>
                                </li>
                                <li>
                                    <a href="error.html">404</a>
                                </li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="!#">projects</a>

                            <ul class="dropdown-menu clearfix">
                                <li>
                                    <a href="projects-1.html">projects one</a>
                                </li>
                                <li>
                                    <a href="projects-2.html">projects two</a>
                                </li>
                                <li>
                                    <a href="projects-3.html">projects three</a>
                                </li>
                                <li>
                                    <a href="projects-4.html">projects four</a>
                                </li>
                                <li>
                                    <a href="projects-details.html">projects details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="!#">news</a>

                            <ul class="dropdown-menu clearfix">
                                <li>
                                    <a href="blog.html">Blog one</a>
                                </li>
                                <li>
                                    <a href="blog-2.html">Blog two</a>
                                </li>
                                <li>
                                    <a href="blog-3.html">Blog three</a>
                                </li>
                                <li>
                                    <a href="blog-4.html">Blog four</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Blog details</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="contact.html">contact</a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="txa-offcanvas-content">

                <!-- contact -->
                <div class="txa-offcanvas-content-box">
                    <h6 class="txa-offcanvas-content-box-title fx-heading-1 fx-font-400">quick contact:</h6>

                    <ul class="txa-offcanvas-contact">
                        <li class="fx-heading-1 fix">
                            <span class="offcanvas-slideup">
                                <i class="fa-solid fa-location-dot"></i>
                                the londoner <br> 83 the strand, sliema, malta.
                            </span>
                        </li>
                        <li class="fx-heading-1 fix">
                            <span class="offcanvas-slideup">
                                <a href="#" aria-label="name">
                                    <i class="fa-solid fa-phone"></i>
                                    +1 917 265 8444
                                </a>
                            </span>

                        </li>
                        <li class="fx-heading-1 fix">
                            <span class="offcanvas-slideup">
                                <a href="#" aria-label="name">
                                    <i class="fa-solid fa-envelope-open-text"></i>
                                    <span class="__cf_email__"
                                        data-cfemail="27425f464a574b4267424a464e4b0944484a">[email&#160;protected]</span>
                                </a>
                            </span>

                        </li>
                    </ul>
                </div>

                <!-- socail -->
                <div class="txa-offcanvas-content-box">
                    <h6 class="txa-offcanvas-content-box-title fx-heading-1 fx-font-400">we're on social media:</h6>

                    <ul class="txa-offcanvas-social">
                        <li>
                            <span class="offcanvas-slideup">
                                <a href="#" class="txa-offcanvas-social-item fx-heading-1 fx-font-500 "
                                    aria-label="name">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    linkedin
                                </a>
                            </span>

                        </li>
                        <li>
                            <span class="offcanvas-slideup">
                                <a href="#" class="txa-offcanvas-social-item fx-heading-1 fx-font-500 "
                                    aria-label="name">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    facebook
                                </a>
                            </span>

                        </li>
                        <li>
                            <span class="offcanvas-slideup">
                                <a href="#" class="txa-offcanvas-social-item fx-heading-1 fx-font-500 "
                                    aria-label="name">
                                    <i class="fa-brands fa-x-twitter"></i>
                                    twitter
                                </a>
                            </span>

                        </li>
                        <li>
                            <span class="offcanvas-slideup">
                                <a href="#" class="txa-offcanvas-social-item fx-heading-1 fx-font-500"
                                    aria-label="name">
                                    <i class="fa-brands fa-instagram"></i>
                                    instagram
                                </a>
                            </span>

                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- offcanvas-end -->

    <!-- search-popup -->
    <div class="txa-search-box search_box_active ">

        <div class="txa-search-container">
            <div class="txa-search-wrap text-center mb-55">
                <h5 class="txa-search-title fx-heading-1 fx-font-500">Search</h5>
                <form action="#" class="txa-search-form">
                    <input class="txa-search-form-input" type="text" placeholder="What are you looking for?...">
                </form>
            </div>

            <div class="txa-search-tag-wrap text-center">
                <h6 class="txa-search-tag-title fx-font-400 fx-heading-1">People also search for:</h6>
                <div class="txa-search-tag d-inline-flex flex-wrap  ">
                    <a href="#" aria-label="name" class="txa-search-tag-item fx-heading-1 fx-font-500">Corporate</a>
                    <a href="#" aria-label="name" class="txa-search-tag-item fx-heading-1 fx-font-500">Business</a>
                    <a href="#" aria-label="name" class="txa-search-tag-item fx-heading-1 fx-font-500">Consulting</a>
                    <a href="#" aria-label="name" class="txa-search-tag-item fx-heading-1 fx-font-500">Finance</a>
                    <a href="#" aria-label="name" class="txa-search-tag-item fx-heading-1 fx-font-500">Reports</a>
                </div>
            </div>
        </div>

        <button aria-label="search-close" type="button" class="txa-search-box-close search_box_close">
            <i class="fa-solid fa-xmark"></i>
        </button>

    </div>
    <!-- search-popup -->

    <div class="overlay"></div>
    <!-- JS here -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/marquee.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/CustomEase.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/lenis.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="module" src="../beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"
        integrity="sha512-UKNk8GbxkABxKcXYuLkO16EleLGUkcvJWtpSNmExE0Too3ZaFAxTscNWEc1OdAv5/BikHawapSCaiD2XCmp+Bw=="
        data-cf-beacon='{"version":"2024.11.0","token":"daf30b97c9e94fec9725b4f69e8dd5ef","r":1,"spa":2}'
        crossorigin="anonymous"></script>

    <script>
        function initFxServices3Slider() {
            var sliderEl = document.querySelector('.fx-s3-active');
            if (sliderEl && typeof Swiper !== 'undefined') {
                if (sliderEl.swiper) {
                    sliderEl.swiper.destroy(true, true);
                }
                new Swiper(sliderEl, {
                    loop: true,
                    spaceBetween: 24,
                    speed: 500,
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false
                    },
                    slidesPerView: 5,
                    breakpoints: {
                        0: {
                            slidesPerView: 1
                        },
                        576: {
                            slidesPerView: 2
                        },
                        768: {
                            slidesPerView: 3
                        },
                        992: {
                            slidesPerView: 5
                        },
                        1200: {
                            slidesPerView: 5
                        },
                        1400: {
                            slidesPerView: 5
                        },
                        1600: {
                            slidesPerView: 5
                        }
                    }
                });
            }
        }
        window.addEventListener('load', initFxServices3Slider);
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(initFxServices3Slider, 100);
            setTimeout(initFxServices3Slider, 500);
        });
    </script>
</body>

</html>