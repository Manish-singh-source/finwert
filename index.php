<?php
$finwertServices = [
    'startup-solutions' => [
        'title' => 'Startup Solutions',
        'short' => 'Finance, compliance, and setup support for early-stage companies.',
        'image' => 'assets/img/myimage/01_Startup_Solutions.jpg',
    ],
    'virtual-cfo' => [
        'title' => 'Virtual CFO Services',
        'short' => 'CFO-level finance guidance, planning, controls, MIS, compliance, and decision support without building a full internal CFO office.',
        'image' => 'assets/img/myimage/02_Virtual_CFO_Services.png',
    ],
    'debt-fundraising' => [
        'title' => 'Debt Financing',
        'short' => 'Structured debt support for working capital, expansion, acquisition, and project financing needs.',
        'image' => 'assets/img/myimage/03_Debt_Fundraising.png',
    ],
    'growth-capital' => [
        'title' => 'Capital Market, Fundraising & IPO Advisory',
        'short' => 'Strategic capital raising, equity fundraising, debt financing, IPO readiness, and capital structure advisory for scaling companies.',
        'image' => 'assets/img/myimage/04_Growth_Capital_Fundraising.jpg',
    ],
    'accounting-financial' => [
        'title' => 'Accounting & Financial Services',
        'short' => 'End-to-end finance and accounting solutions for cleaner books and better reporting.',
        'image' => 'assets/img/myimage/05_Accounting_Financial_Services.jpg',
    ],
    'due-diligence' => [
        'title' => 'Due Diligence',
        'short' => 'Risk review and financial analysis for transactions, investments, and business decisions.',
        'image' => 'assets/img/myimage/06_Due_Diligence.jpg',
    ],
    'legal-secretarial' => [
        'title' => 'Legal & Secretarial Services',
        'short' => 'Company incorporation, secretarial support, and governance-related coordination.',
        'image' => 'assets/img/myimage/07_Legal_Secretarial_Services.jpg',
    ],
    'tax-advisory' => [
        'title' => 'Tax Advisory Services',
        'short' => 'Tax planning and advisory support to help businesses navigate taxation complexity.',
        'image' => 'assets/img/myimage/08_Tax_Advisory_Services.jpg',
    ],
    'corporate' => [
        'title' => 'Corporate Services',
        'short' => 'Strategic guidance and digital solutions for corporate finance and business goals.',
        'image' => 'assets/img/myimage/09_Corporate_Services.jpg',
    ],
];
$finwertServiceLinks = [
    'startup-solutions' => 'service-single-startup-solutions.php',
    'virtual-cfo' => 'virtual-cfo-services.php',
    'debt-fundraising' => 'service-single-debt-fundraising.php',
    'growth-capital' => 'capital-market-fundraising-services.php',
    'accounting-financial' => 'service-single-accounting.php',
    'due-diligence' => 'service-single-due-diligence.php',
    'legal-secretarial' => 'service-single-legal-secretarial.php',
    'tax-advisory' => 'service-single-tax-advisory.php',
    'corporate' => 'service-single-corporate.php',
];
$finwertServiceIcons = [
    'startup-solutions' => 'fa-rocket',
    'virtual-cfo' => 'fa-chart-pie',
    'debt-fundraising' => 'fa-hand-holding-dollar',
    'growth-capital' => 'fa-building-columns',
    'accounting-financial' => 'fa-calculator',
    'due-diligence' => 'fa-magnifying-glass-chart',
    'legal-secretarial' => 'fa-scale-balanced',
    'tax-advisory' => 'fa-file-invoice-dollar',
    'corporate' => 'fa-briefcase',
];

$finwertClients = [];
$clientLogoFiles = glob(__DIR__ . '/assets/img/logo/*.{png,jpg,jpeg,webp,svg}', GLOB_BRACE) ?: [];
foreach ($clientLogoFiles as $clientLogoFile) {
    $clientLogoFilename = basename($clientLogoFile);
    if (in_array(strtolower($clientLogoFilename), ['logo.png', 'fav.png', 'banner.png'], true)) {
        continue;
    }

    $clientName = ucwords(str_replace(['-', '_'], ' ', pathinfo($clientLogoFilename, PATHINFO_FILENAME)));
    $finwertClients[$clientName] = 'assets/img/logo/' . $clientLogoFilename;
}
ksort($finwertClients, SORT_NATURAL | SORT_FLAG_CASE);
$finwertClientRows = array_chunk($finwertClients, (int) ceil(max(count($finwertClients), 1) / 2), true);

require __DIR__ . '/includes/header.php';

?>
<style>
    .finwert-services-showcase {
        --vkl-text-primary-color-9: #dff3ff;
        --vkl-text-heading-color-9: #213861;
        --vkl-bg-bg-18: #064798;
        background: radial-gradient(ellipse at top right, rgba(0, 163, 222, .28), transparent 60%), linear-gradient(135deg, #213861, #064798);
    }
    .finwert-services-showcase .servicebox__wrap9-thumb::after {
        background: linear-gradient(172deg, rgba(33, 56, 97, 0) 35%, #213861 94%);
    }
    .finwert-services-showcase .servicebox__wrap9-thumb-content {
        border-color: #24a8df;
    }
    .finwert-services-showcase .servicebox__wrap9-hover-content {
        background: linear-gradient(135deg, #f2faff, #dff3ff);
    }
    .finwert-services-showcase .servicebox__wrap9-hover-content .para {
        color: #213861;
    }
    .finwert-services-showcase .service-button-9:hover {
        background: #24a8df;
        color: #fff;
    }
    .finwert-service-card:focus-visible {
        outline: 3px solid #168cff;
        outline-offset: 4px;
    }
    .finwert-service-grid.swiper {
        display: block;
        overflow: hidden;
    }
    .finwert-service-grid .swiper-slide {
        display: flex;
        height: auto;
    }
    .finwert-service-grid .finwert-service-card {
        height: 100%;
        width: 100%;
    }
    .finwert-cofounder-section {
        --cofounder-ice: #9fd0ff;
        background: #061f58;
        color: #fff;
        position: relative;
        overflow: hidden;
        isolation: isolate;
    }
    .finwert-cofounder-section::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        background: linear-gradient(90deg, rgba(4, 24, 70, .96), rgba(6, 31, 88, .88) 45%, rgba(4, 25, 70, .96)), linear-gradient(120deg, rgba(22, 140, 255, .24), transparent 54%);
        pointer-events: none;
    }
    .finwert-cofounder-section .container {
        position: relative;
        z-index: 1;
    }
    .finwert-home-clients {
        position: relative;
        overflow: hidden;
        padding: 72px 0;
        background: linear-gradient(145deg, #f6faff 0%, #edf5ff 48%, #fff 100%);
    }
    .finwert-home-clients::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background-image: radial-gradient(rgba(6, 71, 152, .12) 1.4px, transparent 1.5px);
        background-size: 22px 22px;
        -webkit-mask-image: linear-gradient(90deg, #000, transparent 30%, transparent 70%, #000);
        mask-image: linear-gradient(90deg, #000, transparent 30%, transparent 70%, #000);
    }
    .finwert-home-clients-heading {
        position: relative;
        z-index: 1;
        margin: 0 auto 36px;
        padding: 0 20px;
        text-align: center;
    }
    .finwert-home-clients-heading span {
        display: block;
        margin-bottom: 8px;
        color: #2478f0;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2.4px;
        text-transform: uppercase;
    }
    .finwert-home-clients-heading h2 {
        margin: 0;
        color: #14264a;
        font-size: clamp(24px, 3vw, 36px);
        font-weight: 700;
        line-height: 1.25;
    }
    .finwert-home-clients-viewport {
        position: relative;
        z-index: 1;
        display: grid;
        gap: 16px;
        overflow: hidden;
        -webkit-mask-image: linear-gradient(90deg, transparent, #000 7%, #000 93%, transparent);
        mask-image: linear-gradient(90deg, transparent, #000 7%, #000 93%, transparent);
    }
    .finwert-home-clients-track {
        display: flex;
        width: max-content;
        will-change: transform;
        animation: finwert-clients-left 90s linear infinite;
    }
    .finwert-home-clients-row:first-child .finwert-home-clients-track {
        animation-name: finwert-clients-right;
    }
    .finwert-home-clients-group {
        display: flex;
        flex-shrink: 0;
        gap: 16px;
        padding-right: 16px;
    }
    .finwert-home-client-logo {
        display: flex;
        width: 190px;
        height: 100px;
        flex: 0 0 190px;
        align-items: center;
        justify-content: center;
        padding: 12px 16px;
        border: 1px solid #e3edf8;
        border-radius: 14px;
        background: rgba(255, 255, 255, .94);
        box-shadow: 0 10px 24px rgba(20, 60, 120, .07);
    }
    .finwert-home-client-logo img {
        width: auto;
        max-width: 100%;
        height: auto;
        max-height: 72px;
        object-fit: contain;
    }
    @keyframes finwert-clients-left {
        from { transform: translate3d(0, 0, 0); }
        to { transform: translate3d(-50%, 0, 0); }
    }
    @keyframes finwert-clients-right {
        from { transform: translate3d(-50%, 0, 0); }
        to { transform: translate3d(0, 0, 0); }
    }
    .finwert-cofounder-section .row { --bs-gutter-x: 64px; }
    .finwert-cofounder-panel {
        min-height: 430px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        overflow: hidden;
        padding: 54px 52px;
        border: 1px solid rgba(159, 208, 255, .78);
        border-radius: 14px;
        background: linear-gradient(140deg, rgba(5, 28, 76, .72), rgba(4, 24, 70, .84)), url('assets/img/myimage/finance-cofounder-bg.png') center / cover no-repeat;
        box-shadow: 0 24px 70px rgba(0, 0, 0, .2);
    }
    .finwert-cofounder-panel span {
        display: inline-block;
        margin-bottom: 18px;
        position: relative;
        color: var(--cofounder-ice);
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }
    .finwert-cofounder-panel span::before,
    .finwert-cofounder-kicker::before { content: ""; display: inline-block; width: 38px; height: 3px; margin: 0 12px 4px 0; background: var(--cofounder-ice); }
    .finwert-cofounder-panel h2 {
        margin: 0;
        color: #fff;
        position: relative;
        font-size: clamp(38px, 4vw, 58px);
        font-weight: 700;
        line-height: 1.18;
        letter-spacing: 0;
    }
    .finwert-cofounder-panel h2 em { color: var(--cofounder-ice); font-style: normal; }
    .finwert-cofounder-content p {
        margin: 0;
        color: rgba(255, 255, 255, 0.86);
        font-size: clamp(20px, 2vw, 28px);
        font-weight: 500;
        line-height: 1.45;
    }
    .finwert-cofounder-content .finwert-cofounder-kicker {
        margin-bottom: 20px;
        color: var(--cofounder-ice);
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 1.5px;
        line-height: 1.4;
        text-transform: uppercase;
    }
    .finwert-cofounder-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
        margin-top: 36px;
    }
    .finwert-cofounder-grid a {
        display: flex;
        align-items: center;
        position: relative;
        min-height: 106px;
        gap: 14px;
        padding: 16px 18px;
        border: 1px solid rgba(22, 140, 255, .58);
        border-radius: 10px;
        background: linear-gradient(135deg, rgba(18, 73, 154, .5), rgba(4, 29, 78, .72));
        color: #fff;
        font-weight: 700;
        line-height: 1.35;
        transition: .25s ease;
    }
    .finwert-cofounder-grid a::before { display: inline-flex; flex: 0 0 48px; align-items: center; justify-content: center; width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(145deg, #1d69d8, #0a3a94); color: #fff; font-family: "Font Awesome 6 Pro" !important; font-size: 18px; font-weight: 900; }
    .finwert-cofounder-grid a:nth-child(1)::before { content: "\f1ad"; }
    .finwert-cofounder-grid a:nth-child(2)::before { content: "\f201"; }
    .finwert-cofounder-grid a:nth-child(3)::before { content: "\f51e"; }
    .finwert-cofounder-grid a:nth-child(4)::before { content: "\f2b5"; }
    .finwert-cofounder-grid a:nth-child(5)::before { content: "\f200"; }
    .finwert-cofounder-grid a:nth-child(6)::before { content: "\f201"; }
    .finwert-cofounder-grid a::after { display: none; }
    .finwert-cofounder-grid a:hover {
        transform: translateY(-4px);
        border-color: var(--cofounder-ice);
        background: linear-gradient(135deg, #0e55b8, #082d76);
        color: #fff;
    }
    @media (max-width: 991px) {
        .finwert-cofounder-panel { min-height: 360px; }
        .finwert-cofounder-content p { font-size: 20px; }
        .finwert-cofounder-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
    @media (max-width: 575px) {
        .finwert-cofounder-section { padding-top: 58px !important; padding-bottom: 58px !important; }
        .finwert-cofounder-panel { min-height: 330px; padding: 34px 26px; }
        .finwert-cofounder-panel h2 { font-size: 38px; }
        .finwert-cofounder-grid { grid-template-columns: 1fr; }
        .finwert-home-clients { padding: 56px 0; }
        .finwert-home-clients-heading { margin-bottom: 28px; }
        .finwert-home-clients-viewport { gap: 12px; }
        .finwert-home-clients-group { gap: 12px; padding-right: 12px; }
        .finwert-home-client-logo { width: 148px; height: 82px; flex-basis: 148px; padding: 10px 12px; }
        .finwert-home-client-logo img { max-height: 58px; }
        .finwert-home-clients-track { animation-duration: 76s; }
    }
    @media (prefers-reduced-motion: reduce) {
        .finwert-home-clients-track { animation-play-state: paused; }
    }
</style>
<main>
    <!--================= Banner section start =================-->
    <section class="finwert-hero-banner p-relative fix">
            <div class="container">
                <div class="finwert-hero-intro text-center">
                    <p class="finwert-eyebrow" data-sal="slide-up" data-sal-duration="900" data-sal-delay="100"
                        data-sal-easing="ease-in-out">Premium Finance Advisory For Growing Companies</p>
                    <h1 class="finwert-hero-title finwert-typing-title">We Provide Solutions <span
                            class="finwert-typing-text" data-typing-phrases="To Grow Your Business|From Incorporation To Listing|To Raise Debt Or Equity Funds|As Your Finance Co-Founder"
                            aria-live="polite">To Grow Your Business</span></h1>
                    <p class="finwert-hero-subtitle" data-sal="slide-up" data-sal-duration="900" data-sal-delay="150"
                        data-sal-easing="ease-in-out">We work as your Finance Co-Founder. We support companies at every stage — from incorporation to stock market listing — and scale our team at the client's evolving needs.</p>
                    <div class="finwert-trust-row" data-sal="slide-up" data-sal-duration="900" data-sal-delay="200"
                        data-sal-easing="ease-in-out">
                        <div class="finwert-trust-item"><span><i class="fa-solid fa-shield-halved"></i></span>Finance Co-Founder Mindset</div>
                        <div class="finwert-trust-item"><span><i class="fa-solid fa-chart-line"></i></span>Incorporation To IPO Readiness</div>
                        <div class="finwert-trust-item"><span><i class="fa-solid fa-headset"></i></span>Scalable Advisory Team</div>
                    </div>
                </div>

                <div class="swiper finwert-service-grid">
                    <div class="swiper-wrapper">
                        <?php $serviceIndex = 0; ?>
                        <?php foreach ($finwertServices as $serviceKey => $service): ?>
                            <?php
                            $serviceIndex++;
                            $serviceTitle = htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8');
                            $serviceImage = htmlspecialchars($service['image'], ENT_QUOTES, 'UTF-8');
                            $serviceDescription = htmlspecialchars($service['short'], ENT_QUOTES, 'UTF-8');
                            $serviceUrl = htmlspecialchars($finwertServiceLinks[$serviceKey], ENT_QUOTES, 'UTF-8');
                            $serviceIcon = htmlspecialchars($finwertServiceIcons[$serviceKey], ENT_QUOTES, 'UTF-8');
                            ?>
                            <div class="swiper-slide">
                                <a href="<?= $serviceUrl ?>" class="finwert-service-card">
                                    <div class="finwert-card-content">
                                        <div class="finwert-card-top">
                                            <span class="finwert-card-number"><?= str_pad((string) $serviceIndex, 2, '0', STR_PAD_LEFT) ?></span>
                                            <span class="finwert-card-line"></span>
                                            <span class="finwert-card-icon"><i class="fa-solid <?= $serviceIcon ?>"></i></span>
                                        </div>
                                        <h3><?= $serviceTitle ?></h3>
                                        <p><?= $serviceDescription ?></p>
                                    </div>
                                    <div class="finwert-card-image">
                                        <img src="<?= $serviceImage ?>" alt="<?= $serviceTitle ?>">
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="finwert-stats-strip" data-sal="slide-up" data-sal-duration="900" data-sal-delay="180"
                    data-sal-easing="ease-in-out">
                    <div class="finwert-stat">
                        <span class="finwert-stat-icon"><i class="fa-solid fa-users"></i></span>
                        <div><strong><span class="counter">1000</span>+</strong><p>Clients Served</p><small>Across diverse industries</small></div>
                    </div>
                    <div class="finwert-stat">
                        <span class="finwert-stat-icon"><i class="fa-solid fa-user-group"></i></span>
                        <div><strong><span class="counter">100</span>+</strong><p>Team Members</p><small>Expertise across finance &amp; advisory</small></div>
                    </div>
                    <div class="finwert-stat">
                        <span class="finwert-stat-icon"><i class="fa-solid fa-award"></i></span>
                        <div><strong><span class="counter">98</span>%</strong><p>Client Retention</p><small>Built on trust &amp; results</small></div>
                    </div>
                    <div class="finwert-stat">
                        <span class="finwert-stat-icon"><i class="fa-solid fa-shield-halved"></i></span>
                        <div><strong><span class="counter">15</span>+</strong><p>Years of Excellence</p><small>Delivering lasting value</small></div>
                    </div>
                </div>
            </div>
        </section>


        
    <section class="finwert-cofounder-section pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 mb-30">
                    <div class="finwert-cofounder-panel" data-sal="slide-right" data-sal-duration="900">
                        <span>Clarity For Your Next Move</span>
                        <h2>Turn financial insight into <em>confident decisions.</em></h2>
                    </div>
                </div>
                <div class="col-xl-7 mb-30">
                    <div class="finwert-cofounder-content" data-sal="slide-up" data-sal-duration="900">
                        <p class="finwert-cofounder-kicker">Know your numbers. Plan your next move.</p>
                        <p>Understand your financial performance, identify potential risks, and prepare for funding discussions with practical insights tailored to your business.</p>
                        <div class="finwert-cofounder-grid">
                            <a href="service-single-accounting.php">Accurate Books</a>
                            <a href="service-single-virtual-cfo.php">Financial Planning</a>
                            <a href="service-single-debt-fundraising.php">Funding Readiness</a>
                            <a href="service-single-due-diligence.php">Risk Visibility</a>
                            <a href="service-single-tax-advisory.php">Tax Clarity</a>
                            <a href="service-single-growth-capital.php">Investor Confidence</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= Banner section End =================-->

    <?php if (!empty($finwertClients)): ?>
        <section class="finwert-home-clients" aria-labelledby="finwert-home-clients-title">
            <div class="finwert-home-clients-heading" data-sal="slide-up" data-sal-duration="900">
                <span>Our Clientele</span>
                <h2 id="finwert-home-clients-title">Trusted by ambitious businesses</h2>
            </div>
            <div class="finwert-home-clients-viewport" data-sal="slide-up" data-sal-duration="900" data-sal-delay="100">
                <?php foreach ($finwertClientRows as $rowIndex => $clientRow): ?>
                    <div class="finwert-home-clients-row">
                        <div class="finwert-home-clients-track">
                            <?php for ($copy = 0; $copy < 2; $copy++): ?>
                                <div class="finwert-home-clients-group"<?php echo $copy === 1 ? ' aria-hidden="true"' : ''; ?>>
                                    <?php foreach ($clientRow as $clientName => $clientLogo): ?>
                                        <div class="finwert-home-client-logo">
                                            <img src="<?php echo htmlspecialchars($clientLogo, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo $copy === 0 ? htmlspecialchars($clientName, ENT_QUOTES, 'UTF-8') : ''; ?>" loading="lazy">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>

     <!--================= About section start =================-->
        <section class="finwert-home-about vl-about-area pt-100 pb-70">
            <div class="container">
                <div class="row flex-xl-row flex-column-reverse">
                    <div class="col-xl-6 mb-30">
                        <div class="vl-about-warp-6 ml-75">
                            <!-- thumb area -->
                            <div class="vl-about-item-thumb vl-about-item-thumb-6 mb-20">
                                <a class="vl-clip-anim br-16 image-anime" href="#">
                                    <img class="vl-anim-img w-100" data-animate="true"
                                        src="assets/img/myimage/h1.png" alt="Business finance advisory">
                                </a>
                            </div>
                            <!-- counter box area -->
                            <div class="vl-about-box-flex-6" data-sal="slide-up" data-sal-duration="1100"
                                data-sal-delay="100" data-sal-easing="ease-in-out">
                                <p class="para text-anime-style-3"><b>Empowering Business &amp; Finance </b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-30">
                        <div class="vl-about-wrap-6 mr-75">
                            <!-- section title -->
                            <div class="vl-section-title vl-section-title-white mb-48">
                                <!-- subtitle -->
                                <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                    data-sal-easing="ease-in-out"> <span><i class="fa-solid fa-circle-info" aria-hidden="true"></i></span>
                                    About Us</h4>
                                <!-- title -->
                                <h2 class="title text-anime-style-2 pt-16 pb-16">Your Partner In Business Growth.</h2>
                                <p class="para text-anime-style-3">Finwert supports businesses across India with finance, accounting, and compliance solutions from Mumbai and Bangalore.</p>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <!-- about sm thumb -->
                                    <div class="vl-about-thumb-sm-2 reveal image-anime mb-30">
                                        <img class="w-100" src="assets/img/myimage/h2.png"
                                            alt="Financial planning and analysis">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6" data-sal="slide-up" data-sal-duration="1100"
                                    data-sal-delay="100" data-sal-easing="ease-in-out">
                                    <div class="vl-about-icon-box-wrap-flex-6">
                                        <!-- single about icon box -->
                                        <div class="about-icon-box-6 mb-28">
                                            <!-- icon -->
                                            <div class="icon">
                                                <span><i class="fa-solid fa-briefcase" aria-hidden="true"></i></span>
                                            </div>
                                            <!-- content -->
                                            <div class="content">
                                                <h4 class="title"><a href="team.php">Experienced Partners</a></h4>
                                                <p class="para">Partners with 15+ years in finance.</p>
                                            </div>
                                        </div>

                                        <!-- single about icon box -->
                                        <div class="about-icon-box-6 mb-28">
                                            <!-- icon -->
                                            <div class="icon">
                                                <span><i class="fa-solid fa-layer-group" aria-hidden="true"></i></span>
                                            </div>
                                            <!-- content -->
                                            <div class="content">
                                                <h4 class="title"><a href="services.php">Integrated Support</a></h4>
                                                <p class="para">Finance and compliance under one roof.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="vl-btn-box-flex">
                                    <!-- btn -->
                                    <div class="btn-box-6" data-sal="slide-up" data-sal-duration="1100"
                                        data-sal-delay="100" data-sal-easing="ease-in-out">
                                        <a href="about-us.php" class="vl-primary-btn-6"> <span class="arrow-1"><i
                                                    class="fa-regular fa-arrow-right"></i></span> Get to Know Us <span
                                                class="arrow-2"><i class="fa-regular fa-arrow-right"></i></span></a>
                                    </div>

                                    <!-- phone box wrap -->
                                    <div class="phone-box-flex" data-sal="slide-up" data-sal-duration="1100"
                                        data-sal-delay="100" data-sal-easing="ease-in-out">
                                        <div class="icon">
                                            <span><i class="fa-solid fa-phone" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Talk To Our Team</h4>
                                            <a href="tel:+919773149764" class="number">+91 97731 49764</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

        <?php if (false): // Services showcase temporarily disabled. ?>
  <!--================= Service section start =================-->
        <section class="vkl-gray-bg-16 comn-relative fix pt-100 pb-100 finwert-services-showcase">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <!-- sec title -->
                        <div class="vl-section-title vl-section-title-white mb-60">
                            <!-- subtitle -->
                            <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                data-sal-easing="ease-in-out"> <span><img
                                        src="assets/img/insurance/icon/sub-title-icon-9.1.svg" alt=""></span> Our
                                Services </h4>
                            <!-- title -->
                            <h2 class="title text-anime-style-2 pt-16">Financial Services for Every Stage of Growth</h2>
                        </div>
                    </div>
                </div>

                <div class="vl-portfolio-area-three p-relative" data-sal="slide-up" data-sal-duration="1100"
                    data-sal-delay="100" data-sal-easing="ease-in-out">
                    <div class="swiper serviceSwiperActive7 vl-test-slider-space">
                        <div class="swiper-wrapper">
                            <?php foreach ($finwertServices as $serviceKey => $service): ?>
                                <?php
                                $serviceTitle = htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8');
                                $serviceImage = htmlspecialchars($service['image'], ENT_QUOTES, 'UTF-8');
                                $serviceDescription = htmlspecialchars($service['short'], ENT_QUOTES, 'UTF-8');
                                $serviceUrl = htmlspecialchars($finwertServiceLinks[$serviceKey], ENT_QUOTES, 'UTF-8');
                                ?>
                                <div class="swiper-slide">
                                    <div class="servicebox__wrap9">
                                        <div class="servicebox__wrap9-thumb">
                                            <img src="<?= $serviceImage ?>" alt="<?= $serviceTitle ?>">
                                            <div class="servicebox__wrap9-thumb-content">
                                                <h4 class="title"><?= $serviceTitle ?></h4>
                                            </div>
                                            <div class="servicebox__wrap9-hover-content">
                                                <h4 class="title"><a href="<?= $serviceUrl ?>"><?= $serviceTitle ?></a></h4>
                                                <p class="para"><?= $serviceDescription ?></p>
                                                <a href="<?= $serviceUrl ?>" class="readmore">Explore Service <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- navigation -->
                    <div class="vl-swiper-servicenavigation9">
                        <div class="service-button-next-9 service-button-9"><i class="fa-regular fa-angle-left"></i>
                        </div>
                        <div class="service-button-prev-9 service-button-9"><i class="fa-regular fa-angle-right"></i>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--================= Service section End =================-->
        <?php endif; ?>

    <?php if (false): // Why choose us section temporarily disabled. ?>
    <!--================= Why choose us section start =================-->
    <section class="vl-choose-area vkl-gray-white-bg finwert-why-section fix pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mb-60">
                        <div class="vl-choose-wrap-content-1">
                            <!-- sec title -->
                            <div class="vl-section-title">
                                <!-- subtitle -->
                                <h4 class="sub-title"> <span><img src="assets/img/icon/sub-title-icon1.1.html"
                                            alt=""></span> Why Choose Us </h4>
                                <!-- title -->
                                <h2 class="title pt-16">Clear Advice. Confident Decisions.</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-1"></div>
                    <div class="col-xl-5 mb-60">
                        <div class="vl-choose-wrap-content-2">
                            <!-- sec title -->
                            <div class="vl-section-title" data-sal="slide-up" data-sal-duration="1100"
                                data-sal-delay="100" data-sal-easing="ease-in-out">
                                <p>Understand your options, assess the risks, and choose your next move with practical financial guidance built around your business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 mb-30">
                        <!-- thumbnail -->
                        <div class="vl-choose-thumb-inner image-anime" data-sal="slide-up" data-sal-duration="1100"
                            data-sal-delay="100" data-sal-easing="ease-in-out">
                            <img class="w-100" src="assets/img/whychoose.png"
                                alt="Finwert financial consulting team">
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="vl-mission-wrap-about">
                            <!-- vl mission slider -->
                            <div class="swiper MissionSwiper p-relative mb-40">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="vl-misson-thumb vl-misson-thumb-2">
                                            <h3 class="title">Advice That Fits Your Business</h3>
                                            <p class="para">Recommendations shaped around your priorities, stage, and financial position.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="vl-misson-thumb vl-misson-thumb-2">
                                            <h3 class="title">Clarity Before You Commit</h3>
                                            <p class="para">See the financial risks and implications before making important business decisions.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="vl-misson-thumb vl-misson-thumb-2">
                                            <h3 class="title">A Clear Way Forward</h3>
                                                <p class="para">Turn financial analysis into practical steps your team can act on with confidence.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- navigation -->
                                <div class="vl-swiper-navigation vl-swiprwrap">
                                    <div class="vlmission-button-next vlmission-button"><i
                                            class="fa-regular fa-angle-left"></i></div>
                                    <div class="vlmission-button-prev vlmission-button"><i
                                            class="fa-regular fa-angle-right"></i></div>
                                </div>
                            </div>




                            <div class="tp-team-skill-info tp-team-skill-info-2">
                                <div class="tp-skill-bar">
                                    <!-- single progress bar -->
                                    <div class="tp-skill-item tp-skill-item-2 mb-25">
                                        <label>Decision Clarity</label>
                                        <div class="progress-outer progress-outer-2 progress-2">
                                            <span class="progress-num" style="left:calc(99% - 31px)">98%</span>
                                            <div class="fix">
                                                <div class="progress wow tpSkillInLeft " data-wow-duration="1s"
                                                    data-wow-delay="0.2s" role="progressbar"
                                                    aria-label="Example with label" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 98%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single progress bar -->
                                    <div class="tp-skill-item tp-skill-item-2 mb-25">
                                        <label>Practical Execution</label>
                                        <div class="progress-outer progress-outer-2 progress-2">
                                            <span class="progress-num" style="left:calc(97% - 31px)">96%</span>
                                            <div class="fix">
                                                <div class="progress wow tpSkillInLeft " data-wow-duration="1s"
                                                    data-wow-delay="0.2s" role="progressbar"
                                                    aria-label="Example with label" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 96%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--================= Why choose us section End =================-->
    <?php endif; ?>

    



    <!-- progress -->
    <div class="paginacontainer">
        <div class="progress-wrap progress-wrap-5">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
        </div>
    </div> 

   </main>

<script>
    window.addEventListener('load', function () {
        new Swiper('.finwert-service-grid', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            keyboard: { enabled: true },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
                1200: { slidesPerView: 4 }
            }
        });
    });
</script>

<?php
require __DIR__ . '/includes/footer.php';
