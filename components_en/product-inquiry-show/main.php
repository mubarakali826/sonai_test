<div class="ts-sticky-breadcrumb">
    <?php
    // Step 1: Get the product_id from the GET request and fetch data for the product_inquiry
    $id = $_GET['id'];
    $sqlPro = "SELECT * FROM `product_inquries` WHERE `id` = :id";
    $stmt = $pdo->prepare($sqlPro);
    $stmt->execute(['id' => $id]);
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $product_code = isset($res['product_code']) ? $res['product_code'] : null;
    $cate_id = isset($res['cate_id']) ? $res['cate_id'] : false;

    // Breadcrumb navigation
    $breadcrumbs = [
        ['text' => '首页', 'url' => './'],
        ['text' => '产品', 'url' => './products-inquiry.php'],
        ['text' => '产品详情'],
    ];
    include_once $componentsPath . '/global/breadcrumb.php';
    ?>
</div>

<div class="mb-2">
    <?php
    // Step 2: Fetch all products based on category ID
    $sqlCount = "SELECT * FROM `product` WHERE 1";
    if ($cate_id > 0) {
        $sqlCount .= " AND cate_id = :cate_id";
    }
    $sqlCount .= " ORDER BY `orderno` ASC";
    $rs = $pdo->prepare($sqlCount);
    $rs->execute(['cate_id' => $cate_id]);
    $count = $rs->rowCount();
    $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC);

    include_once $componentsPath . '/product-inquiry/products-title-list.php';
    ?>
</div>

<div class="overflow-hidden">
    <?php include_once $componentsPath . '/product-inquiry/search.php'; ?>

    <div class="ts-container-fluid">
        <section class="mb-07" data-aos="fade-up" data-aos-once="true">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <img class="w-100" src="./upProBimg/<?php echo htmlspecialchars($res['Bimg'], ENT_QUOTES, 'UTF-8'); ?>" 
                             alt="<?php echo htmlspecialchars($res['product_details'], ENT_QUOTES, 'UTF-8'); ?>">
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="row gap-5 gap-lg-0">
                <!-- Left Table: Product Summary -->
                <div class="col-lg-4" data-aos="fade-right" data-aos-once="true">
                    <div class="ts-bg-primary py-2 text-center mb-3">
                        <h3 class="text-white mb-0">
                            <?php echo nl2br(htmlspecialchars($res['product_code'], ENT_QUOTES, 'UTF-8')); ?>
                        </h3>
                    </div>

                    <!-- Product Inquiries Details -->
                    <?php
                    $fields = ['sonai_ceramic' => 'Sonal Ceramic', 'sonai_sintered' => 'Sonal Sintered', 
                               'EBC' => 'EBC', 'SBS' => 'SBS', 'Brenta' => 'Brenta'];

                    foreach ($fields as $field => $label) {
                        echo "<div class='row row-cols-2'>
                                <p class='text-center text-black fw-bold mb-0'>$label</p>
                                <p class='text-center fw-bold text-black mb-0'>" . 
                                nl2br(htmlspecialchars($res[$field] ?? '', ENT_QUOTES, 'UTF-8')) . 
                              "</p></div><hr class='ts-hr-line-table my-2'>";
                    }
                    ?>
                </div>

                <!-- Right Table: Product Details -->
                <div class="col-lg-8" data-aos="fade-left" data-aos-once="true">
                    <div class="ts-product-table">
                        <?php
                        // Step 3: Fetch the product_id based on product_code
                        $sqlProductID = "SELECT product_id FROM `product_inquries` WHERE `product_code` = :product_code";
                        $stmtProductID = $pdo->prepare($sqlProductID);
                        $stmtProductID->execute(['product_code' => $product_code]);
                        $product = $stmtProductID->fetch(PDO::FETCH_ASSOC);
                        
                        $product_id = $product['product_id'] ?? null;
                        
                        if ($product_id >= 0) {
                            // Step 4: Fetch product details based on product_id
                            $sqlProductDetails = "SELECT * FROM `product_details` WHERE `product_id` = :product_id ORDER BY `order_number` ASC";
                            $stmtDetails = $pdo->prepare($sqlProductDetails);
                            $stmtDetails->execute(['product_id' => (int)$product_id]);
                            $productDetails = $stmtDetails->fetchAll(PDO::FETCH_ASSOC);

                            if (!empty($productDetails)) {
                                // Display table with multiple entries
                                echo '<table class="js__editable-table">
                                        <thead>
                                            <tr>
                                                <th>Order Number</th>
                                                <th>Brand</th>
                                                <th>Description</th>
                                                <th>Year</th>
                                                <th>Front Brake</th>
                                                <th>Rear Brake</th>
                                            </tr>
                                        </thead>
                                        <tbody>';

                                foreach ($productDetails as $detail) {
                                    echo '<tr class="text-black">
                                            <td class="text-black">' . htmlspecialchars(trim($detail['order_number']), ENT_QUOTES, 'UTF-8') . '</td>
                                            <td class="text-black">' . htmlspecialchars(trim($detail['brand']), ENT_QUOTES, 'UTF-8') . '</td>
                                            <td class="text-black">' . htmlspecialchars(trim($detail['description']), ENT_QUOTES, 'UTF-8') . '</td>
                                            <td class="text-black">' . htmlspecialchars(trim($detail['year']), ENT_QUOTES, 'UTF-8') . '</td>
                                            <td class="text-black">' . ($detail['front_brake'] === '1' ? '<img width="16" src="./assets/icons/tick.svg" alt="Tick">' : 'X') . '</td>
                                            <td class="text-black">' . ($detail['rear_brake'] === '1' ? '<img width="16" src="./assets/icons/tick.svg" alt="Tick">' : 'X') . '</td>
                                          </tr>';
                                }

                                echo '</tbody></table>';
                            } else {
                                echo "<p>No product details found.</p>";
                            }
                        } else {
                            echo "<p>Invalid product code. No matching product found.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
