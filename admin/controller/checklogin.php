<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/config.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
} else {
    require_once __DIR__ . '/../../config.php';
}

$admin_path = $_SERVER['DOCUMENT_ROOT'] . "/admin";
 if ($isProduction) {
        include $admin_path . "/controller/conn.php";
    } else {
        include __DIR__ . "/../../controller/conn.php";
    }
/**
 * 验证登录的密码账号
 * 
 */

// 接收用户名密码
$redirect_url = '<a href="../login.php">重新输入</a>';
$username = $_POST['username'];
$password = $_POST['password'];

// 检查数据有效性
if (strlen($username) < 1) {
    echo '用户不能为空 ' . $redirect_url;
    exit;
}
if (strlen($password) < 6) {
    echo '密码不能小于6位 ' . $redirect_url;
    exit;
}

// 使用预处理语句查询数据库并返回结果
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    // 登录成功
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['userid'] = $row['id'];
    $_SESSION['flag'] = $row['flag'];
    header('Location: ../index.php');
    exit;
} else {
    // 登录失败
    echo '账号或者密码错误 ' . $redirect_url;
    exit;
}
?>