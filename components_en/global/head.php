<?php
require_once 'config.php';

// Language handling
if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
}
$lang = $_SESSION['lang'] ?? 'en';

// Include DB connection
// include_once __DIR__ . "/../../controller/conn.php";

if ($isProduction) {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/controller/conn.php');
} else {
    include_once __DIR__ . "/../../controller/conn.php";
}
// Get current page name
function php_self()
{
    return substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1);
}

$phpself = substr(php_self(), 0, -4);

// Import Icons
@include './assets/icons/Icons.php';
include_once $componentsPath . '/global/functions.php'; // 👈 Add this

?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- SEO Meta Tags -->
  <meta name="description" content="<?= t(
      'Anhui Yushi Braking System Co., LTD. is an integrated enterprise specializing in the research, development, manufacturing and sales of automobile and motorcycle brake shoes.',
      '安徽宇实制动系统有限公司是一家集研发、制造和销售汽车、摩托车刹车片于一体的综合性企业。'
  ) ?>">
  <meta name="keywords" content="<?= t(
      'Anhui Yushi brake System Co., LTD.',
      '安徽宇实制动系统有限公司'
  ) ?>">

  <!-- Device & Cache Control -->
  <meta name="applicable-device" content="pc,mobile">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta http-equiv="Cache-Control" content="no-transform">

  <!-- Security Tokens -->
  <meta name="csrf-token" content="54bfcab18573e12d1ababd81c5a90fef">
  <meta name="domain-token" content="bd962aaa1e871982fd0d98346eb74434">
  <meta name="seo-base-link" content="">

  <!-- Canonical -->
  <link rel="canonical" href="http://www.www.sonairacing.com/">

  <!-- Title -->
  <title><?= t(
      'Anhui Yushi brake System Co., LTD.',
      '安徽宇实制动系统有限公司'
  ) ?></title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png" />
  <link rel="manifest" href="./assets/favicon_io/site.webmanifest" />

  <!-- Bootstrap & AOS -->
  <link rel="stylesheet" href="./thirdparty/bootstrap/style.css" />
  <link rel="stylesheet" href="./thirdparty/aos-master/dist/aos.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./style/common.css" />
  <?php echo $cssLinkFiles ?? ''; ?>

</head>

<body class="<?= $bodyClasses ?? '' ?>">
