<?php
include "lang.php";
require_once 'config.php';

if ($isProduction) {
    $componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components_en";
} else {
    $componentsPath = "./components_en";
}

$cssLinkFiles = '
    <link rel="stylesheet" href="./thirdparty/swiper/style.css" />
    <script src="./thirdparty/swiper/script.js"></script> 
    <link rel="stylesheet" href="./style/index.css" /> 
';
include_once $componentsPath . "/global/head.php" ?>
<?php $currentPage = "index";
include_once $componentsPath . "/global/nav.php" ?>
<?php include_once $componentsPath . "/home/main.php" ?>
<?php include_once $componentsPath . "/global/footer.php" ?>
<?php
$jsLinkFiles = '';
include_once $componentsPath . "/global/site-footer.php" ?>