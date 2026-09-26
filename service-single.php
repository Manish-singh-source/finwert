<?php
require __DIR__ . '/includes/service-data.php';

$slug = isset($_GET['service']) ? (string) $_GET['service'] : 'startup-solutions';
if ($slug === 'accounting') {
    header('Location: service-single-accounting.php', true, 302);
    exit;
}

$service = $finwertServices[$slug] ?? null;
if (!$service) {
    http_response_code(404);
    $service = [
        'title' => 'Service Not Found',
        'short' => 'The requested service page could not be found.',
        'overview' => 'Please return to the Services page and choose one of the available Finwert services.',
        'source_text' => 'Finwert offers one stop consulting services for Finance, Compliance, and Accounting needs.',
        'image' => 'assets/img/finwert/about/about-main.png',
        'thumb' => 'assets/img/corporateconsulting/service/service-thumb-5.1.png',
        'icon' => 'assets/img/corporateconsulting/icon/vl-service-icon-5.1.png',
        'stage' => 'Services',
        'capabilities' => ['Service directory', 'Service details', 'Business support'],
        'situations' => ['The requested service link is not available.'],
        'deliverables' => ['Return to service directory'],
    ];
}

if (!empty($service['detail_url']) && $service['detail_url'] !== basename($_SERVER['PHP_SELF'])) {
    header('Location: ' . $service['detail_url'], true, 302);
    exit;
}

$pageTitle = $service['title'] . ' | Finwert';
$related = array_filter($finwertServices, static fn ($item, $key) => $key !== $slug, ARRAY_FILTER_USE_BOTH);
$related = array_slice($related, 0, 3, true);

require __DIR__ . '/includes/header.php';
?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");
    .service-detail-page,
    .service-detail-page * { font-family: "Poppins", Arial, sans-serif; letter-spacing: 0; }
    .service-detail-page { background: #f5f9ff; color: #13294f; }
    .detail-hero {
        position: relative;
        overflow: hidden;
        padding: 140px 0 90px;
        background: linear-gradient(104deg, rgba(5, 28, 78, .97) 0%, rgba(8, 47, 104, .9) 48%, rgba(8, 62, 126, .34) 100%), var(--hero-image) center / cover no-repeat;
    }
    .detail-hero::after { content: ""; position: absolute; inset: auto 0 0; height: 7px; background: linear-gradient(90deg, #168cff, #7fc4ff, #fff); }
    .detail-hero .container { position: relative; z-index: 1; }
    .detail-eyebrow { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 20px; color: #a8d3ff; font-size: 14px; font-weight: 600; text-transform: uppercase; }
    .detail-eyebrow img { width: 22px; filter: brightness(0) invert(1); }
    .detail-hero h1 { max-width: 880px; margin: 0; color: #fff; font-size: 58px; font-weight: 700; line-height: 1.16; }
    .detail-hero p { max-width: 750px; margin: 24px 0 0; color: rgba(255,255,255,.84); font-size: 18px; line-height: 1.85; }
    .detail-actions { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 34px; }
    .detail-outline { display: inline-flex; align-items: center; justify-content: center; min-height: 58px; padding: 0 28px; border: 1px solid rgba(255,255,255,.52); color: #fff; font-weight: 600; }
    .detail-outline:hover { background: #168cff; border-color: #168cff; color: #fff; }
    .detail-breadcrumb { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 38px; color: rgba(255,255,255,.75); }
    .detail-breadcrumb a { color: #fff; }
    .detail-section { padding: 96px 0; }
    .detail-section.white { background: #fff; }
    .detail-title { max-width: 780px; margin-bottom: 46px; }
    .detail-title.center { margin-right: auto; margin-left: auto; text-align: center; }
    .detail-title .sub-title { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 16px; color: #168cff; font-size: 15px; font-weight: 600; text-transform: uppercase; }
    .detail-title .sub-title i {
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
    .detail-title .sub-title i::before { content: ""; width: 8px; height: 8px; border-radius: 50%; background: currentColor; }
    .detail-title h2 { margin: 0; color: #061f58; font-size: 42px; font-weight: 700; line-height: 1.28; }
    .detail-title p { margin: 18px 0 0; color: #516173; font-size: 17px; line-height: 1.85; }
    .overview-panel { height: 100%; padding: 42px; border-left: 5px solid #168cff; background: #fff; box-shadow: 0 18px 44px rgba(12,46,91,.09); }
    .overview-panel h3,
    .capability-card h3,
    .process-card h3,
    .related-card h3 { margin: 0; color: #061f58; font-weight: 700; line-height: 1.35; }
    .overview-panel p,
    .capability-card p,
    .process-card p { margin: 16px 0 0; color: #516173; line-height: 1.85; }
    .detail-image { width: 100%; height: 510px; object-fit: cover; box-shadow: 0 22px 52px rgba(6,31,88,.17); }
    .check-list { display: grid; gap: 16px; margin: 0; padding: 0; list-style: none; }
    .check-list li { display: flex; gap: 12px; color: #324a67; line-height: 1.75; }
    .check-list i {
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
    .check-list i::before { content: "\2713"; }
    .capability-card { height: 100%; padding: 32px; border: 1px solid rgba(15,72,133,.12); background: #fff; transition: transform .25s ease, box-shadow .25s ease; }
    .capability-card:hover { transform: translateY(-6px); box-shadow: 0 18px 42px rgba(15,72,133,.12); }
    .capability-card .icon { display: inline-flex; align-items: center; justify-content: center; width: 62px; height: 62px; margin-bottom: 22px; background: #e9f4ff; }
    .capability-card .icon img { max-width: 34px; max-height: 34px; }
    .process-card { height: 100%; padding: 32px; background: #061f58; }
    .process-card span { display: inline-flex; align-items: center; justify-content: center; width: 48px; height: 48px; margin-bottom: 24px; background: #168cff; color: #fff; font-weight: 700; }
    .process-card h3,
    .process-card p { color: #fff; }
    .process-card p { opacity: .78; }
    .detail-deep-card { height: 100%; padding: 32px; background: #fff; border: 1px solid rgba(15,72,133,.12); box-shadow: 0 14px 34px rgba(12,46,91,.08); }
    .detail-deep-card h3 { margin: 0 0 22px; color: #061f58; font-size: 24px; font-weight: 700; line-height: 1.35; }
    .detail-deep-card ul { display: grid; gap: 14px; margin: 0; padding: 0; list-style: none; }
    .detail-deep-card li { display: flex; gap: 12px; color: #324a67; font-size: 15.5px; line-height: 1.75; }
    .detail-deep-card li::before { content: "\2713"; display: inline-flex; align-items: center; justify-content: center; flex: 0 0 auto; width: 22px; height: 22px; margin-top: 2px; border-radius: 50%; background: #e9f4ff; color: #168cff; font-size: 13px; font-weight: 700; }
    .related-card { display: flex; gap: 18px; height: 100%; padding: 24px; background: #fff; border: 1px solid rgba(15,72,133,.12); box-shadow: 0 14px 34px rgba(12,46,91,.08); }
    .related-card .icon { display: inline-flex; align-items: center; justify-content: center; flex: 0 0 auto; width: 58px; height: 58px; background: #e9f4ff; }
    .related-card .icon img { max-width: 32px; max-height: 32px; }
    .related-card h3 { font-size: 21px; }
    .related-card p { margin: 8px 0 0; color: #516173; line-height: 1.65; }
    .related-card:hover h3 { color: #168cff; }
    .detail-actions .vl-primary-btn span img { display: inline-block; }
    @media (max-width: 1199px) {
        .detail-hero h1 { font-size: 50px; }
        .detail-title h2 { font-size: 38px; }
    }
    @media (max-width: 991px) {
        .detail-image { height: 390px; margin-top: 30px; }
    }
    @media (max-width: 767px) {
        .detail-hero { padding: 112px 0 72px; }
        .detail-hero h1 { font-size: 38px; line-height: 1.24; }
        .detail-section { padding: 68px 0; }
        .detail-title h2 { font-size: 32px; }
        .overview-panel { padding: 30px; }
    }
</style>

<main class="service-detail-page">
    <section class="detail-hero" style="--hero-image: url('<?php echo htmlspecialchars($service['image'], ENT_QUOTES, 'UTF-8'); ?>');">
        <div class="container">
            <span class="detail-eyebrow"><img src="assets/img/icon/subtitle-icon-white.svg" alt=""> Service Detail</span>
            <h1><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?php echo htmlspecialchars($service['short'], ENT_QUOTES, 'UTF-8'); ?></p>
            <div class="detail-actions">
                <a href="#capabilities" class="vl-primary-btn vl-primary-btn-5">Explore Capabilities <span><img src="assets/img/icon/arrow-right-5.1.svg" alt=""></span></a>
                <a href="services.php" class="detail-outline">Back To Services</a>
            </div>
            <div class="detail-breadcrumb"><a href="index.php">Home</a><span>/</span><a href="services.php">Services</a><span>/</span><span><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></span></div>
        </div>
    </section>

    <section class="detail-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="detail-title">
                        <span class="sub-title"><i class="fa-solid fa-circle-info"></i> Overview</span>
                        <h2><?php echo htmlspecialchars($service['stage'], ENT_QUOTES, 'UTF-8'); ?></h2>
                    </div>
                    <div class="overview-panel">
                        <h3><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($service['overview'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p><?php echo htmlspecialchars($service['source_text'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="detail-image" src="<?php echo htmlspecialchars($service['thumb'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="detail-section white">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-5">
                    <div class="detail-title">
                        <span class="sub-title"><i class="fa-solid fa-compass"></i> Situations Addressed</span>
                        <h2>When this service becomes relevant.</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="check-list">
                        <?php foreach ($service['situations'] as $item) : ?>
                            <li><i class="fa-solid fa-check"></i><span><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="capabilities" class="detail-section">
        <div class="container">
            <div class="detail-title center">
                <span class="sub-title"><i class="fa-solid fa-layer-group"></i> What Finwert Provides</span>
                <h2>Key capabilities.</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($service['capabilities'] as $capability) : ?>
                    <div class="col-xl-4 col-md-6">
                        <div class="capability-card">
                            <span class="icon"><img src="<?php echo htmlspecialchars($service['icon'], ENT_QUOTES, 'UTF-8'); ?>" alt=""></span>
                            <h3><?php echo htmlspecialchars($capability, ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p>Focused support designed around <?php echo htmlspecialchars(strtolower($service['title']), ENT_QUOTES, 'UTF-8'); ?> requirements.</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php if (!empty($service['detail_sections'])) : ?>
        <section class="detail-section white">
            <div class="container">
                <div class="detail-title center">
                    <span class="sub-title"><i class="fa-solid fa-briefcase"></i> Detailed Scope</span>
                    <h2>Service areas covered in depth.</h2>
                </div>
                <div class="row g-4">
                    <?php foreach ($service['detail_sections'] as $section) : ?>
                        <div class="col-lg-6">
                            <div class="detail-deep-card">
                                <h3><?php echo htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <ul>
                                    <?php foreach ($section['items'] as $item) : ?>
                                        <li><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="detail-section white">
        <div class="container">
            <div class="detail-title center">
                <span class="sub-title"><i class="fa-solid fa-list-check"></i> Process</span>
                <h2>A clear advisory workflow.</h2>
            </div>
            <div class="row g-4">
                <?php foreach (['Review current context and information needs.', 'Prepare structured financial, compliance, or advisory workstreams.', 'Support execution, reporting, coordination, and next decisions.'] as $index => $step) : ?>
                    <div class="col-lg-4">
                        <div class="process-card">
                            <span><?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
                            <h3><?php echo ['Assess', 'Structure', 'Support'][$index]; ?></h3>
                            <p><?php echo htmlspecialchars($step, ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="detail-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-5">
                    <div class="detail-title">
                        <span class="sub-title"><i class="fa-solid fa-file-lines"></i> Deliverables</span>
                        <h2>Practical outputs for management teams.</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="check-list">
                        <?php foreach ($service['deliverables'] as $item) : ?>
                            <li><i class="fa-solid fa-check"></i><span><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-section white">
        <div class="container">
            <div class="detail-title center">
                <span class="sub-title"><i class="fa-solid fa-link"></i> Related Services</span>
                <h2>Explore connected Finwert services.</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($related as $relatedSlug => $relatedService) : ?>
                    <div class="col-lg-4">
                        <a class="related-card" href="<?php echo htmlspecialchars(finwert_service_url($relatedSlug, $relatedService), ENT_QUOTES, 'UTF-8'); ?>">
                            <span class="icon"><img src="<?php echo htmlspecialchars($relatedService['icon'], ENT_QUOTES, 'UTF-8'); ?>" alt=""></span>
                            <span>
                                <h3><?php echo htmlspecialchars($relatedService['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p><?php echo htmlspecialchars($relatedService['short'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
