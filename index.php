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
        'image' => 'assets/img/myimage/02_Virtual_CFO_Services.jpg',
    ],
    'debt-fundraising' => [
        'title' => 'Debt Financing',
        'short' => 'Structured debt support for working capital, expansion, acquisition, and project financing needs.',
        'image' => 'assets/img/myimage/03_Debt_Fundraising.jpg',
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

                <div class="finwert-service-grid">
                    <a href="service-single-growth-capital.php" class="finwert-service-card" data-sal="slide-up" data-sal-duration="900" data-sal-delay="100"
                        data-sal-easing="ease-in-out">
                        <div class="finwert-card-content">
                            <div class="finwert-card-top">
                                <span class="finwert-card-number">01</span>
                                <span class="finwert-card-line"></span>
                                <span class="finwert-card-icon"><i class="fa-solid fa-building-columns"></i></span>
                            </div>
                            <h3>Capital Market, Fundraising &amp; IPO Advisory</h3>
                            <p>Investor-ready financial storytelling, capital structuring, and listing-readiness support.</p>
                        </div>
                        <div class="finwert-card-image">
                            <img src="assets/img/b1.png" alt="Growth capital advisory">
                        </div>
                    </a>

                    <a href="service-single-startup-solutions.php" class="finwert-service-card" data-sal="slide-up" data-sal-duration="900" data-sal-delay="180"
                        data-sal-easing="ease-in-out">
                        <div class="finwert-card-content">
                            <div class="finwert-card-top">
                                <span class="finwert-card-number">02</span>
                                <span class="finwert-card-line"></span>
                                <span class="finwert-card-icon"><i class="fa-solid fa-rocket"></i></span>
                            </div>
                            <h3>Startup Solutions</h3>
                            <p>Company incorporation, finance setup, compliance, and founder support from day one.</p>
                        </div>
                        <div class="finwert-card-image">
                            <img src="assets/img/b2.png" alt="Startup advisory meeting">
                        </div>
                    </a>

                    <a href="service-single-virtual-cfo.php" class="finwert-service-card" data-sal="slide-up" data-sal-duration="900" data-sal-delay="260"
                        data-sal-easing="ease-in-out">
                        <div class="finwert-card-content">
                            <div class="finwert-card-top">
                                <span class="finwert-card-number">03</span>
                                <span class="finwert-card-line"></span>
                                <span class="finwert-card-icon"><i class="fa-solid fa-chart-pie"></i></span>
                            </div>
                            <h3>Virtual CFO Services</h3>
                            <p>On-demand CFO leadership for MIS, forecasting, board reporting, and strategic decisions.</p>
                        </div>
                        <div class="finwert-card-image">
                            <img src="assets/img/b3.png" alt="Virtual CFO dashboard">
                        </div>
                    </a>

                    <a href="service-single-accounting.php" class="finwert-service-card" data-sal="slide-up" data-sal-duration="900" data-sal-delay="340"
                        data-sal-easing="ease-in-out">
                        <div class="finwert-card-content">
                            <div class="finwert-card-top">
                                <span class="finwert-card-number">04</span>
                                <span class="finwert-card-line"></span>
                                <span class="finwert-card-icon"><i class="fa-solid fa-calculator"></i></span>
                            </div>
                            <h3>Accounting &amp; Financial Services</h3>
                            <p>Clean books, reporting discipline, controls, and compliance aligned to growth plans.</p>
                        </div>
                        <div class="finwert-card-image">
                            <img src="assets/img/b4.png" alt="Accounting and financial services">
                        </div>
                    </a>
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
                            <a href="service-single-debt-fundraising.php">Lender Readiness</a>
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
        <!--================= About section End =================-->

    <!--================= About section start =================-->
    
    

    
        <!--================= Service section start =================-->
        <section class="vkl-gray-bg-16 finwert-services-showcase comn-relative fix pt-100 pb-100"
            >
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <!-- sec title -->
                        <div class="vl-section-title vl-section-title-white mb-60">
                            <!-- subtitle -->
                            <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                data-sal-easing="ease-in-out"> <span></span> Our
                                Services </h4>
                            <!-- title -->
                            <h2 class="title text-anime-style-2 pt-16">Financial Expertise For Every Stage Of Your Business</h2>
                        </div>
                    </div>
                </div>

                <div class="vl-portfolio-area-three p-relative" data-sal="slide-up" data-sal-duration="1100"
                    data-sal-delay="100" data-sal-easing="ease-in-out">
                    <div class="swiper serviceSwiperActive7 vl-test-slider-space">
                        <div class="swiper-wrapper">
                            <?php foreach ($finwertServices as $serviceSlug => $serviceItem): ?>
                            <div class="swiper-slide">
                                <div class="servicebox__wrap9">
                                    <div class="servicebox__wrap9-thumb">
                                        <img src="<?php echo htmlspecialchars($serviceItem['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                            alt="<?php echo htmlspecialchars($serviceItem['title'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
                                        <div class="servicebox__wrap9-thumb-content">
                                            <h4 class="title"><?php echo htmlspecialchars($serviceItem['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                                        </div>
                                        <div class="servicebox__wrap9-hover-content">
                                            <h4 class="title"><a href="<?php echo htmlspecialchars((['startup-solutions' => 'service-single-startup-solutions.php', 'accounting-financial' => 'service-single-accounting.php', 'due-diligence' => 'service-single-due-diligence.php', 'legal-secretarial' => 'service-single-legal-secretarial.php', 'tax-advisory' => 'service-single-tax-advisory.php', 'corporate' => 'service-single-corporate.php', 'debt-fundraising' => 'service-single-debt-fundraising.php', 'virtual-cfo' => 'virtual-cfo-services.php'][$serviceSlug] ?? 'services.php#' . $serviceSlug), ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($serviceItem['title'], ENT_QUOTES, 'UTF-8'); ?></a></h4>
                                            <p class="para"><?php echo htmlspecialchars($serviceItem['short'], ENT_QUOTES, 'UTF-8'); ?></p>
                                            <a href="<?php echo htmlspecialchars((['startup-solutions' => 'service-single-startup-solutions.php', 'accounting-financial' => 'service-single-accounting.php', 'due-diligence' => 'service-single-due-diligence.php', 'legal-secretarial' => 'service-single-legal-secretarial.php', 'tax-advisory' => 'service-single-tax-advisory.php', 'corporate' => 'service-single-corporate.php', 'debt-fundraising' => 'service-single-debt-fundraising.php', 'virtual-cfo' => 'virtual-cfo-services.php'][$serviceSlug] ?? 'services.php#' . $serviceSlug), ENT_QUOTES, 'UTF-8'); ?>" class="readmore">Read More <span><i class="fa-regular fa-arrow-right"></i></span></a>
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

    <!--================= At a glance section start =================-->
    <!-- <section id="at-a-glance" class="finwert-glance-section pt-100 pb-100">
        <div class="container">
            <div class="finwert-glance-intro" data-sal="slide-up" data-sal-duration="1000">
                <p class="finwert-glance-kicker"><span></span> AT A GLANCE</p>
                <h2>Finance Expertise, Built for Every Stage</h2>
                <p>Finwert delivers practical solutions across incorporation, finance operations, compliance, fundraising, transaction readiness, and listing preparation for ambitious businesses.</p>
            </div>

            <div class="finwert-glance-grid">
                <article class="finwert-glance-card finwert-glance-years" data-sal="slide-up" data-sal-duration="900">
                    <strong>15+ Years</strong>
                    <p>Partner consulting experience</p>
                </article>

                <article class="finwert-glance-card finwert-glance-startup" data-sal="slide-up" data-sal-duration="900">
                    <div class="finwert-glance-icon"><i class="fa-solid fa-rocket"></i></div>
                    <div>
                        <h3>Startup Solutions</h3>
                        <p>Advisory for early-stage and growth-focused businesses</p>
                    </div>
                </article>

                <article class="finwert-glance-card finwert-glance-business" data-sal="slide-up" data-sal-duration="900">
                    <h3>Business, Finance<br>&amp; Compliance</h3>
                        <p>Integrated support from startup setup to capital market readiness</p>
                    <div class="finwert-glance-wheel" aria-hidden="true"><span></span><i></i></div>
                </article>

                <article class="finwert-glance-card finwert-glance-cfo" data-sal="slide-up" data-sal-duration="900">
                    <div class="finwert-glance-icon"><i class="fa-solid fa-user-tie"></i><small><i class="fa-solid fa-chart-line"></i></small></div>
                    <div>
                        <h3>Virtual CFO</h3>
                        <p>Planning, MIS, reporting<br>and financial strategy</p>
                    </div>
                </article>

                <article class="finwert-glance-card finwert-glance-debt" data-sal="slide-up" data-sal-duration="900">
                    <div class="finwert-glance-icon"><i class="fa-solid fa-coins"></i></div>
                    <div>
                        <h3>Debt &amp; Capital</h3>
                        <p>Debt, equity, transaction, and listing advisory</p>
                    </div>
                </article>

                <article class="finwert-glance-card finwert-glance-tax" data-sal="slide-up" data-sal-duration="900">
                    <div class="finwert-glance-icon"><i class="fa-solid fa-file-invoice"></i></div>
                    <div>
                        <h3>Tax &amp; Compliance</h3>
                        <p>Accounting, taxation and regulatory support</p>
                    </div>
                </article>

                <article class="finwert-glance-card finwert-glance-location" data-sal="slide-up" data-sal-duration="900">
                    <h3>Mumbai &amp; Bangalore</h3>
                    <p>Serving businesses<br>across India</p>
                    <div class="finwert-glance-globe" aria-hidden="true">
                        <span class="finwert-glance-pin finwert-glance-pin-one"><i></i></span>
                        <span class="finwert-glance-pin finwert-glance-pin-two"><i></i></span>
                    </div>
                </article>
            </div>
        </div>
    </section> -->

    <!--================= At a glance section End =================-->



    <!--================= Work section start =================-->
    <section id="work" class="vkl-gray-bg-6 finwert-work-section fix pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mx-auto text-center mb-60">
                        <!-- sec title -->
                        <div class="vl-section-title vl-section-title-5">
                            <!-- subtitle -->
                            <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                data-sal-easing="ease-in-out"> <span></span> How we Work </h4>
                            <!-- title -->
                            <h2 class="title text-anime-style-3 pt-16 pt-16">A Clear Process For Smarter Financial Decisions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single work box -->
                    <div class="col-xl-4 col-md-6 mb-30" data-sal="slide-right" data-sal-duration="1100"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="workbox__process__item">
                            <!-- top content -->
                            <div class="workbox__process__item-topcontent">
                                <div class="workbox__process__item-topcontent-step">
                                    <h4 class="title">Step</h4>
                                    <div class="workbox__process__item-topcontent-step-number">
                                        <h2 class="title">01</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- hover content -->
                            <div class="workbox__process__item-bottomcontent">
                                <h3 class="title">Understand &amp; Assess</h3>
                                <p class="para">We understand your business, financial position, compliance needs, and growth goals to identify the right priorities.</p>
                                <!-- arrow -->
                                <div class="up-arrow">
                                    <span><img src="assets/img/corporateconsulting/icon/vl-work-up-arrow.png"
                                            alt=""></span>
                                </div>
                                <div class="number">
                                    <h2 class="larg-title">01</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single work box -->
                    <div class="col-xl-4 col-md-6 mb-30" data-sal="slide-up" data-sal-duration="1100"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="workbox__process__item">
                            <!-- top content -->
                            <div class="workbox__process__item-topcontent">
                                <div class="workbox__process__item-topcontent-step">
                                    <h4 class="title">Step</h4>
                                    <div class="workbox__process__item-topcontent-step-number">
                                        <h2 class="title">02</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- hover content -->
                            <div class="workbox__process__item-bottomcontent">
                                <h3 class="title">Plan &amp; Advise</h3>
                                <p class="para">We create a practical roadmap across finance, accounting, fundraising, and strategy, tailored to your business.</p>
                                <!-- arrow -->
                                <div class="up-arrow">
                                    <span><img src="assets/img/corporateconsulting/icon/vl-work-up-arrow.png"
                                            alt=""></span>
                                </div>
                                <div class="number">
                                    <h2 class="larg-title">02</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single work box -->
                    <div class="col-xl-4 col-md-6 mb-30" data-sal="slide-left" data-sal-duration="1100"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="workbox__process__item">
                            <!-- top content -->
                            <div class="workbox__process__item-topcontent">
                                <div class="workbox__process__item-topcontent-step">
                                    <h4 class="title">Step</h4>
                                    <div class="workbox__process__item-topcontent-step-number">
                                        <h2 class="title">03</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- hover content -->
                            <div class="workbox__process__item-bottomcontent">
                                <h3 class="title">Execute &amp; Support</h3>
                                <p class="para">We help implement the plan, track performance, and provide ongoing support through Virtual CFO and advisory solutions.</p>
                                <!-- arrow -->
                                <div class="up-arrow">
                                    <span><img src="assets/img/corporateconsulting/icon/vl-work-up-arrow.png"
                                            alt=""></span>
                                </div>
                                <div class="number">
                                    <h2 class="larg-title">03</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--================= Work section End =================-->

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

    



    <!-- progress -->
    <div class="paginacontainer">
        <div class="progress-wrap progress-wrap-5">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
        </div>
    </div> 

   </main>

<?php
require __DIR__ . '/includes/footer.php';
