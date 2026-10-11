/**
 * Estatein Real Estate - Main Interactive Scripts
 * Universal Mobile & Desktop Support
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Top Announcement Banner Dismiss
  const topBanner = document.getElementById('topBanner');
  const bannerCloseBtn = document.getElementById('bannerCloseBtn');

  if (topBanner && bannerCloseBtn) {
    if (sessionStorage.getItem('estatein_banner_dismissed') === 'true') {
      topBanner.style.display = 'none';
    }

    bannerCloseBtn.addEventListener('click', () => {
      topBanner.style.opacity = '0';
      topBanner.style.transition = 'opacity 0.25s ease, height 0.25s ease';
      setTimeout(() => {
        topBanner.style.display = 'none';
        sessionStorage.setItem('estatein_banner_dismissed', 'true');
      }, 250);
    });
  }

  // 2. Mobile Navigation Drawer Toggle
  const mobileToggle = document.getElementById('mobileMenuToggle');
  const navMenu = document.getElementById('navMenu');

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = navMenu.classList.toggle('mobile-open');
      mobileToggle.setAttribute('aria-expanded', isOpen);
      const icon = mobileToggle.querySelector('svg');
      if (icon) {
        if (isOpen) {
          icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>`;
        } else {
          icon.innerHTML = `<line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="12" x2="21" y2="12"></line><line x1="12" y1="18" x2="21" y2="18"></line>`;
        }
      }
    });

    // Close menu when clicking nav links
    navMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('mobile-open');
        mobileToggle.setAttribute('aria-expanded', 'false');
      });
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target) && navMenu.classList.contains('mobile-open')) {
        navMenu.classList.remove('mobile-open');
        mobileToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // 3. Carousel & Pagination Controller (Seamless Mobile Swipe & Arrow Support)
  function setupCarousel(sliderId, prevBtnId, nextBtnId, counterId, totalItems) {
    const slider = document.getElementById(sliderId);
    const prevBtn = document.getElementById(prevBtnId);
    const nextBtn = document.getElementById(nextBtnId);
    const counter = document.getElementById(counterId);
    let currentIndex = 0;

    function updateCounter(index) {
      currentIndex = index;
      if (counter) {
        const paddedCurrent = String(currentIndex + 1).padStart(2, '0');
        const paddedTotal = String(totalItems).padStart(2, '0');
        counter.innerHTML = `<span class="current-page text-white">${paddedCurrent}</span> of ${paddedTotal}`;
      }
      if (prevBtn) prevBtn.disabled = currentIndex === 0;
      if (nextBtn) nextBtn.disabled = currentIndex >= totalItems - 1;
    }

    if (slider && prevBtn && nextBtn) {
      const cards = slider.children;
      const cardCount = cards.length;

      // Click Next
      nextBtn.addEventListener('click', () => {
        if (currentIndex < cardCount - 1) {
          currentIndex++;
          const targetCard = cards[currentIndex];
          if (targetCard) {
            targetCard.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
          }
          updateCounter(currentIndex);
        }
      });

      // Click Prev
      prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
          currentIndex--;
          const targetCard = cards[currentIndex];
          if (targetCard) {
            targetCard.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
          }
          updateCounter(currentIndex);
        }
      });

      // Listen to native touch scroll-snap on mobile
      let scrollTimeout;
      const carouselWrapper = slider.closest('.carousel-wrapper');
      if (carouselWrapper) {
        carouselWrapper.addEventListener('scroll', () => {
          clearTimeout(scrollTimeout);
          scrollTimeout = setTimeout(() => {
            const scrollLeft = carouselWrapper.scrollLeft;
            const cardWidth = cards[0] ? cards[0].offsetWidth : carouselWrapper.offsetWidth;
            const newIndex = Math.min(cardCount - 1, Math.max(0, Math.round(scrollLeft / cardWidth)));
            if (newIndex !== currentIndex) {
              updateCounter(newIndex);
            }
          }, 60);
        }, { passive: true });
      }
    }

    updateCounter(0);
  }

  setupCarousel('propertiesSlider', 'propPrevBtn', 'propNextBtn', 'propPaginationCounter', 3);
  setupCarousel('testimonialsSlider', 'testPrevBtn', 'testNextBtn', 'testPaginationCounter', 3);
  setupCarousel('faqSlider', 'faqPrevBtn', 'faqNextBtn', 'faqPaginationCounter', 3);
  setupCarousel('clientsSlider', 'clientPrevBtn', 'clientNextBtn', 'clientsPaginationCounter', 10);

  // 3b. Team Greeting Direct Send Button
  const teamSendButtons = document.querySelectorAll('.team-send-btn');
  teamSendButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
      const chatBar = btn.closest('.team-chat-bar');
      const chatText = chatBar ? chatBar.querySelector('.team-chat-text') : null;
      if (chatText) {
        const originalText = chatText.textContent;
        chatText.textContent = 'Greeting Sent! 🚀';
        btn.style.backgroundColor = '#10b981';
        setTimeout(() => {
          chatText.textContent = originalText;
          btn.style.backgroundColor = '';
        }, 2200);
      }
    });
  });

  // 4. FAQ Card Read More Toggle
  const faqButtons = document.querySelectorAll('.faq-toggle-btn');
  faqButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
      const card = btn.closest('.faq-card');
      const answer = card.querySelector('.faq-answer');
      if (answer) {
        const isExpanded = btn.getAttribute('data-expanded') === 'true';
        if (isExpanded) {
          btn.setAttribute('data-expanded', 'false');
          btn.textContent = 'Read More';
          answer.style.webkitLineClamp = '3';
        } else {
          btn.setAttribute('data-expanded', 'true');
          btn.textContent = 'Show Less';
          answer.style.webkitLineClamp = 'unset';
        }
      }
    });
  });

  // 5. Newsletter Form
  const newsletterForm = document.getElementById('newsletterForm');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = newsletterForm.querySelector('input[type="email"]');
      if (input && input.value.trim()) {
        const originalPlaceholder = input.placeholder;
        const btn = newsletterForm.querySelector('button');
        input.value = '';
        input.placeholder = '🎉 Subscribed successfully!';
        if (btn) btn.style.backgroundColor = '#10b981';
        setTimeout(() => {
          input.placeholder = originalPlaceholder;
          if (btn) btn.style.backgroundColor = '';
        }, 3500);
      }
    });
  }
});
