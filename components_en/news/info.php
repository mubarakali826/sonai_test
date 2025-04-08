<?php
$breadcrumbs = [
    ['text' => 'Home', 'url' => './'],
    ['text' => 'News',],
];

@include $componentsPath . "/global/breadcrumb.php"
    ?>


<div class="ts-container-fluid">
    <div class="ts-products  mx-auto mb-10 mb-lg-14">
        <div class="ts-container ">
            <div>
                <div class="row row-cols-sm-2 row-cols-lg-3 mb-12">
                    <?php
                    // 分页功能
                    // condition 1
                    $pageSize = 6; // each page show about 4 rows of info
                    // condition 2
                    if (isset($_GET['page'])) {
                        $curPage = $_GET['page']; // if current page is set, then delivery the page number 
                    } else {
                        $curPage = 1; // default current page;
                    }
                    // condition 3
                    // 需要知道影响的服务器内所有的内容的行数
                    $sqlCount = "SELECT * FROM `news`;";
                    $count = count($pdo->query($sqlCount)->fetchAll(PDO::FETCH_ASSOC)); // 服务器新闻总条数
                    // 步骤二
                    // 当前应当显示那些语句
                    $start = ($curPage - 1) * $pageSize;

                    $sqlCurPage = "SELECT * FROM `news` ORDER BY `intime` DESC LIMIT $start,$pageSize;";

                    $rs = $pdo->prepare($sqlCurPage);
                    $rs->execute();
                    $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC); // 获取到结果集中数据的
                    foreach ($pageRes as $row) {
                        include $componentsPath . '/news/card.php';
                    }
                    ?>
                </div>

                <?php
                include_once $componentsPath . '/news/news_pagination.php'
                    ?>
            </div>
        </div>
    </div>
</div>