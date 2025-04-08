<?php
// 传值
$id = $_GET['id'];
// 构造查询语句
$sql = "SELECT * FROM `product_inquries` WHERE `id`= $id;";
// 执行语句
$res = $pdo->query($sql);
// 确认结构
if (isset($res)) {
    foreach ($res as $row) {
    }
} else {
    echo '没有数据';
    exit;
}
?>
<div>
    <p class="h2 text-center ">修改产品</p>
    <form action="./controller/inquiry/product_edit_save.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="product_code" class="form-label fs-5">产品代码</label>
            <input type="text" class="form-control" id="product_code" aria-describedby="product_code"
                name="product_code" value="<?php echo $row['product_code']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="product_id" class="form-label fs-5">产品编号</label>
            <input type="number" class="form-control" id="product_id" aria-describedby="product_id" name="product_id"
                value="<?php echo $row['product_id']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="sonai_ceramic" class="form-label fs-5">索奈陶瓷</label>
            <input type="text" class="form-control" id="sonai_ceramic" aria-describedby="sonai_ceramic"
                name="sonai_ceramic" value="<?php echo $row['sonai_ceramic']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="sonai_sintered" class="form-label fs-5">索奈烧结</label>
            <input type="text" class="form-control" id="sonai_sintered" aria-describedby="sonai_sintered"
                name="sonai_sintered" value="<?php echo $row['sonai_sintered']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="EBC" class="form-label fs-5">EBC</label>
            <input type="text" class="form-control" id="EBC" aria-describedby="EBC" name="EBC"
                value="<?php echo $row['EBC']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="SBS" class="form-label fs-5">SBS</label>
            <input type="text" class="form-control" id="SBS" aria-describedby="SBS" name="SBS"
                value="<?php echo $row['SBS']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="Brenta" class="form-label fs-5">布伦塔</label>
            <input type="text" class="form-control" id="Brenta" aria-describedby="Brenta" name="Brenta"
                value="<?php echo $row['Brenta']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="product_details" class="form-label fs-5">产品详情</label>
            <textarea rows="5" class="form-control" id="product_details" aria-describedby="product_details"
                name="product_details" required
                placeholder=" _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _"><?php echo $row['product_details']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="formFileS" class="form-label fs-5">上传小图<span class="fs-6"> 建议尺寸为200*200或300*300</span></label>
            <img src="/upProSimg/<?php echo $row['Simg'] ?>" class="rounded mx-auto d-block img-thumbnail" alt="...">
            <input class="form-control mt-3" type="file" id="formFileS" name="Simg">
            <input type="hidden" name="old_img" value="<?php echo $row['Simg'] ?>">
        </div>
        <div class="mb-3">
            <label for="formFileB" class="form-label fs-5">上传大图<span class="fs-6"> 建议尺寸为600*600或800*1000</span></label>
            <img src="/upProBimg/<?php echo $row['Bimg'] ?>" class="rounded mx-auto d-block img-thumbnail" alt="...">
            <input class="form-control mt-3" type="file" id="formFileB" name="Bimg">
            <input type="hidden" name="old_Bimg" value="<?php echo $row['Bimg'] ?>">
        </div>

        <button type="submit" class="btn btn-danger float-end mt-2 mb-5 w-100">提交</button>
    </form>
</div>