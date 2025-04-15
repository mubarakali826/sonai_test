<?php
include_once __DIR__ . '/../../controller/conn.php';

$cate_id = isset($_GET['cate_id']) && $_GET['cate_id'] !== 'all' ? $_GET['cate_id'] : '';
$product_id = isset($_GET['product_id']) ? trim($_GET['product_id']) : '';

$pageSize = 8;
$curPage = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($curPage - 1) * $pageSize;

$params = [];
$whereClauses = [];

if ($cate_id) {
    $whereClauses[] = "`cate_id` = :cate_id";
    $params[':cate_id'] = $cate_id;
}

if ($product_id) {
    $whereClauses[] = "`product_code` LIKE :product_code";
    $params[':product_code'] = "%{$product_id}%";
}

$whereSQL = $whereClauses ? 'WHERE ' . implode(' AND ', $whereClauses) : '';

$countSQL = "SELECT COUNT(*) FROM `product_inquries` $whereSQL";
$countStmt = $pdo->prepare($countSQL);
$countStmt->execute($params);
$count = $countStmt->fetchColumn();

$sql = "SELECT * FROM `product_inquries` $whereSQL ORDER BY `orderno` ASC LIMIT :start, :pageSize";
$stmt = $pdo->prepare($sql);
foreach ($params as $key => $val) {
    $stmt->bindValue($key, $val);
}
$stmt->bindValue(':start', $start, PDO::PARAM_INT);
$stmt->bindValue(':pageSize', $pageSize, PDO::PARAM_INT);
$stmt->execute();
$pageRes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="ts-sticky-breadcrumb">
    <?php
    $cate_title = $_GET['cate_title'] ?? null;
    $breadcrumbs = [
        ['text' => t('Home', '首页'), 'url' => './'],
        ['text' => t('Product', '产品')],
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
                      

                        if (count($pageRes) > 0) {
                            foreach ($pageRes as $row) {
                                include $componentsPath . '/product-inquiry/card.php';
                            }
                        } else {
                            echo '<div><p>' . t('No products found.', '未找到任何产品。') .
                                ' <a href="./products-inquiry.php">' . t('Back to products inquiry', '返回产品询价') . '</a></p></div>';
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
