<div class="table-responsive mb-3">
    <table class="table table-striped table-sm caption-top table-bordered">
        <caption class="table-caption text-center mb-3 mt-2 fs-3">分类列表</caption>
        <thead>
            <tr class="table-dark">
                <th class="col-1">ID</th>
                <th class="col-2">分类名称</th>
                <th class="col-2">分类名称 (英文)</th>
                <th class="col-1">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 构造读取数据列表的SQL语句
            $sql = "SELECT * FROM `cate` ORDER BY `id` ASC";
            $res = $pdo->query($sql);
            // 通过 foreach 从结果及中读取数据形成数组
            // 遍历数组填入html代码
            foreach ($res as $row) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['catename'] . '</td>';
                echo '<td>' . $row['catename_en'] . '</td>';
                echo '<th><a href="./cate_edit.php?id=' . $row['id'] . '">修改 </a>/<a href="./controller/cateMan/cate_delete.php?id=' . $row['id'] . '" onclick="return delConfirm()"> 删除</a></th>';
                echo '</tr>';
            }
            ;
            // 释放内存
            unset($res);
            ?>
        </tbody>
    </table>
</div>
<!-- end of table -->