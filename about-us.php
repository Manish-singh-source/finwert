<?php
$pageTitle = 'About Us | Finwert';
require __DIR__ . '/includes/header.php';
?>

<style>
    .finwert-about-page .finwert-core-strengths {
        background: linear-gradient(135deg, #f4f9ff 0%, #e8f4ff 100%);
    }
    .finwert-about-page .finwert-core-strengths .vl-section-title-2 .sub-title,
    .finwert-about-page .finwert-core-strengths .vl-section-title-2 .title {
        color: #213861;
    }
    .finwert-about-page .finwert-core-strengths .solution__wrapbox2 {
        border-color: rgba(33, 56, 97, .14);
        background: #fff;
        box-shadow: 0 12px 30px rgba(33, 56, 97, .1);
    }
    .finwert-about-page .finwert-core-strengths .solution__wrapbox2-num {
        background: #213861;
        color: #fff;
    }
    .finwert-about-page .finwert-core-strengths .solution__wrapbox2-content .title {
        color: #213861;
        font-weight: 600;
    }
    .finwert-about-page .finwert-core-strengths .solution__wrapbox2-content .para {
        color: #456486;
    }
    /* Keep About Us typography consistent with the current Finwert redesign. */
    .finwert-about-page,
    .finwert-about-page *:not(i) {
        font-family: var(--vkl-family-font2) !important;
        font-weight: 400;
    }

    .finwert-about-page h1,
    .finwert-about-page h2,
    .finwert-about-page h3 {
        font-weight: 500;
        letter-spacing: -.02em;
    }

    .finwert-about-page .vl-primary-btn,
    .finwert-about-page .finwert-about-label,
    .finwert-about-page .finwert-about-kicker {
        font-weight: 500;
    }

    .finwert-about-page .about-breadcrumb-hero {
        position: relative;
        overflow: hidden;
        padding: 72px 0 42px;
        background: linear-gradient(103deg, rgba(5, 28, 78, .9), rgba(8, 47, 104, .82) 46%, rgba(8, 62, 126, .62)), url("assets/img/myimage/finance-cofounder-bg.png") center 42% / cover no-repeat;
    }
    .finwert-about-page .about-breadcrumb-hero::after {
        position: absolute;
        inset: auto 0 0;
        height: 3px;
        background: linear-gradient(90deg, #168cff, #7fc4ff, #fff);
        content: "";
    }
    .finwert-about-page .about-breadcrumb-hero .container.finwert-page-hero-layout {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(280px, .8fr);
        align-items: center;
        column-gap: 56px;
        row-gap: 0;
        text-align: left;
    }
    .finwert-about-page .about-breadcrumb-hero h1 {
        max-width: 760px;
        margin: 0;
        color: #fff;
        font-size: 42px;
        font-weight: 700;
        line-height: 1.2;
        letter-spacing: 0;
    }
    .finwert-about-page .about-breadcrumb-trail {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        gap: 10px;
        margin-top: 14px;
        color: rgba(255, 255, 255, .75);
        font-size: 14px;
    }
    .finwert-about-page .about-breadcrumb-trail a {
        color: #fff;
    }
    @media (max-width: 767px) {
        .finwert-about-page .about-breadcrumb-hero { padding: 72px 0 48px; }
        .finwert-about-page .about-breadcrumb-hero .container.finwert-page-hero-layout { grid-template-columns: 1fr; column-gap: 0; row-gap: 0; }
        .finwert-about-page .about-breadcrumb-hero h1 { font-size: 30px; line-height: 1.24; }
    }

    .finwert-about-page {
        overflow-x: clip;
        overflow-y: visible !important;
    }
    html:has(body.finwert-about-page),
    body.finwert-about-page {
        overflow-y: visible !important;
        height: auto !important;
    }
    html:has(body.finwert-about-page) { overflow-y: auto !important; }

    .finwert-about-hero {
        position: relative;
        padding: 190px 0 115px;
        color: #fff;
        background: linear-gradient(115deg, #071a36 0%, #0e3561 58%, #1677a9 100%);
    }

    .finwert-about-hero::after {
        content: '';
        position: absolute;
        inset: 0;
        opacity: .28;
        background: url('assets/img/ab1.png') center/cover no-repeat;
        mix-blend-mode: luminosity;
        pointer-events: none;
    }

    .finwert-about-hero .container {
        position: relative;
        z-index: 1;
    }

    .finwert-about-hero-copy {
        max-width: 760px;
    }

    .finwert-about-kicker,
    .finwert-about-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #9fe6ff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .14em;
        text-transform: uppercase;
    }

    .finwert-about-kicker::before,
    .finwert-about-label::before {
        content: '';
        width: 28px;
        height: 2px;
        background: #f5b84b;
    }

    .finwert-about-hero h1 {
        max-width: 780px;
        margin: 20px 0 22px;
        color: #fff;
        font-size: clamp(42px, 6vw, 78px);
        line-height: 1.04;
    }

    .finwert-about-hero p {
        max-width: 630px;
        margin-bottom: 30px;
        color: rgba(255, 255, 255, .82);
        font-size: 18px;
        line-height: 1.75;
    }

    .finwert-about-hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .finwert-about-hero-actions .vl-primary-btn {
        background: #f5b84b;
        color: #071a36;
    }

    .finwert-about-hero-actions .finwert-outline-btn {
        border: 1px solid rgba(255, 255, 255, .45);
        color: #fff;
    }

    .finwert-about-hero-actions .finwert-outline-btn:hover {
        background: #fff;
        color: #071a36;
    }

    .finwert-about-section {
        padding: 105px 0;
    }

    .finwert-about-section.is-soft {
        background: #f4f8fb;
    }

    .finwert-about-section.is-dark {
        background: #071a36;
        color: #fff;
    }

    .finwert-about-section h2 {
        margin: 16px 0 20px;
        color: inherit;
        font-size: clamp(34px, 4vw, 56px);
        line-height: 1.08;
    }

    .finwert-about-section p {
        color: #5d6b7d;
        line-height: 1.8;
    }

    .is-dark p {
        color: rgba(255, 255, 255, .72);
    }

    .finwert-about-image {
        position: relative;
        min-height: 500px;
    }

    .finwert-about-image img {
        width: 86%;
        height: 500px;
        object-fit: cover;
        border-radius: 4px;
    }

    .finwert-about-image .image-accent {
        position: absolute;
        right: 0;
        bottom: -25px;
        width: 45%;
        height: 210px;
        object-fit: cover;
        border: 12px solid #f4f8fb;
    }

    .finwert-about-points {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px 22px;
        margin: 28px 0 0;
        padding: 0;
        list-style: none;
    }

    .finwert-about-points li {
        display: flex;
        gap: 10px;
        align-items: flex-start;
        color: #34445a;
        line-height: 1.5;
    }

    .finwert-about-points i {
        margin-top: 4px;
        color: #1591bd;
    }

    .finwert-about-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-top: 42px;
    }

    .finwert-about-stat {
        padding: 26px 22px;
        background: #fff;
        border: 1px solid #e5edf4;
        border-radius: 8px;
        box-shadow: 0 12px 35px rgba(9, 39, 72, .06);
    }

    .finwert-about-stat strong {
        display: block;
        color: #0b4f82;
        font-size: 32px;
        line-height: 1.1;
        font-weight: 500;
    }

    .finwert-about-stat span {
        display: block;
        margin-top: 10px;
        color: #667589;
        font-size: 14px;
    }

    .finwert-about-card-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 14px;
        margin-top: 42px;
    }

    .finwert-about-card {
        min-height: 190px;
        padding: 26px 20px;
        background: #fff;
        border-top: 3px solid #27a6d2;
        border-radius: 5px;
    }

    .finwert-about-card i {
        color: #1591bd;
        font-size: 25px;
    }

    .finwert-about-card h3 {
        margin: 20px 0 10px;
        font-size: 18px;
    }

    .finwert-about-card p {
        font-size: 14px;
        line-height: 1.6;
    }

    .finwert-about-benefit-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
        margin-top: 32px;
    }

    .finwert-about-benefit {
        display: flex;
        gap: 15px;
        align-items: flex-start;
        padding: 20px;
        border: 1px solid rgba(255, 255, 255, .14);
        border-radius: 5px;
    }

    .finwert-about-benefit i {
        color: #f5b84b;
        font-size: 22px;
    }

    .finwert-about-benefit h3 {
        margin: 0 0 5px;
        color: #fff;
        font-size: 17px;
    }

    .finwert-about-benefit p {
        margin: 0;
        font-size: 14px;
        line-height: 1.55;
    }

    .finwert-about-leaders {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 28px;
        margin-top: 42px;
    }

    .finwert-about-leader {
        padding: 0 0 18px;
        background: #fff;
        border-radius: 5px;
        overflow: hidden;
        text-align: center;
        box-shadow: 0 12px 35px rgba(9, 39, 72, .06);
    }

    .finwert-about-leader img {
        display: block;
        width: 100%;
        height: 285px;
        object-fit: cover;
        object-position: center top;
        filter: grayscale(1);
        background: #eef1f3;
    }

    .finwert-about-leader h3 {
        margin: 20px 12px 7px;
        font-size: 19px;
    }

    .finwert-about-leader p {
        margin: 0;
        color: #1591bd;
        font-size: 14px;
    }

    .finwert-about-final-cta {
        padding: 78px 0;
        background: #1591bd;
        color: #fff;
    }

    .finwert-about-final-cta h2 {
        margin: 0 0 12px;
        color: #fff;
        font-size: clamp(32px, 4vw, 52px);
    }

    .finwert-about-final-cta p {
        margin: 0;
        color: rgba(255, 255, 255, .82);
    }

    .finwert-about-final-cta .vl-primary-btn {
        background: #009fe3;
        color: #071a36;
    }

    .finwert-about-final-cta .vl-primary-btn::after {
        background: #168cff;
    }

    .finwert-about-final-cta .vl-primary-btn:hover {
        color: #071f58;
    }

    .finwert-about-page .vl-sm-content-wrap-7-1>p.para:not(.finwert-copy),
    .finwert-about-page .vl-about-desc-7>p.para:not(.finwert-copy),
    .finwert-about-page .single__work7-content>p.para:not(.finwert-copy),
    .finwert-about-page .service-tab-wrap-content .content>p.para:not(.finwert-copy) {
        display: none;
    }

    .finwert-about-final-cta p:not(.finwert-copy) {
        display: none;
    }

    .finwert-about-page .vkl-gray-bg-7,
    .finwert-about-page .vkl-gray-bg-8 {
        background: #f3f8ff;
    }

    .finwert-about-page .finwert-about-template-intro {
        background: #bfd2f147;
    }

    .finwert-about-page .vkl-black-bg-7,
    .finwert-about-final-cta {
        background: #071f58;
    }

    .finwert-about-page .vl-section-title-7 .sub-title,
    .finwert-about-page .vl-section-title-7 .title,
    .finwert-about-page .single__work7-content .title,
    .finwert-about-page .tab-list-flex-content .title,
    .finwert-about-page .service-tab-wrap-content .title,
    .finwert-about-page .team__wrap7-content .title a {
        color: #071f58;
    }

    .finwert-about-page .vl-primary-btn-6,
    .finwert-about-page .nav-pills .nav-link.active,
    .finwert-about-page .team__wrap7-content .icon span {
        background: #168cff;
        color: #fff;
    }

    .finwert-about-page .sub-title span i,
    .finwert-about-page .tab-list-flex-icon span i,
    .finwert-about-page .service-tab-wrap-content .icon span i {
        color: #168cff;
        font-size: 20px;
        line-height: 1;
    }

    .finwert-about-page .nav-pills .nav-link.active .tab-list-flex-icon span i,
    .finwert-about-page .service-tab-wrap-content .icon span i {
        color: #fff;
    }

    .finwert-about-page .circle-text-7 .circle {
        width: 150px;
        height: 150px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 2px solid rgba(7, 31, 88, .14);
        background: transparent;
        color: #071f58;
        font-size: 30px;
        opacity: .58;
    }

    .finwert-about-page .circle-text-7 .circle svg {
        width: 132px;
        height: 132px;
        overflow: visible;
    }

    .finwert-about-page .circle-text-7 .circle text {
        fill: #071f58;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .finwert-about-page .circle-text-7 .circle .circle-arrow {
        fill: none;
        stroke: #071f58;
        stroke-width: 2.6;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .finwert-about-page .vl-primary-btn-7 span.arrow-1,
    .finwert-about-page .vl-primary-btn-7 span.arrow-2 {
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .finwert-about-page .vl-primary-btn-7 span.arrow-1 i,
    .finwert-about-page .vl-primary-btn-7 span.arrow-2 i {
        color: #071f58;
        font-size: 16px;
        line-height: 1;
    }

    .finwert-about-page .finwert-work-template {
        background: #f3f8ff;
    }

    .finwert-about-page .finwert-work-template .vl-section-title-7 {
        max-width: 760px;
        margin: 0 auto;
    }

    .finwert-about-page .finwert-work-template .vl-section-title-7 .sub-title,
    .finwert-about-page .finwert-work-template .vl-section-title-7 .title,
    .finwert-about-page .finwert-work-template .single__work7-content .title {
        color: #050048;
    }

    .finwert-about-page .finwert-work-template .single__work7-content .para {
        color: #444077;
    }

    .finwert-about-page .finwert-work-template .single__work7-thumb img {
        border-radius: 16px;
    }

    .finwert-about-page .finwert-work-template .single__work7-thumb .number span {
        background: #009fe3;
        color: #050048;
        font-weight: 600;
    }

    .finwert-about-page .finwert-work-template .work-shape-1,
    .finwert-about-page .finwert-work-template .work-shape-2 {
        display: block !important;
        width: 132px;
        height: 64px;
        border: 0;
        opacity: 1;
        z-index: 2;
    }

    .finwert-about-page .finwert-work-template .work-shape-1 svg,
    .finwert-about-page .finwert-work-template .work-shape-2 svg {
        display: block;
        width: 132px;
        height: 64px;
        overflow: visible;
    }

    .finwert-about-page .finwert-work-template .work-shape-1 path,
    .finwert-about-page .finwert-work-template .work-shape-2 path {
        fill: none;
        stroke: #050048;
        stroke-width: 4;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .finwert-about-page .finwert-work-template .work-shape-2 {
        transform: translateY(-50%);
    }

    .finwert-about-page .vl-account-thumb .content {
        padding: 0 16px;
        z-index: 2;
    }

    .finwert-about-page .vl-account-thumb::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 31, 88, 0) 38%, rgba(7, 31, 88, .62) 100%);
        pointer-events: none;
        z-index: 1;
    }

    .finwert-about-page .vl-account-thumb .content .title,
    .finwert-about-page .vl-account-thumb .content .title a,
    .finwert-about-page .vl-account-thumb .content .position {
        color: #fff !important;
        text-shadow: 0 2px 10px rgba(0, 0, 0, .32);
    }

    .finwert-about-page .vl-account-thumb .content .title {
        font-size: 18px;
        line-height: 1.2;
        padding-bottom: 8px;
    }

    .finwert-about-page .vl-account-thumb .content .position {
        font-size: 15px;
        line-height: 1.25;
    }

    .finwert-about-page .finwert-benefits-section {
        background:
            linear-gradient(135deg, #071f58 0%, #0f4a86 58%, #168cff 100%),
            #071f58;
        position: relative;
        overflow: hidden;
    }

    .finwert-about-page .finwert-benefits-section::before {
        content: "";
        position: absolute;
        left: -80px;
        top: 80px;
        width: 260px;
        height: 190px;
        background: repeating-linear-gradient(135deg, rgba(255, 255, 255, .14) 0 1px, transparent 1px 12px);
        transform: skewX(-14deg);
    }

    .finwert-about-page .finwert-benefits-section .container {
        position: relative;
        z-index: 1;
    }

    .finwert-about-page .finwert-benefits-section .vl-section-title-white .sub-title,
    .finwert-about-page .finwert-benefits-section .vl-section-title-white .title {
        color: #fff;
    }

    .finwert-about-page .finwert-benefits-section .vl-section-title-white .sub-title span i {
        color: #cfe8ff;
    }

    .finwert-about-page .finwert-benefits-section .service-tab-list-item .nav-link {
        background: #fff;
        border: 1px solid rgba(22, 140, 255, .14);
        box-shadow: 0 14px 34px rgba(10, 58, 120, .09);
        cursor: pointer;
        padding: 14px 18px;
        margin-bottom: 25px;
    }

    .finwert-about-page .finwert-benefits-section .service-tab-list-item .nav-link.active {
        background: linear-gradient(135deg, #073168 0%, #0f4a86 58%, #082a58 100%);
    }

    .finwert-about-page .finwert-benefits-section .tab-list-flex-icon span {
        background: #eef7ff;
        border: 1px solid rgba(22, 140, 255, .18);
        border-radius: 12px;
        color: #168cff;
        width: 42px;
        height: 42px;
        line-height: 42px;
        margin-right: 12px;
    }

    .finwert-about-page .finwert-benefits-section .service-tab-list-item .nav-link.active .tab-list-flex-icon span {
        background: #168cff;
        border-color: #168cff;
    }

    .finwert-about-page .finwert-benefits-section .tab-list-flex-content .title {
        color: #071f58;
        font-weight: 600;
        font-size: 21px;
        line-height: 1.25;
    }

    .finwert-about-page .finwert-benefits-section .service-tab-list-item .nav-link.active .tab-list-flex-content .title,
    .finwert-about-page .finwert-benefits-section .service-tab-list-item .nav-link.active .tab-list-flex-icon span i {
        color: #fff;
    }

    .finwert-about-page .finwert-benefits-section .service-tab-wrap {
        border-radius: 18px;
        box-shadow: 0 22px 46px rgba(10, 58, 120, .15);
        overflow: hidden;
    }

    .finwert-about-page .finwert-benefits-section .service-tab-wrap-thumb img {
        background: #dbeeff;
        border-radius: 18px;
    }

    .finwert-about-page .finwert-benefits-section .service-tab-wrap-content {
        background: rgba(7, 31, 88, .88);
    }

    .finwert-about-page .finwert-benefits-section .service-tab-wrap-content .content .title {
        color: #fff;
        font-weight: 600;
    }

    .finwert-about-page .finwert-benefits-section .service-tab-wrap-content .content .title:hover {
        color: #cfe8ff;
    }

    .finwert-about-page .finwert-benefits-section .service-tab-wrap-content .content .para {
        color: rgba(255, 255, 255, .84);
    }

    .finwert-about-page .finwert-benefits-section .service-tab-wrap-content .icon span,
    .finwert-about-page .finwert-benefits-section .service-tab-wrap-content .vl-primary-btn-6 {
        background: #168cff;
        color: #fff;
    }

    .finwert-about-page .finwert-team-carousel-section {
        background: #bfd2f12e;
    }

    .finwert-about-page .finwert-team-carousel-section .teamSwiperActive7 {
        padding: 0 8px 46px;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7 {
        border: 1px solid rgba(7, 31, 88, .12);
        border-radius: 16px;
        padding: 23px;
        background: rgba(255, 255, 255, .08);
        min-height: 100%;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7-thumb-bg {
        background: rgba(255, 255, 255, .16);
        border-radius: 12px;
        overflow: hidden;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7-thumb {
        height: 390px;
        border-radius: 12px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7-thumb-social {
        display: none;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7-content {
        background: rgba(255, 255, 255, .18);
        border-radius: 12px;
        margin-top: 24px;
        min-height: 106px;
        padding: 24px 74px 24px 24px;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7-content .title,
    .finwert-about-page .finwert-team-carousel-section .team__wrap7-content .title a {
        color: #050048;
        font-weight: 700;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7-content .para {
        color: #444077;
        font-weight: 600;
        margin: 0;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7-content .icon span {
        background: transparent;
        border: 1px solid #050048;
        color: #050048;
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7:hover .team__wrap7-thumb-bg {
        background: rgba(255, 255, 255, .24);
    }

    .finwert-about-page .finwert-team-carousel-section .team__wrap7:hover .team__wrap7-content .icon span {
        background: #168cff;
        border-color: #168cff;
        color: #fff;
    }

    .finwert-about-page .finwert-team-carousel-section .team-pagination7 {
        margin-top: 0;
    }
    .finwert-about-page .finwert-team-carousel-section .team__wrap7 { cursor: pointer; }
    .finwert-team-modal { display:none; position:fixed; inset:0; z-index:10000; align-items:center; justify-content:center; padding:20px; background:rgba(7,31,88,.78); }
    .finwert-team-modal.is-open { display:flex; }
    .finwert-team-modal-card { position:relative; display:grid; grid-template-columns:minmax(180px,.8fr) 1.2fr; max-width:760px; width:100%; overflow:hidden; border-radius:16px; background:#fff; box-shadow:0 24px 70px rgba(0,0,0,.3); }
    .finwert-team-modal-card img { width:100%; height:100%; min-height:300px; object-fit:cover; }
    .finwert-team-modal-copy { padding:38px; align-self:center; color:#29466f; }
    .finwert-team-modal-copy h3 { margin:0 0 6px; color:#213861; font-size:30px; }
    .finwert-team-modal-copy strong { color:#168cff; }
    .finwert-team-modal-copy p { margin-top:18px; line-height:1.7; }
    .finwert-team-modal-linkedin { display:inline-flex; align-items:center; justify-content:center; width:40px; height:40px; margin-top:18px; border-radius:50%; color:#fff; background:#168cff; transition:.3s; }
    .finwert-team-modal-linkedin:hover { color:#fff; background:#213861; }
    .finwert-team-modal-close { position:absolute; top:12px; right:16px; border:0; background:none; color:#213861; font-size:28px; cursor:pointer; }
    @media (max-width:575px) { .finwert-team-modal-card { grid-template-columns:1fr; } .finwert-team-modal-card img { min-height:220px; max-height:260px; } .finwert-team-modal-copy { padding:24px; } }

    .finwert-about-page .reveal {
        visibility: visible !important;
        opacity: 1 !important;
        transform: none !important;
    }

    .finwert-about-page .reveal img {
        visibility: visible !important;
        opacity: 1 !important;
        transform: none !important;
    }

    @media (max-width: 991px) {
        .finwert-about-hero {
            padding: 150px 0 85px;
        }

        .finwert-about-card-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .finwert-about-leaders {
            grid-template-columns: repeat(2, 1fr);
        }

        .finwert-about-image {
            margin-bottom: 60px;
        }
    }

    @media (max-width: 767px) {
        .finwert-about-section {
            padding: 70px 0;
        }

        .finwert-about-points,
        .finwert-about-benefit-list,
        .finwert-about-leaders,
        .finwert-about-stats {
            grid-template-columns: 1fr;
        }

        .finwert-about-card-grid {
            grid-template-columns: 1fr;
        }

        .finwert-about-image,
        .finwert-about-image img {
            min-height: 340px;
            height: 340px;
        }

        .finwert-about-image .image-accent {
            height: 145px;
        }

        .finwert-about-leader img {
            height: 315px;
        }
    }
</style>

<main class="finwert-about-page">
    <section class="about-breadcrumb-hero">
        <div class="container finwert-page-hero-layout">
            <h1>About Us</h1>
            <nav class="about-breadcrumb-trail" aria-label="Breadcrumb"><a href="index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">About Us</span></nav>
            <?php include __DIR__ . '/includes/page-hero-slogan.php'; ?>
        </div>
    </section>

    <!--================= About section start =================-->
    <section class="vkl-gray-bg-7 vl-about-area finwert-about-template-intro pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 mb-30">
                    <div class="vl-about-wrap-7">
                        <!-- section title -->
                        <div class="vl-section-title vl-section-title-7 mb-60">
                            <!-- subtitle -->
                            <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                data-sal-easing="ease-in-out"> <span><i class="fa-solid fa-building-columns"></i></span> About
                                Us</h4>
                            <!-- title -->
                            <h2 class="title text-anime-style-1 pt-16">One Stop Solution for Finance, Compliance and Accounting</h2>
                        </div>
                        <!-- about thumb -->
                        <div class="vl-about-thumb-7 reveal image-anime">
                            <img class="w-100" src="assets/img/finwert/about/about-main.png" alt="Finwert business consulting team">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 mb-30">
                    <div class="row">
                        <div class="col-xl-8 col-md-6">
                            <div class="vl-sm-content-wrap-7-1">
                                <p class="para finwert-copy">Finwert is a business consulting firm based in Mumbai and Bangalore,
                                    providing financial and secretarial assistance on a PAN India basis.</p>
                                <p class="para">At our core, we’re not just accountants we’re strategic partners
                                    committed to your financial success. With precision, insight, and years of
                                    experience.</p>

                                <div class="circle-text-7 text-center">
                                    <a href="#" class="circle" aria-label="Finwert builds business success">
                                        <svg viewBox="0 0 120 120" role="img" aria-hidden="true">
                                            <defs>
                                                <path id="finwert-about-circle" d="M60,60 m-45,0 a45,45 0 1,1 90,0 a45,45 0 1,1 -90,0"></path>
                                            </defs>
                                            <text>
                                                <textPath href="#finwert-about-circle">FINWERT BUILDS BUSINESS SUCCESS</textPath>
                                            </text>
                                            <path class="circle-arrow" d="M70 48 L49 69 M50 50 L49 69 L68 68"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="vl-about-right-content-7">
                                <div class="vl-about-counter-7 mb-24">
                                    <div class="about-content-wrap-7-flex">
                                        <h4 class="title"><span class="counter">15</span><span>+</span></h4>
                                        <div class="year-content">
                                            <p class="para">
                                                Years Of <br>
                                                Consulting Experience
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="vl-account-thumb">
                                    <img class="w-100" src="assets/img/finwert/about/about-small.png"
                                        alt="">

                                    <div class="content">
                                        <h4 class="title"><a href="team.php">150+ Professionals</a></h4>
                                        <p class="position">Finance, Compliance & Accounting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vl-about-desc-7">
                        <p class="para finwert-copy">We offer comprehensive Startup Solutions, Virtual CFO, Accounting & Financial,
                            Due Diligence, Legal and Secretarial, Tax Advisory and other Corporate Services. Our CA and
                            CS led team brings specialized skills, quality execution and service excellence to growing
                            businesses across India.</p>
                        <p class="para">We exist to give ambitious business the financial clarity they need to lead
                            with certainty. Our team combines expertise with next-level technology to simplify
                            complexity, uncover opportunities, & keep you ahead of the curve. Because behind great
                            business is an accountant who sees the full picture.</p>
                        <!-- btn 7 -->
                        <!-- <a href="contact.php" class="vl-primary-btn-7"> <span class="arrow-1"><i
                                    class="fa-solid fa-arrow-right"></i></span>Talk To Us <span
                                class="arrow-2"><i class="fa-solid fa-arrow-right"></i></span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= About section End =================-->
    <!--================= work section start =================-->
    <section class="vkl-gray-bg-7 finwert-work-template pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mx-auto text-center mb-60">
                    <div class="vl-work-wrap-7">
                        <!-- section title -->
                        <div class="vl-section-title vl-section-title-7">
                            <!-- subtitle -->
                            <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                data-sal-easing="ease-in-out"> <span><i class="fa-solid fa-chart-line"></i></span> How We
                                Work</h4>
                            <!-- title -->
                            <h2 class="title text-anime-style-1 pt-16">Most successful business consultancy to grow
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="work-box-grid-7 p-relative" data-sal="slide-up" data-sal-duration="1100"
                    data-sal-delay="100" data-sal-easing="ease-in-out">
                    <!-- shape 01 -->
                    <div class="work-shape-1 d-none d-xl-block">
                        <svg viewBox="0 0 132 64" aria-hidden="true" focusable="false">
                            <path d="M10 42 C40 18 93 20 118 43 M118 43 L104 40 M118 43 L111 29"></path>
                        </svg>
                    </div>
                    <!-- shape 02 -->
                    <div class="work-shape-2 d-none d-xl-block">
                        <svg viewBox="0 0 132 64" aria-hidden="true" focusable="false">
                            <path d="M10 30 C40 54 93 52 118 29 M118 29 L104 32 M118 29 L111 43"></path>
                        </svg>
                    </div>

                    <!-- single work -->
                    <div class="single__work7">
                        <!-- thumb -->
                        <div class="single__work7-thumb reveal image-anime">
                            <img src="assets/img/finwert/about/process-discovery.png" alt="Finwert discovery and requirement planning">
                            <!-- number -->
                            <div class="number">
                                <span>01</span>
                            </div>
                        </div>
                        <!-- content -->
                        <div class="single__work7-content">
                            <h4 class="title">Increased Efficiency</h4>
                            <p class="para finwert-copy">We consider efficiency a critical business objective, helping clients improve productivity, reduce cost pressure and use resources better.</p>
                            <p class="para">We develop And implement accounting systems built around your business
                                using modern tools, expert processes.</p>
                        </div>
                    </div>

                    <!-- single work -->
                    <div class="single__work7">
                        <!-- thumb -->
                        <div class="single__work7-thumb image-anime">
                            <img src="assets/img/finwert/about/process-execution.png" alt="Finwert specialist execution">
                            <!-- number -->
                            <div class="number">
                                <span>02</span>
                            </div>
                        </div>
                        <!-- content -->
                        <div class="single__work7-content">
                            <h4 class="title">Strategic Planning</h4>
                            <p class="para finwert-copy">With a broad spectrum of consulting services, our strategic planning helps organizations stay agile and responsive to changing circumstances.</p>
                            <p class="para">From bookkeeping to tax prep & payroll, we take full control of your
                                accounting operations with complete accuracy.</p>
                        </div>
                    </div>

                    <!-- single work -->
                    <div class="single__work7">
                        <!-- thumb -->
                        <div class="single__work7-thumb image-anime">
                            <img src="assets/img/finwert/about/process-reporting.png" alt="Finwert reporting and review">
                            <!-- number -->
                            <div class="number">
                                <span>03</span>
                            </div>
                        </div>
                        <!-- content -->
                        <div class="single__work7-content">
                            <h4 class="title">Financial Management</h4>
                            <p class="para finwert-copy">To ease financial burdens, we support forecasting, budgeting, cash-flow planning and fund-flow planning for better business control.</p>
                            <p class="para">With ongoing reporting, insights, and expert support, we help you make
                                data-driven decisions, plan for growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= work section End =================-->


    <!--================= Service section start =================-->
    <section class="finwert-benefits-section fix pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9 mx-auto text-center">
                    <!-- sec title -->
                    <div class="vl-section-title vl-section-title-white mb-60">
                        <!-- subtitle -->
                        <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                            data-sal-easing="ease-in-out"> <span><i class="fa-solid fa-gift"></i></span> Benefits
                            We Offer </h4>
                        <!-- title -->
                        <h2 class="title text-anime-style-2 pt-16">Practical Benefits For Your Business</h2>
                    </div>
                </div>
            </div>

            <div class="row ml-75 mr-75">

                <div class="col-xl-6 col-lg-6 mb-30" data-sal="slide-right" data-sal-duration="1100"
                    data-sal-delay="100" data-sal-easing="ease-in-out">
                    <div class="service-tab-list-item">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <div class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">
                                <div class="tab-list-flex">
                                    <div class="tab-list-flex-icon">
                                        <span><i class="fa-solid fa-route"></i></span>
                                    </div>
                                    <div class="tab-list-flex-content">
                                        <h4 class="title">Virtual CFO Expertise</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">
                                <div class="tab-list-flex">
                                    <div class="tab-list-flex-icon">
                                        <span><i class="fa-solid fa-seedling"></i></span>
                                    </div>
                                    <div class="tab-list-flex-content">
                                        <h4 class="title">In-House Team Support</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                aria-selected="false">
                                <div class="tab-list-flex">
                                    <div class="tab-list-flex-icon">
                                        <span><i class="fa-solid fa-hand-holding-heart"></i></span>
                                    </div>
                                    <div class="tab-list-flex-content">
                                        <h4 class="title">Tax Optimization</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                aria-selected="false">
                                <div class="tab-list-flex">
                                    <div class="tab-list-flex-icon">
                                        <span><i class="fa-solid fa-percent"></i></span>
                                    </div>
                                    <div class="tab-list-flex-content">
                                        <h4 class="title">Audit &amp; Funding Readiness</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-link" id="v-pills-messages-tab2" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages2" role="tab" aria-controls="v-pills-messages2"
                                aria-selected="false">
                                <div class="tab-list-flex">
                                    <div class="tab-list-flex-icon">
                                        <span><i class="fa-solid fa-piggy-bank"></i></span>
                                    </div>
                                    <div class="tab-list-flex-content">
                                        <h4 class="title">Investor Connect</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-link" id="v-pills-custom-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-custom" role="tab" aria-controls="v-pills-custom"
                                aria-selected="false">
                                <div class="tab-list-flex">
                                    <div class="tab-list-flex-icon"><span><i class="fa-solid fa-puzzle-piece"></i></span></div>
                                    <div class="tab-list-flex-content"><h4 class="title">Customized Support</h4></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30" data-sal="slide-left" data-sal-duration="1100"
                    data-sal-delay="100" data-sal-easing="ease-in-out">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="service-tab-wrap">
                                <!-- services thumb -->
                                <div class="service-tab-wrap-thumb">
                                    <img class="w-100" src="assets/img/myimage/b1.png"
                                        alt="">
                                </div>
                                <!-- services content -->
                                <div class="service-tab-wrap-content">
                                    <!-- icon -->
                                    <div class="icon">
                                        <span><i class="fa-solid fa-route"></i></span>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <h4 class="title">Virtual CFO Expertise</h4>
                                        <p class="para finwert-copy">Strategic financial leadership enabling founders to focus on growth.</p>
                                        <p class="para">We work year-round to help you plan ahead, identify
                                            deductions create tax-efficient strategies that align with your
                                            financial goals whether you’re individual.</p>
                                        <!-- btn -->
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="service-tab-wrap">
                                <!-- services thumb -->
                                <div class="service-tab-wrap-thumb">
                                    <img class="w-100" src="assets/img/myimage/b2.png"
                                        alt="">
                                </div>
                                <!-- services content -->
                                <div class="service-tab-wrap-content">
                                    <!-- icon -->
                                    <div class="icon">
                                        <span><i class="fa-solid fa-seedling"></i></span>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <h4 class="title">In-House Team Support</h4>
                                        <p class="para finwert-copy">Seamless collaboration between our experts and your internal teams to extend capabilities.</p>
                                        <p class="para">We work year-round to help you plan ahead, identify
                                            deductions create tax-efficient strategies that align with your
                                            financial goals whether you’re individual.</p>
                                        <!-- btn -->
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <div class="service-tab-wrap">
                                <!-- services thumb -->
                                <div class="service-tab-wrap-thumb">
                                    <img class="w-100" src="assets/img/myimage/b3.png"
                                        alt="">
                                </div>
                                <!-- services content -->
                                <div class="service-tab-wrap-content">
                                    <!-- icon -->
                                    <div class="icon">
                                        <span><i class="fa-solid fa-hand-holding-heart"></i></span>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <h4 class="title">Tax Optimization</h4>
                                        <p class="para finwert-copy">Intelligent tax strategies that support compliance and improve efficiency.</p>
                                        <p class="para">We work year-round to help you plan ahead, identify
                                            deductions create tax-efficient strategies that align with your
                                            financial goals whether you’re individual.</p>
                                        <!-- btn -->
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab" tabindex="0">
                            <div class="service-tab-wrap">
                                <!-- services thumb -->
                                <div class="service-tab-wrap-thumb">
                                    <img class="w-100" src="assets/img/myimage/b4.png"
                                        alt="">
                                </div>
                                <!-- services content -->
                                <div class="service-tab-wrap-content">
                                    <!-- icon -->
                                    <div class="icon">
                                        <span><i class="fa-solid fa-percent"></i></span>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <h4 class="title">Audit &amp; Funding Readiness</h4>
                                        <p class="para finwert-copy">Continuous documentation keeps your business prepared for audits, due diligence, and funding.</p>
                                        <p class="para">We work year-round to help you plan ahead, identify
                                            deductions create tax-efficient strategies that align with your
                                            financial goals whether you’re individual.</p>
                                        <!-- btn -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-messages2" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab2" tabindex="0">
                            <div class="service-tab-wrap">
                                <!-- services thumb -->
                                <div class="service-tab-wrap-thumb">
                                    <img class="w-100" src="assets/img/myimage/b5.png"
                                        alt="">
                                </div>
                                <!-- services content -->
                                <div class="service-tab-wrap-content">
                                    <!-- icon -->
                                    <div class="icon">
                                        <span><i class="fa-solid fa-piggy-bank"></i></span>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <h4 class="title">Connect With Investors</h4>
                                        <p class="para finwert-copy">We facilitate investor relationships and funding opportunities to accelerate business scale.</p>
                                        <p class="para">We work year-round to help you plan ahead, identify
                                            deductions create tax-efficient strategies that align with your
                                            financial goals whether you’re individual.</p>
                                        <!-- btn -->
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-custom" role="tabpanel" aria-labelledby="v-pills-custom-tab" tabindex="0">
                            <div class="service-tab-wrap">
                                <div class="service-tab-wrap-thumb"><img class="w-100" src="assets/img/myimage/b4.png" alt="Customized financial support"></div>
                                <div class="service-tab-wrap-content">
                                    <div class="icon"><span><i class="fa-solid fa-puzzle-piece"></i></span></div>
                                    <div class="content">
                                        <h4 class="title">Customized Solutions And Support</h4>
                                        <p class="para finwert-copy">We adjust our financial processes, scope, and team support to match the needs of your business.</p>
                                        <a href="contact.php" class="vl-primary-btn-6"><span class="arrow-1"><i class="fa-regular fa-arrow-right"></i></span>Explore Benefit <span class="arrow-2"><i class="fa-regular fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= Service section End =================-->

     <!--================= solution section start =================-->
       <!--================= solution section start =================-->
        <section class="vkl-gray-bg-28 pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="vl-solution-wrap2">
                            <!-- section title -->
                            <div class="vl-section-title vl-section-title-2 mb-48">
                                <!-- title -->
                                <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                                    data-sal-easing="ease-in-out"> <span><img
                                            src="assets/img/businessconsulting2/icon/sub-title2.1.svg" alt=""></span>
                                     Our Core Strengths</h4>
                                <h2 class="title text-anime-style-3 pt-18">Why Businesses Choose
Finwert</h2>
                            </div>
                            <!-- thumb -->
                            <div class="vl-solution-thumb2 image-anime">
                                <img src="assets/img/myimage/core.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 mb-30" data-sal="slide-left" data-sal-duration="1100"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                        <!-- single box -->
                        <div class="solution__wrapbox2">
                            <div class="solution__wrapbox2-num">
                                <span>01</span>
                            </div>
                            <div class="solution__wrapbox2-content">
                                <h4 class="title">Integrated Expertise</h4>
                                <p class="para">Unified finance, 
accounting, and legal 
solutions under one 
umbrella.</p>
                            </div>
                        </div>

                        <!-- single box -->
                        <div class="solution__wrapbox2">
                            <div class="solution__wrapbox2-num">
                                <span>02</span>
                            </div>
                            <div class="solution__wrapbox2-content">
                                <h4 class="title">Proven Experience</h4>
                                <p class="para">Over 15 years of cross-
industry financial 
leadership.</p>
                            </div>
                        </div>

                        <!-- single box -->
                        <div class="solution__wrapbox2">
                            <div class="solution__wrapbox2-num">
                                <span>03</span>
                            </div>
                            <div class="solution__wrapbox2-content">
                                <h4 class="title">Technology-Driven 
Approach</h4>
                                <p class="para">Advanced automation 
and digital finance tools 
for precision.</p>
                            </div>
                        </div>

                        <!-- single box -->
                        <div class="solution__wrapbox2">
                            <div class="solution__wrapbox2-num">
                                <span>04</span>
                            </div>
                            <div class="solution__wrapbox2-content">
                                <h4 class="title">Pan-India Presence</h4>
                                <p class="para">Offices in Mumbai and 
Bangalore serving clients 
nationwide.</p>
                            </div>
                        </div>
                         <div class="solution__wrapbox2">
                            <div class="solution__wrapbox2-num">
                                <span>05</span>
                            </div>
                            <div class="solution__wrapbox2-content">
                                <h4 class="title">Dedicated Team</h4>
                                <p class="para">150+ experienced team members, including CAs, CSs, and analysts.</p>
                            </div>
                        </div>
                         <div class="solution__wrapbox2">
                            <div class="solution__wrapbox2-num">
                                <span>06</span>
                            </div>
                            <div class="solution__wrapbox2-content">
                                <h4 class="title">Client-Centric Philosophy</h4>
                                <p class="para">Solutions tailored for 
measurable results and 
trusted partnerships.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================= solution section End =================-->
        <!--================= solution section End =================-->

    <!--================= Team section start =================-->
    <section class="vkl-gray-bg-8 finwert-team-carousel-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mx-auto text-center mb-60">
                    <!-- sec title -->
                    <div class="vl-section-title vl-section-title-7">
                        <!-- subtitle -->
                        <h4 class="sub-title" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                            data-sal-easing="ease-in-out"> <span><i class="fa-solid fa-users"></i></span> Our Team
                        </h4>
                        <!-- title -->
                        <h2 class="title text-anime-style-1 pt-16">Meet Our Specialized Business Consultants</h2>
                    </div>
                </div>
            </div>

            <div class="swiper teamSwiperActive7" data-sal="slide-up" data-sal-duration="1100" data-sal-delay="100"
                data-sal-easing="ease-in-out">
                <div class="swiper-wrapper">
                    <!-- single service slide -->
                    <div class="swiper-slide">
                        <!-- single service item -->
                        <div class="team__wrap7" data-team-name="Ronak N. Dharnidharka" data-team-role="Partner" data-team-bio="Mr. Ronak N. Dharnidharka is a tech-savvy Chartered Accountant with more than 15 years of experience across accounts, audit, budgeting, MIS, taxation, compliances, and payroll execution. He specializes in end-to-end virtual CFO support for startups, helping leadership teams assess financial risks and make informed business decisions." data-team-image="assets/img/myimage/ronak.png" data-team-linkedin="https://www.linkedin.com/in/ronak-dharnidharka-60839310b/?utm_source=share&amp;utm_campaign=share_via&amp;utm_content=profile&amp;utm_medium=android_app">
                            <!-- thumb -->
                            <div class="team__wrap7-thumb-bg">
                                <div class="team__wrap7-thumb">
                                    <img src="assets/img/myimage/ronak.png" alt="Ronak N. Dharnidharka">
                                    <!-- social -->
                                    <div class="team__wrap7-thumb-social">
                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="https://www.linkedin.com/in/ronak-dharnidharka-60839310b/?utm_source=share&amp;utm_campaign=share_via&amp;utm_content=profile&amp;utm_medium=android_app" target="_blank" rel="noopener" aria-label="Ronak N. Dharnidharka on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- content -->
                            <div class="team__wrap7-content">
                                <h4 class="title"><a href="team.php">Ronak N. Dharnidharka</a></h4>
                                <p class="para">Partner</p>
                                <!-- icon -->
                                <div class="icon">
                                    <span><i class="fa-regular fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service slide -->
                    <div class="swiper-slide">
                        <!-- single service item -->
                        <div class="team__wrap7" data-team-name="Pratik M. Choudhary" data-team-role="Partner" data-team-bio="Mr. Pratik M. Choudhary is a fellow member of The Institute of Chartered Accountants of India. He works with startups and closely held companies, with specialised experience in the Information Technology and Service industry. His expertise spans accounts, audit, budgeting, MIS, taxation, compliances, payroll execution, licensing agreements, and legal documentation." data-team-image="assets/img/myimage/pratik.png" data-team-linkedin="#">
                            <!-- thumb -->
                            <div class="team__wrap7-thumb-bg">
                                <div class="team__wrap7-thumb">
                                    <img src="assets/img/myimage/pratik.png" alt="Pratik M. Choudhary">
                                    <!-- social -->
                                    <div class="team__wrap7-thumb-social">
                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#" aria-label="Pratik M. Choudhary on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- content -->
                            <div class="team__wrap7-content">
                                <h4 class="title"><a href="team.php">Pratik M. Choudhary</a></h4>
                                <p class="para">Partner</p>
                                <!-- icon -->
                                <div class="icon">
                                    <span><i class="fa-regular fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service slide -->
                    <div class="swiper-slide">
                        <!-- single service item -->
                        <div class="team__wrap7" data-team-name="Vikesh Agrawal" data-team-role="Partner" data-team-bio="Vikesh partners with founders and startups as a Virtual CFO, guiding them through financial planning, fundraising, investor relations, and compliance from incorporation through IPO readiness. With more than 10 years of experience across startups, manufacturing, retail, and infrastructure, he provides end-to-end financial oversight across listed and unlisted companies." data-team-image="https://finwert.com/my-images/team/Vikesh1.png" data-team-linkedin="https://www.linkedin.com/in/vikesh-agrawal-a5b62785?utm_source=share_via&amp;utm_content=profile&amp;utm_medium=member_android">
                            <!-- thumb -->
                            <div class="team__wrap7-thumb-bg">
                                <div class="team__wrap7-thumb">
                                    <img src="https://finwert.com/my-images/team/Vikesh1.png" alt="Vikesh Agrawal">
                                    <!-- social -->
                                    <div class="team__wrap7-thumb-social">
                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="https://www.linkedin.com/in/vikesh-agrawal-a5b62785?utm_source=share_via&amp;utm_content=profile&amp;utm_medium=member_android" target="_blank" rel="noopener" aria-label="Vikesh Agrawal on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- content -->
                            <div class="team__wrap7-content">
                                <h4 class="title"><a href="team.php">Vikesh Agrawal</a></h4>
                                <p class="para">Partner</p>
                                <!-- icon -->
                                <div class="icon">
                                    <span><i class="fa-regular fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service slide -->
                    
                </div>
            </div>
            <!-- dot pagination style -->
            <!-- <div class="team-pagination7">
                <div class="swiper-pagination7"></div>
            </div> -->
        </div>
    </section>
    <!--================= Team section End =================-->

    <div class="finwert-team-modal" id="finwertTeamModal" aria-hidden="true">
        <div class="finwert-team-modal-card" role="dialog" aria-modal="true" aria-labelledby="finwertTeamModalName">
            <button class="finwert-team-modal-close" type="button" aria-label="Close profile">&times;</button>
            <img id="finwertTeamModalImage" src="" alt="">
            <div class="finwert-team-modal-copy">
                <h3 id="finwertTeamModalName"></h3>
                <strong id="finwertTeamModalRole"></strong>
                <p id="finwertTeamModalBio"></p>
                <a class="finwert-team-modal-linkedin" id="finwertTeamModalLinkedin" href="#" target="_blank" rel="noopener" aria-label="LinkedIn profile"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('finwertTeamModal');
    if (!modal) return;
    const close = () => { modal.classList.remove('is-open'); modal.setAttribute('aria-hidden', 'true'); };
    document.querySelectorAll('.finwert-team-carousel-section .team__wrap7').forEach(function (card) {
        card.addEventListener('click', function (event) {
            if (event.target.closest('a')) event.preventDefault();
            document.getElementById('finwertTeamModalName').textContent = card.dataset.teamName;
            document.getElementById('finwertTeamModalRole').textContent = card.dataset.teamRole;
            document.getElementById('finwertTeamModalBio').textContent = card.dataset.teamBio;
            const linkedin = document.getElementById('finwertTeamModalLinkedin');
            const linkedinUrl = card.dataset.teamLinkedin || '#';
            linkedin.href = linkedinUrl;
            linkedin.removeAttribute('target');
            linkedin.removeAttribute('rel');
            if (linkedinUrl !== '#') {
                linkedin.target = '_blank';
                linkedin.rel = 'noopener';
            }
            const image = document.getElementById('finwertTeamModalImage');
            image.src = card.dataset.teamImage;
            image.alt = card.dataset.teamName;
            modal.classList.add('is-open'); modal.setAttribute('aria-hidden', 'false');
        });
    });
    modal.addEventListener('click', function (event) { if (event.target === modal || event.target.closest('.finwert-team-modal-close')) close(); });
    document.addEventListener('keydown', function (event) { if (event.key === 'Escape') close(); });
});
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
