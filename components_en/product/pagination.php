<?php
// 进行产品分类
$cate_id = isset($_GET['cate_id']) ? $_GET['cate_id'] : 0;
$cate_title = isset($_GET['cate_title']) ? $_GET['cate_title'] : '';
$cate_title_en = isset($_GET['cate_title_en']) ? $_GET['cate_title_en'] : '';

$prev = $curPage - 1;
$prev < 1 ? $prev = 1 : $prev;
?>
<div class="d-flex justify-content-center">
    <div aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item <?= ($curPage == 1) ? 'disabled not-allowed' : '' ?>">
                <?php if ($curPage == 1): ?>
                    <span class="page-link">First</span>
                <?php else: ?>
                    <a class="page-link"
                        href="product-category.php?page=1&cate_id=<?php echo $cate_id; ?>&cate_title=<?php echo urlencode($cate_title); ?>&cate_title_en=<?php echo urlencode($cate_title_en); ?>"
                        aria-label="Previous">
                        <span aria-hidden="true">First</span>
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
                    echo '<li class="page-item"><a class="page-link" href="product-category.php?page=' . $i . '&cate_id=' . $cate_id . '&cate_title=' . urlencode($cate_title) . '&cate_title_en=' . urlencode($cate_title_en) . '">' . $i . '</a></li>';
                }
            }
            ?>
            <li class="page-item <?= ($curPage == $pageCount) ? 'disabled not-allowed' : '' ?>">
                <?php if ($curPage == $pageCount): ?>
                    <span class="page-link">Last</span>
                <?php else: ?>
                    <a class="page-link"
                        href="product-category.php?page=<?php echo $pageCount; ?>&cate_id=<?php echo $cate_id; ?>&cate_title=<?php echo urlencode($cate_title); ?>&cate_title_en=<?php echo urlencode($cate_title_en); ?>"
                        aria-label="Next">
                        <span aria-hidden="true">Last</span>
                    </a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</div>