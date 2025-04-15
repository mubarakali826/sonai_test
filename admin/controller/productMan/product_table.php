<div class="table-responsive mb-3 col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <table class="table table-light table-hover table-sm caption-top table-bordered">
    <caption class="table-caption text-center mb-3 mt-2 fs-3">产品列表</caption>
    <thead>
      <tr class="table-dark">
        <th class="col-1">ID</th>
        <th class="col-2">产品名称</th>
        <th class="col-2">分类</th>
        <th class="col-1">排序</th>
        <th class="col-1">小图</th>
        <th class="col-1">日期</th>
        <th class="col-2">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $pageSize = 10;
      $curPage = isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0 
          ? (int)$_GET['page'] 
          : 1;

      $sqlCount = "SELECT COUNT(*) FROM `product`;";
      $count = $pdo->query($sqlCount)->fetchColumn();

      $start = ($curPage - 1) * $pageSize;

      $sqlCurPage = "SELECT * FROM `product` ORDER BY `id` DESC LIMIT :start, :pageSize;";
      $stmt = $pdo->prepare($sqlCurPage);
      $stmt->bindValue(':start', $start, PDO::PARAM_INT);
      $stmt->bindValue(':pageSize', $pageSize, PDO::PARAM_INT);
      $stmt->execute();
      $pageRes = $stmt->fetchAll(PDO::FETCH_ASSOC);

      function checkCate($id, $pdo)
      {
        if (!is_numeric($id)) {
          return "未知分类";
        }

        $stmt = $pdo->prepare("SELECT `module`, `catename` FROM `cate` WHERE `id` = :id LIMIT 1;");
        $stmt->execute(['id' => $id]);
        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        return $res ? htmlspecialchars($res["module"] . "/" . $res["catename"]) : "未知分类";
      }

      foreach ($pageRes as $row):
      ?>
        <tr>
          <td><?= htmlspecialchars($row['id']) ?></td>
          <td><?= htmlspecialchars($row['productname']) ?></td>
          <td><?= checkCate($row['cate_id'], $pdo) ?></td>
          <td><?= htmlspecialchars($row['orderno']) ?></td>
          <td><img src="../upProSimg/<?= $row['Simg'] ? htmlspecialchars($row['Simg']) : 'no thumbnail' ?>" width="100"></td>
          <td><?= htmlspecialchars(substr($row['intime'], 0, 10)) ?></td>
          <td>
            <a href="./product_edit.php?id=<?= urlencode($row['id']) ?>">修改</a> /
            <a href="./controller/productMan/product_delete.php?id=<?= urlencode($row['id']) ?>" onclick="return confirm('确认删除该产品吗？');">删除</a>
          </td>
        </tr>
      <?php
      endforeach;
      unset($pageRes);
      ?>
    </tbody>
  </table>
</div>
