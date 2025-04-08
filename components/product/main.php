<?php
// 进行产品分类
$cate_id = isset($_GET['cate_id']) ? $_GET['cate_id'] : false;
$productsPage = $cate_id;
?>


<?php
// 分页功能
// condition 1
$pageSize = 8; // each page show about 3 rows of info
// condition 2
if (isset($_GET['page'])) {
    $curPage = $_GET['page']; // if current page is set, then delivery the page number 
} else {
    $curPage = 1; // default current page;
}
$start = ($curPage - 1) * $pageSize;
// condition 3
// 需要知道影响的服务器内所有的内容的行数
if (isset($_GET['search'])) {
    $sh_keywords = $_GET['search'];
    $sqlSearch = "SELECT * FROM `product` WHERE productname LIKE  '%$sh_keywords%' or content LIKE '%$sh_keywords%' or productno like '%$sh_keywords%' ORDER BY intime DESC,id DESC";
    $resSearch = $pdo->query($sqlSearch)->fetchAll(PDO::FETCH_ASSOC);
    $count = count($resSearch);
    $sqlCurPage = "SELECT * FROM `product` WHERE productname LIKE  '%$sh_keywords%' or content LIKE '%$sh_keywords%' or productno like '%$sh_keywords%' ORDER BY intime DESC,id DESC LIMIT $start,$pageSize;";
    $rs = $pdo->prepare($sqlCurPage);
    $rs->execute();
    $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC); // 获取到结果集中数据的

} else {
    $sqlCount = "SELECT * FROM `product` WHERE 1";
    if ($cate_id > 0) {
        $sqlCount .= " AND cate_id=$cate_id";
    }
    $sqlCount .= " ORDER BY `orderno` ASC";
    $count = count($pdo->query($sqlCount)->fetchAll(PDO::FETCH_ASSOC)); // 服务器产品总条数
    $sqlCurPage = "SELECT * FROM `product` WHERE 1";
    if ($cate_id > 0) {
        $sqlCurPage .= " AND cate_id=$cate_id";
    }
    $sqlCurPage .= " ORDER BY `orderno` ASC LIMIT $start,$pageSize;";
    $rs = $pdo->prepare($sqlCurPage);
    $rs->execute();
    $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC); // 获取到结果集中数据的
}
?>


<div class="ts-sticky-breadcrumb  ">
    <?php
    $cate_title = $_GET['cate_title'];
    if (isset($cate_title)) {
        $breadcrumbs = [
            ['text' => '首页', 'url' => './'],
            ['text' => '产品', 'url' => './product-classification.php'],
            ['text' => $cate_title,],
        ];
    } else {
        $breadcrumbs = [
            ['text' => '首页', 'url' => './'],
            ['text' => '产品分类', 'url' => './product-classification.php'],
        ];
    }

    include_once $componentsPath . '/global/breadcrumb.php';
    ?>

    <div class="ts-dropwon-products <?php echo $cate_id ? 'd-none' : 'd-block' ?>">
        <?php include_once $componentsPath . '/product/classification.php' ?>
    </div>
    <?php include_once $componentsPath . '/product/products-title-list.php' ?>
</div>


<div class="ts-products-list-wrapper pt-5">
    <div class="ts-container-fluid">
        <div class="ts-products  mx-auto mb-10 mb-lg-14">
            <div class="ts-container ">
                <div>
                    <div class="ts-product-grid mb-12 pt-4">
                        <?php
                        if (isset($_GET['search'])) {
                            echo '
                            <div>
                                <p>您搜索的关键字为：' . $sh_keywords . '    ,结果如下</p>
                            </div>
                           ';
                        }
                        foreach ($pageRes as $row) {
                            if ($cate_id) {
                                include $componentsPath . '/product/card.php';

                            }
                        }
                        ?>

                    </div>
                    <?php

                    // if ($cate_id) {
                    include $componentsPath . '/product/pagination.php'
                        // }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>