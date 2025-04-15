<form id="search-form" action="./products-inquiry.php" method="get" class="py-3 px-5">
    <div class="row g-3 align-items-end">
        <div class="col-md-4">
            <label for="product-select" class="form-label"><?= t('Select Category', '选择分类') ?></label>
            <select class="form-select ts-product-select" aria-label="Product select menu" name="cate_id" id="product-select">
                <option value="all"><?= t('All', '所有产品') ?></option>
                <?php
                try {
                    $sql = "SELECT * FROM `productmodals`";
                    $stmt = $pdo->query($sql);
                    $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $displayedBrands = [];

                    foreach ($brands as $brand) {
                        if (!in_array($brand['product_name'], $displayedBrands)) {
                            $displayedBrands[] = $brand['product_name'];
                            $selected = ($brand['value'] == $cate_id) ? 'selected' : '';
                            ?>
                            <option value="<?= htmlspecialchars($brand['value']) ?>" <?= $selected ?>>
                                <?= htmlspecialchars($brand['product_name']) ?>
                            </option>
                            <?php
                        }
                    }
                } catch (PDOException $e) {
                    echo "<option disabled>DB Error</option>";
                }
                ?>
            </select>
        </div>

        <div class="col-md-4">
            <label for="product-search" class="form-label"><?= t('Search Product', '搜索产品') ?></label>
            <input type="text" id="product-search" class="form-control" placeholder="<?= t('Search by product code', '按产品代码搜索') ?>" name="product_id"
                   value="<?= htmlspecialchars($product_id) ?>">
        </div>

        <div class="col-md-4 d-flex justify-content-md-end">
            <button type="submit"
                    class="btn ts-btn-primary fw-bold px-5 d-flex align-items-center gap-2 w-100 w-md-auto justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="12.772" height="12.769"
                     viewBox="0 0 12.772 12.769">
                    <path d="M9.483,10.682a5.93,5.93,0,1,1,1.2-1.2l1.843,1.843a.847.847,0,0,1-1.2,1.2Zm-3.552-.514A4.237,4.237,0,1,0,1.695,5.931,4.237,4.237,0,0,0,5.931,10.168Z"
                          fill="#fff"/>
                </svg>
                <?= t('Search', '搜索') ?>
            </button>
        </div>
    </div>
</form>
