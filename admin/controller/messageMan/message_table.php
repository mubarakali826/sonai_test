<div class="table-responsive mb-3">
  <table class="table table-striped table-sm caption-top table-bordered">
    <caption class="table-caption text-center mb-3 mt-2 fs-3">分类列表</caption>
    <thead>
      <tr class="table-dark">
        <th class="col-1">ID</th>
        <th class="col-2">姓名</th>
        <th class="col-2">邮箱</th>
        <th class="col-4">留言</th>
        <th class="col-2">时间</th>
        <th class="col-1">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // 构造读取数据列表的SQL语句
      $sql = "SELECT * FROM `guestbook`;";
      $res = $pdo->query($sql);
        // 通过 foreach 从结果及中读取数据形成数组
      // 遍历数组填入html代码
      foreach( $res as $row){
        echo '<tr>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>'.$row['content'].'</td>';
        echo '<td>'.$row['intime'].'</td>';
        // strip_tags 可以用来去除content中的html标签
        // echo '<td>'.strip_tags($row['content']).'</td>';
        // echo '<td>'.mb_substr($row['content'],0,20,'utf-8').'...</td>';
        echo '<th><a href="\admin\controller\cateMan\cate_delete.php?id='.$row['id'].'" onclick="return delConfirm()"> 删除</a></th>';
        echo '</tr>';
      };
      // 释放内存
      unset($res);
      ?>
    </tbody>
  </table>
</div>
<!-- end of table -->