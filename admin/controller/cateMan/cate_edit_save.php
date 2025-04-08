<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$admin_path = $_SERVER['DOCUMENT_ROOT'] . '/admin';
include_once $admin_path . '/controller/conn.php';

// 后台处理数据4步骤

// 1 接收数据
$id = isset($_POST['id']) ? $_POST['id'] : '';
$catename = isset($_POST['catename']) ? $_POST['catename'] : '';
$catename_en = isset($_POST['catename_en']) ? $_POST['catename_en'] : '';

// 2 验证数据有效性
if (strlen($catename) < 1) {
    alert('请输入分类名称', '../../cate_edit.php?id=' . $id);
    exit;
}

// 3 第三步： 构造SQL语句，将数据写入数据表
$sql = "UPDATE `cate` SET `catename` = :catename, `catename_en` = :catename_en WHERE `id` = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':catename', $catename);
$stmt->bindParam(':catename_en', $catename_en);
$stmt->bindParam(':id', $id);

// 4. 第四步：将执行结果显示出来
if ($stmt->execute()) {
    header('Location: ../../cate_list.php');
} else {
    $errorInfo = $stmt->errorInfo();
    alert('修改失败！ Error: ' . $errorInfo[2], '../../cate_edit.php?id=' . $id);
}

if (!function_exists('alert')) {
    function alert($message, $url)
    {
        echo "<script type='text/javascript'>alert('$message'); window.location.href='$url';</script>";
        exit;
    }
}
?>