# PHPNoDBWebsite

A minimalist, PHP-based, cms-like no-db (flat-file) website starter kit for quickly building static websites. Designed for simplicity, flexibility, and speed, this project provides a lightweight structure to help you create your website without needing a database.

## Features

- **No Database**: Simple flat-file structure with PHP.
- **Easy Configuration**: Easily configurable via a single `config.php` file.
- **Customizable**: Easily add and update sections like the homepage, about page, services, and contact information.

## Requirements

- PHP 7 or higher
- Web server with support for PHP (e.g., Apache, Nginx)
- Basic understanding of HTML, CSS, and PHP

## Installation
1. Download
2. Move files to your website
3. That's all!

## Creating New Page
Let's create a page called “partners,” for example.
1. create partners.php,

```
<?php

define('DIR_ACCESS', true); // allow access for guests

// include the configuration file
include_once __DIR__ . '/inc/config.php';

$url = rtrim($nyw_mainurl, '/') . '/partners'; // partners

// Set the title and description
$title = $cfg_name . " - Partners";
$desc = "Partners page description";

// include the URL processing file
include_once __DIR__ . '/inc/url.php';

// include the head and navbar parts of the site
include_once __DIR__ . '/inc/head.php';
include_once __DIR__ . '/inc/navbar.php';

?>
<!-- Content Start -->

HTML CODE SHOULD BE HERE

<!-- Content End -->

<?php include_once __DIR__ . '/inc/footer.php'; ?>
```
