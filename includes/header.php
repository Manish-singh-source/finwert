<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$isFinwertServicesPage = in_array($currentPage, ['services.php', 'service-single.php', 'transactions.php', 'virtual-cfo-services.php'], true)
    || strpos($currentPage, 'service-single-') === 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle ?? 'Corporate Consulting | Finwert', ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="shortcut icon" href="assets/img/logo/fav.png" type="image/png">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/all.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/sal.css">
    <link rel="stylesheet" href="assets/css/plugins/jarallax.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="corporate-consulting-page<?php echo $currentPage === 'about-us.php' ? ' finwert-about-page' : ($currentPage === 'contact.php' ? ' finwert-contact-page' : ($currentPage === 'team.php' ? ' finwert-team-page' : ($currentPage === 'consult.php' ? ' finwert-consult-page' : ($isFinwertServicesPage ? ' finwert-services-page' : '')))); ?>">
    <div class="preloader preloader-5">
        <div class="loading-container">
            <div class="loading loading-5"></div>
            <div id="loading-icon" aria-label="Finwert loading">FI</div>
        </div>
    </div>

    <header>
        <div id="vl-header-sticky" class="vl-header-area<?php echo ($isFinwertServicesPage || in_array($currentPage, ['team.php', 'contact.php'], true)) ? '' : ' vl-transparent-header'; ?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-md-6 col-6">
                        <div class="vl-logo"><a href="index.php"><img src="assets/img/logo/logo.png" alt="Finwert"></a></div>
                    </div>
                    <div class="col-xl-10 d-none d-xl-block">
                        <div class="vl-main-menu vl-main-menu-5 text-center">
                            <nav class="vl-mobile-menu-active"><?php include __DIR__ . '/navbar.php'; ?></nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-xl-none">
                        <div class="vl-header-action-item d-block d-xl-none">
                            <button type="button" class="vl-offcanvas-toggle" aria-label="Open menu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                    <rect x="10" width="20" height="2" fill="currentColor"></rect>
                                    <rect x="5" y="7" width="25" height="2" fill="currentColor"></rect>
                                    <rect x="10" y="14" width="20" height="2" fill="currentColor"></rect>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="vl-offcanvas">
        <div class="vl-offcanvas-wrapper">
            <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-50">
                <div class="vl-offcanvas-logo"><a href="index.php"><img src="assets/img/logo/logo.png" alt="Finwert"></a></div>
                <div class="vl-offcanvas-close"><button class="vl-offcanvas-close-toggle" aria-label="Close menu"><i class="fal fa-times"></i></button></div>
            </div>
            <div class="vl-offcanvas-menu vl-offcanvas-menu-5 d-lg-block mb-40">
                <nav><?php include __DIR__ . '/navbar.php'; ?></nav>
            </div>
            <div class="vl-offcanvas-info vl-offcanvas-info-5 mb-40">
                <h3 class="vl-offcanvas-sm-title mb-20">Contact Us</h3>
                <a href="tel:+919773149764"><span><img src="assets/img/icon/vl-icon-1.1.svg" alt=""></span> +91 97731 49764</a>
                <a href="mailto:info@finwert.com"><span><img src="assets/img/icon/vl-icon-1.3.svg" alt=""></span> info@finwert.com</a>
                <a href="contact.php"><span><img src="assets/img/icon/vl-icon-1.2.svg" alt=""></span> Mumbai, India</a>
            </div>
            <div class="vl-offcanvas-social vl-offcanvas-social-5 mb-40">
                <h3 class="vl-offcanvas-sm-title mb-20">Follow Us</h3><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="vl-offcanvas-overlay"></div>
