<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FF5A30">
    <meta name="format-detection" content="telephone=no">

    <title>Createx Construction Bureau</title>
    <meta name="description" content="Createx Construction Bureau — construction and interior design since 2000.">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" href="fonts/Ubuntu-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/Ubuntu-Bold.woff2" as="font" type="font/woff2" crossorigin>

    <?php if ($currentPage === 'front-page.php'): ?>
        <link rel="preload" as="image" href="./img/home/hero-1.jpg" fetchpriority="high">
    <?php endif; ?>

    <?php
    $heroPreloads = [
        'page-about.php'      => './img/about/hero.png',
        'page-careers.php'    => './img/careers/hero.png',
        'page-news.php'       => './img/news/bg.png',
        'page-work.php'       => './img/page-work/work.png',
        'services.php'        => './img/services/services_header.png',
        'single-service.php'  => './img/services/service.png',
    ];
    if (isset($heroPreloads[$currentPage])): ?>
        <link rel="preload" as="image" href="<?= $heroPreloads[$currentPage] ?>" fetchpriority="high">
    <?php endif; ?>

    <link rel="stylesheet" href="style.css">
</head>

<?php
$pagesWithHeroBg = [
    'page-about.php',
    'page-careers.php',
    'page-news.php',
    'page-work.php',
    'page-contacts.php',
    'page-newsPost.php',
    'services.php',
    'single-service.php',
];
$bodyClass = in_array($currentPage, $pagesWithHeroBg, true) ? ' class="has-hero-bg"' : '';
?>
<body<?= $bodyClass ?>>
<?php require 'header.php'; ?>
<main>

    