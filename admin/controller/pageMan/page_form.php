<div>
    <p class="h2 text-center ">新增单页</p>
    <form action="\admin\controller\pageMan\page_new_save.php" method="POST">
        <div class="mb-3">
            <label for="boardname" class="form-label">单页名称</label>
            <input type="text" class="form-control" id="boardname" aria-describedby="boardname" name="boardname">
        </div>
        <div class="mb-3">
            <label for="newscontent" class="form-label">详细内容</label>
            <textarea type="text" class="form-control" id="content" name="content" style="height: 300px;"></textarea>
        </div>
        <button type="submit" class="btn btn-danger float-end mt-2">Submit</button>
    </form>
</div>