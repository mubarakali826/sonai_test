<?php
// include_once($_SERVER['DOCUMENT_ROOT'] . '/controller/conn.php');
include_once __DIR__ . "/../../controller/conn.php";
// 获取页面名称，如在“/xxxxx/contact.php”则获得contact.php
function php_self()
{
  $php_self = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1);
  return $php_self;
}
// 对文件名称进行处理
$phpself = substr(php_self(), 0, -4);


// Import Icons
@include './assets/icons/Icons.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="martin building" />
  <!-- 防止转码 -->
  <meta name="applicable-device" content="pc,mobile">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta http-equiv="Cache-Control" content="no-transform ">
  <!--U防止json劫持token-->
  <meta name="csrf-token" content="54bfcab18573e12d1ababd81c5a90fef">
  <meta name="domain-token" content="bd962aaa1e871982fd0d98346eb74434">
  <meta name="seo-base-link" content="">
  <meta name="keywords" content=",Anhui Yushi brake System Co., LTD.">
  <meta name="description"
    content="Anhui Yushi Braking System Co., LTD. is an integrated enterprise specializing in the research, development, manufacturing and sales of automobile and motorcycle brake shoes.">
  <link rel="canonical" href="http://www.www.sonairacing.com/">
  <title>Anhui Yushi brake System Co., LTD.</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png" />
  <link rel="manifest" href="./assets/favicon_io/site.webmanifest" />
  <!-- <*****************[BOOTSTRAP CSS]*****************> -->
  <link rel="stylesheet" href="./thirdparty/bootstrap/style.css" />
  <link rel="stylesheet" href="./thirdparty/aos-master/dist/aos.css" />
  <!-- <*****************[CUSTOM CSS]*****************> -->
  <link rel="stylesheet" href="./style/common.css" />
  <?php echo $cssLinkFiles; ?>

</head>

<body class="<?php if ($bodyClasses) {
  echo $bodyClasses;
}
;
?>">