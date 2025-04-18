<?php include "lang.php";

// $componentsPath =  "./components_en";
require_once 'config.php';

if ($isProduction) {
    $componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components_en";
} else {
    $componentsPath = "./components_en";
}

$cssLinkFiles = '';
@include $componentsPath . "/global/head.php" ?>
<?php $currentPage = "products-inquiry";
@include $componentsPath . "/global/nav.php" ?>
<?php @include $componentsPath . "/product-inquiry/main.php" ?>
<?php @include $componentsPath . "/global/footer.php" ?>
<?php
$jsLinkFiles = '
    <script src="./js/product.js"></script> 
';
@include $componentsPath . "/global/site-footer.php" ?>