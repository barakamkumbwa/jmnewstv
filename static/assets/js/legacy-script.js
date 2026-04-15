const navToggle = document.querySelector('.nav-toggle');
const siteNav = document.querySelector('.site-nav');
const navLinks = document.querySelectorAll('.site-nav .nav-link');

if (navToggle && siteNav) {
  navToggle.addEventListener('click', () => {
    siteNav.classList.toggle('open');
  });
}

navLinks.forEach(link => {
  link.addEventListener('click', () => {
    if (siteNav.classList.contains('open')) {
      siteNav.classList.remove('open');
    }
  });
});

const tabButtons = document.querySelectorAll('.tab-button');
const videoCards = document.querySelectorAll('.video-card');

if (tabButtons.length) {
  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      tabButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      const filter = button.dataset.tab;

      videoCards.forEach(card => {
        const tag = card.querySelector('.video-tag')?.textContent.toLowerCase() || '';
        if (filter === 'all' || tag.includes(filter)) {
          card.style.display = 'grid';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}
