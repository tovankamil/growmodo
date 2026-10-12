# 📑 Frontend Documentation Report & WordPress Integration Guide

**Project:** Estatein Real Estate — Growmodo Developer Assessment  
**Current Phase:** Frontend Implementation Complete ➔ Transition to WordPress Theme & VPS Deployment  
**Git Status:** Prototype directory `html/` is included in `.gitignore` so it is not pushed to the public GitHub repository per instructions.

---

## 1. Summary of Completed Frontend Work (100% Fidelity)

All visual components and frontend interactions have been built using pure semantic standards (*pure semantic HTML, modern Vanilla CSS, and Vanilla JavaScript with no frameworks or heavy page builders*), with complete attention to Figma specifications and visual reference requirements:

### A. Announcement Top Banner
- **Functionality:** Responsive announcement banner with dismiss button storing state in `sessionStorage`.
- **Design & Abstraction:** 
  - Dark background `--grey-08` (`#141414`) with refined `Abstract Design3.png` wave lines (`opacity: 0.22`, `background-position: center center`) preventing moiré or aliasing artifacts.
  - Inline promotional text with underlined "Learn More" link navigating to the About Us page.
  - Clean single-line layout on mobile viewports with comfortable touch padding.

### B. Header & Navigation (Desktop & Mobile Drawer)
- **Desktop Navbar:**
  - Estatein brand logo (purple emblem + Urbanist typography).
  - Navigation links (`Home`, `About Us`, `Properties`, `Services`) with active state indicator and hover animations.
  - Secondary CTA button `Contact Us`.
- **Mobile Navigation & Hamburger Toggle:**
  - Clean, borderless hamburger button (`background: transparent; border: none;`) matching the Figma reference.
  - The 3rd (bottom) line is **half-length** and right-aligned (`x1="12" x2="21"`).
  - Interactive logic via [main.js](file:///d:/TFN/practice/growmodo/wp-content/themes/estatein/assets/js/main.js): dynamic morphing to an **X** icon when open, automatic close on outside click or nav link click.
  - Full accessibility compliance with dynamic `aria-expanded` attributes.

### C. Hero Section (Discover Your Dream Property)
- **Office Building Visual (`.hero-visual`):**
  - High-resolution architecture visual (`office.png`) with rounded corners `border-radius: 16px`.
  - Subtle radial purple glow card background (`rgba(112, 59, 247, 0.35)`) blended with soft wave contour of `Abstract Design3.png` (`opacity: 0.22`, `object-position: center center`).
  - Left hero text background remains pure solid black `#141414` for maximum readability.
- **Floating Rotating Circular Badge:**
  - Circular badge with rotating SVG curved path reading *"✨ Discover Your Dream Property"*.
  - Diagonal arrow icon at the center with interactive hover effect.
  - Desktop placement: left side of the visual building card; Mobile placement: bottom corner of the building card.
- **Key Stats & CTA Buttons:**
  - 3 metric summary cards: `200+ Happy Customers`, `10k+ Properties For Clients`, `16+ Years of Experience`.
  - Primary button "Browse Properties" (Brand purple `#703BF7`) and secondary button "Learn More".

### D. Featured Properties Section
- Section header with sparkle star icon, heading, description, and desktop navigation button "View All Properties".
- Property card grid (Seaside Serenity Villa, Metropolitan Haven, Rustic Retreat Cottage):
  - Property photography with optimal aspect ratios and bedroom/bathroom badge pills.
  - Concise description text + "Read More" link.
  - Prominent price badge (`$550,000`, etc.).
  - Action button "View Property Details".
- **Mobile Pagination:**
  - Bottom mobile navigation bar with "View All" button, page counter indicator ("01 of 60"), and left/right arrow navigation buttons.

### E. Client Testimonials & FAQ Section
- **Testimonials:**
  - Review cards with 5-star golden yellow rating stars.
  - Structured client testimonial quotes.
  - Client profile info (avatar photo, full name, and location/city).
- **FAQ Accordion Cards:**
  - Question cards covering purchasing procedures, legal documentation, and agent consultation.
  - Interactive expand/collapse toggle buttons.

### F. Call-to-Action (CTA) Pre-Footer
- Prominent full-width banner with dark gradient background.
- Dual graphic contours on left and right (`Abstract Design.png` & `Abstract Design2.png`).
- Primary CTA button "Explore Properties".

### G. Responsive Global Footer
- **Brand & Newsletter:**
  - Estatein logo + brief mission statement.
  - Newsletter subscription form with pill-shaped email input field and paper plane send button.
- **Desktop Sitemap:**
  - 5 evenly distributed navigation columns (`Home`, `About Us`, `Properties`, `Services`, `Contact Us`).
- **Mobile Sitemap:**
  - 2-column grid with clean vertical divider line (`border-right: 1px solid #262626`) and horizontal dividers between category blocks.
- **Footer Bottom Bar:**
  - **Mobile:** Social media icons (`Facebook`, `LinkedIn`, `Twitter`, `YouTube`) centered on the first row, followed by centered `@2023 Estatein. All Rights Reserved.` copyright and `Terms & Conditions` link.
  - **Desktop:** Copyright & Terms on the left, 4 circular social icon buttons on the right.

---

## 2. WordPress Theme Architecture Plan (`estatein`)

The WordPress theme is constructed as a **100% Custom Theme** without any heavy page-builder plugins (No Elementor/Divi), ensuring the highest scores for *Code Quality*, *Security*, and *PageSpeed (95+)*:

```
wp-content/themes/estatein/
├── style.css                      # Official WP theme metadata header
├── functions.php                  # Enqueue styles/scripts, theme supports, CPT registration
├── header.php                     # HTML <head>, Top Announcement Banner, Header Navigation
├── footer.php                     # Pre-Footer CTA, Sitemap Grid, Social Links, Legal Footer
├── front-page.php                 # Front page template loading modular parts
├── index.php                      # Fallback template
├── template-parts/
│   ├── hero.php                   # Hero section, office visual, rotating badge, stats
│   ├── features.php               # 4-column feature highlights section
│   ├── properties-slider.php      # Custom Post Type 'property' loop
│   ├── testimonials-slider.php    # Custom Post Type 'testimonial' loop
│   ├── faq-section.php            # Custom Post Type 'faq' loop
│   └── cta-banner.php             # Reusable CTA pre-footer banner
├── inc/
│   ├── custom-post-types.php      # CPT registrations (Properties, Testimonials, FAQs)
│   ├── customizer.php             # Dynamic banner text, social links, copyright settings
│   └── template-tags.php          # Helper functions for price formatting & badge rendering
└── assets/
    ├── css/
    │   ├── style_guide.css        # Urbanist typography & color tokens
    │   └── global.css             # Main responsive stylesheet
    ├── js/
    │   └── main.js                # Navigation interactivity, banner dismiss, toggles
    └── images/                    # Image assets, logo, and abstract backgrounds
```

---

## 3. VPS Live Deployment Setup

The custom WordPress theme is deployed and validated in a live server environment matching the Growmodo assessment evaluation criteria:

### Server Environment:
- **Operating System:** AlmaLinux 10 (Linux 6.12+)
- **Web Server:** Nginx (Reverse Proxy with SSL & HTTP/2 support)
- **PHP Runtime:** PHP 8.3 / 8.4 with Zend OPcache
- **Database:** MariaDB 10.11+
- **WordPress Root:** `/var/www/tofan.my.id/public_html`
- **Domain:** `https://tofan.my.id/`
- **Direct IP:** `http://103.117.57.52/`

---

## 4. Git Repository Security & Standards

- Root `.gitignore` is configured to exclude temporary cache files, prototype folders, and local credentials.
- The `html/` prototype folder is excluded so it is **never pushed to GitHub**.
- Only clean, production-ready WordPress theme files (`wp-content/themes/estatein/`) along with documentation markdown files are maintained in version control.
