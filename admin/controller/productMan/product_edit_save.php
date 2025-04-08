<?php
$admin_path = $_SERVER['DOCUMENT_ROOT'] . "/admin";
$SImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProSimg/';
$BImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProBimg/';
include_once $admin_path . '/controller/conn.php';

// 后台处理数据4步骤

// 1 接收数据
$id = $_POST['id'];
$productname = isset($_POST['productname']) ? $_POST['productname'] : '';
$productname_en = isset($_POST['productname_en']) ? $_POST['productname_en'] : '';
$cate_id = isset($_POST['cate_id']) ? $_POST['cate_id'] : '';
$Simg = $_FILES['Simg'];
$Bimg = $_FILES['Bimg'];

// 处理小图上传
if ($Simg['name']) {
    $ext = strrchr($Simg['name'], '.'); // 截取最后一个点以及后面的内容，得到文件扩展名
    $filename = time() . 'product_' . 's_0' . $id . $ext;
    if (!move_uploaded_file($Simg['tmp_name'], $SImgPath . $filename)) {
        echo 'fail: 小图上传失败';
        exit;
    }
    $old_img = $_POST['old_img'];
    if (strlen($old_img) > 1) {
        unlink($SImgPath . $old_img);
    }
} else {
    $filename = $_POST['old_img'];
}

// 处理大图上传
if ($Bimg['name']) {
    $Bext = strrchr($Bimg['name'], '.'); // 截取最后一个点以及后面的内容，得到文件扩展名
    $Bfilename = time() . 'product_' . 'b_0' . $id . $Bext;
    if (!move_uploaded_file($Bimg['tmp_name'], $BImgPath . $Bfilename)) {
        echo 'fail: 大图上传失败';
        exit;
    }
    $old_Bimg = $_POST['old_Bimg'];
    if (strlen($old_Bimg) > 1) {
        unlink($BImgPath . $old_Bimg);
    }
} else {
    $Bfilename = $_POST['old_Bimg'];
}

// 3 第三步： 构造SQL语句，将数据写入数据表
$sql = "UPDATE `product` SET `productname` = :productname, `productname_en` = :productname_en, `cate_id` = :cate_id, `Simg` = :Simg, `Bimg` = :Bimg WHERE `id` = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':productname', $productname);
$stmt->bindParam(':productname_en', $productname_en);
$stmt->bindParam(':cate_id', $cate_id);
$stmt->bindParam(':Simg', $filename);
$stmt->bindParam(':Bimg', $Bfilename);
$stmt->bindParam(':id', $id);

// Print the SQL statement and bound parameters for debugging
echo 'Bound Parameters: <br/>';
echo 'productname: ' . $productname . '<br/>';
echo 'productname_en: ' . $productname_en . '<br/>';
echo 'cate_id: ' . $cate_id . '<br/>';
echo 'Simg: ' . $filename . '<br/>';
echo 'Bimg: ' . $Bfilename . '<br/>';

// 4. 第四步：将执行结果显示出来
echo '<br/>';
echo 'Result <br/>';
if ($stmt->execute()) {
    echo 'success: 修改成功！';
    header('Location: ../../product_list.php');
    exit;
} else {
    $errorInfo = $stmt->errorInfo();
    echo 'fail: 数据处理失败！ Error: ' . $errorInfo[2];
}
?>