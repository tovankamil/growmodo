# 🚀 Panduan Setup CI/CD GitHub Actions ke VPS

Alur CI/CD ini menggunakan **GitHub Actions** untuk mendeploy tema WordPress `estatein` secara otomatis setiap kali Anda melakukan `git push` ke branch `main`.

---

## 1. Persiapan SSH Key di VPS

Jalankan perintah berikut di terminal VPS Anda (sebagai user `root` atau `ubuntu`):

### Langkah 1: Buat SSH Key khusus GitHub Actions
```bash
# Jalankan di terminal VPS:
ssh-keygen -t ed25519 -C "github-actions-deploy" -f ~/.ssh/github_deploy -N ""
```

### Langkah 2: Daftarkan Public Key ke `authorized_keys`
```bash
cat ~/.ssh/github_deploy.pub >> ~/.ssh/authorized_keys
chmod 600 ~/.ssh/authorized_keys
chmod 700 ~/.ssh
```

### Langkah 3: Ambil Private Key untuk dimasukkan ke GitHub
```bash
cat ~/.ssh/github_deploy
```
*Salin seluruh teks yang keluar, mulai dari `-----BEGIN OPENSSH PRIVATE KEY-----` sampai `-----END OPENSSH PRIVATE KEY-----`.*

---

## 2. Daftarkan Secrets di GitHub Repository

1. Buka repository Anda di GitHub: `https://github.com/[username]/[repo]`
2. Masuk ke menu **Settings** > **Secrets and variables** > **Actions**.
3. Klik tombol **New repository secret** dan tambahkan 5 secret berikut:

| Nama Secret | Nilai / Contoh | Keterangan |
|-------------|----------------|------------|
| `VPS_HOST` | `123.45.67.89` atau `domainanda.com` | IP atau Host VPS Anda |
| `VPS_PORT` | `22` | Port SSH (default 22) |
| `VPS_USERNAME` | `root` atau `ubuntu` | User login SSH VPS |
| `VPS_SSH_KEY` | *(Teks private key dari Langkah 3)* | Private Key untuk autentikasi SSH |
| `VPS_TARGET_DIR` | `/var/www/html/wp-content/themes/estatein` | Path lokasi tema di VPS |

> 💡 **Catatan untuk VPS Control Panel:**
> - Jika menggunakan **aaPanel**: path biasanya `/www/wwwroot/[domain]/wp-content/themes/estatein`
> - Jika menggunakan **CyberPanel**: path biasanya `/home/[domain]/public_html/wp-content/themes/estatein`
> - Jika menggunakan **Nginx/Apache Ubuntu standar**: path biasanya `/var/www/html/wp-content/themes/estatein`

---

## 3. Cara Kerja Pipeline CI/CD (`.github/workflows/deploy.yml`)

1. **Trigger:** Otomatis berjalan setiap ada commit di-push ke branch `main`, atau bisa dijalankan manual via tombol *"Run workflow"* di tab **Actions**.
2. **Checkout:** Mengambil file tema dari `wp-content/themes/estatein/`.
3. **Filter Keamanan:** Otomatis mengecualikan folder prototype `html/`, folder `docs/`, dan file `.git*`.
4. **Rsync:** Mengirim file dengan cepat dan efisien via SSH ke folder tema di VPS.
5. **Permissions:** Mengatur hak akses file menjadi `755` (folder) dan `644` (file) serta kepemilikan `www-data`.
6. **Cache Flush:** Otomatis membersihkan cache WordPress jika WP-CLI terpasang di VPS.

---

## 4. Testing Deploy Pertama Kali
Setelah Anda memasukkan 5 secret di atas ke GitHub:
1. Kita akan commit tema WordPress pertama ke branch `main`.
2. Buka tab **Actions** di GitHub repository Anda.
3. Anda akan melihat workflow **Deploy Estatein WordPress Theme to VPS** berjalan dan statusnya berubah menjadi hijau (✅ Berhasil).
