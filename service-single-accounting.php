<?php
$pageTitle = 'Accounting & Financial Services | Finwert';

$capabilities = [
    ['icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.4.png', 'title' => 'Bookkeeping & Accounting', 'text' => 'Day-to-day accounting support, ledger hygiene, reconciliations, and finance records that remain audit-ready.'],
    ['icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.1.png', 'title' => 'MIS & Budgeting', 'text' => 'Management reporting, budget tracking, and business review packs for better operating decisions.'],
    ['icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.2.png', 'title' => 'Payroll Processing', 'text' => 'Payroll computation and recurring compliance coordination for growing teams.'],
    ['icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.3.png', 'title' => 'Bank Process Management', 'text' => 'Bank reconciliations, payment process support, cash-flow visibility, and control-oriented workflows.'],
    ['icon' => 'assets/img/corporateconsulting/icon/contact-icon-5.1.svg', 'title' => 'Financial Statements', 'text' => 'Preparation support for periodic financial statements and schedules used by management, auditors, and stakeholders.'],
    ['icon' => 'assets/img/corporateconsulting/icon/contact-icon-5.2.svg', 'title' => 'GAAP to IND AS Support', 'text' => 'Reporting analysis and conversion support where a business needs to align financials with applicable standards.'],
];

$situations = [
    'Finance records are fragmented across teams, tools, or locations.',
    'Management needs reliable monthly MIS, budgets, and variance reviews.',
    'Payroll, bank, and accounting processes need stronger controls.',
    'The company is preparing for audit, due diligence, fundraising, or board reporting.',
    'Reporting needs to move from basic compliance to decision-ready finance information.',
];

$process = [
    ['image' => 'assets/img/finwert/about/process-discovery.png', 'step' => '01', 'title' => 'Discover', 'text' => 'Review current books, reporting cadence, controls, tools, and pending finance clean-up areas.'],
    ['image' => 'assets/img/finwert/about/process-execution.png', 'step' => '02', 'title' => 'Execute', 'text' => 'Set up accounting workflows, ownership, reconciliations, payroll support, and management reporting routines.'],
    ['image' => 'assets/img/finwert/about/process-reporting.png', 'step' => '03', 'title' => 'Report', 'text' => 'Deliver clear MIS, budget reviews, financial schedules, and decision support for leadership teams.'],
];

$deliverables = [
    'Monthly accounting and reconciliation reports',
    'MIS dashboards and budget-vs-actual reviews',
    'Payroll processing summaries and compliance support',
    'Financial statement preparation schedules',
    'Banking process and cash-flow visibility reports',
    'GAAP / IND AS reporting support notes where applicable',
];

$relatedServices = [
    ['title' => 'Virtual CFO Services', 'href' => 'service-single.php?service=virtual-cfo', 'image' => 'assets/img/myimage/02_Virtual_CFO_Services.jpg', 'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.1.png'],
    ['title' => 'Due Diligence', 'href' => 'service-single.php?service=due-diligence', 'image' => 'assets/img/myimage/06_Due_Diligence.jpg', 'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.2.png'],
    ['title' => 'Tax Advisory Services', 'href' => 'service-single.php?service=tax-advisory', 'image' => 'assets/img/myimage/08_Tax_Advisory_Services.jpg', 'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.4.png'],
];

$faqs = [
    ['question' => 'Can Finwert manage recurring monthly accounting?', 'answer' => 'Yes. Finwert supports recurring accounting, reconciliations, MIS, payroll coordination, and reporting workflows based on the scope agreed with the client.'],
    ['question' => 'Do you support budgeting and variance reviews?', 'answer' => 'Yes. The service includes budgeting, budget-vs-actual tracking, variance commentary, and management reporting support.'],
    ['question' => 'Is this suitable for startups and growing businesses?', 'answer' => 'Yes. The structure is useful for startups, growth-stage businesses, and established companies that need cleaner reporting and stronger finance controls.'],
    ['question' => 'Can this support fundraising or due diligence readiness?', 'answer' => 'Yes. Clean accounting, reconciled books, MIS, and financial schedules help leadership prepare better for fundraising, audit, and due diligence processes.'],
];

require __DIR__ . '/includes/header.php';
?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

    .accounting-service-page {
        background: #f5f9ff;
        color: #13294f;
        font-family: "Poppins", Arial, sans-serif;
        font-weight: 400;
        letter-spacing: 0;
    }
    .accounting-service-page h1,
    .accounting-service-page h2,
    .accounting-service-page h3,
    .accounting-service-page h4,
    .accounting-service-page h5,
    .accounting-service-page h6,
    .accounting-service-page p,
    .accounting-service-page a,
    .accounting-service-page li,
    .accounting-service-page button,
    .accounting-service-page span {
        font-family: "Poppins", Arial, sans-serif;
        letter-spacing: 0;
    }
    .accounting-service-page p,
    .accounting-service-page li {
        font-weight: 400;
    }
    .accounting-hero {
        position: relative;
        overflow: hidden;
        padding: 145px 0 95px;
        background: linear-gradient(105deg, rgba(5, 28, 78, 0.96) 0%, rgba(9, 50, 111, 0.88) 46%, rgba(8, 62, 126, 0.34) 100%), url("assets/img/myimage/05_Accounting_Financial_Services.jpg") center / cover no-repeat;
    }
    .accounting-hero::after { content: ""; position: absolute; inset: auto 0 0; height: 7px; background: linear-gradient(90deg, #168cff, #79bfff, #ffffff); opacity: 0.88; }
    .accounting-hero .container { position: relative; z-index: 1; }
    .accounting-eyebrow { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 22px; color: #a8d3ff; font-size: 14px; font-weight: 600; letter-spacing: 0.04em; text-transform: uppercase; }
    .accounting-eyebrow img { width: 22px; height: 22px; filter: brightness(0) invert(1); }
    .accounting-hero h1 { max-width: 860px; margin: 0; color: #fff; font-size: 60px; font-weight: 700; letter-spacing: 0; line-height: 1.16; }
    .accounting-hero p { max-width: 720px; margin: 26px 0 0; color: rgba(255, 255, 255, 0.84); font-size: 18px; font-weight: 400; line-height: 1.85; }
    .accounting-hero-actions { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 34px; }
    .accounting-outline-btn { display: inline-flex; align-items: center; justify-content: center; min-height: 58px; padding: 0 28px; border: 1px solid rgba(255, 255, 255, 0.52); color: #fff; font-weight: 600; transition: all 0.25s ease; }
    .accounting-outline-btn:hover { border-color: #168cff; background: #168cff; color: #fff; }
    .accounting-breadcrumb { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 42px; color: rgba(255, 255, 255, 0.74); font-size: 15px; }
    .accounting-breadcrumb a { color: #fff; }
    .accounting-section { padding: 100px 0; }
    .accounting-section-alt { background: #fff; }
    .accounting-section-title { max-width: 760px; margin-bottom: 48px; }
    .accounting-section-title.center { margin-right: auto; margin-left: auto; text-align: center; }
    .accounting-section-title .sub-title { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 18px; color: #168cff; font-size: 15px; font-weight: 600; text-transform: uppercase; }
    .accounting-section-title .sub-title i {
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
    .accounting-section-title .sub-title i::before { content: ""; width: 8px; height: 8px; border-radius: 50%; background: currentColor; }
    .accounting-section-title h2 { margin: 0; color: #061f58; font-size: 42px; font-weight: 700; letter-spacing: 0; line-height: 1.28; }
    .accounting-section-title p { margin: 22px 0 0; color: #516173; font-size: 17px; font-weight: 400; line-height: 1.85; }
    .accounting-overview-card { height: 100%; padding: 42px; border-left: 5px solid #168cff; background: #fff; box-shadow: 0 18px 44px rgba(12, 46, 91, 0.09); }
    .accounting-overview-card h3, .accounting-image-note h3, .accounting-feature h3, .accounting-process-card h3, .accounting-deliverable-panel h3, .accounting-related-card h3 { margin: 0; color: #061f58; font-weight: 700; letter-spacing: 0; line-height: 1.35; }
    .accounting-overview-card p, .accounting-feature p, .accounting-process-card p, .accounting-image-note p { margin-bottom: 0; color: #516173; font-size: 16px; font-weight: 400; line-height: 1.85; }
    .accounting-image-stack { position: relative; min-height: 530px; }
    .accounting-main-image { width: 100%; height: 470px; object-fit: cover; box-shadow: 0 22px 52px rgba(6, 31, 88, 0.17); }
    .accounting-image-note { position: absolute; right: 0; bottom: 0; width: min(420px, 88%); padding: 30px; background: #061f58; box-shadow: 0 18px 38px rgba(6, 31, 88, 0.2); }
    .accounting-image-note h3, .accounting-image-note p { color: #fff; }
    .accounting-situations { display: grid; gap: 16px; margin: 0; padding: 0; list-style: none; }
    .accounting-situations li, .accounting-deliverables li { display: flex; gap: 12px; color: #324a67; font-size: 16px; font-weight: 400; line-height: 1.75; }
    .accounting-situations i, .accounting-deliverables i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
        width: 22px;
        height: 22px;
        margin-top: 3px;
        border-radius: 50%;
        background: #e9f4ff;
        color: #168cff;
        font-family: "Poppins", Arial, sans-serif;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 1;
    }
    .accounting-situations i::before, .accounting-deliverables i::before { content: "\2713"; }
    .accounting-feature { height: 100%; padding: 32px; border: 1px solid rgba(15, 72, 133, 0.12); background: #fff; transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease; }
    .accounting-feature:hover { transform: translateY(-6px); border-color: rgba(22, 140, 255, 0.42); box-shadow: 0 18px 42px rgba(15, 72, 133, 0.12); }
    .accounting-feature .icon { display: inline-flex; align-items: center; justify-content: center; width: 64px; height: 64px; margin-bottom: 24px; background: #e9f4ff; }
    .accounting-feature .icon img { max-width: 34px; max-height: 34px; }
    .accounting-process-card { height: 100%; overflow: hidden; background: #fff; box-shadow: 0 14px 34px rgba(12, 46, 91, 0.08); }
    .accounting-process-card img { width: 100%; height: 255px; object-fit: cover; }
    .accounting-process-content { position: relative; padding: 32px; }
    .accounting-process-content .step { position: absolute; top: -30px; right: 28px; display: inline-flex; align-items: center; justify-content: center; width: 60px; height: 60px; background: #168cff; color: #fff; font-weight: 700; }
    .accounting-deliverable-panel { padding: 44px; background: #061f58; color: #fff; }
    .accounting-deliverable-panel h3, .accounting-deliverable-panel p, .accounting-deliverables li { color: #fff; }
    .accounting-deliverable-panel p { opacity: 0.78; line-height: 1.85; }
    .accounting-deliverables { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px 24px; margin: 28px 0 0; padding: 0; list-style: none; }
    .accounting-faq .vl-accordion-item { margin-bottom: 16px; border: 1px solid rgba(15, 72, 133, 0.12); background: #fff; }
    .accounting-faq .vl-accordion-button { width: 100%; padding: 24px 28px; color: #061f58; font-size: 18px; font-weight: 600; line-height: 1.45; background: #fff; border: 0; text-align: left; }
    .accounting-faq .vl-accordion-button:not(.collapsed) { color: #168cff; }
    .accounting-faq .vl-accordion-body { padding: 0 28px 26px; color: #516173; font-size: 16px; font-weight: 400; line-height: 1.85; }
    .accounting-related-card { display: block; height: 100%; overflow: hidden; background: #fff; box-shadow: 0 14px 34px rgba(12, 46, 91, 0.08); }
    .accounting-related-card .thumb { display: block; height: 230px; overflow: hidden; }
    .accounting-related-card .thumb img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.35s ease; }
    .accounting-related-card:hover .thumb img { transform: scale(1.06); }
    .accounting-related-content { display: flex; align-items: center; gap: 18px; padding: 26px; }
    .accounting-related-content .icon { display: inline-flex; align-items: center; justify-content: center; flex: 0 0 auto; width: 58px; height: 58px; background: #e9f4ff; }
    .accounting-related-content .icon img { max-width: 32px; max-height: 32px; }
    .accounting-related-content h3 { margin: 0; font-size: 21px; font-weight: 600; line-height: 1.38; }
    .accounting-related-card:hover h3 { color: #168cff; }
    @media (max-width: 1199px) {
        .accounting-hero h1 { font-size: 52px; }
        .accounting-section-title h2 { font-size: 38px; }
    }
    @media (max-width: 991px) {
        .accounting-hero { padding: 125px 0 82px; }
        .accounting-section { padding: 78px 0; }
        .accounting-image-stack { min-height: auto; margin-top: 34px; }
        .accounting-image-note { position: static; width: 100%; }
        .accounting-main-image { height: 390px; }
    }
    @media (max-width: 767px) {
        .accounting-hero h1 { font-size: 40px; line-height: 1.22; }
        .accounting-hero p { font-size: 17px; }
        .accounting-section-title h2 { font-size: 32px; }
        .accounting-overview-card, .accounting-deliverable-panel { padding: 30px; }
        .accounting-deliverables { grid-template-columns: 1fr; }
        .accounting-main-image { height: 320px; }
    }
    @media (max-width: 575px) {
        .accounting-hero { padding: 105px 0 70px; }
        .accounting-hero h1 { font-size: 34px; line-height: 1.25; }
        .accounting-section { padding: 64px 0; }
        .accounting-feature, .accounting-process-content { padding: 26px; }
        .accounting-faq .vl-accordion-button { padding: 22px; font-size: 17px; }
    }
</style>

<main class="accounting-service-page">
    <section class="accounting-hero">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <span class="accounting-eyebrow"><img src="assets/img/icon/subtitle-icon-white.svg" alt=""> Service Detail</span>
                    <h1>Accounting & Financial Services</h1>
                    <p>End-to-end finance operations support for companies that need accurate books, useful MIS, controlled processes, and decision-ready financial reporting.</p>
                    <div class="accounting-hero-actions">
                        <a href="#capabilities" class="vl-primary-btn vl-primary-btn-5">Explore Capabilities <span><img src="assets/img/icon/arrow-right-5.1.svg" alt=""></span></a>
                        <a href="services.php" class="accounting-outline-btn">Back To Services</a>
                    </div>
                    <div class="accounting-breadcrumb">
                        <a href="index.php">Home</a><span>/</span><a href="services.php">Services</a><span>/</span><span>Accounting & Financial Services</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="accounting-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="accounting-section-title">
                        <span class="sub-title"><i class="fa-solid fa-chart-line"></i> Service Overview</span>
                        <h2>Finance operations built for clarity, control, and growth.</h2>
                    </div>
                    <div class="accounting-overview-card">
                        <h3>Comprehensive financial accounting support</h3>
                        <p class="pt-16">Finwert offers efficient Financial & Accounting Consultancy Services with a client-centric approach. The service helps businesses simplify accounting practices, strengthen reporting routines, and maintain reliable finance information for management decisions.</p>
                        <p class="pt-16">The work spans accounting operations, MIS, budgeting, payroll, banking processes, budget-vs-actual reviews, financial statements, and GAAP to IND AS reporting support where applicable.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accounting-image-stack">
                        <img class="accounting-main-image" src="assets/img/myimage/05_Accounting_Financial_Services.jpg" alt="Finwert accounting and financial services">
                        <div class="accounting-image-note">
                            <h3>From records to decisions</h3>
                            <p class="pt-12">The aim is not only to maintain books, but to give founders and management teams financial information they can act on.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="accounting-section accounting-section-alt">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-5">
                    <div class="accounting-section-title">
                        <span class="sub-title"><i class="fa-solid fa-circle-exclamation"></i> Situations Addressed</span>
                        <h2>When accounting needs to become a management system.</h2>
                        <p>These are common moments where companies need stronger finance processes and sharper reporting.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="accounting-situations">
                        <?php foreach ($situations as $situation) : ?>
                            <li><i class="fa-solid fa-check"></i><span><?php echo htmlspecialchars($situation, ENT_QUOTES, 'UTF-8'); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="capabilities" class="accounting-section">
        <div class="container">
            <div class="accounting-section-title center">
                <span class="sub-title"><i class="fa-solid fa-layer-group"></i> What Finwert Provides</span>
                <h2>Focused accounting and financial capabilities.</h2>
                <p>Structured support across the recurring finance activities that matter to leadership teams, auditors, lenders, and investors.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($capabilities as $capability) : ?>
                    <div class="col-xl-4 col-md-6">
                        <div class="accounting-feature">
                            <span class="icon"><img src="<?php echo htmlspecialchars($capability['icon'], ENT_QUOTES, 'UTF-8'); ?>" alt=""></span>
                            <h3><?php echo htmlspecialchars($capability['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="pt-12"><?php echo htmlspecialchars($capability['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="accounting-section accounting-section-alt">
        <div class="container">
            <div class="accounting-section-title center">
                <span class="sub-title"><i class="fa-solid fa-route"></i> Methodology</span>
                <h2>A simple operating rhythm for cleaner finance.</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($process as $item) : ?>
                    <div class="col-lg-4">
                        <div class="accounting-process-card">
                            <img src="<?php echo htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>">
                            <div class="accounting-process-content">
                                <span class="step"><?php echo htmlspecialchars($item['step'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <h3><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="pt-12"><?php echo htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="accounting-section">
        <div class="container">
            <div class="accounting-deliverable-panel">
                <div class="row align-items-start">
                    <div class="col-lg-5">
                        <h3>Deliverables and outcomes</h3>
                        <p class="pt-14">The service is designed around tangible finance outputs that help management review performance, stay prepared, and improve process discipline.</p>
                    </div>
                    <div class="col-lg-7">
                        <ul class="accounting-deliverables">
                            <?php foreach ($deliverables as $deliverable) : ?>
                                <li><i class="fa-solid fa-check"></i><span><?php echo htmlspecialchars($deliverable, ENT_QUOTES, 'UTF-8'); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="accounting-section accounting-section-alt accounting-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="accounting-section-title">
                        <span class="sub-title"><i class="fa-solid fa-circle-question"></i> FAQs</span>
                        <h2>Questions teams usually ask before starting.</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion" id="accountingFaq">
                        <?php foreach ($faqs as $index => $faq) : ?>
                            <?php $headingId = 'accountingFaqHeading' . $index; $collapseId = 'accountingFaqCollapse' . $index; $isFirst = $index === 0; ?>
                            <div class="vl-accordion-item">
                                <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                                    <button class="vl-accordion-button<?php echo $isFirst ? '' : ' collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapseId; ?>" aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>" aria-controls="<?php echo $collapseId; ?>">
                                        <?php echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8'); ?>
                                    </button>
                                </h2>
                                <div id="<?php echo $collapseId; ?>" class="accordion-collapse collapse<?php echo $isFirst ? ' show' : ''; ?>" aria-labelledby="<?php echo $headingId; ?>" data-bs-parent="#accountingFaq">
                                    <div class="vl-accordion-body"><?php echo htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8'); ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="accounting-section">
        <div class="container">
            <div class="accounting-section-title center">
                <span class="sub-title"><i class="fa-solid fa-link"></i> Related Services</span>
                <h2>Services that often connect with accounting work.</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($relatedServices as $service) : ?>
                    <div class="col-lg-4 col-md-6">
                        <a class="accounting-related-card" href="<?php echo htmlspecialchars($service['href'], ENT_QUOTES, 'UTF-8'); ?>">
                            <span class="thumb"><img src="<?php echo htmlspecialchars($service['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>"></span>
                            <span class="accounting-related-content">
                                <span class="icon"><img src="<?php echo htmlspecialchars($service['icon'], ENT_QUOTES, 'UTF-8'); ?>" alt=""></span>
                                <h3><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
