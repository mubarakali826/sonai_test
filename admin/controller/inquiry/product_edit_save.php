<?php
$admin_path = $_SERVER['DOCUMENT_ROOT'] . "/admin";
$SImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProSimg/';
$BImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProBimg/';
include_once $admin_path . '/controller/conn.php';

// 后台处理数据4步骤

// 1 接收数据

$product_code = isset($_POST['product_code']) ? $_POST['product_code'] : '';
$product_id = isset($_POST['product_id']) ? $_POST['product_id'] : '';
$sonai_ceramic = isset($_POST['sonai_ceramic']) ? $_POST['sonai_ceramic'] : '';
$sonai_sintered = isset($_POST['sonai_sintered']) ? $_POST['sonai_sintered'] : '';
$EBC = isset($_POST['EBC']) ? $_POST['EBC'] : '';
$SBS = isset($_POST['SBS']) ? $_POST['SBS'] : '';
$Brenta = isset($_POST['Brenta']) ? $_POST['Brenta'] : '';
$product_details = isset($_POST['product_details']) ? $_POST['product_details'] : '';
$Simg = $_FILES['Simg'];
$Bimg = $_FILES['Bimg'];


// 查询最大ID号，在文件名中加入ID号
$sql = "SELECT Max(`id`) FROM `product_inquries`;";
$rs = $pdo->query($sql);
if (!$rs) {
    $errorInfo = $pdo->errorInfo();
    echo 'fail: 查询最大ID号失败！ Error: ' . $errorInfo[2];
    exit;
}
$rows = $rs->fetch(PDO::FETCH_ASSOC);
$int = intval($rows['Max(`id`)']) + 1;

if ($Simg['name']) {
    $ext = strrchr($Simg['name'], '.'); // 截取最后一个点以及后面的内容，得到文件扩展名
    $filename = time() . 'product_' . 's_0' . $int . $ext;
    if (!move_uploaded_file($Simg['tmp_name'], $SImgPath . $filename)) {
        echo 'fail: 小图上传失败';
        exit;
    }
} else {
    $filename = '';
}

if ($Bimg['name']) {
    $Bext = strrchr($Bimg['name'], '.'); // 截取最后一个点以及后面的内容，得到文件扩展名
    $Bfilename = time() . 'product_' . 'b_0' . $int . $Bext;
    if (!move_uploaded_file($Bimg['tmp_name'], $BImgPath . $Bfilename)) {
        echo 'fail: 大图上传失败';
        exit;
    }
} else {
    $Bfilename = '';
}

// 3 第三步： 构造SQL语句，将数据写入数据表
$sql = "UPDATE INTO `product_inquries`(`product_code`, `product_id`, `sonai_ceramic`, `sonai_sintered`, `EBC`, `SBS`, `Brenta`, `product_details` , `Simg`, `Bimg`) VALUES( :product_code, :product_id, :sonai_ceramic, :sonai_sintered, :EBC, :SBS, :Brenta, :product_details , :Simg, :Bimg)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':product_code', $product_code);
$stmt->bindParam(':product_details', $product_details);
$stmt->bindParam(':product_id', $product_id);
$stmt->bindParam(':sonai_ceramic', $sonai_ceramic);
$stmt->bindParam(':sonai_sintered', $sonai_sintered);
$stmt->bindParam(':EBC', $EBC);
$stmt->bindParam(':SBS', $SBS);
$stmt->bindParam(':Brenta', $Brenta);
$stmt->bindParam(':Simg', $filename);
$stmt->bindParam(':Bimg', $Bfilename);

// Print the SQL statement and bound parameters for debugging
echo 'Bound Parameters: <br/>';
echo 'product_code: ' . $product_code . '<br/>';
echo 'product_id: ' . $product_id . '<br/>';
echo 'sonai_ceramic: ' . $sonai_ceramic . '<br/>';
echo 'sonai_sintered: ' . $sonai_sintered . '<br/>';
echo 'EBC: ' . $EBC . '<br/>';
echo 'SBS: ' . $SBS . '<br/>';
echo 'Brenta: ' . $Brenta . '<br/>';
echo 'product_details: ' . $product_details . '<br/>';
echo 'Simg: ' . $filename . '<br/>';
echo 'Bimg: ' . $Bfilename . '<br/>';

// 4. 第四步：将执行结果显示出来
echo '<br/>';
echo 'Result <br/>';
if ($stmt->execute()) {
    echo 'success: 新增成功！';
    header('Location: ../../product_inquiry_list.php');
    exit;
} else {
    $errorInfo = $stmt->errorInfo();
    echo 'fail: 数据处理失败！ Error: ' . $errorInfo[2];
}
?>