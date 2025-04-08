<?php include "lang.php";
$componentsPath = $_SERVER['DOCUMENT_ROOT'] . "/components" . $checkLang;
$cssLinkFiles = '';
@include "components" . $checkLang . "/global/head.php"
    ?>
<!-- <*****************[NAVIGATION]*****************> -->
<?php $currentPage = "news-details";
@include "components" . $checkLang . "/global/nav.php" ?>
<?php @include "components" . $checkLang . "/news-show/main.php" ?>
<?php @include "components" . $checkLang . "/global/footer.php" ?>
<?php
$jsLinkFiles = '';
@include "components" . $checkLang . "/global/site-footer.php" ?>