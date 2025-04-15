<div class="table-responsive mb-3 col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <table class="table table-striped table-sm caption-top table-bordered">
        <caption class="table-caption text-center mb-3 mt-2 fs-3">Contact Form Submissions</caption>
        <thead>
            <tr class="table-dark">
                <th class="col-1">ID</th>
                <th class="col-2">Name</th>
               
                <th class="col-3">Email</th>
                <th class="col-4">Message</th>
                <th class="col-2">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 构造读取数据列表的SQL语句
            $sql = "SELECT `id`, `name`,  `email`, `message`, `created_at` FROM `contact` ORDER BY `id` ASC";
            $res = $pdo->query($sql);
            // 遍历数组填入html代码
            foreach ($res as $row) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                echo '<td>' . htmlspecialchars($row['name']) . '</td>';
                echo '<td>' . htmlspecialchars($row['email']) . '</td>';
                echo '<td>' . htmlspecialchars($row['message']) . '</td>';
                echo '<td>' . htmlspecialchars($row['created_at']) . '</td>';
                echo '</tr>';
            }
            // 释放内存
            unset($res);
            ?>
        </tbody>
    </table>
</div>
<!-- end of table -->