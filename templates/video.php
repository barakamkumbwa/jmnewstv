<?php
require_once __DIR__ . '/partials/seo.php';
$pageTitle = 'Football Videos & Analysis | JM News TV';
$pageDescription = 'Watch football highlights, interviews, and match analysis from JM News TV.';
$pageKeywords = 'football videos, match analysis, interviews, Tanzania football';
$pageOgImage = jm_site_url('static/assets/images/hero_bg_3.jpg');
$pageOgType = 'website';
$pageCanonical = jm_site_url('video.php');
require_once __DIR__ . '/partials/recent-analysis.php';
$recentAnalysisItems = jm_recent_analysis_get_items();
include __DIR__ . '/partials/header.php';
?>

<div class="site-blocks-cover overlay" style="background-image: url(../static/assets/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">Video Coverage</h1>
            <p class="mt-4">Match analysis, highlights, and interviews made for football fans who want the story behind the game.</p>
          </div>
        </div>
      </div>
</div>

<div class="site-section feature-blocks-1 no-margin-top">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">Featured Football Videos</h2>
      </div>
    </div>
    <div class="row">
<?php foreach ($recentAnalysisItems as $index => $item): ?>
      <div class="col-md-6 col-lg-4 mb-4" data-aos="fade" data-aos-delay="<?= 100 * ($index + 1) ?>">
        <div class="analysis-card video-feed-card">
          <div class="video-frame">
            <iframe src="<?= htmlspecialchars($item['embed_url'], ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" allowfullscreen></iframe>
            <span class="play-badge"><i class="icon-play"></i></span>
          </div>
          <div class="analysis-body">
            <h3><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') ?></p>
            <a href="<?= htmlspecialchars($item['watch_url'], ENT_QUOTES, 'UTF-8') ?>" class="btn btn-primary btn-sm rounded-0 py-2 px-4" target="_blank" rel="noopener">Watch Now</a>
          </div>
        </div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</div>

<style>
  .video-feed-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .video-feed-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.14);
  }

  .video-feed-card .analysis-body {
    padding: 20px;
  }

  .video-feed-card .analysis-body h3 {
    font-size: 1.1rem;
    margin-bottom: 0.6rem;
  }

  .video-feed-card .analysis-body p {
    margin-bottom: 1rem;
    color: rgba(0, 0, 0, 0.72);
    line-height: 1.65;
  }
</style>

<?php include __DIR__ . '/partials/footer.php'; ?>
