<?php
$pageTitle = 'Our Clients | Finwert';
$finwertClients = [];
$clientLogoFiles = glob(__DIR__ . '/assets/img/logo/*.{png,jpg,jpeg,webp,svg}', GLOB_BRACE) ?: [];
foreach ($clientLogoFiles as $clientLogoFile) {
    $clientLogoFilename = basename($clientLogoFile);
    if (in_array(strtolower($clientLogoFilename), ['logo.png', 'fav.png', 'banner.png'], true)) {
        continue;
    }

    $clientName = pathinfo($clientLogoFilename, PATHINFO_FILENAME);
    $clientName = ucwords(str_replace(['-', '_'], ' ', $clientName));
    $finwertClients[$clientName] = 'assets/img/logo/' . $clientLogoFilename;
}
ksort($finwertClients, SORT_NATURAL | SORT_FLAG_CASE);
require __DIR__ . '/includes/header.php';
?>

<style>
    .finwert-clients-section {
        position: relative;
        overflow: hidden;
        padding: 96px 0 78px;
        background: linear-gradient(160deg, rgba(244, 250, 255, .78) 0%, rgba(238, 245, 254, .78) 42%, rgba(255, 255, 255, .84) 100%), url("assets/img/logo/banner.png") center / cover no-repeat;
    }
    .finwert-clients-section::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background-image: radial-gradient(rgba(6, 71, 152, .16) 1.6px, transparent 1.7px);
        background-size: 22px 22px;
        -webkit-mask-image: radial-gradient(58% 52% at 12% 26%, #000 0%, transparent 72%);
        mask-image: radial-gradient(58% 52% at 12% 26%, #000 0%, transparent 72%);
    }
    .finwert-clients-section::after {
        content: "";
        position: absolute;
        top: -14%;
        right: -8%;
        width: 46%;
        height: 128%;
        pointer-events: none;
        background: radial-gradient(closest-side, rgba(38, 132, 255, .3), rgba(38, 132, 255, .1) 58%, transparent 78%);
    }
    .finwert-clients-section .container { position: relative; z-index: 1; }
    .finwert-clients-title {
        max-width: 760px;
        margin: 0 auto 52px;
        text-align: center;
    }
    .finwert-clients-kicker {
        display: inline-flex;
        align-items: center;
        gap: 14px;
        margin: 0 0 18px;
        color: #2478f0;
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 3.4px;
        text-transform: uppercase;
    }
    .finwert-clients-kicker::after { content: ""; width: 46px; height: 2px; background: #2478f0; }
    .finwert-clients-title h2 {
        margin: 0;
        color: #14264a;
        font-size: clamp(30px, 3.6vw, 50px);
        font-weight: 700;
        line-height: 1.2;
    }
    .finwert-clients-title h2 em { display: block; color: #2f7dfa; font-style: normal; }
    .finwert-clients-title p {
        max-width: 640px;
        margin: 20px auto 0;
        color: #5b6b85;
        font-size: 17px;
        line-height: 1.65;
    }
    .finwert-client-marquee { position: relative; }
    .finwert-client-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 116px;
        padding: 12px 18px;
        border: 1px solid #e6eef8;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 12px 30px rgba(20, 60, 120, .06);
        transition: border-color .3s ease, box-shadow .3s ease, transform .3s ease;
    }
    .finwert-client-logo:hover {
        border-color: #2f7dfa;
        box-shadow: 0 16px 36px rgba(47, 125, 250, .18);
        transform: translateY(-3px);
    }
    .finwert-client-logo img { max-width: 100%; max-height: none; width: auto; height: auto; object-fit: contain; }
    .finwert-clients-pagination {
        position: relative;
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-top: 40px;
    }
    .finwert-clients-pagination .swiper-pagination-bullet {
        width: 11px;
        height: 11px;
        margin: 0 !important;
        border: 0;
        border-radius: 50%;
        background: #c7d9f0;
        opacity: 1;
        transition: background .3s ease, transform .3s ease;
    }
    .finwert-clients-pagination .swiper-pagination-bullet-active { background: #1f6fe5; transform: scale(1.15); }
    @media (max-width: 767px) {
        .finwert-clients-section { padding: 68px 0 56px; }
        .finwert-client-logo { height: 90px; padding: 10px 14px; }
        .finwert-client-logo img { max-height: 64px; }
    }
</style>

<main class="finwert-clients-page">
    <section class="finwert-page-hero">
        <div class="container finwert-page-hero-layout">
            <h1>Our Clients</h1>
            <nav class="finwert-page-breadcrumb" aria-label="Breadcrumb">
                <a href="index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">Our Clients</span>
            </nav>
            <?php include __DIR__ . '/includes/page-hero-slogan.php'; ?>
        </div>
    </section>

    <section class="finwert-clients-section">
        <div class="container">
            <div class="finwert-clients-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100" data-sal-easing="ease-in-out">
                <p class="finwert-clients-kicker">OUR CLIENTELE</p>
                <h2>Strategic Partnerships <em>That Drive Growth</em></h2>
                <!-- <p>Finwert Advisors helps startups and enterprises achieve measurable growth through strategic financial solutions.</p> -->
                <p>Our clientele spans technology, logistics, healthcare, finance, education, e-commerce, and manufacturing, reflecting our versatility, reliability, and commitment to excellence.</p>
            </div>

            <div class="finwert-client-marquee" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="180" data-sal-easing="ease-in-out">
                <div class="swiper clientLogoSwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($finwertClients as $clientName => $clientLogo): ?>
                            <div class="swiper-slide">
                                <div class="finwert-client-logo">
                                    <img src="<?php echo htmlspecialchars($clientLogo, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($clientName, ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="finwert-clients-pagination swiper-pagination"></div>    
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>