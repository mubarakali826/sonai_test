<?php include "lang.php";
$componentsPath = "./components_en";
$cssLinkFiles = '';
include_once $componentsPath . "/global/head.php" ?>
<?php $currentPage = "about-us";
include_once $componentsPath . "/global/nav.php" ?>
<?php include_once $componentsPath . "/about-us/main.php" ?>
<?php include_once $componentsPath . "/global/footer.php" ?>
<?php
$jsLinkFiles = '';
include_once $componentsPath . "/global/site-footer.php" ?>