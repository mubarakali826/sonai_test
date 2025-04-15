<?php
$breadcrumbs = [
    ['text' => t('Home', '首页'), 'url' => './'],
    ['text' => t('News', '新闻')],
];

@include $componentsPath . "/global/breadcrumb.php";
?>

<div class="ts-container-fluid">
    <div class="ts-products mx-auto mb-10 mb-lg-14">
        <div class="ts-container">
            <div>
                <div class="row row-cols-sm-2 row-cols-lg-3 mb-12">
                    <?php
                    $pageSize = 6;
                    $curPage = $_GET['page'] ?? 1;
                    $start = ($curPage - 1) * $pageSize;

                    $sqlCount = "SELECT * FROM `news`;";
                    $count = count($pdo->query($sqlCount)->fetchAll(PDO::FETCH_ASSOC));

                    $sqlCurPage = "SELECT * FROM `news` ORDER BY `intime` DESC LIMIT $start, $pageSize;";
                    $rs = $pdo->prepare($sqlCurPage);
                    $rs->execute();
                    $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($pageRes as $row) {
                        include $componentsPath . '/news/card.php';
                    }
                    ?>
                </div>

                <?php include_once $componentsPath . '/news/pagination.php'; ?>
            </div>
        </div>
    </div>
</div>
