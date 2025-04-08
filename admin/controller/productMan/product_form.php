<div>
    <p class="h2 text-center ">新增产品</p>
    <form action="./controller/productMan/product_new_save.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="producttitle" class="form-label fs-5">产品名称</label>
            <input type="text" class="form-control" id="productname" aria-describedby="productname" name="productname"
                required>
        </div>
        <div class="mb-3">
            <label for="producttitle" class="form-label fs-5">Product en</label>
            <input type="text" class="form-control" id="productname_en" aria-describedby="productname_en"
                name="productname_en" required>
        </div>
        <div class="mb-3">
            <label for="cate_id" class="form-label fs-5">产品分类</label>
            <select type="text" class="form-control" id="cate_id" aria-describedby="cate_id" name="cate_id" required>
                <?php
                $proCate_sql = "SELECT * FROM `cate` ORDER BY `id`";
                $res = $pdo->query($proCate_sql)->fetchAll(PDO::FETCH_ASSOC);
                foreach ($res as $row) {
                    echo '<option value="' . $row['id'] . '">' . $row['catename'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label fs-5">上传小图<span class="fs-6"> 建议尺寸为200*200或300*300</span></label>
            <input class="form-control" type="file" id="formFileS" name="Simg" required>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label fs-5">上传大图<span class="fs-6"> 建议尺寸为600*600或800*1000</span></label>
            <input class="form-control" type="file" id="formFileB" name="Bimg" required>
        </div>

        <button type="submit" class="btn btn-danger float-end mt-2 mb-5 w-100">提交</button>
    </form>
</div>