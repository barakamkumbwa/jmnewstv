<?php
$pageTitle = 'JM News TV | Team';
$pageDescription = 'Meet the team behind JM News TV, a professional football media company based in Dar es Salaam, Tanzania.';
include __DIR__ . '/partials/header.php';
?>

<div class="site-blocks-cover overlay" style="background-image: url(../static/assets/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">Our Team</h1>
            <p class="mt-4">Meet the Team Behind JM News TV. A group of professionals delivering football news, live analysis, and digital sports coverage.</p>
          </div>
        </div>
      </div>
</div>

<style>
/* Team Section */
.team {
  --surface-color: #ffffff;
  --background-color: #ffffff;
  --default-color: #444444;
  --heading-color: #111111;
  --accent-color: #12843d;
}

section,
.section {
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 60px 0;
  scroll-margin-top: 78px;
  overflow: clip;
}

@media (max-width: 1199px) {
  section,
  .section {
    scroll-margin-top: 60px;
  }
}

.section-title {
  text-align: center;
  padding-bottom: 60px;
  position: relative;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title h2:before {
  content: "";
  position: absolute;
  display: block;
  width: 160px;
  height: 1px;
  background: color-mix(in srgb, var(--default-color), transparent 60%);
  left: 0;
  right: 0;
  bottom: 1px;
  margin: auto;
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 60px;
  height: 3px;
  background: var(--accent-color);
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}

.section-title p {
  margin-bottom: 0;
}

.site-blocks-cover .bg-text-line {
  display: inline-block;
  margin-bottom: 0.5rem;
  font-size: clamp(2.4rem, 5vw, 4.6rem);
  line-height: 1.05;
  letter-spacing: 0.02em;
  text-shadow: 0 6px 24px rgba(0, 0, 0, 0.22);
}

.site-blocks-cover p.mt-4 {
  max-width: 720px;
  margin-left: auto;
  margin-right: auto;
  font-size: 1.05rem;
  line-height: 1.8;
  color: rgba(255, 255, 255, 0.9);
}

.team .section-title h2 {
  color: var(--heading-color);
}

.team .section-title p {
  font-size: 1.05rem;
  color: color-mix(in srgb, var(--default-color), transparent 15%);
}

.team .member-card {
  background-color: var(--surface-color);
  border-radius: 10px;
  overflow: hidden;
  text-align: center;
  box-shadow: 0 5px 25px color-mix(in srgb, var(--default-color), transparent 85%);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  height: 100%;
  display: flex;
  flex-direction: column;
}

.team .member-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 35px color-mix(in srgb, var(--default-color), transparent 80%);
}

.team .member-card:hover .member-image-wrapper img {
  transform: scale(1.05);
}

.team .member-image-wrapper {
  overflow: hidden;
  position: relative;
}

.team .member-image-wrapper img {
  width: 100%;
  aspect-ratio: 1/1.1;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.team .member-content {
  padding: 20px;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.team .member-name {
  font-size: 1.25rem;
  font-weight: 700;
  color: var(--heading-color);
  margin-bottom: 0.25rem;
}

.team .member-role {
  font-size: 0.875rem;
  color: var(--accent-color);
  display: block;
  margin-bottom: 0.75rem;
  font-weight: 500;
}

.team .member-bio {
  font-size: 0.9rem;
  line-height: 1.6;
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  margin-bottom: 1rem;
  flex-grow: 1;
}

.team .member-socials {
  margin-top: auto;
  padding-top: 1rem;
  border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.team .member-socials a {
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  margin: 0 8px;
  font-size: 1.1rem;
  transition: color 0.3s;
}

.team .member-socials a:hover {
  color: var(--accent-color);
}

@media (max-width: 991.98px) {
  .team .member-name {
    font-size: 1.15rem;
  }

  .team .member-role {
    font-size: 0.8rem;
  }
}

@media (max-width: 767.98px) {
  .team .row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 1.5rem;
  }

  .team .member-card {
    box-shadow: 0 3px 15px color-mix(in srgb, var(--default-color), transparent 90%);
  }

  .team .member-name {
    font-size: 1.1rem;
  }
}
</style>

<section id="team" class="team section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Team</h2>
    <p>Meet the Team Behind JM News TV</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member-card">
          <div class="member-image-wrapper">
            <img src="../static/assets/images/person_2.jpg" class="img-fluid" alt="UMA CHIZA BENE BABU">
          </div>
          <div class="member-content">
            <h4 class="member-name">UMA CHIZA BENE BABU </h4>
            <span class="member-role">Founder &amp; Owner</span>
            <p class="member-bio">Visionary leader behind JM News TV, responsible for strategic direction, partnerships, and long-term growth.</p>
            <div class="member-socials">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-youtube"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="member-card">
          <div class="member-image-wrapper">
            <img src="../static/assets/images/person_2.jpg" class="img-fluid" alt="Saidi Abdallah Juma">
          </div>
          <div class="member-content">
            <h4 class="member-name">Saidi Abdallah Juma</h4>
            <span class="member-role">Chief Executive Officer (CEO)</span>
            <p class="member-bio">Leads overall operations, manages the team, and ensures high-quality sports content delivery and business growth.</p>
            <div class="member-socials">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-youtube"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="member-card">
          <div class="member-image-wrapper">
            <img src="../static/assets/images/person_3.jpg" class="img-fluid" alt="Heri Saidi Lyonga">
          </div>
          <div class="member-content">
            <h4 class="member-name">Heri Saidi Lyonga</h4>
            <span class="member-role">Production Manager</span>
            <p class="member-bio">Oversees all production activities, ensuring smooth content creation and high-quality video output.</p>
            <div class="member-socials">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-youtube"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="member-card">
          <div class="member-image-wrapper">
            <img src="../static/assets/images/person_4.jpg" class="img-fluid" alt="Juma Miraji Bakari">
          </div>
          <div class="member-content">
            <h4 class="member-name">Juma Miraji Bakari</h4>
            <span class="member-role">Technical Director</span>
            <p class="member-bio">Manages all technical broadcasting systems, ensuring smooth live streaming and studio operations.</p>
            <div class="member-socials">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-youtube"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="member-card">
          <div class="member-image-wrapper">
            <img src="../static/assets/images/person_1.jpg" class="img-fluid" alt="Bakari Hussein Bushiri">
          </div>
          <div class="member-content">
            <h4 class="member-name">Bakari Hussein Bushiri</h4>
            <span class="member-role">Social Media Manager</span>
            <p class="member-bio">Drives audience engagement through social media platforms and manages digital content distribution.</p>
            <div class="member-socials">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-youtube"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="member-card">
          <div class="member-image-wrapper">
            <img src="../static/assets/images/person_2.jpg" class="img-fluid" alt="Ayubu Danieli Msokolo">
          </div>
          <div class="member-content">
            <h4 class="member-name">Ayubu Danieli Msokolo</h4>
            <span class="member-role">IT Technician</span>
            <p class="member-bio">Maintains systems, handles technical support, and ensures smooth digital infrastructure.</p>
            <div class="member-socials">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-youtube"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
        <div class="member-card">
          <div class="member-image-wrapper">
            <img src="../static/assets/images/person_3.jpg" class="img-fluid" alt="Sports Host">
          </div>
          <div class="member-content">
            <h4 class="member-name">Issa Khamis Mbwana</h4>
            <span class="member-role">Presenter</span>
            <p class="member-bio">Presents sports news, conducts interviews, and engages audiences with live discussions.</p>
            <div class="member-socials">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-youtube"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="800">
        <div class="member-card">
          <div class="member-image-wrapper">
            <img src="../static/assets/images/person_4.jpg" class="img-fluid" alt="Shaibu Hamza Twaha">
          </div>
          <div class="member-content">
            <h4 class="member-name">Shaibu Hamza Twaha</h4>
            <span class="member-role">Reporter &amp; Journalist</span>
            <p class="member-bio">Covers sports news, conducts interviews, and delivers accurate and timely updates.</p>
            <div class="member-socials">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-youtube"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
