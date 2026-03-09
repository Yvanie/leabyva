<?php
/**
 * Layout principal SPA — Leabyva Digital Works
 * Toutes les pages .pg coexistent dans le DOM, nav_go() gère l'affichage
 */
$logo = 'Public/logo_LeabYva-removebg-preview.png';
?>
<!DOCTYPE html>
<html lang="fr" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leabyva Digital Works</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=Instrument+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Public/css/style.css">
</head>
<body>

<!-- Cursor -->
<div id="dot"></div>
<div id="ring"></div>

<!-- Page transition curtain -->
<div id="curtain">
  <div id="curtain-logo"><img src="<?= $logo ?>" alt="Leabyva"></div>
</div>

<!-- Toast -->
<div id="toast"><div id="toast-d"></div><span id="toast-t"></span></div>

<!-- NAV -->
<?php include __DIR__ . '/partials/header.php'; ?>

<!-- ═══ PAGES SPA ═══ -->

<!-- PAGE HOME -->
<div class="pg on" id="pg-home">
<?php include __DIR__ . '/home.php'; ?>
</div>

<!-- PAGE SERVICES -->
<div class="pg" id="pg-svc">
<?php include __DIR__ . '/Services.php'; ?>
</div>

<!-- PAGE ABOUT -->
<div class="pg" id="pg-about">
<?php include __DIR__ . '/about.php'; ?>
</div>

<!-- PAGE PORTFOLIO -->
<div class="pg" id="pg-port">
<?php include __DIR__ . '/portfolio.php'; ?>
</div>

<!-- PAGE BLOG -->
<div class="pg" id="pg-blog">
<?php include __DIR__ . '/blog.php'; ?>
</div>

<!-- SINGLE BLOG POST -->
<div class="pg" id="pg-single-blog">
<?php include __DIR__ . '/single_blog.php'; ?>
</div>

<!-- SINGLE PORTFOLIO -->
<div class="pg" id="pg-single-port">
<?php include __DIR__ . '/single_portfolio.php'; ?>
</div>

<!-- PAGE CONTACT -->
<div class="pg" id="pg-cont">
<?php include __DIR__ . '/contact.php'; ?>
</div>

<script src="Public/js/script.js"></script>
</body>
</html>
