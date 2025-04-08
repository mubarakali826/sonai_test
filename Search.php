<?php include "lang.php";
$componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components" . $checkLang;
$cssLinkFiles = '';
@include "components" . $checkLang . "/global/head.php" ?>
<?php $currentPage = "Search";
@include "components" . $checkLang . "/global/nav.php" ?>
<?php @include "components" . $checkLang . "/search/main.php" ?>
<?php @include "components" . $checkLang . "/global/footer.php" ?>
<?php
$jsLinkFiles = '';
@include "components" . $checkLang . "/global/site-footer.php" ?>