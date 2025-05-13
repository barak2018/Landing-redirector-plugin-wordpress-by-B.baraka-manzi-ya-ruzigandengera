# Landing Redirector

**WordPress plugin to redirect homepage visitors to mobile or desktop landing pages based on their device.**

---

## 🚀 Features

- Detects if a user is on a mobile or desktop device using the User-Agent string
- Redirects to different landing pages accordingly
- Lightweight and fast (no dependencies)
- Works silently in the background
- Perfect for split UI (mobile vs. desktop) setups

---

## 📥 Installation

1. Download the plugin ZIP or clone the repo:
    ```bash
    git clone https://github.com/your-username/landing-redirector.git
    ```
2. Upload the plugin folder to your WordPress site's `/wp-content/plugins/` directory
3. Log in to your WordPress Admin Panel
4. Go to **Plugins → Installed Plugins**
5. Activate **Landing Redirector**

---

## ⚙️ Configuration

No settings required.

You can modify the destination URLs directly in the plugin code:

```php
// Mobile redirect
wp_redirect('https://buysellorrent.com/mobile/', 301);

// Desktop redirect
wp_redirect('https://buysellorrent.com/BuySellorRent.com/index.html', 301);
