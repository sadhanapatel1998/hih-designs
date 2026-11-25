<?php
ob_start();
?>

<div class="breadcrumb-area bg-default " data-background="assets/img/bg/breadcrumb-bg.jpg"
    style="background-image: url(&quot;assets/img/breadcrumb/b1-bg-1.png&quot;);">
    <div class="container fx-container-1">
        <div class="breadcrumb-wrap">
            <!-- left-content -->
            <div class="breadcrumb-content">
                <div class="breadcrumb-list ">
                    <a href="index.php">Home</a>
                    <span>About us</span>
                </div>
                <h1 class="breadcrumb-title fx-heading-1 text-uppercase ">
                    About Us
                </h1>
            </div>
        </div>
    </div>
</div>

<div id="has-jump"></div>

<!-- blog-start -->
<div class="fx-blog-2-area pb-90 pt-90 p-relative fix bg-default">
    <div class="container fx-container-1">

        <!-- section-title -->
        <div class="fx-blog-2-scn-title mb-50">
            <h6 class="fx-subtitle-1 has-mb-28">
                <span>06</span>
                <span class="txaa-split-text-2 txaa-split-text-2-ani">Latest News & Blogs</span>
            </h6>
            <h2 class="fx-scn-title-2 txaa-split-text-3 txaa-split-text-3-ani ">Breaking News in the Construction
                Service Industry</h2>
        </div>

        <div class="fx-blog-2-slider p-relative">
            <div class="swiper-container fix fx-b2-active">
                <div class="swiper-wrapper">

                    <!-- single-blog -->
                    <div class="swiper-slide">
                        <div class="fx-blog-1-item-single has-blog-2 img-cover fix">
                            <img src="assets/img/blog/img-1.jpg" alt="Modern Porta Cabin Construction">

                            <h6 class="item-date fx-heading-1 has-clr-white fx-font-600 text-uppercase">
                                <span>12</span><span>nov</span>
                            </h6>

                            <div class="content-wrap">
                                <h6 class="item-subtitle fx-heading-1 fx-font-500">Porta Cabins</h6>
                                <h4 class="item-title fx-heading-1 fx-font-500">
                                    <a href="javascript:void(0)" aria-label="Porta Cabin Solutions">
                                        Modern Porta Cabins: Smart, Durable & Flexible Space Solutions
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- single-blog -->
                    <div class="swiper-slide">
                        <div class="fx-blog-1-item-single has-blog-2 img-cover fix">
                            <img src="assets/img/blog/img-2.jpg" alt="Metal Roofing and Structural Work">

                            <h6 class="item-date fx-heading-1 has-clr-white fx-font-600 text-uppercase">
                                <span>15</span><span>nov</span>
                            </h6>

                            <div class="content-wrap">
                                <h6 class="item-subtitle fx-heading-1 fx-font-500">Metal Structures</h6>
                                <h4 class="item-title fx-heading-1 fx-font-500">
                                    <a href="javascript:void(0)" aria-label="Metal Structure Solutions">
                                        Metal Structures: Strength, Durability & Modern Construction
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- single-blog -->
                    <div class="swiper-slide">
                        <div class="fx-blog-1-item-single has-blog-2 img-cover fix">
                            <img src="assets/img/blog/img-3.jpg" alt="Industrial Shed Construction">

                            <h6 class="item-date fx-heading-1 has-clr-white fx-font-600 text-uppercase">
                                <span>18</span><span>nov</span>
                            </h6>

                            <div class="content-wrap">
                                <h6 class="item-subtitle fx-heading-1 fx-font-500">Industrial Sheds</h6>
                                <h4 class="item-title fx-heading-1 fx-font-500">
                                    <a href="javascript:void(0)" aria-label="Industrial Shed Construction">
                                        Industrial Sheds Designed for Efficiency, Safety & Performance
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- blog-end -->






<?php
$content = ob_get_clean();
require 'layout.php';
?>