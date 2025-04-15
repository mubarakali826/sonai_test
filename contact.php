<?php include "lang.php";
// $componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components" . $checkLang;
// $componentsPath = "./components_en";
require_once 'config.php';

if ($isProduction) {
    $componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components_en";
} else {
    $componentsPath = "./components_en";
}

$cssLinkFiles = '';
include_once $componentsPath . "/global/head.php"
    ?>
<?php $currentPage = "contact";
include_once $componentsPath . "/global/nav.php" ?>
<?php include_once $componentsPath . "/contact/main.php" ?>
<?php include_once $componentsPath . "/global/footer.php" ?>
<?php
$jsLinkFiles = '';
include_once $componentsPath . "/global/site-footer.php" ?>