<?php include "lang.php";

$componentsPath =  "./components" . $checkLang;
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