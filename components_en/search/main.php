<?php
$search_keyword = isset($_GET['search']) ? htmlspecialchars($_GET['search'], ENT_QUOTES, 'UTF-8') : '';
?>

<div class="shadow-sm pt-2 pb-3 ">
    <div class="ts-container-fluid">
        <h3 class="text-center text-black mb-0">Search Result : <?php echo $search_keyword; ?> </h3>
    </div>
</div>

<?php
// 分页功能
$pageSize = 9; // each page show about 3 rows of info
$curPage = isset($_GET['page']) ? $_GET['page'] : 1; // default current page
$start = ($curPage - 1) * $pageSize;

if (!empty($search_keyword)) {
    $sqlSearch = "SELECT * FROM `product` WHERE productname_en LIKE :keyword OR productname  LIKE :keyword  OR content LIKE :keyword OR productno LIKE :keyword ORDER BY intime DESC, id DESC";
    $stmt = $pdo->prepare($sqlSearch);
    $keyword = '%' . $search_keyword . '%';
    $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
    $stmt->execute();
    $resSearch = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count = count($resSearch);

    $sqlCurPage = "SELECT * FROM `product` WHERE productname_en LIKE :keyword OR productname  LIKE :keyword  OR content LIKE :keyword OR productno LIKE :keyword ORDER BY intime DESC, id DESC LIMIT :start, :pageSize";
    $stmt = $pdo->prepare($sqlCurPage);
    $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
    $stmt->bindParam(':start', $start, PDO::PARAM_INT);
    $stmt->bindParam(':pageSize', $pageSize, PDO::PARAM_INT);
    $stmt->execute();
    $pageRes = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    $sqlCurPage .= " ORDER BY `orderno` ASC LIMIT :start, :pageSize";
    $stmt = $pdo->prepare($sqlCurPage);
    $stmt->bindParam(':start', $start, PDO::PARAM_INT);
    $stmt->bindParam(':pageSize', $pageSize, PDO::PARAM_INT);
    $stmt->execute();
    $pageRes = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<div class="ts-container-fluid my-5">
    <?php if (count($pageRes) > 0) { ?>
    <ul class="list-unstyled d-flex flex-column gap-3">
        <li class="d-flex justify-content-between">
            <h3 class="ts-search-result-item text-black mb-0">Product Application</h3>
            <h3 class="ts-search-result-item text-black mb-0">Time</h3>
        </li>
        <?php
            foreach ($pageRes as $row) {
                echo '
                <li class="d-flex justify-content-between ts-link-hover-primary">
                    <h3 class="ts-search-result-item mb-0"><a class="ts-text-gray-4 text-decoration-none" href="product-detail.php?id=' . $row['id'] . '&search_keyword=' . $row['productname_en'] . '">' . $row['productname_en'] . '</a></h3>
                    <h3 class="ts-search-result-item mb-0">' . mb_substr($row['intime'], 2, 5, 'utf-8') . '</h3>
                </li>';
            }
            ?>
    </ul>
    <?php include $componentsPath . '/search/pagination.php'; ?>
    <?php } else { ?>
    <div class="text-center">
        <h3 class="text-black mb-0">No Products found.</h3>
    </div>
    <?php } ?>
</div>