<?php
$admin_path = $_SERVER['DOCUMENT_ROOT'] . '/admin';
$SImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProSimg/';
$BImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProBimg/';
include_once $admin_path . '/controller/conn.php';

// 后台处理数据四个步骤
// 第一步：接收数据
$id = $_GET['id'];

// 第二步：验证数据有有效性
if (!is_numeric($id)) {
    alert('id值出错', '/admin/product_inquiry_list.php');
    exit;
}

// 读取产品图片文件名，必须在删除之前查询
$sqlPic = "SELECT * FROM `product_inquries` WHERE `id` = $id";
$rsPic = $pdo->query($sqlPic)->fetch(PDO::FETCH_ASSOC);
if ($rsPic) {
    $Simg = $rsPic['Simg'];
    $Bimg = $rsPic['Bimg'];
} else {
    print_r($pdo->errorInfo());
    exit;
}

// 第三步：构造SQL语句，将ID作为删除条件，实现删除功能
$sql = "DELETE FROM `product_inquries` WHERE `id` = $id";
$res = $pdo->exec($sql);

// 第四步：将执行结果显示出来
if ($res) {
    // 删除存在服务器内的图片
    if (isset($Simg)) {
        unlink($SImgPath . $Simg);
    }
    if (isset($Bimg)) {
        unlink($BImgPath . $Bimg);
    }
    header('Location: ../../product_inquiry_list.php');
} else {
    print_r($pdo->errorInfo());
    alert('删除失败', "../../product_inquiry_list.php");
}

// Alert function
if (!function_exists('alert')) {
    function alert($message, $url)
    {
        echo "<script type='text/javascript'>alert('$message'); window.location.href='$url';</script>";
        exit;
    }
}
?>