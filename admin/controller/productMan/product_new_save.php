<?php

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/config.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
} else {
    require_once __DIR__ . '/../../../config.php'; // Corrected to 3 levels up
}


// Set admin path based on environment
if ($isProduction) {
    $admin_path = $_SERVER['DOCUMENT_ROOT'] . "/admin";
    $SImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProSimg/';
    $BImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProBimg/';
    include_once $admin_path . '/controller/conn.php';
} else {
    $admin_path = __DIR__ . '/../../../';
    $SImgPath = __DIR__ . '/../../../upProSimg/';
    $BImgPath = __DIR__ . '/../../../upProBimg/';
    include_once $admin_path . 'controller/conn.php';
}


// 后台处理数据4步骤

// 1 接收数据
$productname = isset($_POST['productname']) ? $_POST['productname'] : '';
$productname_en = isset($_POST['productname_en']) ? $_POST['productname_en'] : '';
$cate_id = isset($_POST['cate_id']) ? $_POST['cate_id'] : '';
$Simg = $_FILES['Simg'];
$Bimg = $_FILES['Bimg'];

// 2 验证数据有效性
if (strlen($productname) < 1) {
    echo 'fail: 请输入产品名称';
    exit;
}

// 查询最大ID号，在文件名中加入ID号
$sql = "SELECT Max(`id`) FROM `product`;";
$rs = $pdo->query($sql);
if (!$rs) {
    $errorInfo = $pdo->errorInfo();
    echo 'fail: 查询最大ID号失败！ Error: ' . $errorInfo[2];
    exit;
}
$rows = $rs->fetch(PDO::FETCH_ASSOC);
$int = intval($rows['Max(`id`)']) + 1;

if ($Simg['name']) {
    $ext = strrchr($Simg['name'], '.');
    $filename = time() . 'product_' . 's_0' . $int . $ext;
    if (!move_uploaded_file($Simg['tmp_name'], $SImgPath . $filename)) {
        echo 'fail: 小图上传失败';
        exit;
    }
} else {
    $filename = '';
}

if ($Bimg['name']) {
    $Bext = strrchr($Bimg['name'], '.');
    $Bfilename = time() . 'product_' . 'b_0' . $int . $Bext;
    if (!move_uploaded_file($Bimg['tmp_name'], $BImgPath . $Bfilename)) {
        echo 'fail: 大图上传失败';
        exit;
    }
} else {
    $Bfilename = '';
}

// 3 构造SQL语句
$sql = "INSERT INTO `product`(`productname`, `productname_en`, `cate_id`, `Simg`, `Bimg`) VALUES(:productname, :productname_en, :cate_id, :Simg, :Bimg)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':productname', $productname);
$stmt->bindParam(':productname_en', $productname_en);
$stmt->bindParam(':cate_id', $cate_id);
$stmt->bindParam(':Simg', $filename);
$stmt->bindParam(':Bimg', $Bfilename);

// Debug
echo 'Bound Parameters: <br/>';
echo 'productname: ' . $productname . '<br/>';
echo 'productname_en: ' . $productname_en . '<br/>';
echo 'cate_id: ' . $cate_id . '<br/>';
echo 'Simg: ' . $filename . '<br/>';
echo 'Bimg: ' . $Bfilename . '<br/>';

echo '<br/>Result <br/>';
if ($stmt->execute()) {
    echo 'success: 新增成功！';
    header('Location: ../../product_list.php');
    exit;
} else {
    $errorInfo = $stmt->errorInfo();
    echo 'fail: 数据处理失败！ Error: ' . $errorInfo[2];
}
?>
