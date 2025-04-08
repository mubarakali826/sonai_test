<?php include "lang.php";
$componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components" . $checkLang;
$cssLinkFiles = '';
include_once $componentsPath . "/global/head.php" ?>
<!-- <*****************[NAVIGATION]*****************> -->
<?php $currentPage = "news";
include_once $componentsPath . "/global/nav.php" ?>
<?php include_once $componentsPath . "/news/info.php" ?>
<?php include_once $componentsPath . "/global/footer.php" ?>
<?php
$jsLinkFiles = '';
include_once $componentsPath . "/global/site-footer.php" ?>