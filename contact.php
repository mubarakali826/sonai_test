<?php include "lang.php";
$componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components" . $checkLang;
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