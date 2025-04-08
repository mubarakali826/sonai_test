<?php
// 传值
$id = $_GET['id'];
// 构造查询语句
$sql = "SELECT * FROM `admin` WHERE `id`= $id;";
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
    <p class="h2 text-center ">修改用户</p>
    <form action="./controller/userMan/user_edit_save.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="username" class="form-label">用户名</label>
            <input type="text" class="form-control" id="username" aria-describedby="username" name="username"
                value="<?php echo $row['username']; ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">密码</label>
            <input type="text" class="form-control" id="password" aria-describedby="password" name="password"
                value="<?php echo $row['password']; ?>">
        </div>
        <div class="mb-3">
            <label for="flag" class="form-label">权限</label>
            <input type="text" class="form-control" id="flag" aria-describedby="flag" name="flag"
                value="<?php echo $row['flag']; ?>">
        </div>
        <button type="submit" class="btn btn-danger float-end mt-2">保存</button>
    </form>
</div>