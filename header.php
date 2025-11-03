<!doctype html>
<html lang="en-US">

<?php
$page = basename($_SERVER['PHP_SELF'], ".php");
$headerCls = "";
if (!empty($page) && $page != "index") {
    $headerCls = "cstmHeaderMenuCls";
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' /> -->
    <title>HVLS Fans Manufacturer | Big Industrial HVLS Fan | Marut Air</title>
    <link rel='stylesheet' id='gayatrirubtech-Poppins-Font-css-css'
        href='https://fonts.googleapis.com/css2?family=Poppins%3Aital%2Cwght%400%2C100%3B0%2C200%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C100%3B1%2C200%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900&#038;display=swap&#038;ver=1.0'
        media='all' />
    <link rel='stylesheet' id='gayatrirubtech-Jakarta-Font-css-css'
        href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans%3Aital%2Cwght%400%2C200..800%3B1%2C200..800&#038;display=swap&#038;ver=1.0'
        media='all' />
    <link rel='stylesheet' href='css/bootstrap.min.css?ver=1.0' media='all' />
    <link rel='stylesheet' href='css/slick.css?ver=6.5.5' media='all' />
    <link rel='stylesheet' href='css/fancybox.css?ver=6.5.5' media='all' />
    <link rel='stylesheet' href='css/main.css?ver=<?php echo time(); ?>' media='all' />
    <link rel='stylesheet' href='css/media-query.css?ver=6.5.5' media='all' />
    <link rel='stylesheet' href='css/fontawesome.css' media='all' />
    <script src="js/jquery.min.js?ver=3.7.1" id="jquery-core-js"> </script>
    <script src="js/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"> </script>
    <link rel="icon" href="favicon.png" sizes="32x32" />
    <link rel="icon" href="favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="favicon.png" />

    <link rel="stylesheet preload" as="style" href="css/model-custom-new.css?ver=<?php echo time(); ?>">
    <link rel="stylesheet preload" as="style" href="css/sidebar-btn.css?ver=<?php echo time(); ?>">

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MQTJCWM8');</script>
<!-- End Google Tag Manager -->

</head>

<body class="home page-template-default page page-id-6 wpb-js-composer js-comp-ver-7.3 vc_non_responsive">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQTJCWM8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include('pop-model.php'); ?>

    <div class="mainwrapper">
        <header class="mainheader <?php echo $headerCls; ?>">
            <div class="container">
                <div class="navigatemain">
                    <div class="logo">
                        <a href="index.php">
                            <div class="logoWrapper">
                                <?php
                                if (!empty($page) && $page == "index") {
                                ?>
                                    <div class="logoIcon">
                                        <img src="img/logo/marut-web-icon-white.webp" alt="MarutAir logo" class="whiteLogo">
                                        <img src="img/logo/marut-web-icon.webp" alt="MarutAir logo" class="logosticky">
                                    </div>
                                    <div class="logoText">
                                        <img src="img/logo/marut-white.webp" alt="MarutAir logo" class="whiteLogo">
                                        <img src="img/logo/marut-web.webp" alt="MarutAir logo" class="logosticky">
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="logoIcon">
                                        <img src="img/logo/marut-web-icon.webp" alt="MarutAir logo" class="whiteLogo">
                                        <img src="img/logo/marut-web-icon.webp" alt="MarutAir logo" class="logosticky">
                                    </div>
                                    <div class="logoText">
                                        <img src="img/logo/marut-web.webp" alt="MarutAir logo" class="whiteLogo">
                                        <img src="img/logo/marut-web.webp" alt="MarutAir logo" class="logosticky">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </a>
                    </div>
                    <div class="menuright d-flex flex-wrap align-items-center">
                        <div class="black-overlay"></div>
                        <div class="navmenu menubar">
                            <ul id="menu-header-main-menu" class="">
                                <li id="menu-item-10"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10">
                                    <a href="our-product.php">Explore Our Products</a>
                                    <!-- <ul class="sub-menu">
                                        <li id="menu-item-15"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15">
                                            <a href="rollers.php">Rollers</a>
                                        </li>
                                        <li id="menu-item-16"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16">
                                            <a href="sleeve.php">Sleeve</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li id="menu-item-551"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-551"><a
                                        href="about-us.php">Company</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-15"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15">
                                            <a href="about-us.php"> About Us</a>
                                        </li>
                                        <li id="menu-item-16"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16">
                                            <a href="director-message.php"> Director’s Message</a>
                                        </li>
                                        <li id="menu-item-17"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15">
                                            <a href="our-culture.php"> Our Culture</a>
                                        </li>
                                        <li id="menu-item-18"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16">
                                            <a href="dealer-inquiry.php"> Dealer Inquiry</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-151"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"><a
                                        href="career.php">Career</a></li>
                                <li id="menu-item-151"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"><a
                                        href="gallery.php">Gallery</a></li>
                                <li id="menu-item-151"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"><a
                                        href="videos.php">Videos</a></li>
                                <li id="menu-item-176"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176"><a
                                        href="clients.php">Our Clients</a></li>
                                <li id="menu-item-176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176"><a
                                        href="contact-us.php">Contact us</a></li>

                            </ul> <a href="#" class="closebtn MenuClose"></a>
                        </div>
                        <!-- <div class="header-buttons">
                            <a href="javascript:void(0);" class="modalOpen header-popupbtn headerInquireNowPopup">
                                <i class="icon fa-light fa-phone-arrow-up-right"></i>

                            </a>
                            <a href="tel:+91 70161 96881" class="header-callbtn">
                                <i class="icon fa-light fa-solid fa-envelope"></i>

                            </a>
                        </div> -->
                        <a href="javascript:void(0)" class="menu-toggle">
                            <i class="icnline"></i>
                            <i class="icnline"></i>
                            <i class="icnline"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="certifiedImg">
                <img src="https://marutair.com/wp-content/uploads/2024/12/marut-badge.png" alt="">
            </div>
        </header>
        <div class="mobileNavBar mainheader <?php echo $headerCls; ?>">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a href="index.php">
                        <div class="logoWrapper">
                            <?php
                            if (!empty($page) && $page == "index") {
                            ?>
                                <div class="logoIcon">
                                    <img src="img/logo/marut-web-icon-white.webp" alt="MarutAir logo" class="whiteLogo">
                                    <img src="img/logo/marut-web-icon.webp" alt="MarutAir logo" class="logosticky">
                                </div>
                                <div class="logoText">
                                    <img src="img/logo/marut-white.webp" alt="MarutAir logo" class="whiteLogo">
                                    <img src="img/logo/marut-web.webp" alt="MarutAir logo" class="logosticky">
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="logoIcon">
                                    <img src="img/logo/marut-web-icon.webp" alt="MarutAir logo" class="whiteLogo">
                                    <img src="img/logo/marut-web-icon.webp" alt="MarutAir logo" class="logosticky">
                                </div>
                                <div class="logoText">
                                    <img src="img/logo/marut-web.webp" alt="MarutAir logo" class="whiteLogo">
                                    <img src="img/logo/marut-web.webp" alt="MarutAir logo" class="logosticky">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="our-product.php">Explore Our Products</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="about-us.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Company
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="about-us.php"> About Us</a></li>
                                    <li><a class="dropdown-item" href="director-message.php"> Director’s Message</a></li>
                                    <li><a class="dropdown-item" href="our-culture.php">Our Culture</a></li>
                                    <li><a class="dropdown-item" href="dealer-inquiry.php">Dealer Inquiry</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="career.php">Career</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="videos.php">Videos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="clients.php">Our Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <main>