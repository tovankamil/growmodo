# Growmodo GmbH - WordPress Developer Trial Assessment

**Candidate Submission Package & Technical Documentation**

---

## SECTION 1: SUBMISSION MESSAGE TEMPLATE (For Growmodo Submission Form)

*Copy the text below into the Growmodo submission form alongside your live demo link and repository URL.*

```
Dear Growmodo Hiring Team,

Thank you for the opportunity to complete this trial assessment for the WordPress Developer position. 

Below are the deliverables and details of my submission:

1. Live Demo URL: https://tofan.my.id/ (or http://103.117.57.52/)
2. GitHub Repository: https://github.com/tovankamil/growmodo
3. Admin Access (Reviewer Credentials):
   - URL: https://tofan.my.id/wp-admin
   - Username: admin
   - Password: T0v4n.kamil

Brief Overview:
- Theme Type: 100% Custom WordPress Theme (Estatein) built from scratch (Clean PHP 8+, Modular CSS Tokens, Vanilla ES6 JS).
- Focus Area: Completed the core layout with pixel-perfect design fidelity from Figma (Dismissible Announcement Header, Hero Section with rotating circular badge, Value Proposition Grid, Featured Properties Carousel, Client Testimonials, FAQ Accordion, Services & Contact sections, and Global Footer).
- Responsiveness: Fully verified and fluid across Mobile (375px-500px), Tablet (768px), and Desktop (1200px+).
- Architecture: Zero page-builder bloat (No Elementor/Divi); structured with modular template parts, Custom Post Types (Properties, Testimonials, FAQ), and native WordPress metaboxes.
- Database & Deployment: Hosted live on VPS (AlmaLinux 10 + Nginx + PHP 8.3 + MariaDB) with automated GitHub Actions CI/CD deployment pipeline.

Attached below is the full technical documentation detailing the architecture, implementation choices, and performance optimizations.

Best regards,
Tovan Kamil
tovan.kamil@gmail.com
```

---

## SECTION 2: TECHNICAL DOCUMENTATION (1-2 Pages Documentation)

### 1. Executive Summary & Strategy

This project was developed for the Growmodo WordPress Developer trial assessment. Following the brief's primary recommendation of **"Quality over Quantity"** under the 4-hour evaluation timeline:

* **Pixel-Perfect Design Fidelity**: Prioritized exact adherence to Figma visual hierarchy, spacing tokens, and micro-interactions over submitting incomplete or broken pages.
* **Pure Custom Theme**: Built without reliance on heavy page builders (Elementor, Divi), guaranteeing minimal DOM depth, instant Time-to-First-Byte (TTFB), and optimal First Contentful Paint (FCP).
* **Enterprise Architecture**: Built using modular template parts, native Custom Post Types, and semantic HTML5 standards.

### 2. Theme Directory Structure

The theme architecture is structured modularly for maintainability and scalability:

```
wp-content/themes/estatein/
├── assets/
│   ├── css/
│   │   ├── style_guide.css    # Design tokens (colors, typography, spacing)
│   │   └── global.css         # Master responsive stylesheet
│   ├── js/
│   │   └── main.js            # Mobile navigation, toggles, filter behaviors
│   ├── images/                # Optimized WebP and SVG graphics
│   └── logo/                  # Vector brand emblems
├── template-parts/
│   ├── hero.php               # Hero banner with office visual & rotating badge
│   ├── features.php           # 4-column value proposition feature grid
│   ├── properties-slider.php  # Featured properties custom query loop
│   ├── testimonials-slider.php# Client testimonial review cards
│   ├── faq-section.php        # FAQ interactive accordion cards
│   ├── cta-banner.php         # Reusable pre-footer banner
│   ├── about-*.php            # Modular components for About Us
│   ├── services-*.php         # Modular components for Services
│   └── contact-*.php          # Modular components for Contact Us
├── 404.php                    # Error handling template
├── footer.php                 # Global wp_footer hook, sitemap grid, legal notices
├── front-page.php             # Home page template loading modular components
├── functions.php              # Enqueues, theme supports, security hooks, helpers
├── header.php                 # Global wp_head, announcement bar, navigation
├── index.php                  # Fallback template
├── single-property.php        # Property single view template
└── style.css                  # Theme declaration header
```

### 3. Technology Stack & Technical Rationale

| Component | Selected Technology | Rationale & Advantage |
|-----------|---------------------|-----------------------|
| **Core Engine** | Custom PHP Theme (WordPress 6.x+) | Full control over semantic HTML markup; eliminates page-builder DOM bloat. |
| **Styling** | Vanilla CSS (Flexbox & CSS Grid) + Custom Properties | Lightweight, zero runtime compilation overhead, instant responsive transitions. |
| **Interactivity** | Vanilla JavaScript (ES6) | No jQuery runtime dependency on frontend; near-instant execution speed. |
| **Content Management** | Native WP Custom Post Types & Custom Fields | Clean backend management for properties, reviews, and FAQs directly from wp-admin. |
| **Icons & Media** | Inline SVGs & WebP Images | High-DPI sharpness, subpixel accuracy, minimal byte payloads. |

### 4. Key Feature Implementation

1. **Fluid Responsiveness & Cross-Device Compatibility:**
   - Designed using mobile-first breakpoints (`640px`, `768px`, `1024px`, `1280px`, `1920px`).
   - Seamless off-canvas mobile navigation drawer with animated hamburger morph and accessibility attributes (`aria-expanded`).
   - Zero horizontal overflow across all viewports down to 360px.

2. **Design Fidelity (Pixel-Perfect Alignment):**
   - Precise extraction of color palettes (`--grey-08`, `--grey-10`, `--purple-60`), typography scales, and radius tokens directly into CSS custom properties.
   - Mathematically concentric icon boxes with dual-arc spiral vortex gradients matching Figma reference.
   - Smooth hover micro-animations on interactive cards, buttons, and links.

3. **SEO & Web Accessibility (a11y):**
   - Semantic HTML5 structure (`<header>`, `<nav>`, `<main>`, `<article>`, `<section>`, `<aside>`, `<footer>`).
   - Dynamic `alt` attributes on all image elements.
   - High-contrast typography exceeding WCAG AA standards against dark backgrounds.
   - Unique descriptive IDs and accessible form labels.

4. **Performance & Security Optimization:**
   - CSS versioning cache-busting via `ESTATEIN_VERSION`.
   - JavaScript loaded with `defer` attributes.
   - Native lazy-loading (`loading="lazy"`) on non-critical images.
   - Output sanitization and escaping (`esc_html`, `esc_url`, `esc_attr`).
   - Anti-obfuscation protection for email contact links (`<!--email_off-->`).

---

## SECTION 3: CODEBASE REFERENCE (Custom WordPress Theme)

Below is an overview of the foundational theme components:

### 1. `style.css`

```css
/*
Theme Name: Estatein
Theme URI: https://github.com/tovankamil/growmodo
Author: Tovan Kamil
Author URI: https://tofan.my.id
Description: Clean, modern, responsive custom WordPress theme developed for Growmodo Developer Assessment based on the Estatein Figma design system.
Version: 1.0.6
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 7.4
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: estatein
*/
```

### 2. `functions.php`

```php
<?php
/**
 * Estatein Custom Theme Functions & Definitions
 *
 * @package Estatein
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'ESTATEIN_VERSION', '1.0.6' );
define( 'ESTATEIN_DIR', get_template_directory() );
define( 'ESTATEIN_URI', get_template_directory_uri() );

function estatein_setup() {
    load_theme_textdomain( 'estatein', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'
    ) );
    register_nav_menus( array(
        'primary' => __( 'Primary Header Menu', 'estatein' ),
        'footer'  => __( 'Footer Menu', 'estatein' ),
    ) );
}
add_action( 'after_setup_theme', 'estatein_setup' );

function estatein_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap', array(), null );
    wp_enqueue_style( 'estatein-style-guide', ESTATEIN_URI . '/assets/css/style_guide.css', array(), ESTATEIN_VERSION );
    wp_enqueue_style( 'estatein-global', ESTATEIN_URI . '/assets/css/global.css', array( 'estatein-style-guide' ), ESTATEIN_VERSION );
    wp_enqueue_style( 'estatein-style', get_stylesheet_uri(), array( 'estatein-global' ), ESTATEIN_VERSION );

    wp_enqueue_script( 'estatein-main', ESTATEIN_URI . '/assets/js/main.js', array(), ESTATEIN_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'estatein_scripts' );
```

---

## SECTION 4: 4-HOUR EXECUTION SCHEDULE BREAKDOWN

| Timeline | Activity Focus | Deliverable / Success Criteria |
|----------|----------------|--------------------------------|
| **00:00 - 00:30** | **Design Inspection & Asset Extraction** | Inspected Figma file: extracted color tokens, typography scales, vector SVGs, and WebP images. Initialized local Git repository. |
| **00:30 - 01:45** | **Core Structure & Layout Build** | Scaffolded custom theme directory. Built Header, Hero, and Feature Grid with 100% responsive fluid behavior. |
| **01:45 - 02:45** | **Figma Fidelity Polish & Interactivity** | Refined spacing, typography weights, micro-interactions, FAQ accordion logic, and contact forms. |
| **02:45 - 03:30** | **VPS Deployment & SSL Configuration** | Deployed custom theme to live VPS environment (AlmaLinux, Nginx, PHP-FPM, Cloudflare SSL). Verified live public endpoints. |
| **03:30 - 04:00** | **Cross-Browser QA, Documentation & Submission** | Verified responsive behavior across mobile viewports (Chrome DevTools, Edge). Pushed codebase to GitHub. Prepared technical report. |

---

*Last Updated: October 12, 2026*
