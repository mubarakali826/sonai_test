<?php
// Setup paths and DB connection
$admin_path = $_SERVER['DOCUMENT_ROOT'] . "/admin";
$SImgPath = $_SERVER['DOCUMENT_ROOT'] . '/v2/upProSimg/';
$BImgPath = $_SERVER['DOCUMENT_ROOT'] . '/v2/upProBimg/';
include_once $admin_path . '/controller/conn.php';

// 1. 接收数据
$product_code     = $_POST['product_code'] ?? '';
$product_id       = $_POST['product_id'] ?? '';
$sonai_ceramic    = $_POST['sonai_ceramic'] ?? '';
$sonai_sintered   = $_POST['sonai_sintered'] ?? '';
$EBC              = $_POST['EBC'] ?? '';
$SBS              = $_POST['SBS'] ?? '';
$Brenta           = $_POST['Brenta'] ?? '';
$product_details  = $_POST['product_details'] ?? '';
$details          = $_POST['details'] ?? [];

$Simg = $_FILES['Simg'];
$Bimg = $_FILES['Bimg'];

// 2. 获取最大 ID（用于图片命名）
$sql = "SELECT Max(`id`) FROM `product_inquries`;";
$rs = $pdo->query($sql);
$rows = $rs ? $rs->fetch(PDO::FETCH_ASSOC) : ['Max(`id`)'=>0];
$int = intval($rows['Max(`id`)']) + 1;

// 3. 图片上传处理
$filename = '';
if (!empty($Simg['name'])) {
    $ext = strrchr($Simg['name'], '.');
    $filename = time() . '_s_0' . $int . $ext;
    if (!move_uploaded_file($Simg['tmp_name'], $SImgPath . $filename)) {
        echo 'fail: 小图上传失败'; exit;
    }
}

$Bfilename = '';
if (!empty($Bimg['name'])) {
    $ext = strrchr($Bimg['name'], '.');
    $Bfilename = time() . '_b_0' . $int . $ext;
    if (!move_uploaded_file($Bimg['tmp_name'], $BImgPath . $Bfilename)) {
        echo 'fail: 大图上传失败'; exit;
    }
}

// 4. 插入主表 product_inquries
$sql = "INSERT INTO `product_inquries` 
(`product_code`, `product_id`, `sonai_ceramic`, `sonai_sintered`, `EBC`, `SBS`, `Brenta`, `product_details`, `Simg`, `Bimg`) 
VALUES 
(:product_code, :product_id, :sonai_ceramic, :sonai_sintered, :EBC, :SBS, :Brenta, :product_details, :Simg, :Bimg)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':product_code', $product_code);
$stmt->bindParam(':product_id', $product_id);
$stmt->bindParam(':sonai_ceramic', $sonai_ceramic);
$stmt->bindParam(':sonai_sintered', $sonai_sintered);
$stmt->bindParam(':EBC', $EBC);
$stmt->bindParam(':SBS', $SBS);
$stmt->bindParam(':Brenta', $Brenta);
$stmt->bindParam(':product_details', $product_details);
$stmt->bindParam(':Simg', $filename);
$stmt->bindParam(':Bimg', $Bfilename);

// 5. 执行插入
if ($stmt->execute()) {
    // 获取插入后的 inquiry ID（如果你需要用这个 ID 关联详情）
    $insertedId = $pdo->lastInsertId();

    // 插入 product_details
    $detail_sql = "INSERT INTO `product_details` 
    (`product_id`, `order_number`, `brand`, `description`, `year`, `front_brake`, `rear_brake`) 
    VALUES 
    (:product_id, :order_number, :brand, :description, :year, :front_brake, :rear_brake)";
    $detail_stmt = $pdo->prepare($detail_sql);

    foreach ($details as $detail) {
        $order_number = $detail['order_number'] ?? '';
        $brand        = $detail['brand'] ?? '';
        $description  = $detail['description'] ?? '';
        $year         = $detail['year'] ?? '';
        $front_brake  = isset($detail['front_brake']) ? 1 : 0;
        $rear_brake   = isset($detail['rear_brake']) ? 1 : 0;

        $detail_stmt->bindParam(':product_id', $product_id);
        $detail_stmt->bindParam(':order_number', $order_number);
        $detail_stmt->bindParam(':brand', $brand);
        $detail_stmt->bindParam(':description', $description);
        $detail_stmt->bindParam(':year', $year);
        $detail_stmt->bindParam(':front_brake', $front_brake);
        $detail_stmt->bindParam(':rear_brake', $rear_brake);

        $detail_stmt->execute();
    }

    header('Location: ../../product_inquiry_list.php');
    exit;
} else {
    $errorInfo = $stmt->errorInfo();
    echo 'fail: 数据处理失败！ Error: ' . $errorInfo[2];
}
