<?php
$base_path = $_SERVER['DOCUMENT_ROOT'] . "";
?>

<div class="table-responsive mb-3">
    <table class="table table-striped table-sm caption-top table-bordered">
        <caption class="table-caption text-center mb-3 mt-2 fs-3">单页列表</caption>
        <thead>
            <tr class="table-dark">
                <th class="col-1">模块名</th>
                <th class="col-5">内容</th>
                <th class="col-1">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Search for all .php files in the base path directory
            $phpFiles = glob($base_path . '/*.php', GLOB_BRACE);

            // Echo the file names of the found files without the .php extension
            foreach ($phpFiles as $file) {
                $filename = pathinfo($file, PATHINFO_FILENAME);

                echo '<tr>';
                echo '<td>' . $filename . '</td>';
                // Assuming $row['content'] is available and relevant
                echo '<td>' . mb_substr($row['content'], 0, 20, 'utf-8') . '...</td>';
                echo '<th><a href="' . $base_path . '/admin/page_edit.php?id=' . $row['id'] . '">修改 </a>/<a href="' . $base_path . '/admin/controller/pageMan/page_delete.php?id=' . $row['id'] . '" onclick="return delConfirm()"> 删除</a></th>';
                echo '</tr>';
            }
            // 释放内存
            unset($res);
            ?>
        </tbody>
    </table>
</div>
<!-- end of table -->