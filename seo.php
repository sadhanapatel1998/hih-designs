<?php

$currentPage = basename($_SERVER['PHP_SELF']);

/* Website Base URL */
$siteUrl = "https://yourdomain.com";

/* SEO Data */
$seoData = [

    /* HOME */
    "index.php" => [
        "title" => "HIH Designs | Porta Cabins, Metal Structures & Construction Solutions",
        "description" => "HIH Designs delivers reliable construction solutions including porta cabins, pergolas, roof metal structures, industrial sheds and civil works in Delhi.",
        "keywords" => "HIH Designs, porta cabins, metal structures, industrial sheds, pergolas, roof metal sheds, civil works, construction company Delhi",
        "robots" => "index, follow"
    ],

    /* ABOUT */
    "about.php" => [
        "title" => "About HIH Designs | Trusted Construction Solutions Since 2020",
        "description" => "Learn about HIH Designs, a construction solutions company established in 2020, specializing in porta cabins, metal structures, industrial sheds and civil works.",
        "keywords" => "about HIH Designs, construction company, construction solutions Delhi, metal structure contractor",
        "robots" => "index, follow"
    ],

    /* SERVICES */
    "services.php" => [
        "title" => "Construction Services in Delhi | HIH Designs",
        "description" => "Explore HIH Designs construction services including porta cabins, pergolas, roof metal structures, roof metal sheds, industrial sheds and civil works.",
        "keywords" => "construction services Delhi, porta cabins, pergolas, metal structures, industrial sheds, civil works",
        "robots" => "index, follow"
    ],

    /* PORTA CABINS */
    "porta-cabins.php" => [
        "title" => "Porta Cabins Manufacturer & Supplier in Delhi | HIH Designs",
        "description" => "HIH Designs provides practical and durable porta cabin solutions for offices, construction sites and commercial requirements in Delhi.",
        "keywords" => "porta cabins Delhi, portable cabins, porta cabin manufacturer, portable office cabins",
        "robots" => "index, follow"
    ],

    /* PERGOLAS */
    "pergolas.php" => [
        "title" => "Pergola Design & Installation in Delhi | HIH Designs",
        "description" => "Explore modern and durable pergola solutions by HIH Designs, designed to enhance outdoor spaces with quality materials and professional installation.",
        "keywords" => "pergolas Delhi, metal pergola, pergola installation, outdoor pergola structures",
        "robots" => "index, follow"
    ],

    /* ROOF METAL STRUCTURES */
    "roof-metal-structures.php" => [
        "title" => "Roof Metal Structures in Delhi | HIH Designs",
        "description" => "HIH Designs provides strong and reliable roof metal structures for residential, commercial and industrial construction requirements.",
        "keywords" => "roof metal structures Delhi, steel roof structures, metal roofing contractor, structural steel work",
        "robots" => "index, follow"
    ],

    /* ROOF METAL SHEDS */
    "roof-metal-sheds.php" => [
        "title" => "Roof Metal Sheds in Delhi | HIH Designs",
        "description" => "Get durable and functional roof metal shed solutions from HIH Designs, designed for dependable protection and long-term performance.",
        "keywords" => "roof metal sheds Delhi, metal shed construction, steel roof shed, metal roofing solutions",
        "robots" => "index, follow"
    ],

    /* INDUSTRIAL SHEDS */
    "industrial-sheds.php" => [
        "title" => "Industrial Shed Construction in Delhi | HIH Designs",
        "description" => "HIH Designs delivers industrial shed construction solutions focused on structural strength, durability, functionality and efficient space utilization.",
        "keywords" => "industrial sheds Delhi, industrial shed construction, steel industrial sheds, industrial shed contractor",
        "robots" => "index, follow"
    ],

    /* CIVIL WORKS */
    "civil-works.php" => [
        "title" => "Civil Construction Works in Delhi | HIH Designs",
        "description" => "HIH Designs provides dependable civil construction solutions with a focus on quality workmanship, practical planning and professional execution.",
        "keywords" => "civil works Delhi, civil construction contractor, building construction, civil engineering services",
        "robots" => "index, follow"
    ],

    /* PROJECTS */
    "projects.php" => [
        "title" => "Our Construction Projects & Work Portfolio | HIH Designs",
        "description" => "Explore HIH Designs project portfolio featuring porta cabins, pergolas, industrial sheds, metal structures and civil construction work.",
        "keywords" => "HIH Designs projects, construction portfolio, porta cabin projects, industrial shed projects, metal structure projects",
        "robots" => "index, follow"
    ],

    /* BLOG */
    "blog.php" => [
        "title" => "Construction Insights & Updates | HIH Designs Blog",
        "description" => "Read construction insights, guides and updates about porta cabins, pergolas, metal structures, industrial sheds and modern construction solutions.",
        "keywords" => "construction blog, porta cabin guides, industrial shed information, metal structure articles, construction updates",
        "robots" => "index, follow"
    ],

    /* CONTACT */
    "contact.php" => [
        "title" => "Contact HIH Designs | Construction Company in Delhi",
        "description" => "Contact HIH Designs for porta cabins, pergolas, roof metal structures, industrial sheds and civil construction enquiries in Delhi.",
        "keywords" => "contact HIH Designs, construction company contact Delhi, porta cabin enquiry, industrial shed enquiry",
        "robots" => "index, follow"
    ],

];


/* Default SEO */
$pageMeta = $seoData[$currentPage] ?? [
    "title" => "HIH Designs | Construction & Structural Solutions",
    "description" => "HIH Designs provides reliable construction and structural solutions including porta cabins, pergolas, metal structures, industrial sheds and civil works.",
    "keywords" => "HIH Designs, construction company Delhi, metal structures, porta cabins",
    "robots" => "index, follow"
];


/* Dynamic Canonical URL */
$canonicalUrl = rtrim($siteUrl, '/') . '/' . $currentPage;

?>