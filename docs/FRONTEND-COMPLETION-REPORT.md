# 📑 Laporan Dokumentasi Frontend & Panduan Integrasi WordPress

**Proyek:** Estatein Real Estate — Growmodo Developer Assessment  
**Fase Saat Ini:** Penyelesaian Frontend (HTML/CSS/JS) ➔ Transisi ke WordPress Theme & Deployment VPS  
**Status Git:** Folder prototype `html/` telah dimasukkan ke `.gitignore` agar tidak di-push ke GitHub repository publik sesuai instruksi.

---

## 1. Ringkasan Pengerjaan Frontend yang Telah Selesai (100% Fidelity)

Seluruh komponen visual dan interaksi frontend telah diimplementasikan secara murni (*pure semantic HTML, modern Vanilla CSS, dan Vanilla JavaScript tanpa framework/page builder*), dengan ketelitian penuh terhadap spesifikasi Figma dan referensi video/gambar dari tim penilaian:

### A. Announcement Top Banner
- **Fungsi:** Banner pengumuman responsif dengan tombol tutup (*dismiss*) yang menyimpan status ke `sessionStorage`.
- **Desain & Abstraksi:** 
  - Background gelap `--grey-08` (`#141414`) dengan garis abstraksi `Abstract Design3.png` yang diperhalus (`opacity: 0.22`, `background-position: center center`) sehingga bebas dari efek *moire/aliasing*.
  - Teks promosi inline dengan tautan "Learn More" bergaris bawah (*underline*).
  - Tampilan mobile tetap rapi satu baris (*single-line*) dengan padding yang nyaman.

### B. Header & Navigasi (Desktop & Mobile Drawer)
- **Desktop Navbar:**
  - Logo Estatein (ikon ungu + teks tipografi Urbanist).
  - Menu navigasi links (`Home`, `About Us`, `Properties`, `Services`) dengan status *active* dan *hover* effect.
  - Tombol CTA sekunder `Contact Us`.
- **Mobile Navigation & Hamburger Toggle:**
  - Tombol hamburger dibuat *clean* & *borderless* (`background: transparent; border: none;`) sesuai referensi Figma.
  - Garis ke-3 (bawah) berukuran **setengah panjang** dan rata kanan (`x1="12" x2="21"`).
  - Logika interaktif via [main.js](file:///d:/TFN/practice/growmodo/html/js/main.js): transisi dinamis ke ikon **X** saat dibuka, dan menutup otomatis saat klik di luar area atau klik navigasi link.
  - Aksesibilitas penuh dengan atribut `aria-expanded`.

### C. Hero Section (Discover Your Dream Property)
- **Visual Gedung Perkantoran (`.hero-visual`):**
  - Menggunakan gambar gedung resolusi tinggi (`office.png`) dengan sudut membulat `border-radius: 16px`.
  - Background kartu menggunakan *radial gradient* ungu halus (`rgba(112, 59, 247, 0.35)`) berpadu dengan kontur gelombang `Abstract Design3.png` yang lembut (`opacity: 0.22`, `object-position: center center`).
  - Latar belakang teks hero di sisi kiri tetap solid hitam `#141414` murni tanpa tumpukan abstraksi yang mengganggu keterbacaan.
- **Floating Rotating Circular Badge:**
  - Lencana melingkar dengan SVG path memutar bertuliskan *"✨ Discover Your Dream Property"*.
  - Ikon panah diagonal di tengah dengan efek interaksi hover.
  - Posisi desktop: berada di sisi kiri gambar gedung; Posisi mobile: berada di sudut bawah gambar gedung.
- **Statistik & Tombol CTA:**
  - 3 kartu ringkasan metrik: `200+ Happy Customers`, `10k+ Properties For Clients`, `16+ Years of Experience`.
  - Tombol utama "Browse Properties" (Aksen ungu `#703BF7`) dan tombol sekunder "Learn More".

### D. Featured Properties Section
- Header section dengan bintang kilau, judul, deskripsi, dan tombol navigasi desktop "View All Properties".
- Grid kartu properti (Seaside Serenity Villa, Metropolitan Haven, Rustic Retreat Cottage):
  - Foto properti dengan rasio aspect optimal dan badge tipe kamar/kamar mandi.
  - Teks deskripsi ringkas + link "Read More".
  - Tag harga (*Price Badge*) yang jelas (`$550,000`).
  - Tombol aksi "View Property Details".
- **Pagination Mobile:**
  - Bilah navigasi mobile di bagian bawah dengan tombol "View All", indikator counter ("01 of 60"), dan tombol panah navigasi kiri/kanan.

### E. Testimoni Klien & FAQ Section
- **Testimonials:**
  - Kartu ulasan dengan rating bintang 5 berwarna kuning keemasan.
  - Kutipan testimoni klien yang terstruktur.
  - Profil klien (foto avatar, nama lengkap, dan kota/negara domisili).
- **FAQ Accordion Cards:**
  - Kartu pertanyaan seputar pembelian, dokumen legalitas, dan konsultasi agen.
  - Tombol interaktif "Read More".

### F. Call-to-Action (CTA) Pre-Footer
- Banner berukuran besar dengan latar belakang gelap beraksen gradien.
- Ornamen grafis ganda kiri dan kanan (`Abstract Design.png` & `Abstract Design2.png`).
- Tombol CTA utama "Explore Properties".

### G. Global Footer Responsif
- **Brand & Newsletter:**
  - Logo Estatein + deskripsi singkat.
  - Form langganan newsletter dengan field input email bergaya pill dan tombol kirim ikon pesawat kertas.
- **Desktop Sitemap:**
  - 5 kolom navigasi terdistribusi rapi (`Home`, `About Us`, `Properties`, `Services`, `Contact Us`).
- **Mobile Sitemap:**
  - Grid 2 kolom dengan garis batas pemisah vertikal di tengah (`border-right: 1px solid #262626`) dan garis pemisah horizontal antar kategori.
- **Footer Bottom Bar:**
  - **Mobile:** Ikon sosial media (`Facebook`, `LinkedIn`, `Twitter`, `YouTube`) diposisikan di baris pertama rata tengah (**center**), diikuti copyright `@2023 Estatein. All Rights Reserved.` dan tautan `Terms & Conditions` rata tengah.
  - **Desktop:** Copyright & Terms di sisi kiri, 4 tombol sosial media bulat di sisi kanan.

---

## 2. Rencana Arsitektur Tema WordPress (`estatein`)

Tema WordPress akan dibangun murni (**Custom Theme** tanpa ketergantungan plugin builder berat seperti Elementor/Divi), menjamin nilai tertinggi pada *Code Quality*, *Security*, dan *PageSpeed Score (95+)*:

```
wp-content/themes/estatein/
├── style.css                      # Header metadata tema resmi WP
├── functions.php                  # Enqueue styles/scripts, theme supports, CPT registration
├── header.php                     # HTML <head>, Top Announcement Banner, Header Navigation
├── footer.php                     # Pre-Footer CTA, Sitemap Grid, Social Links, Legal Footer
├── front-page.php                 # Template halaman utama memuat modular parts
├── index.php                      # Fallback template
├── template-parts/
│   ├── hero.php                   # Section Hero, office visual, rotating badge, stats
│   ├── features.php               # Section fitur keunggulan 4 kolom
│   ├── properties-slider.php      # Loop Custom Post Type 'property'
│   ├── testimonials-slider.php    # Loop Custom Post Type 'testimonial'
│   ├── faq-section.php            # Loop Custom Post Type 'faq'
│   └── cta-banner.php             # Reusable CTA Pre-footer banner
├── inc/
│   ├── custom-post-types.php      # Registrasi CPT (Properties, Testimonials, FAQs)
│   ├── customizer.php             # Pengaturan dinamis teks banner, sosmed, copyright
│   └── template-tags.php          # Helper functions untuk render badge & format harga
└── assets/
    ├── css/
    │   ├── style_guide.css        # Variabel warna & tipografi Urbanist
    │   └── global.css             # Stylesheet utama responsif
    ├── js/
    │   └── main.js                # Interaktivitas navigasi, banner, dan toggle
    └── images/                    # Asset gambar, logo, dan abstraksi
```

---

## 3. Rencana Penggunaan VPS untuk Testing

Karena Anda telah menyiapkan VPS, kita dapat menguji tema WordPress di lingkungan *live server* yang identik dengan kebutuhan evaluasi Growmodo.

### Kebutuhan Informasi VPS dari Anda:
Untuk mulai menghubungkan dan mendeploy tema ke VPS Anda, mohon bagikan informasi berikut (pilih metode yang Anda miliki):

#### Opsi A: Akses SSH / Server Langsung
1. **IP Server VPS:** (contoh: `123.45.67.89`)
2. **SSH Port:** (default `22` atau port kustom Anda)
3. **Username:** (contoh: `root` atau `ubuntu`)
4. **Password / SSH Key:** (jika menggunakan SSH key/password)
5. **Web Server Stack:** (misal: Nginx, Apache, OpenLiteSpeed, atau Docker)

#### Opsi B: Akses Web Control Panel (Jika VPS memakai Panel)
- Panel URL (aaPanel / CyberPanel / cPanel / CloudPanel)
- Username & Password panel
- Domain atau Temporary Subdomain yang sudah diarahkan ke IP VPS

#### Opsi C: Akses SFTP / FTP
- Host SFTP / IP
- Port SFTP
- Username & Password direktori `wp-content/themes/`

---

## 4. Keamanan Repositori Git

- File `.gitignore` telah dibuat di root proyek.
- Folder `html/` telah dikecualikan dari Git tracking sehingga **tidak akan pernah ter-push ke GitHub**.
- Hanya kode tema WordPress bersih (`wp-content/themes/estatein/` atau root tema WP) beserta dokumentasi Markdown yang akan di-commit ke Git saat siap.
