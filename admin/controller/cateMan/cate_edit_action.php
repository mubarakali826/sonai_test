<?php
// 传值
$id = $_GET['id'];
// 构造查询语句
$sql = "SELECT * FROM `cate` WHERE `id`= $id;";
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
    <form action="./controller/cateMan/cate_edit_save.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">


        <div class="mb-3">
            <label for="catetitle" class="form-label">Name Cn</label>
            <input type="text" class="form-control" id="catename" aria-describedby="catename" name="catename"
                value="<?php echo $row['catename']; ?>">
        </div>
        <div class="mb-3">
            <label for="catetitle" class="form-label">Name en</label>
            <input type="text" class="form-control" id="catename_en" aria-describedby="catename_en" name="catename_en"
                value="<?php echo $row['catename_en']; ?>">
        </div>

        <button type="submit" class="btn btn-danger float-end mt-2 w-100 mb-5">Save</button>
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