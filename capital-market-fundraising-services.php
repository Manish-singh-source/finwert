<?php
$pageTitle = 'Capital Market, Fundraising & IPO Advisory | Finwert';
require __DIR__ . '/includes/header.php';
?>
<link rel="stylesheet" href="assets/css/startup-solutions.css">
<style>
    .capital-services-list {
        margin: 18px 0 0;
        padding: 0;
        list-style: none;
    }
    .capital-services-list li {
        position: relative;
        margin: 0 0 10px;
        padding-left: 22px;
        color: #516173;
        font-size: 15px;
        line-height: 1.6;
    }
    .capital-services-list li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 10px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #168cff;
    }
    .capital-services-section .startup-support-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 24px;
    }
    .capital-services-section .startup-support-card {
        position: relative;
        isolation: isolate;
        overflow: hidden;
        min-height: 100%;
        padding: 32px;
        border: 1px solid #d4e3f4;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(7, 31, 88, .05);
        transition: transform .36s cubic-bezier(.2, .75, .25, 1), box-shadow .36s ease, border-color .36s ease;
    }
    .capital-services-section .startup-support-card::before {
        position: absolute;
        z-index: -1;
        top: 0;
        right: 0;
        left: 0;
        height: 3px;
        background: linear-gradient(90deg, #147bea, #57b7ff);
        content: "";
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .36s ease;
    }
    .capital-services-section .startup-support-card:hover {
        transform: translateY(-7px);
        border-color: #9cc9f4;
        box-shadow: 0 20px 42px rgba(7, 31, 88, .13);
    }
    .capital-services-section .startup-support-card:hover::before {
        transform: scaleX(1);
    }
    .capital-services-section .startup-card-top {
        margin-bottom: 24px;
    }
    .capital-services-section .startup-card-top i {
        display: grid;
        width: 48px;
        height: 48px;
        flex: 0 0 48px;
        place-items: center;
        border-radius: 10px;
        background: #eaf4ff;
        transition: color .3s ease, background-color .3s ease, transform .3s ease;
    }
    .capital-services-section .startup-support-card:hover .startup-card-top i {
        transform: translateY(-2px);
        background: #147bea;
        color: #fff;
    }
    .capital-services-section .startup-card-top span {
        padding: 8px 10px;
        border-radius: 5px;
        background: #f0f6fc;
        color: #29466f;
    }
    .capital-services-section .startup-support-card h3 {
        font-size: 20px;
        line-height: 1.35;
    }
    .capital-services-section .capital-services-list li {
        padding-bottom: 9px;
        border-bottom: 1px solid #edf2f8;
    }
    .capital-services-section .capital-services-list li:last-child {
        border-bottom: 0;
    }
    .capital-services-section .startup-card-line {
        width: 44px;
        transition: width .36s ease;
    }
    .capital-services-section .startup-support-card:hover .startup-card-line {
        width: 84px;
    }
    .capital-note-section {
        padding: 0 0 100px;
        background: #f7fbff;
    }
    .capital-note-box {
        padding: 36px;
        background: #fff;
        border: 1px solid rgba(15, 72, 133, .12);
        box-shadow: 0 18px 42px rgba(12, 46, 91, .08);
    }
    .capital-note-box h2 {
        margin-bottom: 18px;
        color: #061f58;
        font-size: 32px;
    }
    @media (max-width: 767px) {
        .capital-note-section { padding-bottom: 70px; }
        .capital-note-box { padding: 26px 20px; }
        .capital-note-box h2 { font-size: 26px; }
        .capital-services-section .startup-support-grid { grid-template-columns: 1fr; }
        .capital-services-section .startup-support-card { padding: 26px 22px; }
    }
    @media (prefers-reduced-motion: reduce) {
        .capital-services-section .startup-support-card,
        .capital-services-section .startup-support-card::before,
        .capital-services-section .startup-card-top i,
        .capital-services-section .startup-card-line { transition: none; }
        .capital-services-section .startup-support-card:hover,
        .capital-services-section .startup-support-card:hover .startup-card-top i { transform: none; }
        .capital-services-section .startup-support-card:hover .startup-card-line { width: 44px; }
    }
</style>
<main class="startup-page">
    <section class="finwert-page-hero">
        <div class="container finwert-page-hero-layout">
            <h1>Capital Market, Fundraising &amp; IPO Advisory Services</h1>
            <nav class="finwert-page-breadcrumb" aria-label="Breadcrumb">
                <a href="index.php">Home</a><span aria-hidden="true">/</span><a href="services.php">Services</a><span aria-hidden="true">/</span><span aria-current="page">Capital Market, Fundraising &amp; IPO Advisory Services</span>
            </nav>
            <?php include __DIR__ . '/includes/page-hero-slogan.php'; ?>
        </div>
    </section>

    <section class="startup-overview">
        <div class="container startup-overview-grid">
            <div class="startup-visual">
                <img src="assets/img/myimage/04_Growth_Capital_Fundraising.jpg" alt="Capital market fundraising and IPO advisory">
                <div class="startup-image-note"><span>CAPITAL MARKET ADVISORY</span><strong>Access strategic capital<br>with confidence.</strong></div>
                <div class="startup-expertise"><strong>IPO readiness</strong><span>Fundraising to listing support</span></div>
            </div>
            <div class="startup-intro">
                <span class="startup-eyebrow">Empowering Business &amp; Finance</span>
                <h2>Helping Businesses Access Strategic Capital With Confidence.</h2>
                <p>At Finwert Advisors, our Capital Market &amp; Fundraising practice supports companies at every financial stage&mdash;expansion, stability, long-term value, or IPO readiness.</p>
                <p>With years of expertise, we secure strategically aligned capital, leveraging financial intelligence, institutional networks, and deep market insight to identify, structure, and execute optimal funding solutions with leaders.</p>
                <div class="startup-tool-tags"><span><i class="fa-solid fa-chart-line" aria-hidden="true"></i> Equity fundraising</span><span><i class="fa-solid fa-building-columns" aria-hidden="true"></i> IPO advisory</span></div>
                <a class="startup-button mt-4" href="contact.php">Discuss capital raising <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </section>

    <section class="startup-support capital-services-section">
        <div class="container">
            <div class="startup-section-heading">
                <div><span class="startup-eyebrow">Capital Market, Fundraising &amp; IPO Advisory Services</span><h2>Our service areas.</h2></div>
                <p>Complete capital raising and advisory support across equity, IPO readiness, debt financing, restructuring, refinancing, and loan syndication.</p>
            </div>
            <div class="startup-support-grid">
                <article class="startup-support-card"><div class="startup-card-top"><i class="fa-solid fa-seedling" aria-hidden="true"></i><span>01 / EQUITY</span></div><h3>EQUITY FUNDRAISING</h3><p>Strategic equity funding to propel sustainable long-term expansion</p><ul class="capital-services-list"><li>End-To-End Fundraising Execution</li><li>Targeted Investor Identification</li><li>IPO Readiness &amp; Listing Support</li><li>Valuation Readiness &amp; Financial Strength</li><li>Investment Narrative &amp; Pitch Storytelling</li></ul><div class="startup-card-line"></div></article>
                <article class="startup-support-card"><div class="startup-card-top"><i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i><span>02 / IPO</span></div><h3>IPO ADVISORY</h3><p>End-to-end support to prepare businesses for a public market journey</p><ul class="capital-services-list"><li>IPO Readiness Assessment</li><li>Financial &amp; Compliance Preparation</li><li>Listing Strategy &amp; Documentation Support</li><li>Pre-IPO Governance Advisory</li></ul><div class="startup-card-line"></div></article>
                <!-- <article class="startup-support-card"><div class="startup-card-top"><i class="fa-solid fa-wallet" aria-hidden="true"></i><span>03 / DEBT</span></div><h3>DEBT FINANCING</h3><p>Structured funding for operational continuity and growth acceleration</p><ul class="capital-services-list"><li>Working Capital Loan Solutions</li><li>Term Loans &amp; Project Financing</li><li>Short-Term &amp; Bridge Funding</li><li>Customised Funding Structures</li></ul><div class="startup-card-line"></div></article> -->
                <article class="startup-support-card"><div class="startup-card-top"><i class="fa-solid fa-repeat" aria-hidden="true"></i><span>04 / REFINANCE</span></div><h3>LOAN RESTRUCTURING &amp; REFINANCING</h3><p>Optimizing existing debt for financial stability and improved cash flow</p><p>As businesses evolve, so do their capital requirements. We help companies realign their existing loan structures to ensure long-term viability</p><ul class="capital-services-list"><li>Comprehensive Debt Term Assessment</li><li>Lender Negotiation &amp; Debt Restructuring</li><li>Refinancing Support for Better Terms</li><li>Cash-Flow Optimization Strategy</li></ul><div class="startup-card-line"></div></article>
                <article class="startup-support-card"><div class="startup-card-top"><i class="fa-solid fa-lock" aria-hidden="true"></i><span>05 / SECURITIES</span></div><h3>SYNDICATION OF LOANS AGAINST LISTED SECURITIES</h3><p>Liquidity without equity dilution&mdash;smart financing for promoters &amp; businesses</p><p>We facilitate loan syndication secured by listed securities, allowing companies and promoters to unlock liquidity while retaining ownership control.</p><ul class="capital-services-list"><li>Instant Capital Access Without Equity Dilution</li><li>Regulatory-Aligned, Efficient Execution</li><li>Customized Facility Structuring</li><li>Optimized Lender Negotiations</li></ul><div class="startup-card-line"></div></article>
            </div>
        </div>
    </section>

    <section class="capital-note-section">
        <div class="container">
            <div class="capital-note-box">
                <h2>Why Businesses Choose Finwert for Capital Raising</h2>
                <ul class="capital-services-list">
                    <li>Drawing from insights across the entire financial ecosystem, Finwert provides unmatched value in fundraising:</li>
                    <li>End-to-end transaction support with strong investor and lender networks.</li>
                    <li>Strategic, compliant, and analytical approach to deliver future-ready financing.</li>
                    <li>Tailored capital structures backed by deep financial expertise and robust financial modelling.</li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
