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

  // 3. Multi-Page Carousel & Pagination Controller (Clients, Properties, Testimonials, FAQs, Catalogue)
  function setupTrackSlider(trackId, prevBtnId, nextBtnId, counterId, totalPages) {
    const track = document.getElementById(trackId);
    const prevBtn = document.getElementById(prevBtnId);
    const nextBtn = document.getElementById(nextBtnId);
    const counter = document.getElementById(counterId);
    if (!track) return;

    const slides = track.children;
    const numPages = totalPages || (slides.length > 0 ? slides.length : 10);
    let currentPage = 0;

    function update() {
      track.style.transform = `translateX(-${currentPage * 100}%)`;
      if (counter) {
        const paddedCurrent = String(currentPage + 1).padStart(2, '0');
        const paddedTotal = String(numPages).padStart(2, '0');
        const currentEl = counter.querySelector('.current-page') || counter.querySelector('strong') || counter.querySelector('.current-client-page');
        if (currentEl) {
          currentEl.textContent = paddedCurrent;
        } else {
          counter.innerHTML = `<strong class="text-white current-page">${paddedCurrent}</strong> of ${paddedTotal}`;
        }
      }
      if (prevBtn) {
        prevBtn.disabled = currentPage === 0;
        prevBtn.style.opacity = currentPage === 0 ? '0.35' : '1';
        prevBtn.style.cursor = currentPage === 0 ? 'not-allowed' : 'pointer';
      }
      if (nextBtn) {
        nextBtn.disabled = currentPage >= numPages - 1;
        nextBtn.style.opacity = currentPage >= numPages - 1 ? '0.35' : '1';
        nextBtn.style.cursor = currentPage >= numPages - 1 ? 'not-allowed' : 'pointer';
      }
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        if (currentPage < numPages - 1) {
          currentPage++;
          update();
        }
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        if (currentPage > 0) {
          currentPage--;
          update();
        }
      });
    }

    // Touch swipe support for mobile
    let touchStartX = 0;
    track.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    track.addEventListener('touchend', (e) => {
      const touchEndX = e.changedTouches[0].screenX;
      if (touchStartX - touchEndX > 45 && currentPage < numPages - 1) {
        currentPage++;
        update();
      } else if (touchEndX - touchStartX > 45 && currentPage > 0) {
        currentPage--;
        update();
      }
    }, { passive: true });

    update();
  }

  // Bind all 5 interactive multi-page sliders
  setupTrackSlider('clientsTrack', 'clientPrevBtn', 'clientNextBtn', 'clientsPaginationCounter', 10);
  setupTrackSlider('propertiesTrack', 'propPrevBtn', 'propNextBtn', 'propertiesCounter', 10);
  setupTrackSlider('testimonialsTrack', 'testPrevBtn', 'testNextBtn', 'testPaginationCounter', 10);
  setupTrackSlider('faqTrack', 'faqPrevBtn', 'faqNextBtn', 'faqPaginationCounter', 10);
  setupTrackSlider('catalogueTrack', 'propCataloguePrev', 'propCatalogueNext', 'cataloguePageNum', 10);

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

  // 10. Modern Glassmorphic Custom Dropdowns
  function initEstateinCustomSelects() {
    const selectWrappers = document.querySelectorAll('.filter-select-wrapper, .form-select-wrapper');

    selectWrappers.forEach(wrapper => {
      if (wrapper.dataset.customized === 'true') return;
      const nativeSelect = wrapper.querySelector('select');
      if (!nativeSelect) return;

      wrapper.dataset.customized = 'true';
      nativeSelect.classList.add('estatein-native-select-hidden');

      const isFilter = wrapper.classList.contains('filter-select-wrapper');
      const customDropdown = document.createElement('div');
      customDropdown.className = 'estatein-custom-dropdown' + (isFilter ? ' is-filter-dropdown' : ' is-form-dropdown');

      const trigger = document.createElement('button');
      trigger.type = 'button';
      trigger.className = 'estatein-dropdown-trigger';
      trigger.setAttribute('aria-haspopup', 'listbox');
      trigger.setAttribute('aria-expanded', 'false');

      const leftWrap = document.createElement('div');
      leftWrap.className = 'estatein-trigger-left';

      // If filter-select-wrapper has .filter-icon, adopt it
      const existingIcon = wrapper.querySelector('.filter-icon');
      if (existingIcon) {
        existingIcon.style.display = 'none';
        const iconClone = existingIcon.cloneNode(true);
        iconClone.style.display = 'flex';
        iconClone.classList.add('estatein-trigger-icon');
        leftWrap.appendChild(iconClone);
      }

      const labelSpan = document.createElement('span');
      labelSpan.className = 'estatein-dropdown-label';
      const curSelected = nativeSelect.options[nativeSelect.selectedIndex] || nativeSelect.options[0];
      labelSpan.textContent = curSelected ? curSelected.text : 'Select...';
      if (curSelected && curSelected.value !== '') {
        customDropdown.classList.add('has-selection');
      }
      leftWrap.appendChild(labelSpan);
      trigger.appendChild(leftWrap);

      const chevron = document.createElement('span');
      chevron.className = 'estatein-dropdown-chevron';
      chevron.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>`;
      trigger.appendChild(chevron);

      customDropdown.appendChild(trigger);

      // Create Popup Menu
      const menu = document.createElement('div');
      menu.className = 'estatein-dropdown-menu';
      menu.setAttribute('role', 'listbox');

      Array.from(nativeSelect.options).forEach((opt) => {
        const optionItem = document.createElement('div');
        optionItem.className = 'estatein-dropdown-option' + (opt.selected ? ' is-selected' : '');
        optionItem.setAttribute('role', 'option');
        optionItem.setAttribute('data-value', opt.value);

        const optionText = document.createElement('span');
        optionText.className = 'estatein-option-text';
        optionText.textContent = opt.text;
        optionItem.appendChild(optionText);

        const checkIcon = document.createElement('span');
        checkIcon.className = 'estatein-option-check';
        checkIcon.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>`;
        optionItem.appendChild(checkIcon);

        optionItem.addEventListener('click', (e) => {
          e.stopPropagation();
          nativeSelect.value = opt.value;
          labelSpan.textContent = opt.text;

          if (opt.value !== '') {
            customDropdown.classList.add('has-selection');
          } else {
            customDropdown.classList.remove('has-selection');
          }

          menu.querySelectorAll('.estatein-dropdown-option').forEach(o => o.classList.remove('is-selected'));
          optionItem.classList.add('is-selected');

          closeDropdown();
          nativeSelect.dispatchEvent(new Event('change', { bubbles: true }));
          trigger.focus();
        });

        menu.appendChild(optionItem);
      });

      customDropdown.appendChild(menu);
      wrapper.appendChild(customDropdown);

      function openDropdown() {
        document.querySelectorAll('.estatein-custom-dropdown.is-open').forEach(dd => {
          if (dd !== customDropdown) {
            dd.classList.remove('is-open');
            const t = dd.querySelector('.estatein-dropdown-trigger');
            if (t) t.setAttribute('aria-expanded', 'false');
          }
        });
        customDropdown.classList.add('is-open');
        trigger.setAttribute('aria-expanded', 'true');
      }

      function closeDropdown() {
        customDropdown.classList.remove('is-open');
        trigger.setAttribute('aria-expanded', 'false');
      }

      function toggleDropdown() {
        if (customDropdown.classList.contains('is-open')) {
          closeDropdown();
        } else {
          openDropdown();
        }
      }

      trigger.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleDropdown();
      });

      // Synchronize if select is updated externally
      nativeSelect.addEventListener('change', () => {
        const cur = nativeSelect.options[nativeSelect.selectedIndex];
        if (cur) {
          labelSpan.textContent = cur.text;
          if (cur.value !== '') {
            customDropdown.classList.add('has-selection');
          } else {
            customDropdown.classList.remove('has-selection');
          }
          menu.querySelectorAll('.estatein-dropdown-option').forEach(o => {
            o.classList.toggle('is-selected', o.getAttribute('data-value') === cur.value);
          });
        }
      });

      // Form reset support
      const parentForm = nativeSelect.closest('form');
      if (parentForm) {
        parentForm.addEventListener('reset', () => {
          setTimeout(() => {
            const firstOpt = nativeSelect.options[0];
            if (firstOpt) {
              labelSpan.textContent = firstOpt.text;
              customDropdown.classList.remove('has-selection');
              menu.querySelectorAll('.estatein-dropdown-option').forEach((o, i) => {
                o.classList.toggle('is-selected', i === 0);
              });
            }
          }, 20);
        });
      }
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
      if (!e.target.closest('.estatein-custom-dropdown')) {
        document.querySelectorAll('.estatein-custom-dropdown.is-open').forEach(dd => {
          dd.classList.remove('is-open');
          const t = dd.querySelector('.estatein-dropdown-trigger');
          if (t) t.setAttribute('aria-expanded', 'false');
        });
      }
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        document.querySelectorAll('.estatein-custom-dropdown.is-open').forEach(dd => {
          dd.classList.remove('is-open');
          const t = dd.querySelector('.estatein-dropdown-trigger');
          if (t) t.setAttribute('aria-expanded', 'false');
        });
      }
    });

    // Close on window scroll
    window.addEventListener('scroll', () => {
      document.querySelectorAll('.estatein-custom-dropdown.is-open').forEach(dd => {
        dd.classList.remove('is-open');
        const t = dd.querySelector('.estatein-dropdown-trigger');
        if (t) t.setAttribute('aria-expanded', 'false');
      });
    }, { passive: true });
  }

  initEstateinCustomSelects();
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

