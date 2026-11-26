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


                    <form class="fx-form-1" id="whatsappForm" novalidate>

                        <!-- Full Name -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label" for="name">Full Name:</label>
                            <input class="fx-form-1-input" type="text" id="name" placeholder="Enter Your Name"
                                maxlength="60" autocomplete="name" required>
                            <small class="form-error" id="nameError"></small>
                        </div>

                        <!-- Phone -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label" for="phone">Phone:</label>
                            <input class="fx-form-1-input" type="tel" id="phone" placeholder="+91 9876543210"
                                maxlength="16" autocomplete="tel" required>
                            <small class="form-error" id="phoneError"></small>
                        </div>

                        <!-- Email -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label" for="email">Email:</label>
                            <input class="fx-form-1-input" type="email" id="email" placeholder="Enter Your Email"
                                maxlength="254" autocomplete="email">
                            <small class="form-error" id="emailError"></small>
                        </div>

                        <!-- Subject -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label" for="subject">Subject:</label>
                            <input class="fx-form-1-input" type="text" id="subject" placeholder="Enter Subject"
                                maxlength="100" required>
                            <small class="form-error" id="subjectError"></small>
                        </div>

                        <!-- Message -->
                        <div class="fx-form-1-box">
                            <label class="fx-form-1-label" for="message">Message:</label>
                            <textarea class="fx-form-1-input" id="message" placeholder="Write Your Message Here..."
                                maxlength="1000" required></textarea>
                            <small class="form-error" id="messageError"></small>
                        </div>

                        <!-- Submit -->
                        <div class="fx-form-1-box fix txxaslideup">
                            <span class="txxaslideup-item fx-cube-1">
                                <button type="submit" class="fx-pr-btn-1" id="submitBtn">
                                    <span class="text" data-back="Submit Now" data-front="Submit Now"></span>
                                    <i class="fa-solid fa-arrow-right"></i>
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


<div class="map-section pb-90">
    <div class="container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.3776746563353!2d77.2077657!3d28.5283657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce15eaa4831a9%3A0x7565ce16f4936da!2s268%2F3%2C%20Hauz%20Rani%2C%20Malviya%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110017!5e0!3m2!1sen!2sin!4v1795676941621!5m2!1sen!2sin"
            height="450" class="w-100" style="border:0;border-radius:12px" allowfullscreen="" loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </div>
</div>




<?php
$content = ob_get_clean();
require 'layout.php';
?>