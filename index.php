<?php
require_once 'vendor/autoload.php';

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set default language to English if not set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

// Handle language switch
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = ($_GET['lang'] === 'ar') ? 'ar' : 'en';
    // Redirect to same page without lang parameter to avoid resubmission
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

// Load appropriate products file based on language
$productsFile = ($_SESSION['lang'] === 'ar') ? 'data/products_ar.php' : 'data/products_en.php';
$products = require $productsFile;

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/view');
$twig = new \Twig\Environment($loader);

// Load banner data
$bannerFile = 'data/banner.php';
$banner = require $bannerFile;

// Load system language file based on session language
$langFile = ($_SESSION['lang'] === 'ar') ? 'data/system_ar.php' : 'data/system_en.php';
$lang = require $langFile;

// Add global variable for current language
$twig->addGlobal('current_lang', $_SESSION['lang']);

echo $twig->render('home.twig', [
    'title' => 'Home Page',
    'clothes' => $products['clothes'],
    'cosmetics' => $products['cosmetics'],
    'accessories' => $products['accessories'],
    'collection' => $products['collection'],
    'banner_images' => $banner['banner_images'],
    'menu' => $lang['menu'],
    'lang' => $lang['lang']
]);
