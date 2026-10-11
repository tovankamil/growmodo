# 📋 Project Planning: Growmodo WordPress Developer Assessment

## 🎯 Project Overview

**Template:** Estatein - Real Estate Business Website UI Template (Dark Theme)  
**Figma:** [https://www.figma.com/community/file/1314076616839640516](https://www.figma.com/community/file/1314076616839640516)  
**Time Limit:** 4 jam (stress test)  
**Deadline:** 3 hari dari tanggal diterima  

---

## 📊 Assessment Analysis & Scoring Strategy

### Kriteria Penilaian (Berdasarkan Brief)

| Kriteria | Bobot | Strategi |
|----------|-------|----------|
| **Design Fidelity** | ⭐⭐⭐⭐⭐ | Pixel-perfect pada sections yang dikerjakan |
| **Functionality** | ⭐⭐⭐⭐⭐ | Responsive, navigasi, form, hover effects |
| **Code Quality** | ⭐⭐⭐⭐ | Clean code, WordPress best practices, dokumentasi |
| **Performance & SEO** | ⭐⭐⭐ | Optimasi gambar, meta tags, lazy loading |
| **User Experience** | ⭐⭐⭐⭐ | Navigasi intuitif, accessibility |
| **Creativity** | ⭐⭐ | Micro-interactions, smooth animations |

> **GOLDEN RULE dari Brief:**
> *"It is much better to complete a few sections perfectly, than to submit an entire site filled with unfinished sections."*
> Fokus pada KUALITAS, bukan kuantitas. Sections yang tidak selesai 100% **JANGAN** dimasukkan.

---

## 🏗️ Figma Design Breakdown - Estatein

### Pages yang Harus Di-replicate

| # | Page | Priority | Estimasi Waktu | Status |
|---|------|----------|----------------|--------|
| 1 | **Home Page** | 🔴 CRITICAL | 1.5 jam | - |
| 2 | **About Us** | 🟡 HIGH | 45 menit | - |
| 3 | **Properties** | 🟡 HIGH | 45 menit | - |
| 4 | **Property Detail** | 🟠 MEDIUM | 30 menit | - |
| 5 | **Services** | 🟠 MEDIUM | 30 menit | - |
| 6 | **Contact** | 🟡 HIGH | 30 menit | - |

### Komponen Reusable (Shared Components)

| Component | Dipakai Di | Priority |
|-----------|-----------|----------|
| **Header/Navigation** | Semua halaman | 🔴 CRITICAL |
| **Footer** | Semua halaman | 🔴 CRITICAL |
| **Property Card** | Home, Properties | 🔴 CRITICAL |
| **CTA Banner** | Home, About, Services | 🟡 HIGH |
| **Stats Counter** | Home, About | 🟡 HIGH |
| **Testimonial Card** | Home | 🟠 MEDIUM |
| **FAQ Accordion** | Home, Services | 🟠 MEDIUM |
| **Contact Form** | Contact, Home | 🟡 HIGH |
| **Search/Filter Bar** | Properties | 🟠 MEDIUM |

### Design Tokens (Dari Figma — Akurat)

> Detail lengkap di [DESIGN-SYSTEM.md](file:///d:/TFN/practice/growmodo/docs/DESIGN-SYSTEM.md)

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
- Library: Heroicons (heroicons.com)
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

## ⏱️ Time Management Strategy (4 Jam)

### Phase 1: Foundation (0:00 - 0:45) — 45 menit

```
✅ Setup WordPress lokal (XAMPP/LocalWP)
✅ Buat theme folder structure
✅ Setup style.css dengan theme info
✅ Buat functions.php (enqueue styles/scripts, theme support)
✅ Setup CSS variables / design tokens
✅ Buat header.php & footer.php
✅ Import Google Fonts
✅ Setup responsive grid system
```

### Phase 2: Header & Navigation (0:45 - 1:15) — 30 menit

```
✅ Logo + Navigation menu (wp_nav_menu)
✅ Mobile hamburger menu
✅ Sticky header on scroll
✅ Active state navigation
✅ Responsive breakpoints
✅ CTA button di navbar
```

### Phase 3: Home Page - Hero & Main Content (1:15 - 2:30) — 1 jam 15 menit

```
✅ Hero section (headline, subtitle, CTA, hero image)
✅ Stats counter section
✅ Featured Properties section (property cards)
✅ Testimonials section
✅ FAQ section (accordion)
✅ CTA banner section
```

### Phase 4: Footer (2:30 - 2:50) — 20 menit

```
✅ Footer layout (multi-column)
✅ Footer navigation links
✅ Social media icons
✅ Newsletter subscription form
✅ Copyright section
```

### Phase 5: Additional Pages (2:50 - 3:30) — 40 menit

```
✅ About page (jika waktu cukup)
✅ Properties listing page
✅ Contact page dengan form
```

### Phase 6: Polish & Deploy (3:30 - 4:00) — 30 menit

```
✅ Responsive testing (mobile, tablet, desktop)
✅ Cross-browser check
✅ Performance optimization
✅ SEO meta tags
✅ Deploy ke hosting (InfinityFree/Wasmer)
✅ Push ke GitHub
✅ Tulis documentation
```

> **Jika waktu habis di Phase 3/4:** Pastikan Header + Home Page + Footer sudah 100% sempurna.
> Jangan submit halaman yang belum selesai!

---

## 📁 WordPress Theme Structure

```
estatein-theme/
├── style.css                    # Theme info & main styles
├── functions.php                # Theme setup, enqueue, CPT, ACF
├── index.php                    # Fallback template
├── front-page.php               # Home page template
├── page.php                     # Default page template
├── single.php                   # Single post template
├── single-property.php          # Single property template (CPT)
├── archive-property.php         # Properties listing (CPT)
├── header.php                   # Global header
├── footer.php                   # Global footer
├── sidebar.php                  # Sidebar (if needed)
├── searchform.php               # Custom search form
├── 404.php                      # 404 page
├── screenshot.png               # Theme screenshot (1200x900)
│
├── template-parts/              # Reusable components
│   ├── content-hero.php
│   ├── content-stats.php
│   ├── content-property-card.php
│   ├── content-testimonial.php
│   ├── content-faq.php
│   ├── content-cta-banner.php
│   └── content-contact-form.php
│
├── page-templates/              # Custom page templates
│   ├── template-about.php
│   ├── template-properties.php
│   ├── template-services.php
│   └── template-contact.php
│
├── assets/
│   ├── css/
│   │   ├── variables.css        # CSS custom properties
│   │   ├── base.css             # Reset & typography
│   │   ├── components.css       # Reusable components
│   │   ├── layouts.css          # Grid & layout
│   │   └── responsive.css       # Media queries
│   │
│   ├── js/
│   │   ├── main.js              # Main JavaScript
│   │   ├── navigation.js        # Mobile menu toggle
│   │   ├── accordion.js         # FAQ accordion
│   │   └── animations.js        # Scroll animations
│   │
│   ├── images/                  # Optimized images
│   │   ├── logo.svg
│   │   ├── hero/
│   │   ├── properties/
│   │   └── icons/
│   │
│   └── fonts/                   # Local fonts (if needed)
│
├── inc/
│   ├── custom-post-types.php    # Register CPTs
│   ├── acf-fields.php           # ACF field groups
│   ├── enqueue.php              # Enqueue scripts & styles
│   ├── theme-support.php        # Theme supports
│   ├── widgets.php              # Custom widgets
│   └── customizer.php           # Theme customizer options
│
└── languages/                   # Translation files
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
    wp_enqueue_style('estatein-variables', get_template_directory_uri() . '/assets/css/variables.css');
    wp_enqueue_style('estatein-base', get_template_directory_uri() . '/assets/css/base.css');
    wp_enqueue_style('estatein-components', get_template_directory_uri() . '/assets/css/components.css');
    wp_enqueue_style('estatein-layouts', get_template_directory_uri() . '/assets/css/layouts.css');
    wp_enqueue_style('estatein-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('estatein-style', get_stylesheet_uri());
    
    // Scripts
    wp_enqueue_script('estatein-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0', true);
    wp_enqueue_script('estatein-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
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

### 3. ACF Field Groups (Jika Menggunakan ACF)

```
Property Fields:
├── price (Number)
├── location (Text)
├── bedrooms (Number)
├── bathrooms (Number)
├── area_sqft (Number)
├── property_type (Select: House/Villa/Apartment/Office)
├── property_status (Select: For Sale/For Rent)
├── gallery (Gallery)
├── features (Repeater)
│   ├── feature_name (Text)
│   └── feature_icon (Image)
└── agent (Post Object → Agent CPT)

Home Page Fields:
├── hero_title (Text)
├── hero_subtitle (Textarea)
├── hero_image (Image)
├── hero_cta_text (Text)
├── hero_cta_link (URL)
├── stats (Repeater)
│   ├── stat_number (Text)
│   └── stat_label (Text)
├── featured_properties_title (Text)
├── featured_properties_subtitle (Textarea)
├── testimonials (Repeater)
│   ├── name (Text)
│   ├── title (Text)
│   ├── content (Textarea)
│   ├── rating (Number)
│   └── avatar (Image)
└── faqs (Repeater)
    ├── question (Text)
    └── answer (Textarea)
```

### 4. CSS Architecture — Key Variables

```css
:root {
    /* Colors */
    --color-bg-primary: #141414;
    --color-bg-secondary: #1A1A1A;
    --color-bg-card: #1A1A1A;
    --color-bg-card-hover: #262626;
    --color-accent: #703BF7;
    --color-accent-hover: #8B5CF6;
    --color-accent-light: rgba(112, 59, 247, 0.1);
    --color-text-primary: #FFFFFF;
    --color-text-secondary: #999999;
    --color-text-muted: #666666;
    --color-border: #262626;
    --color-border-hover: #333333;
    --color-success: #22C55E;
    --color-gradient: linear-gradient(to right, #703BF7, #8B5CF6);

    /* Typography */
    --font-family: 'Urbanist', sans-serif;
    --font-size-xs: 0.75rem;
    --font-size-sm: 0.875rem;
    --font-size-base: 1rem;
    --font-size-lg: 1.125rem;
    --font-size-xl: 1.25rem;
    --font-size-2xl: 1.5rem;
    --font-size-3xl: 1.875rem;
    --font-size-4xl: 2.25rem;
    --font-size-5xl: 3rem;
    --font-size-6xl: 3.75rem;

    /* Spacing */
    --spacing-xs: 0.5rem;
    --spacing-sm: 0.75rem;
    --spacing-md: 1rem;
    --spacing-lg: 1.5rem;
    --spacing-xl: 2rem;
    --spacing-2xl: 3rem;
    --spacing-3xl: 4rem;
    --spacing-section: 6rem;

    /* Layout */
    --container-max: 1440px;
    --container-padding: 80px;
    --border-radius-sm: 8px;
    --border-radius-md: 12px;
    --border-radius-lg: 16px;
    --border-radius-full: 9999px;

    /* Transitions */
    --transition-fast: 150ms ease;
    --transition-base: 300ms ease;
    --transition-slow: 500ms ease;

    /* Shadows */
    --shadow-card: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
    --shadow-card-hover: 0 10px 25px -5px rgba(112, 59, 247, 0.15);
}
```

### 5. Responsive Breakpoints

```css
/* Mobile First Approach */
/* Base: 0 - 767px (Mobile) */

/* Tablet */
@media (min-width: 768px) { }

/* Desktop */
@media (min-width: 1024px) { }

/* Large Desktop */
@media (min-width: 1440px) { }
```

---

## 🚀 Deployment Strategy

### Option 1: InfinityFree (Recommended — Gratis)

```
1. Daftar di infinityfree.com
2. Buat hosting account
3. Upload WordPress via Softaculous (auto-installer)
4. Upload custom theme via Appearance > Themes > Add New > Upload
5. Activate theme
6. Import demo content
7. Test semua pages
```

### Option 2: Wasmer (Alternative)

```
1. Daftar di wasmer.io
2. Deploy WordPress package
3. Upload theme
4. Configure
```

### Option 3: 000webhost / Freehostia

```
Backup options jika InfinityFree bermasalah
```

---

## ✅ Quality Checklist (Sebelum Submit)

### Design Fidelity
- [ ] Warna sesuai Figma (dark theme)
- [ ] Typography sesuai (font family, sizes, weights)
- [ ] Spacing dan padding konsisten
- [ ] Layout grid sesuai design
- [ ] Icons dan images sesuai
- [ ] Hover states diimplementasi
- [ ] Border radius konsisten

### Responsiveness
- [ ] Mobile (375px) — Layout OK
- [ ] Tablet (768px) — Layout OK
- [ ] Desktop (1440px) — Layout OK
- [ ] Hamburger menu mobile berfungsi
- [ ] Images responsive (srcset)
- [ ] Font sizes responsive
- [ ] No horizontal scroll

### Functionality
- [ ] Navigation links bekerja
- [ ] Mobile menu open/close
- [ ] Contact form validasi & submit
- [ ] FAQ accordion expand/collapse
- [ ] Smooth scroll (jika ada anchor links)
- [ ] Hover effects pada cards & buttons
- [ ] Active/current page state di navigasi

### WordPress Best Practices
- [ ] Custom theme (bukan child theme)
- [ ] wp_nav_menu() untuk navigasi
- [ ] get_header() / get_footer()
- [ ] Template parts untuk reusable components
- [ ] Proper enqueue untuk CSS/JS
- [ ] Escape output (esc_html, esc_url, etc.)
- [ ] Translation-ready strings (__)
- [ ] Custom Post Types registered
- [ ] ACF fields configured (if used)

### Code Quality
- [ ] Indentasi konsisten
- [ ] Komentar pada section penting
- [ ] Tidak ada console.log / debug code
- [ ] CSS terorganisir (tidak inline)
- [ ] PHP mengikuti WordPress Coding Standards
- [ ] File naming convention konsisten

### Performance
- [ ] Images dioptimasi (WebP/compressed)
- [ ] CSS/JS diminify (production)
- [ ] Lazy loading pada images
- [ ] Minimal HTTP requests
- [ ] No unused CSS/JS

### SEO
- [ ] Title tags unik per halaman
- [ ] Meta descriptions
- [ ] Alt attributes pada semua images
- [ ] Proper heading hierarchy (H1 → H6)
- [ ] Semantic HTML (header, main, section, footer, nav)
- [ ] Open Graph tags

### Cross-Browser Testing
- [ ] Chrome
- [ ] Firefox
- [ ] Safari
- [ ] Edge

---

## 🏆 Best Practices & Tips untuk Menang

### 1. Prioritas Utama: Header + Home Page + Footer

Ini adalah **make-or-break** sections. Jika hanya 3 section ini yang selesai tapi SEMPURNA, kamu sudah punya peluang besar.

### 2. Gunakan AI dengan Bijak

```
✅ DO:
- Gunakan AI untuk generate boilerplate code
- Gunakan AI untuk CSS styling yang repetitif
- Gunakan AI untuk responsive media queries
- REVIEW & CLEAN UP semua output AI

❌ DON'T:
- Copy-paste tanpa review
- Submit code yang error/broken
- Biarkan komentar "AI-generated" di code
- Gunakan AI tanpa memahami outputnya
```

### 3. Perhatian pada Detail

```
- Pixel-perfect spacing
- Smooth transitions (300ms ease)
- Hover states pada SEMUA interactive elements
- Consistent border-radius
- Proper shadow effects
- Gradient accents sesuai design
```

### 4. Dokumentasi yang Baik

Siapkan file DEVELOPMENT-NOTES.md:
```
- Penjelasan development process
- Tools yang digunakan
- Keputusan teknis dan alasannya
- Plugin yang diinstall dan fungsinya
- Cara update konten via WordPress admin
- Known issues (jika ada)
```

### 5. Performance Quick Wins

```
- Compress semua images sebelum upload
- Gunakan SVG untuk icons dan logo
- Lazy load images di bawah fold
- Minify CSS & JS sebelum deploy
- Gunakan system fonts sebagai fallback
```

### 6. Creative Enhancements (Bonus Points)

```
- Smooth scroll behavior
- Fade-in animations on scroll (Intersection Observer)
- Skeleton loading states
- Back-to-top button
- Custom 404 page
- Subtle parallax on hero section
```

---

## 📦 Deliverables Checklist

| # | Deliverable | Detail | Status |
|---|-------------|--------|--------|
| 1 | **Frontend Prototype (HTML/CSS/JS)** | 100% Fidelity, Dark Theme, Fully Responsive | ✅ Selesai (Disimpan lokal, `.gitignore`) |
| 2 | **Documentation Report** | [FRONTEND-COMPLETION-REPORT.md](file:///d:/TFN/practice/growmodo/docs/FRONTEND-COMPLETION-REPORT.md) | ✅ Selesai |
| 3 | **WordPress Custom Theme** | Struktur `wp-content/themes/estatein/` | 🔄 Siap Dikonversi |
| 4 | **Live Website (VPS)** | VPS siap dideploy untuk testing langsung | 🔄 Menunggu info akses VPS |
| 5 | **GitHub Repository** | Hanya tema WordPress & Docs yang di-push | 🔄 Siap setelah tema selesai |

---

## 🔗 Resources

- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)
- [ACF Documentation](https://www.advancedcustomfields.com/resources/)
- [Figma Template](https://www.figma.com/community/file/1314076616839640516)
- [Frontend Completion Report](file:///d:/TFN/practice/growmodo/docs/FRONTEND-COMPLETION-REPORT.md)

---

## ⚠️ Risk Mitigation

| Risk | Mitigasi |
|------|----------|
| Prototype ter-push ke GitHub | Folder `html/` sudah dimasukkan ke `.gitignore` |
| Hosting gratis lambat / suspended | Menggunakan VPS dedicated milik user untuk testing live |
| Waktu tidak cukup | Fokus pada Home Page CPTs (Properties, Testimonials, FAQs) |
| Mobile layout rusak | Sudah 100% terverifikasi di mobile viewport 360px - 500px |

---

*Document Version: 1.1*  
*Created: October 12, 2026*  
*Last Updated: October 12, 2026 (Frontend Complete, Transitioning to WordPress & VPS)*
