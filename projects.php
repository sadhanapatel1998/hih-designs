<?php
ob_start();
include('includes/data.php');
?>

<div class="breadcrumb-area bg-default " data-background="assets/img/bg/breadcrumb-bg.jpg"
    style="background-image: url(&quot;assets/img/breadcrumb/b1-bg-1.png&quot;);">
    <div class="container fx-container-1">
        <div class="breadcrumb-wrap">
            <!-- left-content -->
            <div class="breadcrumb-content">
                <div class="breadcrumb-list ">
                    <a href="index.php">Home</a>
                    <span>Projects</span>
                </div>
                <h1 class="breadcrumb-title fx-heading-1 text-uppercase ">
                    Projects
                </h1>
            </div>
        </div>
    </div>
</div>

<!-- serve-start -->
<div class="fx-serve-1-area fix p-relative pt-120 pb-120">

    <div class="container fx-container-1">

        <!-- section-title -->
        <div class="fx-serve-1-scn-title mb-45">
            <h6 class="fx-subtitle-1">
                <span class="txaa-split-text-2 txaa-split-text-2-ani">Our Projects</span>
            </h6>

            <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">
                Showcasing Quality, Strength & Excellence in Every Project
            </h2>
        </div>



        <!-- gallery-start -->
        <div class="fx-gallery-area pt-50">
            <div class="container fx-container-1">
                <div class="row g-4 gallery-popup">
                    <?php foreach ($gallery as $item): ?>
                        <?php $imagePath = 'assets/img/gallery/' . $item['image']; ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="gallery-item fix img-cover">
                                <a href="<?= htmlspecialchars($imagePath); ?>" class="gallery-popup-link">
                                    <img src="<?= htmlspecialchars($imagePath); ?>"
                                        alt="<?= htmlspecialchars($item['alt']); ?>" loading="lazy">
                                    <div class="gallery-overlay">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- gallery-end -->

    </div>
</div>
<!-- serve-end -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>