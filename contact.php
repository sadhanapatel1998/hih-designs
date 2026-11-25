<?php
ob_start();
include('includes/data.php');

?>

<div class="breadcrumb-area bg-default " data-background="assets/img/bg/breadcrumb-bg.jpg"
    style="background-image: url(&quot;assets/img/breadcrumb/b1-bg-1.png&quot;);">
    <div class="container fx-container-1">
        <div class="breadcrumb-wrap">
            <div class="breadcrumb-content">
                <div class="breadcrumb-list ">
                    <a href="index.php">Home</a>
                    <span>Contact Us</span>
                </div>
                <h1 class="breadcrumb-title fx-heading-1 text-uppercase ">
                    Contact Us
                </h1>
            </div>
        </div>
    </div>
</div>

<div id="has-jump"></div>


<!-- contact-us-start -->
<div class="fx-contact-us-1-area pt-90 pb-90">
    <div class="container fx-container-1">
        <div class="row align-items-center">
            <!-- left-side -->
            <div class="col-lg-6">
                <div class="fx-contact-us-1-left">
                    <!-- section-title -->
                    <div class="fx-blog-1-scn-title mb-35">
                        <h6 class="fx-subtitle-1 ">
                            <span>06</span>
                            <span class="txaa-split-text-2 txaa-split-text-2-ani">Get in Touch</span>
                        </h6>
                        <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">Reach Out for Expert
                            Industrial Service Solutions</h2>
                    </div>

                    <form action="#" class="fx-form-1">

                        <!-- single-box -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label">full name:</label>
                            <input class="fx-form-1-input" type="text" placeholder="Enter Name">
                        </div>

                        <!-- single-box -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label">phone:</label>
                            <input class="fx-form-1-input" type="tel" placeholder="+91 9876543210">
                        </div>

                        <!-- single-box -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label">Email:</label>
                            <input class="fx-form-1-input" type="email" placeholder="info@forgexindustry.co.uk">
                        </div>

                        <!-- single-box -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label">Subject:</label>
                            <input class="fx-form-1-input" type="text" placeholder="subject.">
                        </div>

                        <!-- single-box -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label">message:</label>
                            <textarea class="fx-form-1-input" placeholder="Write your message here..."></textarea>
                        </div>

                        <!-- single-box -->
                        <div class="fx-form-1-box fix txxaslideup">
                            <span class="txxaslideup-item fx-cube-1">
                                <button type="button" aria-label="name" class="fx-pr-btn-1 ">
                                    <span class="text" data-back="submit now" data-front="submit now"></span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </span>

                        </div>

                    </form>

                </div>
            </div>

            <!-- right-side -->
            <div class="col-lg-6">
                <div class="fx-contact-us-1-right">

                    <div class="fx-contact-us-1-img fix img-cover">
                        <img src="assets/img/contact.jpg" alt="Contact HIH Designs">
                    </div>

                    <div class="fx-contact-us-1-content fix">

                        <!-- Address -->
                        <div class="fx-contact-us-1-info-box fix txxaslideup">
                            <h6 class="box-title fx-heading-1 fx-font-400">Address:</h6>

                            <p class="address fx-para-1 has-clr-white">
                                <span class="txxaslideup-item fx-cube-1">
                                    <?= htmlspecialchars($site['address']); ?>
                                </span>
                            </p>
                        </div>

                        <!-- Contact Information -->
                        <div class="fx-contact-us-1-info-box txxaslideup fix">
                            <h6 class="box-title fx-heading-1 fx-font-400">
                                Get in Touch:
                            </h6>

                            <ul class="info-list txxaslideup-item fx-cube-1">

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
                                        <i class="fa-solid fa-phone"></i>
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
            </div>
        </div>
    </div>
</div>
<!-- contact-us-end -->

<div class="fx-gap-12"></div>




<?php
$content = ob_get_clean();
require 'layout.php';
?>