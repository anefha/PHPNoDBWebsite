# PHPNoDBWebsite

A minimalist, PHP-based, CMS-like no-database (flat-file) website starter kit for quickly building static or semi-dynamic websites.  
Designed for simplicity, flexibility, and speed — this lightweight structure helps you create and manage a website without the need for any database.

---

## 🚀 Features
- **No Database** – Uses a simple flat-file PHP structure (no MySQL, Maria or SQLite required).  
- **Easy Configuration** – Fully managed through a single `config.php` file.  
- **Customizable** – Effortlessly add or edit sections such as Home, About, Services, or Contact.  
- **Lightweight & Fast** – Minimal dependencies, optimized for quick deployment.

---

## ⚙️ Requirements
- PHP 7.0 or higher  
- Any web server with PHP support (Apache, Nginx, LiteSpeed, etc.)  
- Basic understanding of HTML, CSS, and PHP

---

## 🧩 Installation
1. **Download or clone** this repository.  
2. **Upload** the files to your hosting or local server.  
3. **Configure** your website via `/inc/config.php`.  
4. Done — your site is live!

---

## 📄 Creating a New Page
Example: Creating a `partners` page.

1. Create a new file named `partners.php` in your project root.  
2. Paste the following content:

```php
<?php

define('DIR_ACCESS', true); // Allow access for visitors

// Include the main configuration
include_once __DIR__ . '/inc/config.php';

// Set up basic page variables
$url = rtrim($cfg_mainurl, '/') . '/partners';
$title = $cfg_name . " - Partners";
$desc = "Partners page description";

// Include URL handler and layout components
include_once __DIR__ . '/inc/url.php';
include_once __DIR__ . '/inc/head.php';
include_once __DIR__ . '/inc/navbar.php';

?>
<!-- Content Start -->

<!-- HTML CONTENT GOES HERE -->

<!-- Content End -->

<?php include_once __DIR__ . '/inc/footer.php'; ?>
```

---

## 💎 Sponsors
**Nywhash**  
![Nywhash Logo](https://static.nywhash.com/partners/nywhash/nywhash_text_color.png)

---

© 2025 anefha. All rights reserved under MIT License.
