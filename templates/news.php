<?php
$pageTitle = 'JM News TV | News';
$pageDescription = 'JM News TV brings football news, club updates, and analysis from Tanzania.';
require_once __DIR__ . '/partials/news-posts.php';
$newsItems = jm_news_posts_get_items();
include __DIR__ . '/partials/header.php';
?>

<div class="site-blocks-cover overlay" style="background-image: url(../static/assets/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">Football News</h1>
            <p class="mt-4">Breaking updates, match analysis, player interviews, and club stories from Tanzania's football scene.</p>
          </div>
        </div>
      </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5">
<?php foreach ($newsItems as $item): ?>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="post-entry">
          <div class="image">
            <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" class="img-fluid">
          </div>
          <div class="text p-4">
            <h2 class="h5 text-black"><a href="#"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></a></h2>
            <span class="text-uppercase date d-block mb-3"><small>By <?= htmlspecialchars($item['author'], ENT_QUOTES, 'UTF-8') ?> - <?= htmlspecialchars($item['published_at'], ENT_QUOTES, 'UTF-8') ?></small></span>
            <p class="mb-0"><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') ?></p>
          </div>
        </div>
      </div>
<?php endforeach; ?>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
    </div>
  </div>
</div>
<?php include __DIR__ . '/partials/footer.php'; ?>
