<?php
// Load config
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/config.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
} else {
    require_once __DIR__ . '/../../../config.php';
}

// Setup paths based on environment
if ($isProduction) {
    $admin_path = $_SERVER['DOCUMENT_ROOT'] . '/admin';
    $SImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProSimg/';
    $BImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProBimg/';
    include_once $admin_path . '/controller/conn.php';
} else {
    $admin_path = __DIR__ . '/../../../';
    $SImgPath = __DIR__ . '/../../../upProSimg/';
    $BImgPath = __DIR__ . '/../../../upProBimg/';
    include_once $admin_path . 'controller/conn.php';
}

// 后台处理数据四个步骤
// 第一步：接收数据
$id = $_GET['id'];

// 第二步：验证数据有有效性
if (!is_numeric($id)) {
    alert('id值出错', '/admin/product_list.php');
    exit;
}

// 查询图片名（必须在删除前）
$sqlPic = "SELECT * FROM `product` WHERE `id` = $id";
$rsPic = $pdo->query($sqlPic)->fetch(PDO::FETCH_ASSOC);
if ($rsPic) {
    $Simg = $rsPic['Simg'];
    $Bimg = $rsPic['Bimg'];
} else {
    print_r($pdo->errorInfo());
    exit;
}

// 第三步：执行删除
$sql = "DELETE FROM `product` WHERE `id` = $id";
$res = $pdo->exec($sql);

// 第四步：处理结果
if ($res) {
    if (!empty($Simg)) {
        @unlink($SImgPath . $Simg);
    }
    if (!empty($Bimg)) {
        @unlink($BImgPath . $Bimg);
    }
    header('Location: ../../product_list.php');
    exit;
} else {
    print_r($pdo->errorInfo());
    alert('删除失败', "../../product_list.php");
}
?>
