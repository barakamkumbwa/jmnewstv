<?php
$pageTitle = 'JM News TV | Contact';
$pageDescription = 'Contact JM News TV for advertising, editorial, and football media partnerships.';
include __DIR__ . '/partials/header.php';
?>

<div class="site-blocks-cover overlay" style="background-image: url(../static/assets/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">Contact JM News TV</h1>
            <p class="mt-4">Reach our team for advertising, editorial inquiries, partnerships, and live football coverage.</p>
          </div>
        </div>
      </div>
</div>

<style>
.jm-contact-card {
  border-radius: 18px;
}

.jm-contact-card .contact-kicker {
  display: inline-block;
  margin-bottom: 10px;
  font-size: 0.78rem;
  font-weight: 800;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #dc3545;
}

.jm-contact-card .contact-title {
  font-size: 1.35rem;
  margin-bottom: 6px;
  color: #111;
}

.jm-contact-list {
  display: grid;
  gap: 12px;
  margin: 18px 0 20px;
}

.jm-contact-link {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  text-decoration: none;
  color: inherit;
  padding: 12px 14px;
  border-radius: 14px;
  background: rgba(18, 132, 61, 0.04);
  transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
}

.jm-contact-link:hover {
  transform: translateY(-2px);
  background: rgba(220, 53, 69, 0.05);
  box-shadow: 0 10px 18px rgba(0, 0, 0, 0.08);
}

.jm-contact-link i {
  font-size: 1.1rem;
  color: #0e6a31;
  line-height: 1.4;
  margin-top: 2px;
}

.jm-contact-link strong {
  display: block;
  font-size: 0.82rem;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  margin-bottom: 2px;
  color: #dc3545;
}

.jm-contact-link span {
  display: block;
  line-height: 1.6;
  color: #222;
}

.jm-social-row {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 14px;
}

.jm-social-row a {
  width: 42px;
  height: 42px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: #111;
  color: #fff;
  text-decoration: none;
  transition: transform 0.25s ease, background 0.25s ease, box-shadow 0.25s ease;
}

.jm-social-row a:hover {
  transform: translateY(-2px) scale(1.05);
  background: #dc3545;
  box-shadow: 0 10px 18px rgba(220, 53, 69, 0.25);
}
</style>

<div class="site-section bg-light" data-aos="fade-up">
  <div class="container">
    <div class="row align-items-first">
      <div class="col-md-7">
        <form action="#" method="post" class="bg-white">
          <div class="p-3 p-lg-5 border">
            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="c_fname">
              </div>
              <div class="col-md-6">
                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_lname" name="c_lname">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_subject" class="text-black">Subject </label>
                <input type="text" class="form-control" id="c_subject" name="c_subject">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_message" class="text-black">Message </label>
                <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-5">
        <div class="p-4 border mb-3 bg-white jm-contact-card">
          <span class="contact-kicker">JM News TV</span>
          <h3 class="contact-title">Contact Details</h3>
          <p class="mb-0">Use the links below to reach our newsroom, studio, or social platforms.</p>

          <div class="jm-contact-list">
            <a class="jm-contact-link" href="https://www.google.com/maps/search/?api=1&query=Nyumba+No.+YB+V+%2F+MZ-10,+Shina+la+Mzambarauni,+Yombo+Vituka,+Dar+es+Salaam,+Tanzania" target="_blank" rel="noopener">
              <i class="bi bi-geo-alt-fill"></i>
              <span>
                <strong>Address</strong>
                Nyumba No. YB V / MZ-10, Shina la Mzambarauni, Yombo Vituka, Dar es Salaam, Tanzania
              </span>
            </a>

            <a class="jm-contact-link" href="tel:+255789921814">
              <i class="bi bi-telephone-fill"></i>
              <span>
                <strong>Phone</strong>
                +255 789 921 814
              </span>
            </a>

            <a class="jm-contact-link" href="mailto:jmnewstv269@gmail.com">
              <i class="bi bi-envelope-fill"></i>
              <span>
                <strong>Email Address</strong>
                jmnewstv269@gmail.com
              </span>
            </a>
          </div>

          <div>
            <p class="mb-2"><strong>Follow us</strong></p>
            <div class="jm-social-row">
              <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
              <a href="https://www.tiktok.com/" target="_blank" rel="noopener" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
              <a href="https://x.com/" target="_blank" rel="noopener" aria-label="X"><i class="bi bi-twitter-x"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section feature-blocks-1 no-margin-top">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">Contact and Partnership Opportunities</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="100">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(../static/assets/images/img_1.jpg);">
          <div class="text">
            <h2 class="h5 text-white">Partner with our advertising team</h2>
            <p>Reach football fans with tailored sponsorship packages across JM News TV's website and social channels.</p>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="200">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(../static/assets/images/img_2.jpg);">
          <div class="text">
            <h2 class="h5 text-white">Broadcast inquiries and live production</h2>
            <p>Contact our live coverage desk for stadium feeds, commentary bookings, and event media partnerships.</p>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="300">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(../static/assets/images/img_3.jpg);">
          <div class="text">
            <h2 class="h5 text-white">Editorial pitches and club relations</h2>
            <p>Send your story ideas, press releases, or interview requests to the JM News TV newsroom.</p>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
