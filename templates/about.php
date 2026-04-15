<?php
$pageTitle = 'JM News TV | About';
$pageDescription = 'JM News TV is a professional football media company based in Dar es Salaam, Tanzania.';
include 'partials/header.php';
?>

<div class="site-blocks-cover overlay" style="background-image: url(../static/assets/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">About JM News TV</h1>
            <p class="mt-4">JM News TV is a Dar es Salaam based digital sports media brand focused on football news, analysis, interviews, highlights, and live discussions.</p>
          </div>
        </div>
      </div>
</div>

<style>
/* CoreBiz About Section */
.about {
  --surface-color: #ffffff;
  --background-color: #ffffff;
  --default-color: #444444;
  --heading-color: #111111;
  --accent-color: #12843d;
  --contrast-color: #ffffff;
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

.about .content {
  padding-right: 40px;
}

@media (max-width: 992px) {
  .about .content {
    padding-right: 0;
    margin-bottom: 60px;
  }
}

.about .content h2 {
  font-size: 2.5rem;
  font-weight: 300;
  line-height: 1.3;
  margin-bottom: 30px;
  color: var(--heading-color);
}

@media (max-width: 768px) {
  .about .content h2 {
    font-size: 2rem;
  }
}

.about .content .lead {
  font-size: 1.25rem;
  line-height: 1.7;
  margin-bottom: 40px;
  color: color-mix(in srgb, var(--default-color), transparent 10%);
}

.about .content .description {
  margin-bottom: 60px;
}

.about .content .description p {
  font-size: 1rem;
  line-height: 1.8;
  margin-bottom: 20px;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
}

.about .content .description p:last-child {
  margin-bottom: 0;
}

.about .content .stats-row {
  display: flex;
  gap: 60px;
  margin-bottom: 60px;
}

@media (max-width: 768px) {
  .about .content .stats-row {
    gap: 40px;
    flex-wrap: wrap;
  }
}

@media (max-width: 576px) {
  .about .content .stats-row {
    justify-content: space-between;
    gap: 20px;
  }
}

.about .content .stats-row .stat-item {
  text-align: left;
}

.about .content .stats-row .stat-item .stat-number {
  font-size: 2.5rem;
  font-weight: 300;
  color: var(--accent-color);
  line-height: 1;
  margin-bottom: 8px;
}

@media (max-width: 768px) {
  .about .content .stats-row .stat-item .stat-number {
    font-size: 2rem;
  }
}

.about .content .stats-row .stat-item .stat-label {
  font-size: 0.875rem;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.about .content .cta-section {
  display: flex;
  align-items: center;
  gap: 30px;
}

@media (max-width: 576px) {
  .about .content .cta-section {
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
  }
}

.about .content .cta-section .btn-primary {
  background-color: var(--accent-color);
  color: var(--contrast-color);
  padding: 14px 30px;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 400;
  transition: all 0.3s ease;
  border: 2px solid var(--accent-color);
}

.about .content .cta-section .btn-primary:hover {
  background-color: transparent;
  color: var(--accent-color);
}

.about .content .cta-section .btn-link {
  color: var(--heading-color);
  text-decoration: none;
  font-weight: 400;
  display: flex;
  align-items: center;
  gap: 8px;
  transition: all 0.3s ease;
}

.about .content .cta-section .btn-link:hover {
  color: var(--accent-color);
}

.about .content .cta-section .btn-link:hover i {
  transform: translateX(4px);
}

.about .content .cta-section .btn-link i {
  transition: transform 0.3s ease;
}

.about .image-container {
  position: relative;
  height: 100%;
  min-height: 500px;
}

@media (max-width: 992px) {
  .about .image-container {
    min-height: 400px;
  }
}

.about .image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 8px;
}

.about .image-container .image-overlay {
  position: absolute;
  bottom: 30px;
  left: 30px;
  background-color: var(--surface-color);
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 8px 30px color-mix(in srgb, var(--default-color), transparent 85%);
  min-width: 200px;
}

@media (max-width: 576px) {
  .about .image-container .image-overlay {
    bottom: 20px;
    left: 20px;
    padding: 20px;
  }
}

.about .image-container .image-overlay .overlay-content {
  display: flex;
  align-items: center;
  gap: 15px;
}

.about .image-container .image-overlay .overlay-content i {
  font-size: 2rem;
  color: var(--accent-color);
}

.about .image-container .image-overlay .overlay-content .overlay-text h4 {
  font-size: 1.1rem;
  margin-bottom: 4px;
  color: var(--heading-color);
  font-weight: 500;
}

.about .image-container .image-overlay .overlay-content .overlay-text p {
  font-size: 0.875rem;
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  margin-bottom: 0;
}

.about-deep-dive,
.about-values,
.about-services,
.about-story,
.about-team-preview,
.about-reasons,
.about-cta {
  padding-top: 70px;
}

.about-deep-dive .overview-kicker {
  display: inline-block;
  font-size: 0.82rem;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: #12843d;
  font-weight: 700;
  margin-bottom: 12px;
}

.about-deep-dive .highlight-word {
  color: #12843d;
  font-weight: 700;
}

.about-deep-dive .overview-subtitle {
  max-width: 720px;
  margin: 0 auto;
  color: rgba(0, 0, 0, 0.72);
  font-size: 1.02rem;
  line-height: 1.75;
}

.about-deep-dive .overview-accordion {
  display: grid;
  gap: 14px;
}

.about-deep-dive .overview-item {
  border: 1px solid rgba(0, 0, 0, 0.08);
  border-radius: 20px;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
}

.about-deep-dive .overview-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 14px 30px rgba(0, 0, 0, 0.09);
}

.about-deep-dive .accordion-button {
  background: #fff;
  color: #111;
  padding: 20px 22px;
  box-shadow: none;
  border: 0;
  gap: 16px;
  align-items: center;
}

.about-deep-dive .accordion-button:not(.collapsed) {
  background: rgba(220, 53, 69, 0.04);
  color: #111;
  box-shadow: inset 0 -1px 0 rgba(220, 53, 69, 0.15);
}

.about-deep-dive .accordion-button:focus {
  box-shadow: none;
}

.about-deep-dive .accordion-button::after {
  display: none;
}

.about-deep-dive .overview-header-copy {
  display: flex;
  flex-direction: column;
  gap: 4px;
  text-align: left;
}

.about-deep-dive .overview-header-title {
  font-size: 1.05rem;
  font-weight: 800;
  color: #111;
}

.about-deep-dive .overview-header-subtitle {
  font-size: 0.9rem;
  color: rgba(0, 0, 0, 0.68);
}

.about-deep-dive .accordion-arrow {
  margin-left: auto;
  width: 34px;
  height: 34px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: rgba(18, 132, 61, 0.08);
  color: #0e6a31;
  flex: 0 0 auto;
  transition: transform 0.28s ease, background 0.28s ease, color 0.28s ease;
}

.about-deep-dive .accordion-button:not(.collapsed) .accordion-arrow {
  transform: rotate(180deg);
  background: rgba(220, 53, 69, 0.1);
  color: #dc3545;
}

.about-deep-dive .accordion-body {
  padding: 0 22px 22px;
  color: rgba(0, 0, 0, 0.75);
}

.about-deep-dive .overview-intro {
  line-height: 1.8;
  margin-bottom: 16px;
}

.about-deep-dive .overview-list {
  display: grid;
  gap: 10px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.about-deep-dive .overview-list li {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  line-height: 1.7;
}

.about-deep-dive .overview-list i {
  color: #dc3545;
  margin-top: 2px;
  flex: 0 0 auto;
}

.about-deep-dive .overview-badges {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 18px;
}

.about-deep-dive .overview-badges span {
  padding: 7px 12px;
  border-radius: 999px;
  background: rgba(18, 132, 61, 0.08);
  color: #0e6a31;
  font-size: 0.82rem;
  font-weight: 700;
}

.about-deep-dive .overview-meta-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 12px;
  margin-top: 18px;
}

.about-deep-dive .overview-meta {
  border-radius: 16px;
  border: 1px solid rgba(0, 0, 0, 0.06);
  background: linear-gradient(180deg, #fff, rgba(18, 132, 61, 0.03));
  padding: 14px;
}

.about-deep-dive .overview-meta span {
  display: block;
  font-size: 0.72rem;
  font-weight: 800;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #dc3545;
  margin-bottom: 6px;
}

.about-deep-dive .overview-meta strong {
  display: block;
  color: #111;
  font-size: 0.92rem;
  line-height: 1.5;
}

.about-deep-dive .overview-image-wrap,
.about-deep-dive .gallery-main,
.about-deep-dive .gallery-side,
.about-deep-dive .gallery-card,
.about-deep-dive .gallery-main-content,
.about-deep-dive .gallery-card-content,
.about-deep-dive .overview-panel,
.about-deep-dive .overview-panel-inner,
.about-deep-dive .overview-panel-top,
.about-deep-dive .overview-panel-copy,
.about-deep-dive .overview-strip,
.about-deep-dive .overview-metric,
.about-deep-dive .overview-media-note,
.about-deep-dive .overview-grid,
.about-deep-dive .overview-panel-text,
.about-deep-dive .overview-panel-stack,
.about-deep-dive .overview-mini {
  display: none;
}

.about-values .value-card,
.about-services .service-card,
.about-reasons .reason-card,
.about-team-preview .member-card,
.about-cta .cta-panel {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.about-values .value-card {
  padding: 28px;
  border: 1px solid rgba(0, 0, 0, 0.05);
  min-height: 100%;
}

.about-values .value-card:hover,
.about-services .service-card:hover,
.about-reasons .reason-card:hover,
.about-team-preview .member-card:hover,
.about-cta .cta-panel:hover {
  transform: translateY(-6px);
  box-shadow: 0 14px 30px rgba(0, 0, 0, 0.12);
}

.about-values .value-card:hover {
  border-color: rgba(220, 53, 69, 0.35);
}

.about-values .value-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: rgba(18, 132, 61, 0.08);
  color: #12843d;
  font-size: 1.4rem;
  margin-bottom: 18px;
}

.about-values .value-card h3,
.about-services .service-card h3,
.about-reasons .reason-card h3 {
  margin-bottom: 12px;
  color: #111;
}

.about-values .value-card p,
.about-services .service-card p,
.about-reasons .reason-card p,
.about-story .story-content p {
  color: rgba(0, 0, 0, 0.72);
  line-height: 1.75;
  margin-bottom: 0;
}

.about-services .service-card,
.about-reasons .reason-card {
  padding: 30px 24px 24px;
  text-align: center;
  min-height: 100%;
  border: 1px solid rgba(0, 0, 0, 0.05);
  position: relative;
  overflow: hidden;
}

.about-services .service-icon,
.about-reasons .reason-card i {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 16px;
  color: #fff;
  background: linear-gradient(135deg, #12843d, #f2c230);
  font-size: 1.55rem;
  animation: jmSoftBounce 2.4s ease-in-out infinite;
}

.about-services .service-card:before {
  content: "";
  position: absolute;
  inset: 0 auto auto 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(90deg, #12843d, #f2c230);
}

.about-services .service-card:hover .service-icon {
  transform: translateY(-2px) scale(1.05);
}

.about-services .service-card .service-tag {
  display: inline-block;
  margin-top: 14px;
  padding: 7px 12px;
  border-radius: 999px;
  background: rgba(220, 53, 69, 0.08);
  color: #a31f2d;
  font-size: 0.78rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}

.about-story .story-timeline {
  position: relative;
  max-width: 900px;
  margin: 0 auto;
  padding-left: 28px;
}

.about-story .story-timeline:before {
  content: "";
  position: absolute;
  left: 10px;
  top: 4px;
  bottom: 4px;
  width: 2px;
  background: linear-gradient(180deg, #12843d, rgba(18, 132, 61, 0.1));
}

.about-story .story-item {
  position: relative;
  padding: 0 0 34px 34px;
}

.about-story .story-item:last-child {
  padding-bottom: 0;
}

.about-story .story-dot {
  position: absolute;
  left: 1px;
  top: 6px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #dc3545;
  border: 4px solid rgba(220, 53, 69, 0.16);
}

.about-story .story-content {
  background: #fff;
  border-radius: 14px;
  padding: 24px 24px 24px 28px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-story .story-content:hover {
  transform: translateX(4px);
  box-shadow: 0 14px 30px rgba(0, 0, 0, 0.1);
}

.about-story .story-year {
  display: inline-block;
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #12843d;
  margin-bottom: 10px;
}

.about-team-preview .org-tree {
  position: relative;
  max-width: 900px;
  margin: 0 auto;
  padding: 0;
}

.about-team-preview .org-node {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin: 0 auto;
  z-index: 1;
}

.about-team-preview .org-circle {
  width: 110px;
  height: 110px;
  border-radius: 50%;
  background: #fff;
  border: 3px solid #dc3545;
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
}

.about-team-preview .org-circle:before {
  content: "";
  position: absolute;
  inset: -6px;
  border-radius: 50%;
  border: 1px solid rgba(220, 53, 69, 0.25);
  opacity: 0.65;
  animation: orgBorderFlow 3.2s ease-in-out infinite;
}

.about-team-preview .org-circle:hover {
  transform: translateY(-6px) scale(1.03);
  box-shadow: 0 16px 32px rgba(0, 0, 0, 0.14);
}

.about-team-preview .org-circle img,
.about-team-preview .org-avatar {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.about-team-preview .org-avatar {
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #111 0%, #12843d 100%);
  color: #fff;
  font-size: 1.2rem;
  font-weight: 800;
  letter-spacing: 0.04em;
}

.about-team-preview .org-photo {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.about-team-preview .org-meta {
  margin-top: 8px;
  max-width: 170px;
}

.about-team-preview .org-meta h4 {
  font-size: 0.95rem;
  font-weight: 700;
  color: #111;
  margin-bottom: 4px;
}

.about-team-preview .org-meta p {
  font-size: 0.74rem;
  color: rgba(0, 0, 0, 0.68);
  margin-bottom: 0;
}

.about-team-preview .org-root .org-circle {
  width: 128px;
  height: 128px;
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
}

.about-team-preview .org-root .org-meta h4 {
  font-size: 1rem;
}

.about-team-preview .org-ceo .org-circle {
  animation: ceoPulse 2.8s ease-in-out infinite;
}

.about-team-preview .org-line {
  position: relative;
  background: rgba(220, 53, 69, 0.5);
}

.about-team-preview .org-line.vertical {
  width: 2px;
  height: 28px;
  margin: 10px auto;
}

.about-team-preview .org-line.horizontal {
  width: 60%;
  height: 2px;
  margin: 12px auto 0;
}

.about-team-preview .org-branch {
  position: relative;
  margin-top: 14px;
}

.about-team-preview .org-row {
  display: grid;
  gap: 14px;
}

.about-team-preview .org-row.core {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}

.about-team-preview .org-row.support {
  grid-template-columns: repeat(3, minmax(0, 1fr));
  margin-top: 18px;
}

.about-team-preview .org-row.core,
.about-team-preview .org-row.support {
  align-items: start;
}

.about-team-preview .org-branch:before {
  content: "";
  position: absolute;
  top: -12px;
  left: 50%;
  width: 2px;
  height: 12px;
  transform: translateX(-50%);
  background: rgba(220, 53, 69, 0.55);
}

.about-team-preview .org-row.core .org-node:before,
.about-team-preview .org-row.support .org-node:before {
  content: "";
  position: absolute;
  top: -12px;
  left: 50%;
  width: 2px;
  height: 12px;
  transform: translateX(-50%);
  background: rgba(220, 53, 69, 0.42);
}

.about-team-preview .org-row.core .org-node:after,
.about-team-preview .org-row.support .org-node:after {
  content: "";
  position: absolute;
  top: -12px;
  left: 50%;
  width: 100%;
  height: 2px;
  transform: translateX(-50%);
  background: linear-gradient(90deg, transparent, rgba(220, 53, 69, 0.36), transparent);
}

.about-team-preview .org-row.core .org-node:first-child:after,
.about-team-preview .org-row.support .org-node:first-child:after {
  left: 50%;
  width: 50%;
}

.about-team-preview .org-row.core .org-node:last-child:after,
.about-team-preview .org-row.support .org-node:last-child:after {
  left: 50%;
  width: 50%;
}

.about-team-preview .org-stack {
  position: relative;
}

.about-team-preview .org-stack .org-node + .org-node {
  margin-top: 14px;
}

.about-team-preview .org-support-title {
  text-align: center;
  margin: 20px 0 10px;
}

.about-team-preview .org-support-node {
  margin-top: 6px;
}

.about-team-preview .org-support-node .org-circle {
  width: 120px;
  height: 120px;
}

.about-team-preview .org-support-node .org-meta {
  max-width: 260px;
}

.about-team-preview .org-support-title span {
  display: inline-block;
  padding: 6px 12px;
  border-radius: 999px;
  background: rgba(18, 132, 61, 0.08);
  color: #0e6a31;
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.about-team-preview .org-node {
  animation: orgPop 0.6s ease both;
}

.about-team-preview .org-node.delay-1 { animation-delay: 0.1s; }
.about-team-preview .org-node.delay-2 { animation-delay: 0.2s; }
.about-team-preview .org-node.delay-3 { animation-delay: 0.3s; }
.about-team-preview .org-node.delay-4 { animation-delay: 0.4s; }
.about-team-preview .org-node.delay-5 { animation-delay: 0.5s; }
.about-team-preview .org-node.delay-6 { animation-delay: 0.6s; }
.about-team-preview .org-node.delay-7 { animation-delay: 0.7s; }

.about-team-preview .org-node:hover .org-circle {
  border-color: #dc3545;
}

@keyframes orgBorderFlow {
  0%, 100% { transform: scale(1); opacity: 0.5; }
  50% { transform: scale(1.04); opacity: 0.9; }
}

@keyframes orgPop {
  from { opacity: 0; transform: scale(0.9) translateY(10px); }
  to { opacity: 1; transform: scale(1) translateY(0); }
}

@keyframes ceoPulse {
  0%, 100% { box-shadow: 0 10px 24px rgba(0, 0, 0, 0.1); }
  50% { box-shadow: 0 0 0 10px rgba(220, 53, 69, 0.08), 0 16px 32px rgba(0, 0, 0, 0.14); }
}

.about-reasons .reason-card i {
  animation: none;
}

.about-reasons .reason-card:hover i {
  transform: scale(1.08) rotate(6deg);
}

.about-cta .cta-panel {
  padding: 34px;
  background: linear-gradient(135deg, #111 0%, #430808 100%);
  color: #fff;
}

.about-cta .cta-panel h2,
.about-cta .cta-panel p {
  color: #fff;
}

.about-cta .pulse-btn {
  animation: jmPulseSoft 2.2s ease-in-out infinite;
}

@keyframes jmSoftBounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-4px); }
}

@keyframes jmPulseSoft {
  0%, 100% { box-shadow: 0 0 0 0 rgba(242, 194, 48, 0.28); }
  50% { box-shadow: 0 0 0 12px rgba(242, 194, 48, 0); }
}

@media (max-width: 991.98px) {
  .about-story .story-timeline {
    padding-left: 22px;
  }

  .about-deep-dive .overview-meta-grid {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 767.98px) {
  .about-deep-dive,
  .about-values,
  .about-services,
  .about-story,
  .about-team-preview,
  .about-reasons,
  .about-cta {
    padding-top: 50px;
  }

  .about-story .story-content {
    padding: 20px;
  }

  .about-cta .cta-panel {
    padding: 24px;
  }

  .about-deep-dive .gallery-side {
    grid-template-columns: 1fr;
  }

  .about-deep-dive .overview-header-title {
    font-size: 1rem;
  }

  .about-deep-dive .overview-header-subtitle {
    font-size: 0.84rem;
  }

  .about-deep-dive .accordion-button {
    padding: 18px 16px;
  }

  .about-deep-dive .accordion-body {
    padding: 0 16px 18px;
  }

  .about-team-preview .org-row.core,
  .about-team-preview .org-row.support {
    grid-template-columns: 1fr;
  }

  .about-team-preview .org-line.horizontal,
  .about-team-preview .org-row.core .org-node:after,
  .about-team-preview .org-row.support .org-node:after {
    display: none;
  }

  .about-team-preview .org-row.core .org-node:before,
  .about-team-preview .org-row.support .org-node:before,
  .about-team-preview .org-branch:before {
    left: 50%;
    height: 22px;
  }

  .about-team-preview .org-circle {
    width: 104px;
    height: 104px;
  }

  .about-team-preview .org-root .org-circle {
    width: 118px;
    height: 118px;
  }
}
</style>

<section id="about" class="about section">

  <div class="container section-title" data-aos="fade-up">
    <h2>About</h2>
    <p>Find Out More About Us</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="content">
          <h2>Building Excellence Through Football Storytelling and Integrity</h2>
          <p class="lead">JM News TV is a Dar es Salaam based digital sports media brand focused on football news, analysis, interviews, highlights, and live discussion.</p>

          <div class="description">
            <p>We deliver fast, credible, and engaging coverage that keeps football fans informed and connected to the game.</p>

            <p>Since launching in September 2025, the brand has grown into a trusted voice for local football conversations and digital sports content in Tanzania.</p>
          </div>

          <div class="stats-row">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
              <div class="stat-number">
                <span data-purecounter-start="0" data-purecounter-end="2025" data-purecounter-duration="1" class="purecounter"></span>
              </div>
              <div class="stat-label">Launch Year</div>
            </div>

            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
              <div class="stat-number">
                <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>+
              </div>
              <div class="stat-label">Team Members</div>
            </div>

            <div class="stat-item" data-aos="fade-up" data-aos-delay="500">
              <div class="stat-number">
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>+
              </div>
              <div class="stat-label">Digital Platforms</div>
            </div>
          </div>

          <div class="cta-section" data-aos="fade-up" data-aos-delay="300">
            <a href="team.php" class="btn-link">Meet Our Team <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="image-container">
          <img src="../CoreBiz/assets/img/about/about-square-8.webp" alt="About JM News TV" class="img-fluid">
          <div class="image-overlay">
            <div class="overlay-content">
              <i class="bi bi-award"></i>
              <div class="overlay-text">
                <h4>Football Media</h4>
                <p>Professional Coverage</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>

<section class="about-values section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">Vision & Mission</h2>
        <p class="mb-0">Guiding JM News TV from a local football platform to a stronger digital media brand.</p>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="value-card">
          <span class="value-icon"><i class="bi bi-eye"></i></span>
          <h3>Vision</h3>
          <p>To become Tanzania's most trusted and influential online football media platform, known for timely and engaging coverage.</p>
        </div>
      </div>
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="value-card">
          <span class="value-icon"><i class="bi bi-bullseye"></i></span>
          <h3>Mission</h3>
          <p>To deliver high-quality football content through digital platforms while promoting local talent, fan engagement, and sustainable media growth.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-services section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">What We Do</h2>
        <p class="mb-0">Football content built for fans, clubs, and brands.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
        <article class="service-card">
          <div class="service-icon"><i class="bi bi-trophy"></i></div>
          <h3>Football News</h3>
          <p>Breaking updates, club stories, and league headlines that matter most.</p>
          <span class="service-tag">Daily Coverage</span>
        </article>
      </div>
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
        <article class="service-card">
          <div class="service-icon"><i class="bi bi-camera-video"></i></div>
          <h3>Video Analysis</h3>
          <p>Tactical breakdowns, match reactions, and clear football opinions.</p>
          <span class="service-tag">Match Insight</span>
        </article>
      </div>
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
        <article class="service-card">
          <div class="service-icon"><i class="bi bi-mic"></i></div>
          <h3>Interviews</h3>
          <p>Conversations with players, analysts, fans, and football personalities.</p>
          <span class="service-tag">Exclusive Voices</span>
        </article>
      </div>
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
        <article class="service-card">
          <div class="service-icon"><i class="bi bi-tv"></i></div>
          <h3>Live Shows</h3>
          <p>Studio discussions, live reactions, and fan engagement across platforms.</p>
          <span class="service-tag">On Air</span>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="about-story section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">Our Story</h2>
        <p class="mb-0">A short timeline of steady growth and stronger football coverage.</p>
      </div>
    </div>

    <div class="story-timeline">
      <div class="story-item" data-aos="fade-up" data-aos-delay="100">
        <div class="story-dot"></div>
        <div class="story-content">
          <span class="story-year">September 2025</span>
          <h3>JM News TV is launched</h3>
          <p>The brand begins with a clear focus on football news and digital sports storytelling in Tanzania.</p>
        </div>
      </div>
      <div class="story-item" data-aos="fade-up" data-aos-delay="200">
        <div class="story-dot"></div>
        <div class="story-content">
          <span class="story-year">Early Growth</span>
          <h3>Content and audience grow fast</h3>
          <p>The platform builds trust through consistent coverage, social media reach, and live football discussions.</p>
        </div>
      </div>
      <div class="story-item" data-aos="fade-up" data-aos-delay="300">
        <div class="story-dot"></div>
        <div class="story-content">
          <span class="story-year">2026</span>
          <h3>Expanded media operations</h3>
          <p>The team grows, the production quality improves, and JM News TV becomes a stronger voice in local football media.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-team-preview section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">Team Preview</h2>
        <p class="mb-0">Meet the people driving the newsroom, studio, and digital growth.</p>
      </div>
    </div>

    <div class="org-tree" data-aos="fade-up" data-aos-delay="100">
      <div class="org-node org-root delay-1">
        <div class="org-circle">
          <img src="../CoreBiz/assets/img/person/person-f-1.webp" class="org-photo" alt="Juma Cheza Ben">
        </div>
        <div class="org-meta">
          <h4>UMA CHIZA BENE BABU </h4>
          <p>Founder & Owner</p>
        </div>
      </div>

      <div class="org-line vertical"></div>

      <div class="org-node org-ceo delay-2">
        <div class="org-circle">
          <img src="../CoreBiz/assets/img/person/person-m-2.webp" class="org-photo" alt="Saidi Abdallah Juma">
        </div>
        <div class="org-meta">
          <h4>Saidi Abdallah Juma</h4>
          <p>Chief Executive Officer</p>
        </div>
      </div>

      <div class="org-line vertical"></div>

      <div class="org-branch">
        <div class="org-line horizontal"></div>
        <div class="org-row core">
          <div class="org-node delay-3">
            <div class="org-circle">
              <img src="../CoreBiz/assets/img/person/person-f-3.webp" class="org-photo" alt="Heri Saidi Lyonga">
            </div>
            <div class="org-meta">
              <h4>Heri Saidi Lyonga</h4>
              <p>Production Manager</p>
            </div>
          </div>
          <div class="org-node delay-4">
            <div class="org-circle">
              <img src="../CoreBiz/assets/img/person/person-m-4.webp" class="org-photo" alt="Juma Miraji Bakari">
            </div>
            <div class="org-meta">
              <h4>Juma Miraji Bakari</h4>
              <p>Technical Director</p>
            </div>
          </div>
          <div class="org-node delay-5">
            <div class="org-circle">
              <img src="../CoreBiz/assets/img/person/person-f-1.webp" class="org-photo" alt="Bakari Hussein Bushiri">
            </div>
            <div class="org-meta">
              <h4>Bakari Hussein Bushiri</h4>
              <p>Social Media Manager</p>
            </div>
          </div>
        </div>

        <div class="org-support-title">
          <span>Support Team</span>
        </div>

        <div class="org-node org-support-node delay-6">
          <div class="org-circle">
            <img src="../CoreBiz/assets/img/about/about-square-8.webp" class="org-photo" alt="JM News TV support team">
          </div>
          <div class="org-meta">
            <h4>Content Support Unit</h4>
            <p>IT Technician, Reporter & Journalist, Sports Host</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="150">
      <a href="team.php" class="btn btn-primary btn-sm rounded-0 py-3 px-5">View Full Team</a>
    </div>
  </div>
</section>

<section class="about-reasons section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">Why Choose Us</h2>
        <p class="mb-0">Why fans, clubs, and brands keep coming back to JM News TV.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="reason-card">
          <i class="bi bi-lightning-charge"></i>
          <h3>Fast Updates</h3>
          <p>We move quickly on breaking football stories and major match moments.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="reason-card">
          <i class="bi bi-patch-check"></i>
          <h3>Trusted Voice</h3>
          <p>Our coverage is built on consistency, clarity, and editorial discipline.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="reason-card">
          <i class="bi bi-people"></i>
          <h3>Fan Focused</h3>
          <p>We speak to the football audience in a tone that feels local and relevant.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="reason-card">
          <i class="bi bi-megaphone"></i>
          <h3>Advertiser Ready</h3>
          <p>We offer brands a clean, engaging platform with real audience attention.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-cta section">
  <div class="container">
    <div class="cta-panel" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2>Partner with JM News TV</h2>
          <p>Reach football fans who follow the game closely and engage with quality local sports content.</p>
        </div>
        <div class="col-lg-4 text-lg-right">
          <a href="advertise.php" class="btn btn-primary btn-sm rounded-0 py-3 px-5 pulse-btn">Advertise With Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>
