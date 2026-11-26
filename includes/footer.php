<?php
include('includes/data.php');
?>
<!--cta-start -->
<div class="fx-cta-1-area pt-55 pb-55 p-relative fix bg-default" data-background="assets/img/cta-3-bg-1.png">
    <div class="fx-cta-1-bg-img fix img-cover">
        <img src="assets/img/cta-img-1.png" alt="HIH Designs Construction Solutions">
    </div>
    <div class="container fx-container-1">
        <div class="fx-cta-1-content">
            <h3
                class="fx-cta-1-content-title fx-heading-2 has-clr-white fx-font-600 txaa-split-text-3 txaa-split-text-3-ani">
                Build Stronger. Build Smarter. Build with HIH Designs.
            </h3>
            <div class="fx-cta-1-form">
                <a href="tel:<?= $site['phone_raw']; ?>" class="fx-cta-1-form-btn">
                    <i class="fa-solid fa-phone"></i>
                    <?= $site['phone']; ?>
                </a>
            </div>
        </div>
    </div>
</div>
<!--cta-end -->

<div class="fx-gap-12"></div>
</div>

<!-- footer-start -->
<div class="fx-footer-3-area p-relative fix bg-default" data-background="assets/img/bg/footer-bg.jpg">


    <div class="fx-footer-3-bg-shape txxaslideup fix">
        <span class="txxaslideup-item">
            <img src="assets/img/footer/f3-shape-1.svg" alt="">
        </span>
    </div>

    <div class="container fx-container-1">
        <div class="fx-footer-1-widget pt-120 pb-95">

            <!-- single-widget -->
            <div class="fx-footer-1-widget-single">
                <div class="fx-footer-3-logo fix txxaslideup">
                    <a class="txxaslideup-item fx-cube-1" href="index.php" aria-label="HIH Designs Home">
                        <img src="assets/img/logo/logo.png" alt="HIH Designs Logo">
                    </a>

                </div>
                <p class="fx-para-1 fx-footer-1-disc-text mt-3">
                    HIH Designs delivers reliable construction solutions, including porta cabins,
                    pergolas, metal structures, industrial sheds and civil works. We focus on
                    quality, durability and professional execution to build spaces that last.
                </p>
            </div>

            <!-- single-widget -->
            <div class="fx-footer-1-widget-single">
                <h6 class="widget-title fx-heading-1">Useful Links:</h6>
                <ul class="fx-footer-1-menu has-footer-3">
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="about.php">About Us</a>
                    </li>

                    <li>
                        <a href="services.php">Services</a>
                    </li>

                    <li>
                        <a href="projects.php">Projects</a>
                    </li>

                    <li>
                        <a href="blog.php">Blogs</a>
                    </li>

                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- single-widget -->
            <div class="fx-footer-1-widget-single">
                <h6 class="widget-title fx-heading-1">Our Services:</h6>

                <ul class="fx-footer-1-menu-2 has-footer-3">
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
            </div>

            <!-- single-widget -->
            <div class="fx-footer-1-widget-single">
                <h6 class="widget-title fx-heading-1">Get in Touch:</h6>

                <ul class="fx-footer-1-contact has-footer-3">

                    <!-- Address -->
                    <li>
                        <i class="fa-regular fa-map"></i>
                        <?= htmlspecialchars($site['address']); ?>
                    </li>

                    <!-- Email -->
                    <li>
                        <a href="mailto:<?= htmlspecialchars($site['email']); ?>">
                            <i class="fa-regular fa-envelope"></i>
                            <?= htmlspecialchars($site['email']); ?>
                        </a>
                    </li>

                    <!-- Phone -->
                    <li>
                        <a href="tel:<?= htmlspecialchars($site['phone_raw']); ?>">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <?= htmlspecialchars($site['phone']); ?>
                        </a>
                    </li>

                    <!-- Working Hours -->
                    <li>
                        <i class="fa-regular fa-clock"></i>
                        <?= htmlspecialchars($site['hours']); ?>
                        <br>
                        Monday to Sunday
                    </li>

                </ul>
            </div>

        </div>
    </div>

    <div class="fx-footer-1-copyright has-footer-3 pt-40 pb-40">
        <div class="container fx-container-1">
            <div class="fx-footer-1-copyright-flex d-block align-items-center">
                <p class="fx-footer-1-copyright-text fx-para-1 text-center">
                    © 2026,
                    <a href="index.php" aria-label="HIH Designs">
                        HIH Designs.
                    </a>
                    All Rights Reserved. | Developed by
                    <a href="https://hoverbusinessservices.com/" target="_blank" rel="noopener noreferrer">
                        Hover Business Services LLP
                    </a>
                </p>

                <!-- <ul class="fx-footer-1-copyright-menu">
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="#">Legal Info</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>

</div>
<!-- footer-end -->