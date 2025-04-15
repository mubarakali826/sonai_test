<?php
// Load config.php based on environment
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/config.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
} else {
    require_once __DIR__ . '/../../../config.php';
}

// Set admin and DB path
if ($isProduction) {
    $admin_path = $_SERVER['DOCUMENT_ROOT'] . "/admin";
    $baseUrl = '';
    include_once $admin_path . '/controller/conn.php';
} else {
    $admin_path = __DIR__ . '/../../../';
    $baseUrl = '/sonairacing.com250318'; // adjust this to your local folder name
    include_once $admin_path . 'controller/conn.php';
}

// 传值
$id = $_GET['id'];

// 构造查询语句
$sql = "SELECT * FROM `product` WHERE `id`= $id;";
$res = $pdo->query($sql);

// 确认结构
if (isset($res)) {
    foreach ($res as $row) {
        // We'll use this row later in the form
    }
} else {
    echo '没有数据';
    exit;
}
?>
<div>
    <p class="h2 text-center">修改产品</p>
    <form action="./controller/productMan/product_edit_save.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="mb-3">
            <label for="productname" class="form-label fs-5">产品名称</label>
            <input type="text" class="form-control" id="productname" name="productname"
                   value="<?php echo $row['productname']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="productname_en" class="form-label fs-5">Product en</label>
            <input type="text" class="form-control" id="productname_en" name="productname_en"
                   value="<?php echo $row['productname_en']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="cate_id" class="form-label fs-5">产品分类</label>
            <select class="form-control" id="cate_id" name="cate_id" required>
                <?php
                $proCate_sql = "SELECT * FROM `cate` ORDER BY `id`";
                $resCate = $pdo->query($proCate_sql)->fetchAll(PDO::FETCH_ASSOC);
                foreach ($resCate as $rowCate) {
                    $selected = ($rowCate['id'] == $row['cate_id']) ? 'selected' : '';
                    echo '<option value="' . $rowCate['id'] . '" ' . $selected . '>' . $rowCate['catename'] . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="formFileS" class="form-label fs-5">上传小图<span class="fs-6"> 建议尺寸为200*200或300*300</span></label>
            <img src="<?php echo $baseUrl . '/upProSimg/' . $row['Simg']; ?>" class="rounded mx-auto d-block img-thumbnail" alt="小图">
            <input class="form-control mt-3" type="file" id="formFileS" name="Simg">
            <input type="hidden" name="old_img" value="<?php echo $row['Simg'] ?>">
        </div>

        <div class="mb-3">
            <label for="formFileB" class="form-label fs-5">上传大图<span class="fs-6"> 建议尺寸为600*600或800*1000</span></label>
            <img src="<?php echo $baseUrl . '/upProBimg/' . $row['Bimg']; ?>" class="rounded mx-auto d-block img-thumbnail" alt="大图">
            <input class="form-control mt-3" type="file" id="formFileB" name="Bimg">
            <input type="hidden" name="old_Bimg" value="<?php echo $row['Bimg'] ?>">
        </div>

        <button type="submit" class="btn btn-danger float-end mt-2 mb-5 w-100">提交</button>
    </form>
</div>
