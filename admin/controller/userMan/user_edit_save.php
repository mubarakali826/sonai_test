<?php
$admin_path = $_SERVER['DOCUMENT_ROOT'] . '/admin';
include_once $admin_path . '/controller/conn.php';
// 后台处理数据4步骤

// 1 接收数据
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$flag = $_POST['flag'];



// 2 验证数据有效性

if (strlen($username) < 1) {
    alert('请输入单页模块名称', '../../user_edit.php?id=' . $id);
    exit;
}

// 3 第三步： 构造SQL语句，将数据写入数据表

$sql = "UPDATE `admin` SET `username` = '$username',`password` = '$password',`flag` = '$flag' WHERE `id` = $id;";
//var_dump($sql); 检查一下语句，是个好习惯
//php脚本执行这条SQL语句


// 4. 第四步：将执行结果显示出来
$res = $pdo->exec($sql);

// Print the result

!$res ? alert('修改失败！', '../../user_edit.php?id=' . $id) : header('Location: ../../user_list.php');