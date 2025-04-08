<?php
// 进行产品分类
$cate_id = isset($_GET['cate_id']) ? $_GET['cate_id'] : 0;
?>
<?php

$prev = $curPage - 1;
$prev < 1 ? $prev = 1 : $prev;
?>
<div class="d-flex justify-content-center">
    <div aria-label="Page navigation">
        <ul class="pagination  justify-content-center">
            <li class="page-item  <?= ($curPage == 1) ? 'disabled not-allowed' : '' ?>">
                <?php if ($curPage == 1): ?>
                <span class="page-link">首页</span>
                <?php else: ?>
                <a class="page-link" href="./products-inquiry.php?page=1" aria-label="Previous">
                    <span aria-hidden="true">首页</span>
                </a>
                <?php endif; ?>
            </li>
            <?php
            // 分页步骤三：打印页码表
            // 必须要计算出总页数
            $pageCount = ceil($count / $pageSize);

            $range = 2;
            for ($i = max(1, $curPage - $range); $i <= min($pageCount, $curPage + $range); $i++) {
                if ($curPage == $i) {
                    echo '<li class="page-item"><a class="page-link page-link--active" href="#" disabled>' . $i . '</a></li>';
                } else {
                    echo '<li class="page-item"><a class="page-link" href="./products-inquiry.php?page=' . $i . '&cate_id=' . $cate_id . '">' . $i . '</a></li>';
                }
                ;
            }
            ;
            ?>
            <li class="page-item <?= ($curPage == $pageCount) ? 'disabled not-allowed' : '' ?>">
                <?php if ($curPage == $pageCount): ?>
                <span class="page-link">尾页</span>
                <?php else: ?>
                <a class="page-link"
                    href="./products-inquiry.php?page=<?php echo $pageCount; ?>&cate_id=<?php echo $cate_id ?>"
                    aria-label="Next">
                    <span aria-hidden="true">尾页</span>
                </a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</div>