# 🚀 GitHub Actions CI/CD to VPS Setup Guide

This CI/CD pipeline uses **GitHub Actions** to automatically deploy the `estatein` WordPress theme every time you push to the `main` branch.

---

## 1. SSH Key Preparation on VPS

Run the following commands in your VPS terminal (as user `root` or `ubuntu`):

### Step 1: Generate a Dedicated SSH Key for GitHub Actions
```bash
# Run in VPS terminal:
ssh-keygen -t ed25519 -C "github-actions-deploy" -f ~/.ssh/github_deploy -N ""
```

### Step 2: Register Public Key to `authorized_keys`
```bash
cat ~/.ssh/github_deploy.pub >> ~/.ssh/authorized_keys
chmod 600 ~/.ssh/authorized_keys
chmod 700 ~/.ssh
```

### Step 3: Copy Private Key for GitHub
```bash
cat ~/.ssh/github_deploy
```
*Copy the entire output, starting from `-----BEGIN OPENSSH PRIVATE KEY-----` to `-----END OPENSSH PRIVATE KEY-----`.*

---

## 2. Register Secrets in GitHub Repository

1. Open your repository on GitHub: `https://github.com/[username]/[repo]`
2. Go to **Settings** > **Secrets and variables** > **Actions**.
3. Click **New repository secret** and add the following 5 secrets:

| Secret Name | Example / Value | Description |
|-------------|----------------|-------------|
| `VPS_HOST` | `103.117.57.52` or `yourdomain.com` | IP or Host of your VPS |
| `VPS_PORT` | `22` | SSH Port (default 22) |
| `VPS_USERNAME` | `root` or `tovan` | SSH login user on VPS |
| `VPS_SSH_KEY` | *(Private key text from Step 3)* | Private Key for SSH authentication |
| `VPS_TARGET_DIR` | `/var/www/tofan.my.id/public_html/wp-content/themes/estatein` | Theme directory path on VPS |

> 💡 **Notes for VPS Control Panels:**
> - If using **aaPanel**: path is typically `/www/wwwroot/[domain]/wp-content/themes/estatein`
> - If using **CyberPanel**: path is typically `/home/[domain]/public_html/wp-content/themes/estatein`
> - If using **Standard Ubuntu Nginx/Apache**: path is typically `/var/www/html/wp-content/themes/estatein`

---

## 3. How the CI/CD Pipeline Works (`.github/workflows/deploy.yml`)

1. **Trigger:** Runs automatically on every push to the `main` branch, or can be triggered manually via the *"Run workflow"* button in the **Actions** tab.
2. **Checkout:** Checks out theme files from `wp-content/themes/estatein/`.
3. **Security Filter:** Automatically excludes the prototype `html/` folder, `docs/` folder, and `.git*` files.
4. **Rsync:** Transfers files quickly and efficiently via SSH to the theme directory on the VPS.
5. **Permissions:** Sets permissions to `755` (directories) and `644` (files) with `www-data` ownership.
6. **Cache Flush:** Automatically flushes WordPress cache if WP-CLI is installed on the VPS.

---

## 4. Testing First Deployment
After adding the 5 secrets above to GitHub:
1. Commit changes to the `main` branch and push.
2. Open the **Actions** tab in your GitHub repository.
3. You will see the workflow **Deploy Estatein WordPress Theme to VPS** running and turning green (✅ Success).
