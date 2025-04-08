<div>
    <h2 class="h2 text-center ">添加分类</h2>
    <form action="./controller/cateMan/cate_new_save.php" method="POST">
        <div class="mb-3">
            <label for="catetitle" class="form-label">名称 (中文)</label>
            <input type="text" class="form-control" id="title" aria-describedby="catename" name="catename">
        </div>
        <div class="mb-3">
            <label for="catetitle" class="form-label">名称 (英文)</label>
            <input type="text" class="form-control" id="title" aria-describedby="catename_en" name="catename_en">
        </div>
        <button type="submit" class="btn btn-danger float-end mt-2 mb-5 w-100">提交</button>
    </form>
</div>