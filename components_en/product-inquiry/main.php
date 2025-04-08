<?php
$cate_id = isset($_GET['cate_id']) ? $_GET['cate_id'] : false;
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : false;

// Remove + characters and replace with empty string
if ($product_id !== false) {
    $product_id = str_replace('+', '', $product_id);
}
// Validate and sanitize input (optional but recommended)
$cate_id = htmlspecialchars($cate_id, ENT_QUOTES, 'UTF-8');
$product_id = htmlspecialchars($product_id, ENT_QUOTES, 'UTF-8');
$productsPage = $cate_id;


// 分页功能
$pageSize = 8; // 每页显示8个产品
$curPage = isset($_GET['page']) ? $_GET['page'] : 1; // 默认当前页
$start = ($curPage - 1) * $pageSize;


if (!empty($cate_id) && !empty($product_id)) {
    // SQL query to fetch products within cate_id and matching product_id
    $sql = "SELECT * FROM `product_inquries` WHERE $cate_id LIKE  '%$product_id%'";
    // $sql = "SELECT * FROM `product` WHERE 'Sonai Ceramic' LIKE  'YSD00175'";
    $stmt = $pdo->prepare($sql);

    // Execute statement
    $stmt->execute();
    $pageRes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Count the number of products
    $count = count($pageRes);
} else {
    // 如果没有 cate_id 和 product_id，则显示所有产品
    $sqlCount = "SELECT * FROM `product_inquries` ORDER BY `orderno` ASC";
    $count = count($pdo->query($sqlCount)->fetchAll(PDO::FETCH_ASSOC));

    $sqlCurPage = "SELECT * FROM `product_inquries` ORDER BY `orderno` ASC LIMIT :start, :pageSize";
    $stmt = $pdo->prepare($sqlCurPage);
    $stmt->bindParam(':start', $start, PDO::PARAM_INT);
    $stmt->bindParam(':pageSize', $pageSize, PDO::PARAM_INT);
    $stmt->execute();
    $pageRes = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<div class="ts-sticky-breadcrumb">
    <?php
    $cate_title = isset($_GET['cate_title']) ? $_GET['cate_title'] : null;
    $breadcrumbs = [
        ['text' => 'Home', 'url' => './'],
        ['text' => 'Product'],
    ];
    if ($cate_title) {
        $breadcrumbs[] = ['text' => $cate_title];
    }
    include_once $componentsPath . '/global/breadcrumb.php';
    ?>

</div>
<?php include_once $componentsPath . '/product-inquiry/search.php'; ?>

<div class="ts-products-list-wrapper pt-5">
    <div class="ts-container-fluid">
        <div class="ts-products mx-auto mb-10 mb-lg-14">
            <div class="ts-container">
                <div>
                    <div class="ts-product-grid mb-12 pt-4">
                        <?php
                        if (isset($_GET['search'])) {
                            echo '<div><p>您搜索的关键字为：' . htmlspecialchars($sh_keywords) . '，结果如下</p></div>';
                        }

                        if (count($pageRes) > 0) {
                            foreach ($pageRes as $row) {
                                include $componentsPath . '/product-inquiry/card.php';
                            }
                        } else {
                            echo '<div><p>No products found. <a href="./products-inquiry.php">Back to products inquiry</a></p></div>';
                        }
                        ?>
                    </div>
                    <?php
                    if ($count > 1) {
                        include $componentsPath . '/product-inquiry/pagination.php';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>