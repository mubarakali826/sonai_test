<?php
// 传值
$id = $_GET['id'];
// 构造查询语句
$sql = "SELECT * FROM `board` WHERE `id`= $id;";
// 执行语句
$res = $pdo->query($sql);
// 确认结构
if (isset($res)) {
    foreach ($res as $row) {
    }
} else {
    echo '没有数据';
    exit;
}

?>
<div>
    <p class="h2 text-center ">修改单页</p>
    <form action="\admin\controller\pageMan\page_edit_save.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="newstitle" class="form-label">单页名称</label>
            <input type="text" class="form-control" id="title" aria-describedby="newstitle" name="boardname"
                value="<?php echo $row['boardname']; ?>">
        </div>
        <div class="mb-3">
            <label for="newscontent" class="form-label">详细内容</label>
            <textarea type="text" class="form-control" id="content" name="content"
                style="height: 300px;"><?php echo $row['content']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-danger float-end mt-2">Save</button>
    </form>
</div>