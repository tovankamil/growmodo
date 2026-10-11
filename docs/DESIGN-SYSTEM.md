# 🎨 Design System Reference — Estatein Real Estate

> Extracted from Figma template design system screenshots.
> This is the single source of truth for the WordPress theme development.

---

## 🎨 Color Palette

### Absolute Colors
| Name | Hex | CSS Variable |
|------|-----|-------------|
| White | `#FFFFFF` | `--absolutewhite` |
| Black | `#000000` | `--absoluteblack` |

### Purple Shades (Primary / Brand Colors)
| Level | Hex | CSS Variable | Usage |
|-------|-----|-------------|-------|
| 60 | `#FF7A00` → `#703BF7` | `--purple-60` | Primary buttons, CTAs, accent |
| 65 | `#1A64FF` → `#8254F8` | `--purple-65` | Hover states |
| 70 | `#FF9533` → `#946CF9` | `--purple-70` | Light accent |
| 75 | `#FFCA99` → `#A685FA` | `--purple-75` | Lighter accent |
| 90 | `#FFE4CC` → `#DBCEFD` | `--purple-90` | Very light purple |
| 95 | `#FFF1E5` → `#EDE7FE` | `--purple-95` | Background tint |
| 97 | `#FFF7F0` → `#F4F0FE` | `--purple-97` | Subtle background |
| 99 | `#FFFCFA` → `#FBFAFF` | `--purple-99` | Near-white purple |

### White Shades
| Level | Hex | CSS Variable | Usage |
|-------|-----|-------------|-------|
| 90 | `#E4E4E7` | `--white-90` | Light borders |
| 95 | `#F1F1F3` | `--white-95` | Light backgrounds |
| 97 | `#F7F7F8` | `--white-97` | Subtle backgrounds |
| 99 | `#FCFCFD` | `--white-99` | Near-white |

### Grey Shades (Dark Theme Core)
| Level | Hex | CSS Variable | Usage |
|-------|-----|-------------|-------|
| 08 | `#141414` | `--grey-08` | **Main background** |
| 10 | `#1A1A1A` | `--grey-10` | **Card background, navbar** |
| 15 | `#262626` | `--grey-15` | **Borders** |
| 20 | `#333333` | `--grey-20` | Hover borders |
| 30 | `#4D4D4D` | `--grey-30` | Subtle elements |
| 40 | `#666666` | `--grey-40` | Muted text |
| 50 | `#808080` | `--grey-50` | Secondary text |
| 60 | `#999999` | `--grey-60` | **Body text, descriptions** |

---

## ✏️ Typography

### Font Family
- **Primary Font:** `Urbanist`
- **Source:** Google Fonts
- **Import:** `https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap`

### Font Weights Used
| Weight | Name | Usage |
|--------|------|-------|
| 400 | Regular | Body text, small labels |
| 500 | Medium | Navigation, descriptions, buttons, form labels |
| 600 | SemiBold | Section titles, card headings |
| 700 | Bold | Hero title, stat numbers |

### Font Size Scale (dari HTML export)
| Token | Size | Line Height | Usage |
|-------|------|-------------|-------|
| `text-lg` | 18px | 27px | Body text, buttons, nav links |
| `text-xl` | 20px | 30px | Testimonial names, footer headings |
| `text-2xl` | 24px | 36px | Card titles, FAQ questions |
| `text-4xl` | 40px | 60px | Stat numbers (200+, 10k+) |
| `text-5xl` | 48px | 72px | Section headings |
| `text-6xl` | 60px | 72px | Hero heading |

---

## 🏗️ Sitemap — All Pages & Sections

### 1. Home Page
| Order | Section |
|-------|---------|
| 1 | Navigation Bar |
| 2 | Hero Section |
| 3 | Properties (Featured) |
| 4 | Testimonials |
| 5 | FAQ's |
| 6 | CTA |
| 7 | Footer |

### 2. About Us Page
| Order | Section |
|-------|---------|
| 1 | Navigation Bar |
| 2 | Our Journey |
| 3 | Our Values |
| 4 | Our Achievements |
| 5 | How it Works |
| 6 | Our Team |
| 7 | Our Clients |
| 8 | CTA |
| 9 | Footer |

### 3. Properties Page
| Order | Section |
|-------|---------|
| 1 | Navigation Bar |
| 2 | Header Section |
| 3 | Search & Filters |
| 4 | Properties |
| 5 | Contact Form |
| 6 | CTA |
| 7 | Footer |

### 4. Property Details Page
| Order | Section |
|-------|---------|
| 1 | Navigation Bar |
| 2 | Images |
| 3 | Property Details |
| 4 | Contact Form |
| 5 | Pricing Details |
| 6 | FAQ's |
| 7 | CTA |
| 8 | Footer |

### 5. Services Page
| Order | Section |
|-------|---------|
| 1 | Navigation Bar |
| 2 | Header Section |
| 3 | Values |
| 4 | Management Features |
| 5 | Investments Features |
| 6 | CTA |
| 7 | Footer |

### 6. Contact Page
| Order | Section |
|-------|---------|
| 1 | Navigation Bar |
| 2 | Header Section |
| 3 | Contact Information |
| 4 | Contact Form |
| 5 | Our Offices |
| 6 | Gallery |
| 7 | CTA |
| 8 | Footer |

---

## 🔣 Icons

- **Icon Library:** Heroicons
- **Source:** [heroicons.com](https://heroicons.com)
- **Style:** Outline (based on Figma template)

---

## 📐 Spacing & Layout (dari HTML export)

### Container
- **Max Width:** 1920px (full design)
- **Content Padding:** `px-[162px]` = 162px horizontal padding
- **Content Area:** ~1596px (1920 - 162×2)

### Section Spacing
- **Section Gap:** `gap-20` = 80px between sections
- **Card Gap:** `gap-[30px]` = 30px between cards
- **Internal Padding:** `p-10` = 40px (cards), `p-[50px]` = 50px (testimonials/FAQ)
- **Top Bar Padding:** `py-[18px]` = 18px
- **Navbar Padding:** `py-5` = 20px
- **Footer Padding:** `py-[100px]` = 100px

### Border Radius
| Element | Radius |
|---------|--------|
| Cards | `rounded-xl` = 12px |
| Buttons | `rounded-[10px]` = 10px |
| Tags/Badges | `rounded-[28px]` = 28px |
| Close button | `rounded-[75px]` = pill |
| Avatar | Full round |
| Input fields | `rounded-xl` = 12px |

### Borders
- **Style:** 1px solid
- **Color:** `border-grey-15` (#262626) — primary border
- **Special:** Top banner has bottom border, sections have top/bottom borders

---

## 🧩 Components Reference

### Buttons
| Type | Style |
|------|-------|
| **Primary** | `bg-purple-60 rounded-[10px] px-6 py-[18px]` — Purple filled |
| **Secondary** | `bg-grey-10 rounded-[10px] border border-grey-15 px-6 py-[18px]` — Dark with border |
| **Outline** | `rounded-[10px] border border-grey-15 px-6 py-[18px]` — Transparent with border |
| **Nav Active** | `bg-grey-08 rounded-[10px] border border-grey-15 px-6 py-3.5` — Active nav item |

### Cards
| Type | Style |
|------|-------|
| **Property Card** | `bg-grey-08 rounded-xl border border-grey-15 p-10` |
| **Testimonial Card** | `bg-grey-08 rounded-xl border border-grey-15 p-[50px]` |
| **FAQ Card** | `bg-grey-08 rounded-xl border border-grey-15 p-[50px]` |
| **Feature Card** | `bg-grey-10 rounded-xl border border-grey-15 px-5 py-10` |
| **Stat Card** | `bg-grey-10 rounded-xl border border-grey-15 px-6 py-4` |

### Tags/Badges
```
bg-grey-10 rounded-[28px] border border-grey-15 px-3.5 py-2
Icon + Text (18px Medium white)
```

---

## 📱 Responsive Breakpoints (dari Figma)

| Device | Width | Folder |
|--------|-------|--------|
| **Desktop** | 1920px | `html/web/` |
| **Tablet** | TBD | `html/tab/` (empty) |
| **Mobile** | TBD | `html/mobile/` (empty) |

> Note: Tablet & mobile folders are currently empty.
> Figma shows "Designs available in 3 screen sizes" so check Figma for tablet/mobile layouts.

---

## 🔗 CSS Variables (from style_guide.css)

```css
:root {
  --absolutewhite: rgba(255, 255, 255, 1);
  --absoluteblack: rgba(0, 0, 0, 1);
  --purple-60: rgba(112, 59, 247, 1);     /* #703BF7 */
  --purple-65: rgba(130, 84, 248, 1);     /* #8254F8 */
  --purple-70: rgba(148, 108, 249, 1);    /* #946CF9 */
  --purple-75: rgba(166, 133, 250, 1);    /* #A685FA */
  --purple-90: rgba(219, 206, 253, 1);    /* #DBCEFD */
  --purple-95: rgba(237, 231, 254, 1);    /* #EDE7FE */
  --purple-97: rgba(244, 240, 254, 1);    /* #F4F0FE */
  --purple-99: rgba(251, 250, 255, 1);    /* #FBFAFF */
  --white-90: rgba(228, 228, 231, 1);     /* #E4E4E7 */
  --white-95: rgba(241, 241, 243, 1);     /* #F1F1F3 */
  --white-97: rgba(247, 247, 248, 1);     /* #F7F7F8 */
  --white-99: rgba(252, 252, 253, 1);     /* #FCFCFD */
  --grey-08: rgba(20, 20, 20, 1);         /* #141414 */
  --grey-10: rgba(26, 26, 26, 1);         /* #1A1A1A */
  --grey-15: rgba(38, 38, 38, 1);         /* #262626 */
  --grey-20: rgba(51, 51, 51, 1);         /* #333333 */
  --grey-30: rgba(77, 77, 77, 1);         /* #4D4D4D */
  --grey-40: rgba(102, 102, 102, 1);      /* #666666 */
  --grey-50: rgba(128, 128, 128, 1);      /* #808080 */
  --grey-60: rgba(153, 153, 153, 1);      /* #999999 */
}
```

---

*Last Updated: October 12, 2026*
