<?php include "lang.php";
$componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components" . $checkLang;
$cssLinkFiles = '
<link rel="stylesheet" href="./thirdparty/swiper/style.css" />
<script src="./thirdparty/swiper/script.js"></script> 
<link rel="stylesheet" href="./style/product.css" /> 
<script src="./js/product.js"></script> 
';
@include $componentsPath . "/global/head.php" ?>
<?php $currentPage = "product-detail";
@include $componentsPath . "/global/nav.php" ?>
<?php @include $componentsPath . "/product-show/main.php" ?>
<?php
@include $componentsPath . "/global/footer.php" ?>
<?php
$jsLinkFiles = '
    <script src="./js/product-details.js"></script> 
';
@include $componentsPath . "/global/site-footer.php" ?>