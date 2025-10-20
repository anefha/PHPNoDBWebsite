<?php
defined('DIR_ACCESS') or header('Location: ' . $cfg_mainurl);
include_once __DIR__ . '/inc/config.php';

// Dynamically generate the URL
$urldyn = filter_var("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);

// If the URL ends with ".php" or ".html", remove the extension and redirect
if (substr($urldyn, -4) === ".php" || substr($urldyn, -5) === ".html") {
    // Remove the extension
    $new_url = rtrim($urldyn, '.php');
    $new_url = rtrim($new_url, '.html');

    header("Location: " . $new_url, true, 301);
    exit();
}
