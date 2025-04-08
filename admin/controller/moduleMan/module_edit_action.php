<?php
// 传值
$id = $_GET['id'];
// 构造查询语句
$sql = "SELECT * FROM `module` WHERE `id`= $id;";
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
    <p class="h2 text-center ">修改分类</p>
    <form action="\admin\controller\moduleMan\module_edit_save.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="moduletitle" class="form-label">一级模块名称</label>
            <input type="text" class="form-control" id="modulename" aria-describedby="modulename" name="module"
                value="<?php echo $row['module']; ?>">
        </div>
        <div class="mb-3">
            <label for="moduletitle" class="form-label">一级模块名称_en</label>
            <input type="text" class="form-control" id="modulename" aria-describedby="modulename" name="module"
                value="<?php echo $row['module_en']; ?>">
        </div>
        <div class="mb-3">
            <label for="moduletitle" class="form-label">排序</label>
            <input type="text" class="form-control" id="orderno" aria-describedby="orderno" name="orderno"
                value="<?php echo $row['orderno']; ?>">
        </div>
        <button type="submit" class="btn btn-danger float-end mt-2">Save</button>
    </form>
</div>
<script>
    var checkValueIndex = $("#module").children("option").length;
    var moduleName = "<?php echo $row['module']; ?>";
    for (var i = 0; i < checkValueIndex; i++) {
        if ($('#module').children("option").eq(i).val() == moduleName) {
            $('#module').children("option").eq(i).attr('selected', true)
                .siblings().attr('selected', false);
        }
    }
    // console.log(moduleName);
</script>