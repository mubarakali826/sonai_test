<div class="table-responsive mb-3 col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <table class="table table-striped table-sm caption-top table-bordered">
        <caption class="table-caption text-center mb-3 mt-2 fs-3">新闻列表</caption>
        <thead>
            <tr class="table-dark">
                <th class="col-1">ID</th>
                <th class="col-2">标题</th>
                <th class="col-1">分类</th>
                <th class="col-1">作者</th>
                <th class="col-5">内容</th>
                <th class="col-1">日期</th>
                <th class="col-1">操作</th>
            </tr>
        </thead>
        <tbody>


            <?php

      // 分页功能
      // condition 1
      $pageSize = 10;// each page show about 4 rows of info
      // condition 2
      if (isset($_GET['page'])) {
        $curPage = $_GET['page'];// if current page is set, then delivery the page number 
      } else {
        $curPage = 1; // default current page;
      }
      // condition 3
      // 需要知道影响的服务器内所有的内容的行数
      $sqlCount = "SELECT * FROM `news`;";
      $count = count($pdo->query($sqlCount)->fetchAll(PDO::FETCH_ASSOC));// 服务器新闻总条数
      
      // 步骤二
      // 当前应当显示那些语句
      $start = ($curPage - 1) * $pageSize;

      $sqlCurPage = "SELECT * FROM `news` ORDER BY `intime` DESC LIMIT $start,$pageSize;";

      $rs = $pdo->prepare($sqlCurPage);
      $rs->execute();
      $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC);// 获取到结果集中数据的
      // 构造读取数据列表的SQL语句
      


      // 通过 foreach 从结果及中读取数据形成数组
      // 遍历数组填入html代码
      foreach ($pageRes as $row) {
        if ($row['cate_id'] == 1) {
          $catename = '企业新闻';
        } else {
          $catename = '行业新闻';
        }
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $catename . '</td>';
        echo '<td>' . $row['author'] . '</td>';
        // strip_tags 可以用来去除content中的html标签,用来使用富文本编辑器
        // echo '<td>'.strip_tags($row['content']).'</td>';
        echo '<td>' . mb_substr($row['content'], 0, 20, 'utf-8') . '...</td>';
        echo '<td>' . substr($row['intime'], 0, 10) . '</td>';
        echo '<th><a href="./news_edit.php?id=' . $row['id'] . '">修改 </a>/<a href="./controller/newsMan/news_delete.php?id=' . $row['id'] . '" onclick="return delConfirm()""> 删除</a></th>';
        echo '</tr>';
      }
      ;
      // 释放内存
      unset($pageRes);



      ?>
        </tbody>
    </table>
</div>
<!-- end of table -->