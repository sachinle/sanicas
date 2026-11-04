<?php
/**
 * Page head + floating glass header.
 * Expects: $page (nav key), $title, optional $description, optional $headerTone ('dark' | 'light').
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

$page        = $page ?? 'home';
$title       = $title ?? SITE_SHORT;
$description = $description ?? 'SAN International College of Arts and Science (SANICAS), Coimbatore — affiliated with Bharathiar University, approved by the Government of Tamil Nadu and recognized by UGC.';
$bodyClass   = $bodyClass ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.documentElement.classList.add('js');</script>
    <title><?= e($title) ?> | <?= e(SITE_SHORT) ?></title>
    <meta name="description" content="<?= e($description) ?>">
    <meta name="theme-color" content="#121310">
    <?php /* No type attribute: asset() serves the WebP when one exists. */ ?>
    <link rel="icon" href="<?= asset('logo/sanicas-logo.png') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>">
    <?php /* Hero art is the largest paint on the page: fetch it alongside the CSS. */ ?>
    <?php if (!empty($heroImage)): ?>
    <link rel="preload" as="image" href="<?= fig($heroImage) ?>" fetchpriority="high">
    <?php endif; ?>
    <?php $pageCss = $pageCss ?? $page; if (is_file(__DIR__ . '/../assets/css/' . $pageCss . '.css')): ?>
    <link rel="stylesheet" href="<?= asset('css/' . $pageCss . '.css') ?>?v=<?= filemtime(__DIR__ . '/../assets/css/' . $pageCss . '.css') ?>">
    <?php endif; ?>
</head>
<body class="page-<?= e($page) ?> <?= e($bodyClass) ?>">
<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header" id="siteHeader">
    <div class="glass-bar">
        <a class="logo" href="<?= url('index.php') ?>" aria-label="SANICAS home">
            <img src="<?= fig('logo-dark.png') ?>" alt="SAN International College of Arts &amp; Science" width="164" height="32">
        </a>
        <nav class="nav" id="siteNav" aria-label="Primary">
            <?php foreach ($NAV as $key => [$label, $file]): ?>
                <a class="nav__link<?= $key === $page ? ' is-active' : '' ?>" href="<?= url($file) ?>"<?= $key === $page ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
            <?php endforeach; ?>
            <a class="nav__link nav__link--mobile-only<?= $page === 'courses' ? ' is-active' : '' ?>" href="<?= url('courses.php') ?>">Courses</a>
        </nav>
        <?= btn('Contact us', url('contact.php'), 'primary', 'data-cta="header"') ?>
        <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false" aria-controls="siteNav">
            <?= icon('menu', 'icon icon-open') ?><?= icon('close', 'icon icon-close') ?>
        </button>
    </div>
</header>

<main id="main">
