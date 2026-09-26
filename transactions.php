<?php
$pageTitle = 'Transactions | Finwert';
require __DIR__ . '/includes/header.php';

$transactionCategories = [
    ['title' => 'Fundraising', 'text' => 'Debt, growth capital, strategic investor, and pre-IPO fundraising readiness and execution support.', 'href' => 'service-single.php?service=growth-capital'],
    ['title' => 'Mergers & Acquisitions', 'text' => 'Transaction preparation, financial information support, buyer / investor coordination, and execution assistance.', 'href' => 'service-single.php?service=due-diligence'],
    ['title' => 'Due Diligence', 'text' => 'Financial review, risk identification, management information support, and diligence coordination.', 'href' => 'service-single.php?service=due-diligence'],
    ['title' => 'Capital Structuring', 'text' => 'Debt and equity mix assessment for expansion, working capital, acquisitions, and strategic finance needs.', 'href' => 'service-single.php?service=debt-fundraising'],
    ['title' => 'IPO / Pre-IPO Advisory', 'text' => 'Readiness support for financial reporting, investor information, governance, and capital market preparation.', 'href' => 'service-single.php?service=growth-capital'],
    ['title' => 'Business Sale / Divestment', 'text' => 'Financial preparation, information pack support, diligence readiness, and transaction coordination.', 'href' => 'service-single.php?service=corporate'],
];

$lifecycle = ['Strategy', 'Preparation', 'Valuation', 'Due Diligence', 'Structuring', 'Negotiation', 'Execution', 'Post-Transaction Support'];
?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");
    .transactions-page,
    .transactions-page * { font-family: "Poppins", Arial, sans-serif; letter-spacing: 0; }
    .transactions-page { background: #f5f9ff; color: #13294f; }
    .transactions-hero {
        position: relative;
        overflow: hidden;
        min-height: 620px;
        display: flex;
        align-items: center;
        padding: 150px 0 100px;
        background: linear-gradient(104deg, rgba(4, 22, 65, .98) 0%, rgba(5, 37, 90, .92) 46%, rgba(8, 62, 126, .38) 100%), url("assets/img/finwert/about/about-main.png") center / cover no-repeat;
    }
    .transactions-hero::after { content: ""; position: absolute; inset: auto 0 0; height: 7px; background: linear-gradient(90deg, #168cff, #89caff, #fff); }
    .transactions-hero .container { position: relative; z-index: 1; }
    .transactions-kicker { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 24px; color: #a8d3ff; font-size: 14px; font-weight: 700; text-transform: uppercase; }
    .transactions-kicker::before { content: ""; width: 28px; height: 2px; background: #168cff; }
    .transactions-hero h1 { max-width: 920px; margin: 0; color: #fff; font-size: 64px; font-weight: 700; line-height: 1.18; }
    .transactions-hero p { max-width: 760px; margin: 26px 0 0; color: rgba(255,255,255,.84); font-size: 19px; line-height: 1.85; }
    .transactions-hero-actions { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 36px; }
    .transactions-outline { display: inline-flex; align-items: center; justify-content: center; min-height: 58px; padding: 0 28px; border: 1px solid rgba(255,255,255,.5); color: #fff; font-weight: 700; }
    .transactions-outline:hover { background: #168cff; border-color: #168cff; color: #fff; }
    .transactions-section { padding: 100px 0; }
    .transactions-section.white { background: #fff; }
    .transactions-title { max-width: 830px; margin-bottom: 50px; }
    .transactions-title.center { margin-right: auto; margin-left: auto; text-align: center; }
    .transactions-title span { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 16px; color: #168cff; font-size: 15px; font-weight: 700; text-transform: uppercase; }
    .transactions-title span::before { content: ""; width: 22px; height: 2px; background: #168cff; }
    .transactions-title h2 { margin: 0; color: #061f58; font-size: 42px; font-weight: 700; line-height: 1.3; }
    .transactions-title p { margin: 18px 0 0; color: #516173; font-size: 17px; line-height: 1.85; }
    .transaction-card {
        display: block;
        height: 100%;
        padding: 34px;
        background: #fff;
        border: 1px solid rgba(15,72,133,.12);
        box-shadow: 0 14px 34px rgba(12,46,91,.08);
        transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
    }
    .transaction-card:hover { transform: translateY(-7px); border-color: rgba(22,140,255,.42); box-shadow: 0 20px 46px rgba(12,46,91,.13); }
    .transaction-card small { color: #168cff; font-weight: 600; }
    .transaction-card h3 { margin: 16px 0 0; color: #061f58; font-size: 25px; font-weight: 600; line-height: 1.4; }
    .transaction-card p { margin: 14px 0 0; color: #516173; line-height: 1.8; }
    .transaction-card strong { display: inline-flex; margin-top: 24px; color: #061f58; font-weight: 600; }
    .transaction-card:hover strong { color: #168cff; }
    .lifecycle-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 1px; background: rgba(15,72,133,.12); border: 1px solid rgba(15,72,133,.12); }
    .lifecycle-step { min-height: 142px; padding: 24px; background: #fff; }
    .lifecycle-step span { color: #168cff; font-size: 13px; font-weight: 600; }
    .lifecycle-step strong { display: block; margin-top: 12px; color: #061f58; font-size: 20px; line-height: 1.35; }
    .role-panel { padding: 46px; background: #061f58; color: #fff; }
    .role-panel h3 { margin: 0; color: #fff; font-size: 34px; font-weight: 700; line-height: 1.35; }
    .role-panel p { margin: 18px 0 0; color: rgba(255,255,255,.78); line-height: 1.85; }
    .role-list { display: grid; gap: 14px; margin: 28px 0 0; padding: 0; list-style: none; }
    .role-list li { display: flex; gap: 12px; color: #fff; line-height: 1.7; }
    .role-list li::before { content: "\2713"; display: inline-flex; align-items: center; justify-content: center; flex: 0 0 auto; width: 22px; height: 22px; margin-top: 2px; border-radius: 50%; background: #168cff; font-size: 13px; font-weight: 700; }
    .confidential-card { height: 100%; padding: 34px; background: #fff; border-left: 5px solid #168cff; box-shadow: 0 14px 34px rgba(12,46,91,.08); }
    .confidential-card h3 { margin: 0; color: #061f58; font-size: 26px; font-weight: 700; line-height: 1.38; }
    .confidential-card p { margin: 14px 0 0; color: #516173; line-height: 1.8; }
    @media (max-width: 1199px) {
        .transactions-hero h1 { font-size: 58px; }
        .transactions-title h2 { font-size: 38px; }
    }
    @media (max-width: 991px) {
        .lifecycle-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
    @media (max-width: 767px) {
        .transactions-hero { min-height: auto; padding: 120px 0 78px; }
        .transactions-hero h1 { font-size: 40px; line-height: 1.2; }
        .transactions-section { padding: 70px 0; }
        .transactions-title h2 { font-size: 32px; }
        .lifecycle-grid { grid-template-columns: 1fr; }
        .role-panel { padding: 32px; }
    }
</style>

<main class="transactions-page">
    <section class="transactions-hero">
        <div class="container">
            <span class="transactions-kicker">Transactions</span>
            <h1>Transaction support for bold capital and strategic decisions.</h1>
            <p>Finwert supports companies across fundraising, capital structuring, due diligence, M&A preparation, transaction execution, and pre-IPO readiness without publishing unverified client names or deal values.</p>
            <div class="transactions-hero-actions">
                <a href="#categories" class="vl-primary-btn vl-primary-btn-5">Explore Categories <span><img src="assets/img/icon/arrow-right-5.1.svg" alt=""></span></a>
                <a href="services.php" class="transactions-outline">View Services</a>
            </div>
        </div>
    </section>

    <section id="categories" class="transactions-section">
        <div class="container">
            <div class="transactions-title center">
                <span>Transaction Capabilities</span>
                <h2>Structured support across the transaction lifecycle.</h2>
                <p>These categories align with Finwert's finance, fundraising, due diligence, and corporate advisory services.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($transactionCategories as $index => $category) : ?>
                    <div class="col-xl-4 col-md-6">
                        <a class="transaction-card" href="<?php echo htmlspecialchars($category['href'], ENT_QUOTES, 'UTF-8'); ?>">
                            <small><?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></small>
                            <h3><?php echo htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p><?php echo htmlspecialchars($category['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <strong>View Details</strong>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="transactions-section white">
        <div class="container">
            <div class="transactions-title center">
                <span>Lifecycle</span>
                <h2>From strategy to post-transaction support.</h2>
            </div>
            <div class="lifecycle-grid">
                <?php foreach ($lifecycle as $index => $step) : ?>
                    <div class="lifecycle-step">
                        <span><?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
                        <strong><?php echo htmlspecialchars($step, ENT_QUOTES, 'UTF-8'); ?></strong>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="transactions-section">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    <div class="role-panel">
                        <h3>Finwert's role in transactions</h3>
                        <p>We help leadership teams prepare the financial, operational, and diligence information required to move through transactions with more confidence and discipline.</p>
                        <ul class="role-list">
                            <li>Transaction readiness and information preparation</li>
                            <li>Financial model and management reporting support</li>
                            <li>Due diligence coordination and risk review</li>
                            <li>Debt, equity, and capital structure advisory support</li>
                            <li>Pre-IPO and listing-readiness coordination</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="confidential-card">
                        <h3>Selected transaction experience</h3>
                        <p>Verified transaction names, values, dates, and outcomes are not currently available in the provided Finwert content. This section is intentionally kept confidential until client-approved information is supplied.</p>
                        <p>Recommended data fields: transaction category, sector, Finwert role, transaction status, disclosure permission, and whether value can be published.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="transactions-section white">
        <div class="container">
            <div class="transactions-title center">
                <span>Related Services</span>
                <h2>Explore transaction-linked services.</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4"><a class="transaction-card" href="service-single.php?service=debt-fundraising"><small>Debt</small><h3>Debt Fundraising</h3><p>Structured debt support for working capital, expansion, acquisitions, and project financing.</p><strong>View Details</strong></a></div>
                <div class="col-md-4"><a class="transaction-card" href="service-single.php?service=growth-capital"><small>Equity</small><h3>Growth Capital</h3><p>Strategic investor, private equity, pre-IPO, and IPO advisory support.</p><strong>View Details</strong></a></div>
                <div class="col-md-4"><a class="transaction-card" href="service-single.php?service=due-diligence"><small>Review</small><h3>Due Diligence</h3><p>Financial review, risk identification, and transaction information support.</p><strong>View Details</strong></a></div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
