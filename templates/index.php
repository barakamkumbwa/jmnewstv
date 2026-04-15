<?php
$pageTitle = 'JM News TV | Home';
$pageDescription = 'JM News TV is a professional football media company based in Dar es Salaam, Tanzania.';
require_once __DIR__ . '/partials/recent-analysis.php';
$recentAnalysisItems = jm_recent_analysis_get_items();
include __DIR__ . '/partials/header.php';
?>

<div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(../static/assets/images/newspicture3.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">JM News TV brings Tanzanian football to life</h1>
              <p>Breaking stories, match reactions, and video coverage for football fans.</p>
              <p><a href="news.php" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read News</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(../static/assets/images/newpicture1.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">Live match analysis, club news, and fan debate</h1>
              <p>Coverage of Yanga, Simba, Azam, and the Tanzania Premier League.</p>
              <p><a href="advertise.php" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Advertise</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(../static/assets/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">Trusted football coverage from Dar es Salaam</h1>
              <p>Short, powerful, and professional sports content across web, video, and social media.</p>
              <p><a href="about.php" class="btn btn-primary btn-sm rounded-0 py-3 px-5">About Us</a></p>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="site-section pt-0 feature-blocks-1" data-aos="fade" data-aos-delay="100">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(../static/assets/images/newspicture3.jpeg);">
          <div class="text">
            <h2 class="h5 text-white">Football news from Tanzania</h2>
            <p>Fast updates, club reaction, and the stories that matter every day.</p>
            <p class="mb-0"><a href="news.php" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(../static/assets/images/newpicture1.jpeg);">
          <div class="text">
            <h2 class="h5 text-white">Match previews and tactical analysis</h2>
            <p>Studio breakdowns and expert opinion on the biggest local fixtures.</p>
            <p class="mb-0"><a href="news.php" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(../static/assets/images/newspicture4.jpeg);">
          <div class="text">
            <h2 class="h5 text-white">Highlights, interviews, and live shows</h2>
            <p>Exclusive clips and live conversations that connect fans with the action.</p>
            <p class="mb-0"><a href="video.php" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .home-about {
    background: linear-gradient(180deg, rgba(18, 132, 61, 0.04), rgba(255, 255, 255, 1));
  }

  .home-about .about-card {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    overflow: hidden;
  }

  .home-about .about-media {
    min-height: 100%;
    background: #0f0f0f;
  }

  .home-about .about-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    min-height: 100%;
  }

  .home-about .about-content {
    padding: 38px;
  }

  .home-about .about-content h2 {
    font-size: 2rem;
    margin-bottom: 14px;
  }

  .home-about .about-content p {
    color: rgba(0, 0, 0, 0.72);
    line-height: 1.8;
  }

  .home-about .about-stats {
    display: flex;
    gap: 24px;
    flex-wrap: wrap;
    margin: 28px 0;
  }

  .home-about .about-stat {
    min-width: 140px;
  }

  .home-about .about-stat strong {
    display: block;
    font-size: 1.8rem;
    line-height: 1;
    color: #12843d;
    margin-bottom: 8px;
  }

  .home-about .about-stat span {
    display: block;
    color: rgba(0, 0, 0, 0.68);
    font-size: 0.92rem;
  }

  .home-about .about-actions {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
  }

  @media (max-width: 991.98px) {
    .home-about .about-content {
      padding: 28px;
    }
  }

  .recent-analysis {
    background: #fff;
  }

  .recent-analysis .analysis-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .recent-analysis .analysis-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.14);
  }

  .recent-analysis .video-frame {
    position: relative;
    overflow: hidden;
    aspect-ratio: 16 / 9;
    background: #111;
  }

  .recent-analysis .video-frame iframe {
    width: 100%;
    height: 100%;
    border: 0;
    display: block;
  }

  .recent-analysis .play-badge {
    position: absolute;
    inset: auto auto 14px 14px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.95);
    color: #0d6efd;
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.18);
    pointer-events: none;
  }

  .recent-analysis .analysis-body {
    padding: 20px;
  }

  .recent-analysis .analysis-body h3 {
    font-size: 1.1rem;
    margin-bottom: 0.6rem;
  }

  .recent-analysis .analysis-body p {
    margin-bottom: 1rem;
    color: rgba(0, 0, 0, 0.72);
    line-height: 1.65;
  }

  @media (max-width: 767.98px) {
    .recent-analysis .analysis-body {
      padding: 18px;
    }
  }
</style>

<section class="site-section home-about" id="about-home">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">About JM News TV</h2>
        <p class="mb-0">A football-first media company built for Tanzanian fans.</p>
      </div>
    </div>
    <div class="about-card">
      <div class="row no-gutters align-items-stretch">
        <div class="col-lg-6">
          <div class="about-media h-100">
            <img src="../static/assets/images/about_1.jpg" alt="JM News TV studio team" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h2>Football coverage with speed, depth, and local insight.</h2>
            <p>JM News TV is a digital sports media brand based in Dar es Salaam. We focus on football news, match analysis, interviews, highlights, and live discussions that connect fans across Tanzania.</p>
            <p>Since 2025, the platform has grown into a trusted voice for Yanga, Simba, Azam, Singida Black Stars, and the wider Tanzania Premier League conversation.</p>
            <div class="about-stats">
              <div class="about-stat">
                <strong>2025</strong>
                <span>Founded in Dar es Salaam</span>
              </div>
              <div class="about-stat">
                <strong>8</strong>
                <span>Management team members</span>
              </div>
              <div class="about-stat">
                <strong>4+</strong>
                <span>Social platforms active</span>
              </div>
            </div>
            <div class="about-actions">
              <a href="about.php" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a>
              <a href="contact.php" class="btn btn-outline-secondary btn-sm rounded-0 py-3 px-5">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="site-section recent-analysis">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">Recent Analysis</h2>
        <p class="mb-0">Latest Football Insights &amp; Match Breakdown</p>
      </div>
    </div>
    <div class="row">
<?php foreach ($recentAnalysisItems as $index => $item): ?>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="<?= 100 * ($index + 1) ?>">
        <div class="analysis-card">
          <div class="video-frame">
            <iframe src="<?= htmlspecialchars($item['embed_url'], ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" allowfullscreen></iframe>
            <span class="play-badge"><i class="icon-play"></i></span>
          </div>
          <div class="analysis-body">
            <h3><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') ?></p>
            <a href="video.php" class="btn btn-primary btn-sm rounded-0 py-2 px-4">Watch Now</a>
          </div>
        </div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
