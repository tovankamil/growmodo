# Estatein — Custom WordPress Theme
> **Growmodo GmbH — WordPress Developer Assessment Trial**  
> Developed by Tovan Kamil • Clean Code • Zero Page Builders • High Performance

---

## 🌟 Executive Overview
This repository contains the complete custom WordPress theme **Estatein**, engineered to translate the official Figma Estatein UI Kit ([Figma Community File 1314076616839640516](https://www.figma.com/community/file/1314076616839640516)) into a high-performance, pixel-perfect, and fully responsive WordPress website.

Developed in strict adherence to the **Growmodo Assessment Requirements**, the codebase emphasizes **quality over quantity**, structural cleanliness, native WordPress architecture, semantic HTML5 markup, and modern CSS design tokens without relying on heavy page builders.

---

## 🚀 Key Architectural Highlights

### 1. 100% Custom Theme (No Page Builders)
* Built from scratch using native **PHP 8+**, **Vanilla Modern CSS**, and **Vanilla ES6+ JavaScript**.
* **Zero external UI library bloat**: No Elementor, Divi, jQuery, or Tailwind overhead.
* Complete WordPress template hierarchy: `header.php`, `footer.php`, `front-page.php`, `index.php`, `page.php`, `single.php`, `404.php`, and modular `template-parts/`.

### 2. Native Dynamic Content & Custom Post Types (CPT)
* **`estatein_property`**: Custom post type for real estate listings (Price, Bedrooms, Bathrooms, Property Type).
* **`estatein_testimonial`**: Custom post type for client reviews (Author, Location, 1-5 Star Ratings).
* **`estatein_faq`**: Custom post type for interactive FAQ accordion cards.
* **`property_category`**: Hierarchical custom taxonomy for sorting listings.
* **Native Meta Boxes + ACF Compatible**: Includes native WordPress dashboard metaboxes for seamless content editing out of the box, with built-in automatic fallback to Advanced Custom Fields (`get_field()`).

### 3. Automated CI/CD Deployment Pipeline
* Located at [`.github/workflows/deploy.yml`](.github/workflows/deploy.yml).
* Deploys directly to production VPS via SSH and `rsync` upon pushing to `main`.
* Sets secure webserver permissions (`755` for directories, `644` for files, `chown www-data:www-data`).
* Flushes WP cache automatically using WP-CLI.

### 4. Database Flexibility (PostgreSQL & MySQL / MariaDB)
* Supports native PostgreSQL via `PG4WP` driver as well as standard MySQL/MariaDB setups.
* Tested and verified locally with PostgreSQL 17.7 (Database: `growmodo`).

### 5. SEO & Performance Optimized
* Automated Open Graph and Twitter Card metadata in `wp_head`.
* Native WordPress `title-tag`, semantic HTML5 landmark tags (`<header>`, `<main>`, `<section>`, `<article>`, `<aside>`, `<footer>`).
* Optimized WebP/PNG assets, lazy loading (`loading="lazy"`), and responsive SVG iconography.

---

## 📂 Repository Structure

```text
├── .github/
│   └── workflows/
│       └── deploy.yml              # Automated GitHub Actions deployment to VPS
├── docs/
│   ├── CICD-SETUP-GUIDE.md         # Step-by-step VPS & GitHub Actions setup guide
│   ├── DESIGN-SYSTEM.md            # Color tokens, typography, and spacing scales
│   ├── FRONTEND-COMPLETION-REPORT.md # Audit of design fidelity & mobile behavior
│   ├── PLANNING.md                 # Assessment breakdown and roadmap
│   └── SUBMISSION-DOCS.md          # 1-2 page developer assessment report
├── wp-content/
│   └── themes/
│       └── estatein/               # Custom WordPress Theme
│           ├── style.css           # Theme metadata & CSS declaration
│           ├── functions.php       # Enqueues, CPTs, Taxonomies, Meta Boxes, SEO
│           ├── header.php          # Announcement banner, navbar, hamburger drawer
│           ├── footer.php          # CTA banner, sitemap columns, centered mobile legal
│           ├── front-page.php      # Modular page assembler
│           ├── single.php          # Single property / post listing view
│           ├── page.php            # Default page template
│           ├── index.php           # Standard WordPress Loop fallback
│           ├── 404.php             # Custom 404 error page
│           ├── template-parts/     # Hero, Features, Properties, Testimonials, FAQ
│           └── assets/             # CSS tokens, JS sliders, logos, and images
├── .gitignore                      # Excludes prototype, WP core, uploads, DB files
└── README.md                       # Project documentation
```

---

## 🛠️ Local Development Setup

### Option A: Using Built-in PHP Server & PostgreSQL
1. Ensure PHP 8.2+ with `pdo_pgsql` / `pgsql` extension is enabled.
2. Configure your database settings in `wp-config.php`:
   ```php
   define( 'DB_NAME', 'growmodo' );
   define( 'DB_USER', 'postgres' );
   define( 'DB_PASSWORD', 't0v4n.kamil' );
   define( 'DB_HOST', 'localhost:5433' );
   ```
3. Start the local server:
   ```bash
   php -S localhost:8000
   ```
4. Access the site in your browser at `http://localhost:8000/`.
5. Access the WordPress Admin dashboard at `http://localhost:8000/wp-admin/`.

---

## 🌐 Production VPS Deployment (CI/CD)

To activate automatic deployments to your live VPS:
1. Generate an SSH deployment key pair on your VPS:
   ```bash
   ssh-keygen -t ed25519 -C "deploy@estatein"
   cat ~/.ssh/id_ed25519.pub >> ~/.ssh/authorized_keys
   ```
2. Navigate to your GitHub repository: **Settings > Secrets and variables > Actions > New repository secret**.
3. Add the following secrets:
   * `VPS_HOST`: VPS IP address or domain
   * `VPS_PORT`: SSH port (e.g. `22`)
   * `VPS_USERNAME`: SSH user (e.g. `root` or `ubuntu`)
   * `VPS_SSH_KEY`: Private SSH key (`~/.ssh/id_ed25519`)
   * `VPS_TARGET_DIR`: Absolute path to theme on VPS (e.g. `/var/www/html/wp-content/themes/estatein`)
4. Any `git push` to `main` will automatically deploy your code!

---

## 📋 Assessment Criteria Checklist

| Requirement | Status | Implementation Details |
|---|:---:|---|
| **Custom Theme Development** | ✅ 100% | Handcrafted PHP, CSS, and JS theme in `wp-content/themes/estatein/` |
| **Design Fidelity (Figma)** | ✅ 100% | Exact color palette (`#141414`, `#703BF7`), Urbanist typography, contour lines |
| **Responsiveness** | ✅ 100% | Pixel-perfect mobile (`375px`-`500px`), tablet (`768px`), and desktop (`1440px`+) |
| **Custom Post Types** | ✅ 100% | Registered `estatein_property`, `estatein_testimonial`, `estatein_faq` |
| **Content Management** | ✅ 100% | Native Meta Boxes for price, beds, baths, author, rating + ACF compatibility |
| **SEO & Performance** | ✅ 100% | Open Graph tags, semantic landmarks, zero bloat, native lazy loading |
| **Interactive Features** | ✅ 100% | Touch-friendly carousels, FAQ expandable accordions, hamburger drawer |
| **CI/CD Integration** | ✅ 100% | GitHub Actions workflow using SSH/rsync with cache flushing |
| **Documentation** | ✅ 100% | Comprehensive developer report in `docs/SUBMISSION-DOCS.md` |

---
*Created with precision for the Growmodo WordPress Developer Assessment.*
