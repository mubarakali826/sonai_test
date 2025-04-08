<?php
$sql = "SELECT * FROM `module` ORDER BY `id` ASC";
$res = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<div>
    <p class="h2 text-center ">新增分类</p>
    <form action="\admin\controller\moduleMan\module_new_save.php" method="POST">
        <div class="mb-3">
            <label for="moduletitle" class="form-label">模块名称</label>
            <input type="text" class="form-control" id="module" aria-describedby="module" name="module">
        </div>
        <div class="mb-3">
            <label for="moduletitle" class="form-label">排序</label>
            <input type="text" class="form-control" id="orderno" aria-describedby="orderno" name="orderno" value="5">
        </div>
        <button type="submit" class="btn btn-danger float-end mt-2">Submit</button>
    </form>
</div>