<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Fitness Apparel & Accessories | Revolt Cara';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
        echo $pageTag;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
        echo $pageDesc;
    } else {
        echo 'desired description';
    } ?> />
    <link rel="shortcut icon" href="media/favicon.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <style>

    </style>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container container-navbar">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="javascript:;">Services</a>
                            <div class="dropdown-menu MegaMenu_menu">
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-md-6">
                                        <h4>Web</h4>
                                        <ul class="my-4">
                                            <li>
                                                <a href="custom_web_dev.php"><i
                                                        class="fa-brands fa-php"></i>Custom
                                                    Web Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="custom_ecommerce.php"><i
                                                        class="fa-solid fa-cart-shopping"></i>Ecommerce
                                                    Developement
                                                </a>
                                            </li>
                                            <li>
                                                <a href="custom-software.php"><i
                                                        class="fa-brands fa-golang"></i>Software Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cross-plateform.php">
                                                    <i class="fa-brands fa-golang"></i>Cross-Platform
                                                    Mobile App
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-3 col-md-6">
                                        <h4>Mobile
                                        </h4>
                                        <ul class="my-4">
                                            <li>
                                                <a href="progressive-web.php"><i class="fa-brands fa-shopware"></i>
                                                    PWA Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="react-native.php"><i
                                                        class="fa-brands fa-react"></i>
                                                    React Native App Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="android_dev.php"><i
                                                        class="fa-brands fa-android"></i>
                                                    Android App Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="ios.php"><i
                                                        class="fa-brands fa-app-store-ios"></i>
                                                    iOS App Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="flutter.php"><i
                                                        class="fa-solid fa-florin-sign"></i>
                                                    Flutter App Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="custom_mobile.php"><i
                                                        class="fa-brands fa-react"></i>
                                                    Native App Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="hybrid-app.php"><i
                                                        class="fa-solid fa-layer-group"></i>
                                                    Hybrid App Development
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-3 col-md-6">
                                        <h4>
                                            Trending
                                        </h4>
                                        <ul class="my-4">
                                            <li>
                                                <a href="aI_machine.php"><i class="fa-solid fa-robot"></i>AI
                                                    Services
                                                </a>
                                            </li>
                                            <li>
                                                <a href="aI_machine.php"><i class="fa-brands fa-joomla"></i>ML
                                                    Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="fa-solid fa-vr-cardboard"></i>VR
                                                    Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="fa-solid fa-braille"></i>AR
                                                    Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="fa-solid fa-user-ninja"></i>IOT
                                                    Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="fa-brands fa-squarespace"></i>Metaverse
                                                    Development
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-2 col-md-6">
                                        <h4>eCommerce
                                        </h4>
                                        <ul class="my-4">
                                            <li>
                                                <a href="javascript:;"><i class="fa-brands fa-magento"></i>Magento
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="fa-brands fa-shopify"></i>Shopify
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="fa-solid fa-street-view"></i>Spree
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Get in Out</h4>
                                    </div>
                                    <div class="col-12">
                                        <div class="social_menu_header">
                                            <div class="row">
                                                <div class="col-12 col-lg-4 col-md-6">
                                                    <div class="sfm_bottom">
                                                        <span><i class="fa-solid fa-envelope"></i></span>
                                                        <div>
                                                            <h5>Email us </h5>
                                                            <p>info@thepraetors.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4 col-md-6">
                                                    <div class="sfm_bottom">
                                                        <span><i class="fa-brands fa-whatsapp"></i></span>
                                                        <div>
                                                            <h5>Whatsapp</h5>
                                                            <p>(855) 772-6090</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4 col-md-6 sm_follow_main">
                                                    <div class="sfm_bottom">
                                                        <div class="sm_follow">
                                                            <h5>Follow Us</h5>
                                                            <ul class="smf_inner social_icon_link">
                                                                <li>
                                                                    <a href="https://www.facebook.com/thepraetors">
                                                                        <span class="facebook">
                                                                            <i class="fa-brands fa-facebook-f"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="https://www.linkedin.com/company/the-praetors/">
                                                                        <span class="linkedin">
                                                                            <i class="fa-brands fa-linkedin-in"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="twitter">
                                                                            <i class="fa-brands fa-twitter"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="https://www.instagram.com/wearethepraetors/">
                                                                        <span class="instagram">
                                                                            <i class="fa-brands fa-instagram"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="youtube">
                                                                            <i class="fa-brands fa-youtube"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Case Studies</a>
                        </li>
                    </ul>
                    <ul class="right-head">
                        <li class="nav-item">
                            <a class="nav-link phone" href="tel:(855)772-6090">(855)772-6090</a>
                        </li>
                        <li class="">
                            <a class=" btn4" href="contact.php">Get a Quote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>