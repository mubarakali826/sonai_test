<?php include "lang.php";
// $componentsPath = "./components_en";
require_once 'config.php';

if ($isProduction) {
    $componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components_en";
} else {
    $componentsPath = "./components_en";
}


$cssLinkFiles = '
    <link rel="stylesheet" href="./thirdparty/swiper/style.css" />
    <script src="./thirdparty/swiper/script.js"></script> 
    <link rel="stylesheet" href="./style/product.css" /> 
';
@include $componentsPath . "/global/head.php" ?>
<?php $currentPage = "products";
@include $componentsPath . "/global/nav.php" ?>

<?php @include $componentsPath . "/product/main2.php" ?>
<?php @include $componentsPath . "/global/footer.php" ?>
<?php
$jsLinkFiles = '
    <script src="./js/product.js"></script> 
';

@include $componentsPath . "/global/site-footer.php" ?>