<?php

$prev = $curPage - 1;
$prev < 1 ? $prev = 1 : $prev;
?>
<div class="row">
    <div aria-label="Page navigation" class="mb-3">
        <ul class="pagination  justify-content-center">
            <li class="page-item">
                <a class="page-link" href="news.php?page=<?php echo $prev; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
        // 分页步骤三：打印页码表
        // 必须要计算出总页数
        $pageCount = ceil($count / $pageSize);
        for ($i = 1; $i <= $pageCount; $i++) {
            if ($curPage == $i) {
                echo '<li class="page-item"><a class="page-link page-link--active" href="#" disabled>' . $i . '</a></li>';
            } else {
                echo '<li class="page-item"><a class="page-link" href="news.php?page=' . $i . '">' . $i . '</a></li>';
            };
        };
        ?>
            <li class="page-item">
                <?php   $next = $curPage + 1;
                    $next > $pageCount ? $next = $pageCount : $next;
            ?>
                <a class="page-link" href="news.php?page=<?php echo $next; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</div>