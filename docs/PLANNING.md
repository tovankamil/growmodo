# 📋 Project Planning: Growmodo WordPress Developer Assessment

## 🎯 Project Overview

**Template:** Estatein - Real Estate Business Website UI Template (Dark Theme)  
**Figma:** [https://www.figma.com/community/file/1314076616839640516](https://www.figma.com/community/file/1314076616839640516)  
**Time Limit:** 4 hours (stress test)  
**Deadline:** 3 days from receipt date  

---

## 📊 Assessment Analysis & Scoring Strategy

### Evaluation Criteria (Based on Brief)

| Criteria | Weight | Strategy |
|----------|--------|----------|
| **Design Fidelity** | ⭐⭐⭐⭐⭐ | Pixel-perfect execution on submitted sections |
| **Functionality** | ⭐⭐⭐⭐⭐ | Responsive, interactive navigation, forms, hover states |
| **Code Quality** | ⭐⭐⭐⭐ | Clean code, WordPress best practices, modular architecture |
| **Performance & SEO** | ⭐⭐⭐ | Image optimization, semantic tags, lazy loading |
| **User Experience** | ⭐⭐⭐⭐ | Intuitive navigation, accessibility, responsive flows |
| **Creativity** | ⭐⭐ | Micro-interactions, smooth CSS animations |

> **GOLDEN RULE from Brief:**
> *"It is much better to complete a few sections perfectly, than to submit an entire site filled with unfinished sections."*
> Focus on QUALITY over quantity. Incomplete sections must NOT be included in submission.

---

## 🏗️ Figma Design Breakdown - Estatein

### Pages to Replicate

| # | Page | Priority | Time Estimate | Status |
|---|------|----------|---------------|--------|
| 1 | **Home Page** | 🔴 CRITICAL | 1.5 hours | ✅ Completed |
| 2 | **About Us** | 🟡 HIGH | 45 mins | ✅ Completed |
| 3 | **Properties** | 🟡 HIGH | 45 mins | ✅ Completed |
| 4 | **Property Detail** | 🟠 MEDIUM | 30 mins | ✅ Completed |
| 5 | **Services** | 🟠 MEDIUM | 30 mins | ✅ Completed |
| 6 | **Contact** | 🟡 HIGH | 30 mins | ✅ Completed |

### Reusable Components

| Component | Used In | Priority |
|-----------|---------|----------|
| **Header/Navigation** | All pages | 🔴 CRITICAL |
| **Footer** | All pages | 🔴 CRITICAL |
| **Property Card** | Home, Properties | 🔴 CRITICAL |
| **CTA Banner** | Home, About, Services | 🟡 HIGH |
| **Stats Counter** | Home, About | 🟡 HIGH |
| **Testimonial Card** | Home | 🟠 MEDIUM |
| **FAQ Accordion** | Home, Services | 🟠 MEDIUM |
| **Contact Form** | Contact, Home | 🟡 HIGH |
| **Search/Filter Bar** | Properties | 🟠 MEDIUM |

### Design Tokens (From Figma)

> Complete details in [DESIGN-SYSTEM.md](file:///d:/TFN/practice/growmodo/docs/DESIGN-SYSTEM.md)

```
Colors (Dark Theme):
- Background Primary:   #141414 (grey-08)
- Card/Navbar BG:       #1A1A1A (grey-10)
- Border:               #262626 (grey-15)
- Hover Border:         #333333 (grey-20)
- Body Text:            #999999 (grey-60)
- Text Primary:         #FFFFFF (absolutewhite)
- Accent/CTA:           #703BF7 (purple-60)
- Accent Hover:         #8254F8 (purple-65)

Typography:
- Font Family: Urbanist (Google Fonts)
- Weights: Regular(400), Medium(500), SemiBold(600), Bold(700)
- Hero: 60px/72px Bold
- Section Title: 48px/72px SemiBold
- Card Title: 24px/36px SemiBold
- Body/Buttons: 18px/27px Medium
- Stat Numbers: 40px/60px Bold

Icons:
- Library: Heroicons (heroicons.com) + Custom SVGs
- Style: Outline

Spacing:
- Container: 1920px, content padding 162px each side (1596px content)
- Section gap: 80px (gap-20)
- Card gap: 30px
- Card padding: 40px (properties) / 50px (testimonials, FAQ)
- Footer padding: 100px vertical

Border Radius:
- Cards: 12px (rounded-xl)
- Buttons: 10px (rounded-[10px])
- Tags/Badges: 28px (pill-like)
- Input fields: 12px (rounded-xl)
```

---

## ⏱️ Time Management Strategy (4 Hours)

### Phase 1: Foundation (0:00 - 0:45) — 45 mins

```
✅ Setup local WordPress environment
✅ Create theme directory structure
✅ Setup style.css with official theme metadata
✅ Create functions.php (enqueue styles/scripts, theme supports)
✅ Setup CSS variables & design tokens
✅ Create header.php & footer.php
✅ Import Google Fonts (Urbanist)
✅ Setup responsive CSS grid system
```

### Phase 2: Header & Navigation (0:45 - 1:15) — 30 mins

```
✅ Logo + Navigation menu (wp_nav_menu)
✅ Mobile hamburger drawer navigation
✅ Sticky header on scroll
✅ Active state navigation indicators
✅ Responsive breakpoints (desktop, tablet, mobile)
✅ CTA button in navbar
```

### Phase 3: Home Page - Hero & Main Content (1:15 - 2:30) — 1 hour 15 mins

```
✅ Hero section (headline, subtitle, CTA, hero visual & rotating badge)
✅ Stats counter section
✅ Featured Properties section (property cards)
✅ Testimonials section
✅ FAQ section (accordion)
✅ CTA banner section
```

### Phase 4: Footer (2:30 - 2:50) — 20 mins

```
✅ Multi-column footer sitemap layout
✅ Footer navigation links
✅ Social media links
✅ Newsletter subscription form
✅ Copyright & legal links
```

### Phase 5: Additional Pages (2:50 - 3:30) — 40 mins

```
✅ About Us page
✅ Properties listing page with search & filter
✅ Services page with value & feature cards
✅ Contact Us page with responsive form
```

### Phase 6: Polish & Deploy (3:30 - 4:00) — 30 mins

```
✅ Responsive testing (mobile 375px, tablet 768px, desktop 1440px+)
✅ Cross-browser verification (Chrome, Firefox, Safari, Edge)
✅ Performance optimization (WebP images, defer scripts, cache-busting)
✅ SEO meta tags & Open Graph
✅ Live deployment to VPS with SSL & HTTP/2
✅ Git commit and push to GitHub repository
✅ Complete documentation
```

---

## 📁 WordPress Theme Structure

```
wp-content/themes/estatein/
├── style.css                    # Theme info & main declarations
├── functions.php                # Theme setup, enqueue, CPTs, helpers
├── index.php                    # Fallback template
├── front-page.php               # Home page template
├── page.php                     # Default page template
├── page-about.php               # About Us page template
├── page-properties.php          # Properties page template
├── page-services.php            # Services page template
├── page-contact.php             # Contact Us page template
├── single-property.php          # Single property detail template
├── header.php                   # Global header & announcement banner
├── footer.php                   # Global footer & CTA
├── screenshot.png               # Theme screenshot (1200x900)
│
├── template-parts/              # Reusable template components
│   ├── hero.php
│   ├── features.php
│   ├── properties-slider.php
│   ├── testimonials-slider.php
│   ├── faq-section.php
│   ├── cta-banner.php
│   ├── about-*.php
│   ├── services-*.php
│   └── contact-*.php
│
├── assets/
│   ├── css/
│   │   ├── style_guide.css      # CSS custom properties & typography tokens
│   │   └── global.css           # Master responsive stylesheet
│   │
│   ├── js/
│   │   └── main.js              # Interactivity, menu toggle, accordion, filters
│   │
│   ├── images/                  # Optimized WebP/JPEG assets
│   └── logo/                    # Brand logos
│
└── languages/                   # Translation catalog (.pot)
```

---

## 🔧 Technical Implementation Details

### 1. functions.php — Core Setup

```php
<?php
// Theme Setup
function estatein_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    add_theme_support('menus');
    
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'estatein'),
        'footer'    => __('Footer Menu', 'estatein'),
    ));
    
    add_image_size('property-card', 400, 300, true);
    add_image_size('property-detail', 800, 600, true);
    add_image_size('hero-image', 1920, 1080, true);
}
add_action('after_setup_theme', 'estatein_theme_setup');

// Enqueue Styles & Scripts
function estatein_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 
        'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap', 
        array(), null
    );
    
    // Theme styles
    wp_enqueue_style('estatein-style-guide', get_template_directory_uri() . '/assets/css/style_guide.css', array(), ESTATEIN_VERSION);
    wp_enqueue_style('estatein-global', get_template_directory_uri() . '/assets/css/global.css', array(), ESTATEIN_VERSION);
    wp_enqueue_style('estatein-style', get_stylesheet_uri(), array(), ESTATEIN_VERSION);
    
    // Scripts
    wp_enqueue_script('estatein-main', get_template_directory_uri() . '/assets/js/main.js', array(), ESTATEIN_VERSION, true);
}
add_action('wp_enqueue_scripts', 'estatein_enqueue_assets');
```

### 2. Custom Post Type: Properties

```php
function estatein_register_property_cpt() {
    $args = array(
        'labels' => array(
            'name'          => 'Properties',
            'singular_name' => 'Property',
            'add_new_item'  => 'Add New Property',
            'edit_item'     => 'Edit Property',
        ),
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'properties'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'     => 'dashicons-building',
        'show_in_rest'  => true,
    );
    register_post_type('property', $args);
}
add_action('init', 'estatein_register_property_cpt');
```

---

## 🚀 Deployment Strategy

### Production Deployment (Dedicated VPS)

```
1. AlmaLinux 10 / Ubuntu LTS Server with Nginx, PHP 8.3-FPM, and MariaDB
2. Configure SSL via Let's Encrypt / Cloudflare Full Strict Mode
3. Sync custom WordPress theme via automated GitHub Actions CI/CD pipeline
4. Flush OPcache, Nginx FastCGI cache, and WordPress object cache
5. Run automated validation tests across mobile and desktop
```

---

## ✅ Quality Checklist (Before Submission)

### Design Fidelity
- [x] Colors strictly match Figma dark theme tokens (`#141414`, `#1A1A1A`, `#703BF7`)
- [x] Urbanist typography scale and font weights match specifications
- [x] Spacing and padding consistent across components
- [x] CSS grid layouts match Figma specifications
- [x] Icons and visual images properly rendered
- [x] Interactive hover states implemented on all cards, links, and buttons
- [x] Border radiuses consistent (`10px`, `12px`, `28px`)

### Responsiveness
- [x] Mobile (375px - 500px) — Flawless single-column and drawer flows
- [x] Tablet (768px) — Clean multi-column grids
- [x] Desktop (1200px - 1920px) — Pixel-perfect wide layouts
- [x] Hamburger mobile drawer navigation functions smoothly
- [x] Responsive images with proper aspect ratios
- [x] Fluid typography scales (`clamp()`)
- [x] Zero horizontal scrolling artifacts

### Functionality
- [x] All navigation links route to functional pages
- [x] Top banner dismiss state stored in `sessionStorage`
- [x] Top banner "Learn More" routes to `/about/`
- [x] Mobile menu open/close toggle with animated SVG morph
- [x] Contact form submission handling and input validation
- [x] FAQ accordions expand and collapse cleanly
- [x] Active page state highlighted in navigation

### WordPress Best Practices
- [x] 100% custom theme (no bulky page builder dependencies)
- [x] `wp_nav_menu()` for primary and footer menus
- [x] Standard `get_header()`, `get_footer()`, and `get_template_part()`
- [x] Proper asset enqueueing with version cache-busting
- [x] Escaped outputs (`esc_html`, `esc_url`, `esc_attr`)
- [x] Translation-ready strings (`__()`, `_e()`, `esc_html__()`)
- [x] Custom Post Types registered cleanly

### Performance & SEO
- [x] Semantic HTML5 structure (`<header>`, `<nav>`, `<main>`, `<article>`, `<aside>`, `<footer>`)
- [x] Proper heading hierarchy (single `<h1>` per page)
- [x] Descriptive title tags and meta descriptions
- [x] Images loaded with lazy-loading attributes
- [x] Minimal external HTTP requests

---

## 🏆 Best Practices & Success Strategy

### 1. Top Priority: Header + Home Page + Footer
These are the critical make-or-break sections. Ensuring these core sections are 100% complete and pixel-perfect guarantees high scoring.

### 2. Use AI Responsibly
- Generate initial boilerplate structures and responsive CSS tokens.
- Review, audit, and test every generated line against Figma specifications.
- Verify security, escaping, and coding standards.

### 3. Attention to Detail
- Subpixel mathematical precision for concentric icon rings.
- Smooth transitions (`300ms ease`).
- High-contrast accessible text against dark backgrounds.
- Consistent border-radius and ambient shadows.

---

## 📦 Deliverables Checklist

| # | Deliverable | Details | Status |
|---|-------------|---------|--------|
| 1 | **Live Website (VPS)** | [https://tofan.my.id/](https://tofan.my.id/) | ✅ Deployed & Verified |
| 2 | **GitHub Codebase** | [https://github.com/tovankamil/growmodo](https://github.com/tovankamil/growmodo) | ✅ Up to date on `main` |
| 3 | **Technical Documentation** | Comprehensive documentation package in `docs/` | ✅ Completed |

---

*Last Updated: October 12, 2026*
