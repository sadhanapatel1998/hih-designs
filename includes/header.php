
<?php
include('includes/data.php');
?>
<!-- header-start -->
<div class="fx-header-3-area txa_sticky_header ">
    <div class="fx-header-3-container">
        <!-- header-main -->
        <div class="fx-header-3-main">

            <!-- logo -->
            <a href="index.php" aria-label="name" class="fx-header-3-main-logo">
                <img src="assets/img/logo/logo.png" alt="HIH Logo">
            </a>

            <div class="fx-header-3-phone">
                <h6 class="title fx-heading-1 has-clr-white">Need Help? Talk To An Expert</h6>
                <a href="tel:<?= $site['phone_raw']; ?>" aria-label="Call HIH Designs"
                    class="phone-number fx-heading-1 has-clr-white">
                    <?= $site['phone']; ?>
                </a>
            </div>

            <!-- menu -->
            <nav class="main-navigation has-header-3 fx-ml-auto d-none d-lg-block">
                <ul id="main-nav" class="nav navbar-nav clearfix">
                    <li>
                        <a class="is-active" href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="!#">Services</a>
                        <ul class="dropdown-menu clearfix">
                            <li>
                                <a href="services.php">All Services</a>
                            </li>
                            <li>
                                <a href="porta-cabins.php">Porta Cabins</a>
                            </li>
                            <li>
                                <a href="pergolas.php">Pergolas</a>
                            </li>
                            <li>
                                <a href="roof-metal-structures.php">Roof Metal Structures</a>
                            </li>
                            <li>
                                <a href="roof-metal-sheds.php">Roof Metal Sheds</a>
                            </li>
                            <li>
                                <a href="industrial-sheds.php">Industrial Sheds</a>
                            </li>
                            <li>
                                <a href="civil-works.php">Civil Works</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="projects.php">Projects</a>
                    </li>

                    <li>
                        <a href="blog.php">Blog</a>
                    </li>

                    <li>
                        <a href="contact.php">Contact</a>
                    </li>

                </ul>
            </nav>

            <!-- action-btn -->
            <div class="fx-header-3-action-link d-flex align-items-center justify-content-end">

                <!-- search-btn -->
                <!-- <button type="button" aria-label="name" class="fx-search-btn-1 search_btn_toggle">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        search...
                    </button> -->

                <!-- pr-btn -->
                <a href="contact.php" aria-label="Request a quote" class="fx-pr-btn-1">
                    <span class="text" data-back="Get A Quote" data-front="Get A Quote"></span>
                </a>

                <!-- sidebar-btn -->
                <button type="button" aria-label="name" class="fx-menu-btn-1 offcanvas_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>

        </div>
    </div>
</div>
<!-- header-end -->