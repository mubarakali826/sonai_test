<?php
include "./helpers/variable.php";
// include   __DIR__ . "/../../../controller/conn.php";
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/config.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
} else {
    require_once __DIR__ . '/../../../config.php';
}

if ($isProduction) {
    include $_SERVER['DOCUMENT_ROOT'] . "/admin" . '/controller/conn.php';
} else {
    include __DIR__ . "/../../../controller/conn.php";
}

session_start();
if (!isset($_SESSION['userid'])) {
    alert('请登录后再操作！', 'login.php');
    exit;
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.79.0">
    <title>LBA Web Desgin</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/global.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">
</head>

<body>