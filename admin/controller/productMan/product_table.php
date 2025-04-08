<div class="table-responsive mb-3">
  <table class="table table-light table-hover table-sm caption-top table-bordered">
    <caption class="table-caption text-center mb-3 mt-2 fs-3">产品列表</caption>
    <thead>
      <tr class="table-dark">
        <th class="col-1">ID</th>
        <th class="col-2">产品名称</th>
        <th class="col-2">分类</th>
        <th class="col-2">OEM</th>
        <th class="col-1">排序</th>
        <th class="col-1">小图</th>
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
      $sqlCount = "SELECT * FROM `product`;";
      $count = count($pdo->query($sqlCount)->fetchAll(PDO::FETCH_ASSOC));// 服务器新闻总条数
      
      // 步骤二
      // 当前应当显示那些语句
      $start = ($curPage - 1) * $pageSize;

      $sqlCurPage = "SELECT * FROM `product` ORDER BY `id` DESC LIMIT $start,$pageSize;";

      $rs = $pdo->prepare($sqlCurPage);
      $rs->execute();
      $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC);// 获取到结果集中数据的
      // 构造读取数据列表的SQL语句
      
      // 通过 foreach 从结果及中读取数据形成数组
      // 遍历数组填入html代码
      

      function checkCate($id)
      {
        // 从分类数据库表查找相对应的分类名称
        $sqlCheck = "SELECT * FROM `cate` WHERE `id`=$id;";
        global $pdo;
        $res = $pdo->query($sqlCheck)->fetch(PDO::FETCH_ASSOC);
        return "{$res["module"]}" . "/" . "{$res["catename"]}";
      }
      // // 这里也可以采用连表查询
      // $sqlCurPage= "SELECT p.*,c FROM `product` p ,`cate` c WHERE p.cate_id = c.id  ORDER BY p.orderno DESC LIMIT $start,$pageSize;";
      // 分类显示
      foreach ($pageRes as $row) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['productname'] . '</td>';
        echo '<td>' . checkCate($row['cate_id']) . '</td>';
        echo '<td>' . $row['oem'] . '</td>';
        echo '<td>' . $row['orderno'] . '</td>';
        // strip_tags 可以用来去除content中的html标签,用来使用富文本编辑器
        // echo '<td>'.strip_tags($row['content']).'</td>';
        echo '<td><img src = /upProSimg/' . $row['Simg'] . ' width="100"></td>';
        echo '<td>' . substr($row['intime'], 0, 10) . '</td>';
        echo '<th><a href="./product_edit.php?id=' . $row['id'] . '">修改 </a>/<a href="./controller/productMan/product_delete.php?id=' . $row['id'] . '" onclick="return delConfirm()""> 删除</a></th>';
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