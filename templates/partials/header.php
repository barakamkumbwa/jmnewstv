<?php
$pageTitle = isset($pageTitle) ? $pageTitle : 'JM News TV';
$pageDescription = isset($pageDescription) ? $pageDescription : 'JM News TV is a professional football media company based in Dar es Salaam, Tanzania.';
$currentPage = basename(parse_url($_SERVER['PHP_SELF'] ?? 'index.php', PHP_URL_PATH));
$navActive = function ($pages) use ($currentPage) {
    return in_array($currentPage, (array) $pages, true) ? 'active' : '';
};
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="../static/assets/css/vendor.css">
    <link rel="stylesheet" href="../static/assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <div class="site-wrap">
      <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-logo">
            <a href="index.php"><img src="../static/assets/images/jmnewslogo.png" alt="JM News TV"></a>
          </div>
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar absolute transparent" role="banner">
        <div class="py-3">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-6 col-md-3">
                <a href="#" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="text-secondary px-2"><span class="icon-instagram"></span></a>
                <a href="#" class="text-secondary px-2"><span class="icon-twitter"></span></a>
                <a href="#" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
              </div>
              <div class="col-6 col-md-9 text-right">
                <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">jmnewstv269@gmail.com</span></a></div>
                <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+255 789 921 814</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
          <div class="container position-relative">
            <div class="site-logo">
              <a href="index.php"><img src="../static/assets/images/jmnewslogo.png" alt="JM News TV"></a>
            </div>

            <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

            <ul class="site-menu js-clone-nav d-none d-md-block">
              <li class="has-children <?= $navActive(array('index.php')) ?>"><a href="index.php">Home</a></li>
              <li class="has-children <?= $navActive(array('news.php')) ?>"><a href="news.php">News</a></li>
              <li class="<?= $navActive(array('team.php')) ?>"><a href="team.php">Team</a></li>
              <li class="<?= $navActive(array('about.php')) ?>"><a href="about.php">About</a></li>
              <li class="<?= $navActive(array('contact.php')) ?>"><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </nav>
      </header>
