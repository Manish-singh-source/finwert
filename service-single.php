<?php
$pages = [
    'virtual-cfo' => 'virtual-cfo-services.php',
    'startup-solutions' => 'service-single-startup-solutions.php',
    'accounting' => 'service-single-accounting.php',
    'accounting-financial' => 'service-single-accounting.php',
    'due-diligence' => 'service-single-due-diligence.php',
    'legal-secretarial' => 'service-single-legal-secretarial.php',
    'tax-advisory' => 'service-single-tax-advisory.php',
    'corporate' => 'service-single-corporate.php',
    'debt-fundraising' => 'service-single-debt-fundraising.php',
    'debt-financing' => 'service-single-debt-fundraising.php',
];
$slug = $_GET['service'] ?? '';
$target = is_string($slug) ? ($pages[$slug] ?? 'services.php') : 'services.php';
header('Location: ' . $target, true, 302);
exit;
