<?php
// 进行产品分类
$cate_id = isset($_GET['cate_id']) ? $_GET['cate_id'] : false;
$productsPage = $cate_id;
?>

<?php
// 分页功能
$pageSize = 8;

if (isset($_GET['page'])) {
    $curPage = $_GET['page'];
} else {
    $curPage = 1;
}
$start = ($curPage - 1) * $pageSize;

if (isset($_GET['search'])) {
    $sh_keywords = $_GET['search'];
    $sqlSearch = "SELECT * FROM `product` WHERE productname LIKE '%$sh_keywords%' OR content LIKE '%$sh_keywords%' OR productno LIKE '%$sh_keywords%' ORDER BY intime DESC, id DESC";
    $resSearch = $pdo->query($sqlSearch)->fetchAll(PDO::FETCH_ASSOC);
    $count = count($resSearch);
    $sqlCurPage = "SELECT * FROM `product` WHERE productname LIKE '%$sh_keywords%' OR content LIKE '%$sh_keywords%' OR productno LIKE '%$sh_keywords%' ORDER BY intime DESC, id DESC LIMIT $start, $pageSize;";
    $rs = $pdo->prepare($sqlCurPage);
    $rs->execute();
    $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sqlCount = "SELECT * FROM `product` WHERE 1";
    if ($cate_id > 0) {
        $sqlCount .= " AND cate_id=$cate_id";
    }
    $sqlCount .= " ORDER BY `orderno` ASC";
    $count = count($pdo->query($sqlCount)->fetchAll(PDO::FETCH_ASSOC));

    $sqlCurPage = "SELECT * FROM `product` WHERE 1";
    if ($cate_id > 0) {
        $sqlCurPage .= " AND cate_id=$cate_id";
    }
    $sqlCurPage .= " ORDER BY `orderno` ASC LIMIT $start, $pageSize;";
    $rs = $pdo->prepare($sqlCurPage);
    $rs->execute();
    $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC);
}
?>

<div>
    <?php
    $cate_title = $_GET['cate_title'] ?? null;

    if ($cate_title) {
        $breadcrumbs = [
            ['text' => t('Home', '首页'), 'url' => './'],
            ['text' => t('Product', '产品'), 'url' => './product-classification.php'],
            ['text' => $cate_title],
        ];
    } else {
        $breadcrumbs = [
            ['text' => t('Home', '首页'), 'url' => './'],
            ['text' => t('Product', '产品'), 'url' => './product-classification.php'],
        ];
    }

    include_once $componentsPath . '/global/breadcrumb.php';
    ?>
</div>

<div class="ts-dropwon-products <?= $cate_id ? 'd-none' : 'd-block' ?>">
    <?php include_once $componentsPath . '/product/classification.php'; ?>
</div>
