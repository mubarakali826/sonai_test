<?php
$admin_path = $_SERVER['DOCUMENT_ROOT'] . "/admin";
$SImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProSimg/';
$BImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProBimg/';
include_once $admin_path . '/controller/conn.php';

// 后台处理数据4步骤

try {
    $pdo->beginTransaction();

    // Core product fields
    $product_code = $_POST['product_code'] ?? '';
    $product_id = $_POST['product_id'] ?? '';
    $main_order_number = $_POST['order_number'] ?? '';
    // echo $main_order_number;
   

    $sonai_ceramic = $_POST['sonai_ceramic'] ?? '';
    $sonai_sintered = $_POST['sonai_sintered'] ?? '';
    $EBC = $_POST['EBC'] ?? '';
    $SBS = $_POST['SBS'] ?? '';
    $Brenta = $_POST['Brenta'] ?? '';

    // 1. Handle image uploads
    $SimgName = $_FILES['Simg']['name'];
    $BimgName = $_FILES['Bimg']['name'];
    $SimgPath = $SImgPath . basename($SimgName);
    $BimgPath = $BImgPath . basename($BimgName);
    move_uploaded_file($_FILES['Simg']['tmp_name'], $SimgPath);
    move_uploaded_file($_FILES['Bimg']['tmp_name'], $BimgPath);

    // 2. Check for duplicate product_code
    $stmt_check = $pdo->prepare("SELECT COUNT(*) FROM product_inquries WHERE product_code = :product_code");
    $stmt_check->execute([':product_code' => $product_code]);
    $exists = $stmt_check->fetchColumn();

    // 3. Insert into product_inquiries only if new product_code
    if (!$exists) {
        $stmt_insert_pi = $pdo->prepare("
            INSERT INTO product_inquries (
                product_code, product_id, orderno,
                sonai_ceramic, sonai_sintered, EBC, SBS, Brenta,
                simg, bimg 
            ) VALUES (
                :product_code, :product_id, :order_number,
                :sonai_ceramic, :sonai_sintered, :EBC, :SBS, :Brenta,
                :simg_path, :bimg_path 
            )
        ");
        $stmt_insert_pi->execute([
            ':product_code' => $product_code,
            ':product_id' => $product_id,
            ':order_number' => $main_order_number,
            ':sonai_ceramic' => $sonai_ceramic,
            ':sonai_sintered' => $sonai_sintered,
            ':EBC' => $EBC,
            ':SBS' => $SBS,
            ':Brenta' => $Brenta,
            ':simg_path' => $SimgName,
            ':bimg_path' => $BimgName
        ]);
    }

    // 4. Insert all details (multiple detail cards)
    $details = $_POST['details'] ?? [];

    $stmt_insert_pd = $pdo->prepare("
        INSERT INTO product_details (
            brand, description, year, front_brake, rear_brake,
            product_id, order_number
        ) VALUES (
            :brand, :description, :year, :front_brake, :rear_brake,
            :product_id, :order_number
        )
    ");

    foreach ($details as $detail) {
        echo $_POST['order_number'];
        $stmt_insert_pd->execute([
            ':brand' => $detail['brand'] ?? '',
            ':description' => $detail['description'] ?? '',
            ':year' => $detail['year'] ?? '',
            ':front_brake' => isset($detail['front_brake']) ? 1 : 0,
            ':rear_brake' => isset($detail['rear_brake']) ? 1 : 0,
            ':product_id' => $product_id,
            ':order_number' => $detail  ['order_number'] ?? '' // Optional: You can allow order number per card
        ]);
    }

    $pdo->commit();
    header('Location: ../../product_inquiry_list.php');
    exit;

} catch (Exception $e) {
    $pdo->rollBack();
    echo 'fail: ' . $e->getMessage();
    exit;
}
?>
