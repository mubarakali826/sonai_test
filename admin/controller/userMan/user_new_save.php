<?php
$admin_path = $_SERVER['DOCUMENT_ROOT'] . '/admin';
include_once $admin_path . '/controller/conn.php';

// 1. 接收数据
$username = $_POST['username'];
$password = $_POST['password'];
$flag = $_POST['flag'];

// 2. 验证数据有效性
if (strlen($username) < 1) {
    alert('请输入用户名', '/admin/user_new.php');
    exit;
}

// 3. 构造SQL语句，将数据写入数据表
$sql = "INSERT INTO `admin`(`username`, `password`, `flag`) VALUES(:username, :password, :flag)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':flag', $flag);

// 4. 执行SQL语句并显示结果
$res = $stmt->execute();


if ($res) {
    header('Location: ../../user_list.php');
} else {
    header('Location: ../../user_new.php');
}
?>