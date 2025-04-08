<?php
$admin_path = $_SERVER['DOCUMENT_ROOT'] . '/admin';
include $admin_path . '/controller/conn.php';

session_start();
$_SESSION = array(); // 将session设置为空数组，清除session
session_destroy();// 清除session缓存文件

header('Location: ../login.php');
