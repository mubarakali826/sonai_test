<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <p class="h2 text-center">新增用户</p>
    <form action="./controller/userMan/user_new_save.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">用户名</label>
            <input type="text" class="form-control" id="username" aria-describedby="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">密码</label>
            <input type="password" class="form-control" id="password" aria-describedby="password" name="password"
                required>
        </div>
        <div class="mb-3">
            <label for="flag" class="form-label">权限</label>
            <input type="text" class="form-control" id="flag" aria-describedby="flag" name="flag" required>
        </div>
        <button type="submit" class="btn btn-danger float-end mt-2">Submit</button>
    </form>
</div>