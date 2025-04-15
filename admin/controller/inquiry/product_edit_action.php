<?php
// Load config and database
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/config.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
} else {
    require_once __DIR__ . '/../../../config.php';
}

if ($isProduction) {
    $admin_path = $_SERVER['DOCUMENT_ROOT'] . "/admin";
    include_once $admin_path . '/controller/conn.php';
    $baseUrl = '';
} else {
    $admin_path = __DIR__ . '/../../../';
    include_once $admin_path . 'controller/conn.php';
    $baseUrl = '/sonairacing.com250318';
}

// Get main inquiry
$id = $_GET['id'];
$sql = "SELECT * FROM `product_inquries` WHERE `id` = $id;";
$res = $pdo->query($sql);
if ($res) {
    $row = $res->fetch(PDO::FETCH_ASSOC);
} else {
    echo '没有数据';
    exit;
}

// Get related product details
$details_sql = "SELECT * FROM `product_details` WHERE `product_id` = :product_id";
$stmt = $pdo->prepare($details_sql);
$stmt->bindParam(':product_id', $row['product_id']);
$stmt->execute();
$productDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="ms-sm-auto col-lg-10 px-md-4">
    <p class="h2 text-center">修改产品</p>
    <form action="./controller/inquiry/product_edit_save.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <!-- Main Inquiry Fields -->
        <div class="mb-3">
            <label for="product_code" class="form-label fs-5">产品代码</label>
            <input type="text" class="form-control" name="product_code" value="<?php echo $row['product_code']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="product_id" class="form-label fs-5">产品编号</label>
            <input type="number" class="form-control" name="product_id" value="<?php echo $row['product_id']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label fs-5">索奈陶瓷</label>
            <input type="text" class="form-control" name="sonai_ceramic" value="<?php echo $row['sonai_ceramic']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label fs-5">索奈烧结</label>
            <input type="text" class="form-control" name="sonai_sintered" value="<?php echo $row['sonai_sintered']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label fs-5">EBC</label>
            <input type="text" class="form-control" name="EBC" value="<?php echo $row['EBC']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label fs-5">SBS</label>
            <input type="text" class="form-control" name="SBS" value="<?php echo $row['SBS']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label fs-5">布伦塔</label>
            <input type="text" class="form-control" name="Brenta" value="<?php echo $row['Brenta']; ?>" required>
        </div>
       

        <!-- Image Uploads -->
        <div class="mb-3">
            <label class="form-label fs-5">上传小图 <span class="fs-6">建议尺寸为200x200</span></label>
            <img src="<?php echo $baseUrl . '/upProSimg/' . $row['Simg']; ?>" class="rounded mx-auto d-block img-thumbnail" alt="小图">
            <input class="form-control mt-3" type="file" name="Simg">
            <input type="hidden" name="old_img" value="<?php echo $row['Simg']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label fs-5">上传大图 <span class="fs-6">建议尺寸为600x600</span></label>
            <img src="<?php echo $baseUrl . '/upProBimg/' . $row['Bimg']; ?>" class="rounded mx-auto d-block img-thumbnail" alt="大图">
            <input class="form-control mt-3" type="file" name="Bimg">
            <input type="hidden" name="old_Bimg" value="<?php echo $row['Bimg']; ?>">
        </div>

        <!-- Product Details Blocks -->
        <hr>
        <h4 class="text-center my-4">产品详情列表</h4>
        <?php foreach ($productDetails as $index => $detail): ?>
            <div class="border p-3 mb-4 rounded bg-light">
                <div class="mb-3">
                    <label class="form-label">详情订单编号</label>
                    <input type="number" class="form-control" name="details[<?php echo $index; ?>][order_number]" value="<?php echo $detail['order_number']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">品牌</label>
                    <input type="text" class="form-control" name="details[<?php echo $index; ?>][brand]" value="<?php echo $detail['brand']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">描述</label>
                    <textarea rows="2" class="form-control" name="details[<?php echo $index; ?>][description]" required><?php echo $detail['description']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">年份</label>
                    <input type="number" class="form-control" name="details[<?php echo $index; ?>][year]" value="<?php echo $detail['year']; ?>" required>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="details[<?php echo $index; ?>][front_brake]" value="1" <?php echo $detail['front_brake'] ? 'checked' : ''; ?>>
                    <label class="form-check-label">前刹车</label>
                </div>
                <div class="form-check form-check-inline mb-2">
                    <input class="form-check-input" type="checkbox" name="details[<?php echo $index; ?>][rear_brake]" value="1" <?php echo $detail['rear_brake'] ? 'checked' : ''; ?>>
                    <label class="form-check-label">后刹车</label>
                </div>
            </div>
        <?php endforeach; ?>

        <button type="submit" class="btn btn-danger float-end mt-2 mb-5 w-100">提交</button>
    </form>
</div>
