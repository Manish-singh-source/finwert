<?php
$pageTitle = 'Our Services | Finwert';
require __DIR__ . '/includes/service-data.php';
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
    .services-hero .container { position: relative; z-index: 1; text-align: center; }
    .services-eyebrow { display: inline-flex; align-items: center; justify-content: center; gap: 10px; margin-bottom: 12px; color: #a8d3ff; font-size: 13px; font-weight: 600; text-transform: uppercase; }
    .services-eyebrow img { width: 22px; filter: brightness(0) invert(1); }
    .services-hero h1 { max-width: 760px; margin: 0 auto; color: #fff; font-size: 42px; font-weight: 700; line-height: 1.2; }
    .services-hero p { max-width: 700px; margin: 16px 0 0; color: rgba(255,255,255,.84); font-size: 16px; line-height: 1.7; }
    .services-breadcrumb { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-top: 14px; color: rgba(255,255,255,.75); font-size: 14px; }
    .services-breadcrumb a { color: #fff; }
    .services-section { padding: 96px 0; }
    .services-section.white { background: #fff; }
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
    .journey-strip { display: grid; grid-template-columns: repeat(7, minmax(0, 1fr)); gap: 1px; background: rgba(15,72,133,.12); border: 1px solid rgba(15,72,133,.12); }
    .journey-step { min-height: 122px; padding: 22px 18px; background: #fff; }
    .journey-step span { color: #168cff; font-size: 13px; font-weight: 700; }
    .journey-step strong { display: block; margin-top: 10px; color: #061f58; font-size: 17px; line-height: 1.35; }
    @media (max-width: 1199px) {
        .services-hero h1 { font-size: 52px; }
        .journey-strip { grid-template-columns: repeat(4, minmax(0, 1fr)); }
    }
    @media (max-width: 767px) {
        .services-hero { padding: 72px 0 48px; }
        .services-hero h1 { font-size: 30px; line-height: 1.24; }
        .services-hero p { font-size: 15px; }
        .services-section { padding: 68px 0; }
        .services-title h2 { font-size: 32px; }
        .journey-strip { grid-template-columns: 1fr; }
    }
</style>

<main class="finwert-services-directory">
    <section class="services-hero">
        <div class="container">
            <h1>Services</h1>
            <div class="services-breadcrumb"><a href="index.php">Home</a><span>/</span><span>Services</span></div>
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
                <?php foreach (['Incorporation', 'Growth', 'Scaling', 'Fundraising', 'Strategic Transactions', 'Pre-IPO', 'Stock Market Listing'] as $index => $stage) : ?>
                    <div class="journey-step"><span><?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span><strong><?php echo htmlspecialchars($stage, ENT_QUOTES, 'UTF-8'); ?></strong></div>
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
                        <a class="service-directory-card" href="<?php echo htmlspecialchars(finwert_service_url($slug, $service), ENT_QUOTES, 'UTF-8'); ?>">
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

    <section class="services-section white">
        <div class="container">
            <div class="services-title center">
                <span class="sub-title"><i class="fa-solid fa-building"></i> Find By Business Size</span>
                <h2>Choose the services that match your stage.</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($businessTiers as $tier) : ?>
                    <div class="col-lg-4">
                        <div class="tier-card">
                            <h3><?php echo htmlspecialchars($tier['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p><?php echo htmlspecialchars($tier['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <div class="tier-links">
                                <?php foreach ($tier['services'] as $slug) : ?>
                                    <?php if (!isset($finwertServices[$slug])) { continue; } ?>
                                    <a href="<?php echo htmlspecialchars(finwert_service_url($slug, $finwertServices[$slug]), ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($finwertServices[$slug]['title'], ENT_QUOTES, 'UTF-8'); ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
