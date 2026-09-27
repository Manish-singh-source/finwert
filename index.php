<?php
require_once __DIR__ . '/includes/service-data.php';
require __DIR__ . '/includes/header.php';

?>
<style>
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
                            class="finwert-typing-text" data-typing-phrases="To Grow Your Business|From Incorporation To Listing|As Your Finance Co-Founder"
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
                    <article class="finwert-service-card" data-sal="slide-up" data-sal-duration="900" data-sal-delay="100"
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
                        <a class="finwert-learn-btn" href="service-single.php?service=growth-capital">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </article>

                    <article class="finwert-service-card" data-sal="slide-up" data-sal-duration="900" data-sal-delay="180"
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
                        <a class="finwert-learn-btn" href="service-single.php?service=startup-solutions">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </article>

                    <article class="finwert-service-card" data-sal="slide-up" data-sal-duration="900" data-sal-delay="260"
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
                        <a class="finwert-learn-btn" href="service-single.php?service=virtual-cfo">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </article>

                    <article class="finwert-service-card" data-sal="slide-up" data-sal-duration="900" data-sal-delay="340"
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
                        <a class="finwert-learn-btn" href="service-single-accounting.php">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                    </article>
                </div>

                <div class="finwert-stats-strip" data-sal="slide-up" data-sal-duration="900" data-sal-delay="180"
                    data-sal-easing="ease-in-out">
                    <div class="finwert-stat">
                        <span class="finwert-stat-icon"><i class="fa-solid fa-users"></i></span>
                        <div><strong>200+</strong><p>Clients Served</p><small>Across diverse industries</small></div>
                    </div>
                    <div class="finwert-stat">
                        <span class="finwert-stat-icon"><i class="fa-solid fa-globe"></i></span>
                        <div><strong>25+</strong><p>Markets Reached</p><small>Global presence &amp; reach</small></div>
                    </div>
                    <div class="finwert-stat">
                        <span class="finwert-stat-icon"><i class="fa-solid fa-award"></i></span>
                        <div><strong>98%</strong><p>Client Retention</p><small>Built on trust &amp; results</small></div>
                    </div>
                    <div class="finwert-stat">
                        <span class="finwert-stat-icon"><i class="fa-solid fa-shield-halved"></i></span>
                        <div><strong>10+</strong><p>Years of Excellence</p><small>Delivering lasting value</small></div>
                    </div>
                </div>
            </div>
        </section>

    <section class="finwert-cofounder-section pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 mb-30">
                    <div class="finwert-cofounder-panel" data-sal="slide-right" data-sal-duration="900">
                        <span>Finance Co-Founder</span>
                        <h2>We work as your <em>Finance Co-Founder.</em></h2>
                    </div>
                </div>
                <div class="col-xl-7 mb-30">
                    <div class="finwert-cofounder-content" data-sal="slide-up" data-sal-duration="900">
                        <p class="finwert-cofounder-kicker">A partner through every milestone</p>
                        <p>We support companies at every stage — from incorporation to stock market listing — and scale our team at the client's evolving needs.</p>
                        <div class="finwert-cofounder-grid">
                            <a href="service-single.php?service=startup-solutions">Incorporation</a>
                            <a href="service-single.php?service=virtual-cfo">Growth</a>
                            <a href="service-single.php?service=debt-fundraising">Fundraising</a>
                            <a href="transactions.php">Strategic Transactions</a>
                            <a href="service-single.php?service=growth-capital">Pre-IPO</a>
                            <a href="service-single.php?service=growth-capital">Stock Market Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= Banner section End =================-->

    <!--================= About section start =================-->
    
    <section id="about" class="vkl-gray-bg-6 vl-about-area finwert-about-section pt-100 pb-70">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-xl-4 mb-30">
                        <div class="vl-section-title vl-section-title-5">
                            <!-- subtitle -->
                            <h4 class="sub-title finwert-about-subtitle" data-sal="slide-right" data-sal-duration="1100" data-sal-delay="100"
                                data-sal-easing="ease-in-out"> <span><img src="assets/img/icon/sub-title-icon5.1.svg"
                                        alt=""></span> About Us</h4>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="vl-section-title vl-section-title-5 finwert-about-heading" data-sal="slide-up" data-sal-duration="1100"
                            data-sal-delay="100" data-sal-easing="ease-in-out">
                            <!-- title -->
                            <h2 class="title text-anime-style-3">We Support Companies At Every Stage, From Incorporation
                                To Stock Market Listing, With Finance Leadership That Scales As They Grow.</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-xl-4 col-md-6 mb-30" data-sal="slide-up" data-sal-duration="1100"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="vl_about_content-5">
                            <p class="para text-anime-style-3">Finwert is a dynamic business consulting firm offering one-stop support across finance, compliance, accounting, fundraising, taxation, and corporate advisory. We work like an extended finance leadership team for startups, SMEs, and growth-stage companies across India.</p>
                            <div class="vl_about_content-bottom-text">
                                <h4 class="title"><span class="counter">15</span><span>+</span></h4>
                                <p class="para">Years of Consulting Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <!-- thumb area -->
                        <div class="vl-about-item-thumb vl-about-item-thumb-5">
                            <a class="vl-clip-anim br-8 image-anime" href="#">
                                <img class="vl-anim-img w-100" data-animate="true"
                                    src="assets/img/ab1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <!-- thumb area -->
                        <div class="vl-about-item-thumb vl-about-item-thumb-5">
                            <a class="vl-clip-anim br-8 image-anime" href="#">
                                <img class="vl-anim-img w-100" data-animate="true"
                                    src="assets/img/ab2.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!--================= About section End =================-->

    <!--================= At a glance section start =================-->
    <section id="at-a-glance" class="finwert-glance-section pt-100 pb-100">
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
    </section>

    <!--================= At a glance section End =================-->

    <!--================= Service section start =================-->
    <section id="service" class="vkl-gray-bg-5 finwert-service-section fix pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mx-auto text-center">
                        <!-- sec title -->
                        <div class="vl-section-title vl-section-title-5 mb-60">
                            <!-- subtitle -->
                            <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                data-sal-easing="ease-in-out"> <span><img src="assets/img/icon/sub-title-icon5.1.svg"
                                alt=""></span> Strategic Financial Services </h4>
                            <!-- title -->
                            <h2 class="title text-anime-style-3 pt-16">Smart Financial Solutions To
Drive Growth, Compliance And
Business Value
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="swiper vlServiceActivefive" data-sal="slide-up" data-sal-duration="1100"
                    data-sal-delay="100" data-sal325258-easing="ease-in-out">
                    <div class="swiper-wrapper">
                        <!-- single service slide -->
                        <div class="swiper-slide">
                            <div class="servicebox__item-5">
                                <div class="servicebox__item-5-content">
                                    <div class="icon">
                                        <span><img src="assets/img/corporateconsulting/icon/vl-service-icon-5.3.png" alt=""></span>
                                    </div>
                                    <h4 class="title"><a href="service-single.php?service=startup-solutions">Startup Solutions</a></h4>
                                </div>
                                <div class="servicebox__item-5-thumb image-anime">
                                    <img class="w-100" src="assets/img/myimage/01_Startup_Solutions.jpg" alt="Startup solutions">
                                </div>
                                <div class="servicebox__item-5-arrow">
                                    <a href="service-single.php?service=startup-solutions"><span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="swiper-slide">
                            <!-- single service item -->
                            <div class="servicebox__item-5">
                                <!-- content block -->
                                <div class="servicebox__item-5-content">
                                    <div class="icon">
                                        <span><img src="assets/img/corporateconsulting/icon/vl-service-icon-5.1.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="title"><a href="service-single.php?service=virtual-cfo">Virtual CFO Services</a></h4>
                                </div>
                                <!-- thumb -->
                                <div class="servicebox__item-5-thumb image-anime">
                                    <img class="w-100"
                                        src="assets/img/myimage/02_Virtual_CFO_Services.jpg" alt="Virtual CFO advisory">
                                </div>
                                <!-- arrow -->
                                <div class="servicebox__item-5-arrow">
                                    <a href="service-single.php?service=virtual-cfo"><span><i
                                                class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="swiper-slide">
                            <!-- single service item -->
                            <div class="servicebox__item-5">
                                <!-- content block -->
                                <div class="servicebox__item-5-content">
                                    <div class="icon">
                                        <span><img src="assets/img/corporateconsulting/icon/vl-service-icon-5.2.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="title"><a href="service-single.php?service=debt-fundraising">Debt Fundraising</a></h4>
                                </div>
                                <!-- thumb -->
                                <div class="servicebox__item-5-thumb image-anime">
                                    <img class="w-100"
                                        src="assets/img/myimage/03_Debt_Fundraising.jpg" alt="Debt fundraising">
                                </div>
                                <!-- arrow -->
                                <div class="servicebox__item-5-arrow">
                                    <a href="service-single.php?service=debt-fundraising"><span><i
                                                class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="swiper-slide">
                            <!-- single service item -->
                            <div class="servicebox__item-5">
                                <!-- content block -->
                                <div class="servicebox__item-5-content">
                                    <div class="icon">
                                        <span><img src="assets/img/corporateconsulting/icon/vl-service-icon-5.3.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="title"><a href="service-single.php?service=growth-capital">Growth Capital Fundraising</a></h4>
                                </div>
                                <!-- thumb -->
                                <div class="servicebox__item-5-thumb image-anime">
                                    <img class="w-100"
                                        src="assets/img/myimage/04_Growth_Capital_Fundraising.jpg" alt="Growth capital fundraising">
                                </div>
                                <!-- arrow -->
                                <div class="servicebox__item-5-arrow">
                                    <a href="service-single.php?service=growth-capital"><span><i
                                                class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="swiper-slide">
                            <!-- single service item -->
                            <div class="servicebox__item-5">
                                <!-- content block -->
                                <div class="servicebox__item-5-content">
                                    <div class="icon">
                                        <span><img src="assets/img/corporateconsulting/icon/vl-service-icon-5.4.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="title"><a href="service-single-accounting.php">Accounting &amp; Financial Services</a></h4>
                                </div>
                                <!-- thumb -->
                                <div class="servicebox__item-5-thumb image-anime">
                                    <img class="w-100"
                                        src="assets/img/myimage/05_Accounting_Financial_Services.jpg" alt="Accounting and financial services">
                                </div>
                                <!-- arrow -->
                                <div class="servicebox__item-5-arrow">
                                    <a href="service-single-accounting.php"><span><i
                                                class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="swiper-slide">
                            <!-- single service item -->
                            <div class="servicebox__item-5">
                                <!-- content block -->
                                <div class="servicebox__item-5-content">
                                    <div class="icon">
                                        <span><img src="assets/img/corporateconsulting/icon/vl-service-icon-5.1.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="title"><a href="service-single.php?service=due-diligence">Due Diligence</a></h4>
                                </div>
                                <!-- thumb -->
                                <div class="servicebox__item-5-thumb image-anime">
                                    <img class="w-100"
                                        src="assets/img/myimage/06_Due_Diligence.jpg" alt="Due diligence advisory">
                                </div>
                                <!-- arrow -->
                                <div class="servicebox__item-5-arrow">
                                    <a href="service-single.php?service=due-diligence"><span><i
                                                class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="swiper-slide">
                            <!-- single service item -->
                            <div class="servicebox__item-5">
                                <!-- content block -->
                                <div class="servicebox__item-5-content">
                                    <div class="icon">
                                        <span><img src="assets/img/corporateconsulting/icon/vl-service-icon-5.4.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="title"><a href="service-single.php?service=tax-advisory">Tax Advisory Services</a></h4>
                                </div>
                                <!-- thumb -->
                                <div class="servicebox__item-5-thumb image-anime">
                                    <img class="w-100"
                                        src="assets/img/myimage/08_Tax_Advisory_Services.jpg" alt="Tax advisory services">
                                </div>
                                <!-- arrow -->
                                <div class="servicebox__item-5-arrow">
                                    <a href="service-single.php?service=tax-advisory"><span><i
                                                class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="swiper-slide">
                            <div class="servicebox__item-5">
                                <div class="servicebox__item-5-content">
                                    <div class="icon">
                                        <span><img src="assets/img/corporateconsulting/icon/vl-service-icon-5.2.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="title"><a href="service-single.php?service=legal-secretarial">Legal &amp; Secretarial Services</a></h4>
                                </div>
                                <div class="servicebox__item-5-thumb image-anime">
                                    <img class="w-100"
                                        src="assets/img/myimage/07_Legal_Secretarial_Services.jpg"
                                        alt="Legal and secretarial services">
                                </div>
                                <div class="servicebox__item-5-arrow">
                                    <a href="service-single.php?service=legal-secretarial"><span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="swiper-slide">
                            <div class="servicebox__item-5">
                                <div class="servicebox__item-5-content">
                                    <div class="icon">
                                        <span><img src="assets/img/corporateconsulting/icon/vl-service-icon-5.3.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="title"><a href="service-single.php?service=corporate">Corporate Services</a></h4>
                                </div>
                                <div class="servicebox__item-5-thumb image-anime">
                                    <img class="w-100"
                                        src="assets/img/myimage/09_Corporate_Services.jpg"
                                        alt="Corporate business services">
                                </div>
                                <div class="servicebox__item-5-arrow">
                                    <a href="service-single.php?service=corporate"><span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- dot pagination style -->
                <div class="service-pagination55">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <!--================= Service section End =================-->

    <!--================= Work section start =================-->
    <section id="work" class="vkl-gray-bg-6 finwert-work-section fix pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mx-auto text-center mb-60">
                        <!-- sec title -->
                        <div class="vl-section-title vl-section-title-5">
                            <!-- subtitle -->
                            <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                data-sal-easing="ease-in-out"> <span><img src="assets/img/icon/sub-title-icon5.1.svg"
                                        alt=""></span> How we Work </h4>
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
                                <h2 class="title pt-16">Empowering Businesses With Smart Financial Guidance</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-1"></div>
                    <div class="col-xl-5 mb-60">
                        <div class="vl-choose-wrap-content-2">
                            <!-- sec title -->
                            <div class="vl-section-title" data-sal="slide-up" data-sal-duration="1100"
                                data-sal-delay="100" data-sal-easing="ease-in-out">
                                <p>Finwert is a dynamic business consulting firm offering one-stop support across
                                Finance, Compliance, Accounting, and Secretarial support. We help businesses grow with clarity,
                                    confidence, and practical financial insight.</p>
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
                                            <h3 class="title">Our Mission</h3>
                                            <p class="para">To provide tailored financial and secretarial assistance that
                                                helps startups and growing businesses build strong foundations,
                                                improve performance, and achieve sustainable growth.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="vl-misson-thumb vl-misson-thumb-2">
                                            <h3 class="title">Our Vision</h3>
                                            <p class="para">To help businesses across India make confident decisions,
                                                strengthen financial security, and create long-term prosperity through
                                                trusted consulting expertise.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="vl-misson-thumb vl-misson-thumb-2">
                                            <h3 class="title">Our Expertise</h3>
                                                <p class="para">From Startup Solutions and Virtual CFO Services to Debt
                                                Fundraising, Growth Capital, Due Diligence, Tax, and Secretarial
                                                support, we bring the right financial guidance together under one roof.</p>
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
                                        <label>Client Satisfaction</label>
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
                                        <label>Strategic Execution</label>
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

    <!--================= Team section start =================-->
    <section id="team" class="vkl-gray-bg-6 finwert-team-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mx-auto text-center mb-60">
                        <!-- sec title -->
                        <div class="vl-section-title vl-section-title-5">
                            <!-- subtitle -->
                            <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                data-sal-easing="ease-in-out"> <span><img src="assets/img/icon/sub-title-icon5.1.svg"
                                        alt=""></span> Meet Our Team </h4>
                            <!-- title -->
                            <h2 class="title text-anime-style-3 pt-16">Experienced Partners For Confident Business Decisions
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="finwert-team-grid" data-sal="slide-up" data-sal-duration="1100"
                    data-sal-delay="100" data-sal-easing="ease-in-out">
                    <div class="row justify-content-center">
                        <!-- single service slide -->
                        <div class="col-xl-4 col-md-6 mb-30">
                            <!-- single service item -->
                            <div class="team__wrap-five">
                                <!-- thumb -->
                                <div class="team__wrap-five-thumb">
                                    <img class="w-100" src="assets/img/myimage/ronak.png"
                                        alt="Ronak N. Dharnidharka">
                                    <!-- social -->
                                    <div class="team__wrap-five-thumb-social">
                                        <div class="share">
                                            <span><img class="share-img"
                                                    src="assets/img/corporateconsulting/icon/share-ic-5.1.svg"
                                                    alt=""></span>
                                            <!-- social icon -->
                                            <div class="share-social">
                                                <ul>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-x-twitter"></i></span></a></li>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-linkedin-in"></i></span></a>
                                                    </li>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-facebook-f"></i></span></a></li>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-instagram"></i></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="team__wrap-five-content">
                                    <h4 class="title"> <a href="#">Ronak N. Dharnidharka</a></h4>
                                    <p class="desegnitation">Partner</p>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="col-xl-4 col-md-6 mb-30">
                            <!-- single service item -->
                            <div class="team__wrap-five">
                                <!-- thumb -->
                                <div class="team__wrap-five-thumb">
                                    <img class="w-100" src="assets/img/myimage/pratik.png"
                                        alt="Pratik M. Choudhary">
                                    <!-- social -->
                                    <div class="team__wrap-five-thumb-social">
                                        <div class="share">
                                            <span><img class="share-img"
                                                    src="assets/img/corporateconsulting/icon/share-ic-5.1.svg"
                                                    alt=""></span>
                                            <!-- social icon -->
                                            <div class="share-social">
                                                <ul>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-x-twitter"></i></span></a></li>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-linkedin-in"></i></span></a>
                                                    </li>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-facebook-f"></i></span></a></li>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-instagram"></i></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="team__wrap-five-content">
                                    <h4 class="title"><a href="#">Pratik M. Choudhary</a></h4>
                                    <p class="desegnitation">Partner</p>
                                </div>
                            </div>
                        </div>
                        <!-- single service slide -->
                        <div class="col-xl-4 col-md-6 mb-30">
                            <!-- single service item -->
                            <div class="team__wrap-five">
                                <!-- thumb -->
                                <div class="team__wrap-five-thumb">
                                    <img class="w-100" src="https://finwert.com/my-images/team/Vikesh1.png"
                                        alt="Vikesh Agrawal">
                                    <!-- social -->
                                    <div class="team__wrap-five-thumb-social">
                                        <div class="share">
                                            <span><img class="share-img"
                                                    src="assets/img/corporateconsulting/icon/share-ic-5.1.svg"
                                                    alt=""></span>
                                            <!-- social icon -->
                                            <div class="share-social">
                                                <ul>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-x-twitter"></i></span></a></li>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-linkedin-in"></i></span></a>
                                                    </li>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-facebook-f"></i></span></a></li>
                                                    <li><a href="#"><span><i
                                                                    class="fa-brands fa-instagram"></i></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="team__wrap-five-content">
                                    <h4 class="title"><a href="#">Vikesh Agrawal</a></h4>
                                    <p class="desegnitation">Partner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--================= Team section End =================-->




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
