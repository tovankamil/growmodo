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

  // 6. Properties Catalogue Live Search & Filters
  const searchInput = document.getElementById('propSearchInput');
  const searchBtn = document.getElementById('propSearchSubmitBtn');
  const filterLocation = document.getElementById('filterLocation');
  const filterType = document.getElementById('filterType');
  const filterPrice = document.getElementById('filterPrice');
  const filterSize = document.getElementById('filterSize');
  const filterYear = document.getElementById('filterYear');
  const catalogueCards = document.querySelectorAll('.catalogue-card');

  function applyPropertyFilters() {
    const query = (searchInput ? searchInput.value.toLowerCase().trim() : '');
    const loc = (filterLocation ? filterLocation.value.toLowerCase() : '');
    const type = (filterType ? filterType.value.toLowerCase() : '');
    const price = (filterPrice ? filterPrice.value.toLowerCase() : '');
    const size = (filterSize ? filterSize.value.toLowerCase() : '');
    const year = (filterYear ? filterYear.value.toLowerCase() : '');

    let visibleCount = 0;
    catalogueCards.forEach(card => {
      const cardTitle = card.getAttribute('data-title') || '';
      const cardLoc = card.getAttribute('data-location') || '';
      const cardType = card.getAttribute('data-type') || '';
      const cardPrice = card.getAttribute('data-price') || '';
      const cardSize = card.getAttribute('data-size') || '';
      const cardYear = card.getAttribute('data-year') || '';

      const matchesQuery = !query || cardTitle.includes(query);
      const matchesLoc = !loc || cardLoc.includes(loc);
      const matchesType = !type || cardType === type;
      const matchesPrice = !price || cardPrice === price;
      const matchesSize = !size || cardSize === size;
      const matchesYear = !year || cardYear.includes(year);

      if (matchesQuery && matchesLoc && matchesType && matchesPrice && matchesSize && matchesYear) {
        card.style.display = '';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    const pageCounter = document.getElementById('catalogueCurrentPage');
    if (pageCounter) {
      pageCounter.textContent = visibleCount > 0 ? '01' : '00';
    }
  }

  if (searchInput) searchInput.addEventListener('input', applyPropertyFilters);
  if (searchBtn) searchBtn.addEventListener('click', applyPropertyFilters);
  if (filterLocation) filterLocation.addEventListener('change', applyPropertyFilters);
  if (filterType) filterType.addEventListener('change', applyPropertyFilters);
  if (filterPrice) filterPrice.addEventListener('change', applyPropertyFilters);
  if (filterSize) filterSize.addEventListener('change', applyPropertyFilters);
  if (filterYear) filterYear.addEventListener('change', applyPropertyFilters);

  // 7. Preferred Contact Method Radio Cards
  const methodRadioCards = document.querySelectorAll('.method-radio-card');
  methodRadioCards.forEach(card => {
    card.addEventListener('click', () => {
      methodRadioCards.forEach(c => c.classList.remove('active'));
      card.classList.add('active');
      const radio = card.querySelector('input[type="radio"]');
      if (radio) radio.checked = true;
    });
  });

  // 8. Property Detail Interactive Photo Gallery
  const galleryThumbs = document.querySelectorAll('.gallery-thumb-btn');
  const mainImg1 = document.getElementById('galleryMainImg1');
  const mainImg2 = document.getElementById('galleryMainImg2');
  const galleryDashes = document.querySelectorAll('.gallery-dash');
  const galleryPrev = document.getElementById('galleryPrevBtn');
  const galleryNext = document.getElementById('galleryNextBtn');

  if (galleryThumbs.length > 0 && mainImg1 && mainImg2) {
    let currentSlide = 0;
    const thumbImages = Array.from(galleryThumbs).map(btn => {
      const img = btn.querySelector('img');
      return img ? img.getAttribute('src') : '';
    });

    function showGallerySlide(index) {
      currentSlide = (index + thumbImages.length) % thumbImages.length;
      const nextIndex = (currentSlide + 1) % thumbImages.length;

      mainImg1.src = thumbImages[currentSlide];
      mainImg2.src = thumbImages[nextIndex];

      galleryThumbs.forEach((btn, idx) => {
        btn.classList.toggle('active', idx === currentSlide);
      });

      if (galleryDashes.length > 0) {
        const dashIndex = currentSlide % galleryDashes.length;
        galleryDashes.forEach((dash, idx) => {
          dash.classList.toggle('active', idx === dashIndex);
        });
      }
    }

    galleryThumbs.forEach((btn, idx) => {
      btn.addEventListener('click', () => showGallerySlide(idx));
    });

    if (galleryPrev) {
      galleryPrev.addEventListener('click', () => showGallerySlide(currentSlide - 1));
    }
    if (galleryNext) {
      galleryNext.addEventListener('click', () => showGallerySlide(currentSlide + 1));
    }
  }

  // 9. Office Location Category Filter Tabs
  const officeTabs = document.querySelectorAll('.office-tab-btn');
  const officeCards = document.querySelectorAll('.office-card');

  officeTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      officeTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const selectedCat = tab.getAttribute('data-category');

      officeCards.forEach(card => {
        const cardCat = card.getAttribute('data-category');
        if (selectedCat === 'all' || cardCat === selectedCat) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
});

// Global Form Submission Handler
window.handleEstateinSubmit = function(form) {
  const submitBtn = form.querySelector('.btn-submit-form');
  if (submitBtn) {
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Message Sent Successfully! ✓';
    submitBtn.style.backgroundColor = '#10b981';
    submitBtn.style.borderColor = '#10b981';
    submitBtn.disabled = true;

    setTimeout(() => {
      form.reset();
      submitBtn.textContent = originalText;
      submitBtn.style.backgroundColor = '';
      submitBtn.style.borderColor = '';
      submitBtn.disabled = false;
    }, 3000);
  }
};

