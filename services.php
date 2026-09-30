<?php
$pageTitle = 'Our Services | Finwert';
$finwertServices = [
    'startup-solutions' => [
        'title' => 'Startup Solutions',
        'short' => 'Finance, compliance, and setup support for early-stage companies.',
        'thumb' => 'assets/img/myimage/startup-solutions-overview.png',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.3.png',
        'stage' => 'Incorporation and early growth',
    ],
    'virtual-cfo' => [
        'title' => 'Virtual CFO Services',
        'short' => 'CFO-level finance guidance, planning, controls, MIS, compliance, and decision support without building a full internal CFO office.',
        'thumb' => 'assets/img/myimage/02_Virtual_CFO_Services.jpg',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.1.png',
        'stage' => 'Growth and scaling',
    ],
    'debt-fundraising' => [
        'title' => 'Debt Financing',
        'short' => 'Structured debt support for working capital, expansion, acquisition, and project financing needs.',
        'thumb' => 'assets/img/myimage/03_Debt_Fundraising.jpg',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.2.png',
        'stage' => 'Working capital and expansion',
    ],
    'growth-capital' => [
        'title' => 'Capital Market, Fundraising & IPO Advisory',
        'short' => 'Strategic capital raising, equity fundraising, debt financing, IPO readiness, and capital structure advisory for scaling companies.',
        'thumb' => 'assets/img/myimage/04_Growth_Capital_Fundraising.jpg',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.3.png',
        'stage' => 'Scaling, pre-IPO, and listing readiness',
    ],
    'accounting-financial' => [
        'title' => 'Accounting & Financial Services',
        'short' => 'End-to-end finance and accounting solutions for cleaner books and better reporting.',
        'thumb' => 'assets/img/myimage/05_Accounting_Financial_Services.jpg',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.4.png',
        'stage' => 'Recurring finance operations',
    ],
    'due-diligence' => [
        'title' => 'Due Diligence',
        'short' => 'Risk review and financial analysis for transactions, investments, and business decisions.',
        'thumb' => 'assets/img/myimage/06_Due_Diligence.jpg',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.1.png',
        'stage' => 'Transactions and decision support',
    ],
    'legal-secretarial' => [
        'title' => 'Legal & Secretarial Services',
        'short' => 'Company incorporation, secretarial support, and governance-related coordination.',
        'thumb' => 'assets/img/myimage/07_Legal_Secretarial_Services.jpg',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.2.png',
        'stage' => 'Incorporation, governance, and compliance',
    ],
    'tax-advisory' => [
        'title' => 'Tax Advisory Services',
        'short' => 'Tax planning and advisory support to help businesses navigate taxation complexity.',
        'thumb' => 'assets/img/myimage/08_Tax_Advisory_Services.jpg',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.4.png',
        'stage' => 'Compliance and advisory',
    ],
    'corporate' => [
        'title' => 'Corporate Services',
        'short' => 'Strategic guidance and digital solutions for corporate finance and business goals.',
        'thumb' => 'assets/img/myimage/09_Corporate_Services.jpg',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.3.png',
        'stage' => 'Corporate finance and business support',
    ],
];
require __DIR__ . '/includes/header.php';

$businessTiers = [
    [
        'title' => 'Small Businesses',
        'text' => 'For founders and early teams building finance discipline from incorporation onward.',
        'services' => ['startup-solutions', 'accounting-financial', 'tax-advisory', 'legal-secretarial'],
    ],
    [
        'title' => 'Mid-Sized Businesses',
        'text' => 'For companies that need stronger MIS, CFO thinking, performance review, and funding readiness.',
        'services' => ['virtual-cfo', 'debt-fundraising', 'growth-capital', 'due-diligence'],
    ],
    [
        'title' => 'Large Enterprises / Corporates',
        'text' => 'For established businesses working through transactions, capital structure, governance, and strategic finance.',
        'services' => ['corporate', 'growth-capital', 'debt-fundraising', 'due-diligence'],
    ],
];
$serviceLinks = [
    'startup-solutions' => 'service-single-startup-solutions.php',
    'accounting-financial' => 'service-single-accounting.php',
    'due-diligence' => 'service-single-due-diligence.php',
    'legal-secretarial' => 'service-single-legal-secretarial.php',
    'tax-advisory' => 'service-single-tax-advisory.php',
    'corporate' => 'service-single-corporate.php',
    'debt-fundraising' => 'service-single-debt-fundraising.php',
    'virtual-cfo' => 'virtual-cfo-services.php',
    'growth-capital' => 'capital-market-fundraising-services.php',
];
?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");
    .finwert-services-directory,
    .finwert-services-directory * { font-family: "Poppins", Arial, sans-serif; letter-spacing: 0; }
    .finwert-services-directory { background: #f5f9ff; color: #13294f; }
    .services-hero {
        position: relative;
        overflow: hidden;
        padding: 72px 0 42px;
        background: linear-gradient(103deg, rgba(5, 28, 78, 0.9) 0%, rgba(8, 47, 104, 0.82) 46%, rgba(8, 62, 126, 0.62) 100%), url("assets/img/myimage/finance-cofounder-bg.png") center 42% / cover no-repeat;
    }
    .services-hero::after { content: ""; position: absolute; inset: auto 0 0; height: 3px; background: linear-gradient(90deg, #168cff, #7fc4ff, #fff); }
    .services-hero .container { position: relative; z-index: 1; }
    .services-hero .container.finwert-page-hero-layout { display: grid; grid-template-columns: minmax(0, 1fr) minmax(280px, .8fr); align-items: center; column-gap: 56px; row-gap: 0; text-align: left; }
    .services-eyebrow { display: inline-flex; align-items: center; justify-content: center; gap: 10px; margin-bottom: 12px; color: #a8d3ff; font-size: 13px; font-weight: 600; text-transform: uppercase; }
    .services-eyebrow img { width: 22px; filter: brightness(0) invert(1); }
    .services-hero h1 { max-width: 760px; margin: 0 auto; color: #fff; font-size: 42px; font-weight: 700; line-height: 1.2; }
    .services-hero .container.finwert-page-hero-layout > h1 { grid-column: 1; grid-row: 1; margin: 0; }
    .services-hero p { max-width: 700px; margin: 16px 0 0; color: rgba(255,255,255,.84); font-size: 16px; line-height: 1.7; }
    .services-breadcrumb { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-top: 14px; color: rgba(255,255,255,.75); font-size: 14px; }
    .services-breadcrumb a { color: #fff; }
    .services-hero .container.finwert-page-hero-layout > .services-breadcrumb { grid-column: 1; grid-row: 2; justify-content: flex-start; }
    .services-hero .container.finwert-page-hero-layout > .finwert-page-slogan { grid-column: 2; grid-row: 1 / span 2; }
    .services-section { padding: 96px 0; }
    .services-section.white { background: #fff; }
    .finwert-business-size-section { background: #f1f7fd; }
    .finwert-business-size-section .vl-section-title-white .sub-title { color: #2478f0; }
    .finwert-business-size-section .vl-section-title-white .title { color: #14264a; }
    .services-title { max-width: 820px; margin-bottom: 48px; }
    .services-title.center { margin-right: auto; margin-left: auto; text-align: center; }
    .services-title .sub-title { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 16px; color: #168cff; font-size: 15px; font-weight: 600; text-transform: uppercase; }
    .services-title .sub-title i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: #e9f4ff;
        color: #168cff;
        font-family: "Poppins", Arial, sans-serif;
        font-size: 12px;
        font-style: normal;
        line-height: 1;
    }
    .services-title .sub-title i::before { content: ""; width: 8px; height: 8px; border-radius: 50%; background: currentColor; }
    .services-title h2 { margin: 0; color: #061f58; font-size: 42px; font-weight: 700; line-height: 1.28; }
    .services-title p { margin: 18px 0 0; color: #516173; font-size: 17px; line-height: 1.85; }
    .service-directory-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        overflow: hidden;
        background: #fff;
        border: 1px solid rgba(15,72,133,.12);
        box-shadow: 0 14px 34px rgba(12,46,91,.08);
        transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
    }
    .service-directory-card:hover { transform: translateY(-7px); border-color: rgba(22,140,255,.4); box-shadow: 0 20px 46px rgba(12,46,91,.13); }
    .service-directory-card .thumb { position: relative; display: block; height: 238px; overflow: hidden; }
    .service-directory-card .thumb img { width: 100%; height: 100%; object-fit: cover; transition: transform .35s ease; }
    .service-directory-card:hover .thumb img { transform: scale(1.06); }
    .service-directory-card .icon { position: absolute; left: 24px; bottom: -31px; display: inline-flex; align-items: center; justify-content: center; width: 62px; height: 62px; background: #e9f4ff; box-shadow: 0 10px 25px rgba(6,31,88,.12); }
    .service-directory-card .icon img { max-width: 34px; max-height: 34px; }
    .service-directory-card .content { display: flex; flex: 1; flex-direction: column; padding: 48px 28px 28px; }
    .service-directory-card h3 { margin: 0; color: #061f58; font-size: 24px; font-weight: 700; line-height: 1.35; }
    .service-directory-card p { margin: 14px 0 0; color: #516173; font-size: 15.5px; line-height: 1.75; }
    .service-directory-card .meta { margin-top: 16px; color: #168cff; font-size: 13px; font-weight: 600; text-transform: uppercase; }
    .service-directory-card .explore { display: inline-flex; align-items: center; gap: 10px; margin-top: auto; padding-top: 24px; color: #061f58; font-weight: 600; }
    .service-directory-card .explore i {
        font-family: "Poppins", Arial, sans-serif;
        font-style: normal;
        line-height: 1;
    }
    .service-directory-card .explore i::before { content: "\2192"; }
    .service-directory-card:hover .explore { color: #168cff; }
    .tier-card { height: 100%; padding: 34px; background: #061f58; color: #fff; }
    .tier-card h3 { margin: 0; color: #fff; font-size: 28px; font-weight: 700; line-height: 1.3; }
    .tier-card p { margin: 16px 0 24px; color: rgba(255,255,255,.76); line-height: 1.75; }
    .tier-links { display: flex; flex-wrap: wrap; gap: 10px; }
    .tier-links a { display: inline-flex; align-items: center; min-height: 38px; padding: 0 14px; background: rgba(255,255,255,.1); color: #fff; font-size: 13px; font-weight: 500; }
    .tier-links a:hover { background: #168cff; color: #fff; }
    .finwert-business-gallery .panel {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 360px;
        height: auto;
        border-radius: 0;
        background-image: none !important;
        background-color: #061f58;
        cursor: pointer;
        overflow: hidden;
    }
    .finwert-business-gallery .panel::after {
        display: none;
    }
    .finwert-business-gallery .panel-tag,
    .finwert-business-gallery .pannel-contarea {
        position: relative;
        left: auto;
        right: auto;
        bottom: auto;
        z-index: 2;
        opacity: 1;
        visibility: visible;
    }
    .finwert-business-gallery .pannel-contarea {
        padding: 36px 34px 0;
    }
    .finwert-business-gallery .pannel-contarea .title {
        margin: 0;
        color: #fff;
        font-size: 29px;
        font-weight: 700;
        line-height: 1.28;
    }
    .finwert-business-gallery .pannel-contarea p {
        max-width: 330px;
        margin: 18px 0 0;
        color: rgba(255,255,255,.82);
        font-size: 15px;
        line-height: 1.75;
    }
    .finwert-business-gallery .panel-tag {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        padding: 0 34px 36px;
    }
    .finwert-business-gallery .panel-tag a {
        min-height: 38px;
        margin: 0;
        border: 0;
        border-radius: 0;
        background: rgba(255,255,255,.1);
        color: #fff;
        font-size: 13px;
        font-weight: 600;
        line-height: 20px;
    }
    .finwert-business-gallery .panel-tag a:hover {
        border: 0;
        background: #168cff;
        color: #fff;
    }
    .finwert-business-gallery .wup-arow {
        display: none;
    }
    .vl-case-area .pannel-contarea {
        padding-right: 78px;
    }
    .vl-case-area .pannel-contarea .title a {
        color: #fff;
    }
    .vl-case-area .wup-arow span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        z-index: 12;
        background: #fff;
        color: #061f58;
    }
    .vl-case-area .wup-arow span i {
        display: inline-block;
        line-height: 1;
    }
    .journey-strip { display: grid; grid-template-columns: repeat(7, minmax(0, 1fr)); gap: 16px; }
    .journey-step {
        display: flex;
        min-height: 166px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px 14px;
        border: 1px solid #e1eaf5;
        border-radius: 8px;
        background: #f5f9ff;
        text-align: center;
        transition: transform .25s ease, border-color .25s ease, box-shadow .25s ease, background .25s ease;
    }
    .journey-step:hover {
        transform: translateY(-5px);
        border-color: rgba(22,140,255,.48);
        background: #fff;
        box-shadow: 0 16px 34px rgba(12,46,91,.12);
    }
    .journey-step-icon {
        display: inline-flex;
        width: 52px;
        height: 52px;
        align-items: center;
        justify-content: center;
        margin-bottom: 14px;
        border-radius: 8px;
        background: #e4f1ff;
        color: #168cff;
        font-size: 21px;
        transition: background .25s ease, color .25s ease, transform .25s ease;
    }
    .journey-step-icon i { font-family: "Font Awesome 6 Pro"; font-weight: 900; }
    .journey-step:hover .journey-step-icon { transform: scale(1.06); background: #168cff; color: #fff; }
    .journey-step strong {
        display: flex;
        min-height: 42px;
        align-items: center;
        justify-content: center;
        margin: 0;
        color: #061f58;
        font-size: 15px;
        line-height: 1.4;
    }
    @media (max-width: 1199px) {
        .services-hero h1 { font-size: 52px; }
        .journey-strip { grid-template-columns: repeat(4, minmax(0, 1fr)); }
    }
    @media (max-width: 767px) {
        .services-hero { padding: 72px 0 48px; }
        .services-hero .container.finwert-page-hero-layout { grid-template-columns: 1fr; column-gap: 0; row-gap: 0; }
        .services-hero .container.finwert-page-hero-layout > h1,
        .services-hero .container.finwert-page-hero-layout > .services-breadcrumb,
        .services-hero .container.finwert-page-hero-layout > .finwert-page-slogan { grid-column: 1; grid-row: auto; }
        .services-hero .container.finwert-page-hero-layout > .services-breadcrumb { margin-top: -14px; }
        .services-hero h1 { font-size: 30px; line-height: 1.24; }
        .services-hero p { font-size: 15px; }
        .services-section { padding: 68px 0; }
        .services-title h2 { font-size: 32px; }
        .journey-strip { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
        .finwert-business-gallery .pannel-contarea,
        .finwert-business-gallery .panel-tag { padding-right: 24px; padding-left: 24px; }
    }
</style>

<main class="finwert-services-directory">
    <section class="services-hero">
        <div class="container finwert-page-hero-layout">
            <h1>Services</h1>
            <nav class="services-breadcrumb" aria-label="Breadcrumb"><a href="index.php">Home</a><span>/</span><span aria-current="page">Services</span></nav>
            <?php include __DIR__ . '/includes/page-hero-slogan.php'; ?>
        </div>
    </section>

    <section class="services-section white">
        <div class="container">
            <div class="services-title center">
                <span class="sub-title"><i class="fa-solid fa-route"></i> Business Journey</span>
                <h2>From incorporation to stock market listing.</h2>
                <p>We support companies at every stage — from incorporation to stock market listing — and scale our team at the client's evolving needs.</p>
            </div>
            <div class="journey-strip">
                <?php foreach ([
                    ['title' => 'Incorporation', 'icon' => 'fa-building'],
                    ['title' => 'Growth', 'icon' => 'fa-chart-line'],
                    ['title' => 'Scaling', 'icon' => 'fa-arrow-up'],
                    ['title' => 'Fundraising', 'icon' => 'fa-money-bill-wave'],
                    ['title' => 'Strategic Transactions', 'icon' => 'fa-handshake'],
                    ['title' => 'Pre-IPO', 'icon' => 'fa-file-lines'],
                    ['title' => 'Stock Market Listing', 'icon' => 'fa-building-columns'],
                ] as $stage) : ?>
                    <div class="journey-step">
                        <span class="journey-step-icon" aria-hidden="true"><i class="fa-solid <?php echo htmlspecialchars($stage['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i></span>
                        <strong><?php echo htmlspecialchars($stage['title'], ENT_QUOTES, 'UTF-8'); ?></strong>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="services-title center">
                <span class="sub-title"><i class="fa-solid fa-layer-group"></i> Service Directory</span>
                <h2>Explore Finwert services.</h2>
                <p>Every service links to a detailed page with overview, situations addressed, capabilities, process, deliverables, related services, and FAQs.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($finwertServices as $slug => $service) : ?>
                    <div class="col-xl-4 col-md-6">
                        <a id="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>" class="service-directory-card" href="<?php echo htmlspecialchars(($serviceLinks[$slug] ?? '#' . $slug), ENT_QUOTES, 'UTF-8'); ?>">
                            <span class="thumb">
                                <img src="<?php echo htmlspecialchars($service['thumb'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>">
                                <span class="icon"><img src="<?php echo htmlspecialchars($service['icon'], ENT_QUOTES, 'UTF-8'); ?>" alt=""></span>
                            </span>
                            <span class="content">
                                <span class="meta"><?php echo htmlspecialchars($service['stage'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <h3><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p><?php echo htmlspecialchars($service['short'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <span class="explore">View Details <i class="fa-regular fa-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
     <!--================= case section start =================-->
 <!--================= case section start =================-->
        <section class="vkl-black-bg-6 vl-case-area finwert-business-size-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto text-center mb-30">
                        <div class="vl-case-wrap-6 ml-75">
                            <!-- section title -->
                            <div class="vl-section-title vl-section-title-white">
                                <!-- subtitle -->
                                <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                    data-sal-easing="ease-in-out"> <span><img
                                            src="assets/img/taxconsulting/icon/sub-title-icon6.1.svg" alt=""></span>  Find By Business Size</h4>
                                <!-- title -->
                                <h2 class="title text-anime-style-2 pt-16">Choose the services that match your stage.</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expanding-gallery ml-75 mr-75">
                    <div class="expand-flx">
                        <!-- thumb -->
                        <div class="panel mb-30"
                            style="background-image: url('assets/img/ab1.png');">
                            <!-- content area -->
                            <div class="panel-tag">
                                <a href="#">Startup Solutions</a>
                                <a href="#">Accounting & Financial Services</a>
                                <a href="#">Tax Advisory Services</a>
                                <a href="#">Legal & Secretarial Services</a>
                            </div>

                            <div class="pannel-contarea">
                                <h3 class="title"><a href="portfolio-single.html">Small Businesses</a>
                                <p>For founders and early teams building <br>finance discipline from incorporation onward.</p>
                                </h3>
                                <!-- arrow -->
                                <!-- <div class="wup-arow">
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>
                        <!-- thumb -->
                        <div class="panel active mb-30"
                            style="background-image: url('assets/img/ab2.png');">
                            <!-- content area -->
                            <div class="panel-tag">
                                <a href="#">Virtual CFO Services</a>
                                <a href="#">Debt Financing</a>
                                <a href="#">Capital Market, Fundraising & IPO Advisory</a>
                                <a href="#">Due Diligence</a>
                            </div>

                            <div class="pannel-contarea">
                                <h3 class="title"><a href="portfolio-single.html">Mid-Sized Businesses</a>
                                <p>For companies that need stronger MIS, <br>CFO thinking, performance review, and funding readiness.</p>
                                </h3>
                                <!-- arrow -->
                                <!-- <div class="wup-arow">
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>
                        <!-- thumb -->
                        <!-- thumb -->
                        <div class="panel mb-30"
                            style="background-image: url('assets/img/b3.png');">
                            <!-- content area -->
                            <div class="panel-tag">
                                <a href="#">Corporate Services</a>
                                <a href="#">Capital Market, Fundraising & IPO Advisory</a>
                                <a href="#">Debt Financing</a>
                                <a href="#">Due Diligence</a>
                            </div>

                            <div class="pannel-contarea">
                                <h3 class="title"><a href="portfolio-single.html">Large Enterprises / Corporates</a>
                                <p>For established businesses working through transactions,<br> capital structure, governance, and strategic finance.</p>
                                </h3>
                                <!-- arrow -->
                                <!-- <div class="wup-arow">
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================= case section End =================-->
        <!--================= case section End =================-->
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
