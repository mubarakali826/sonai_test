<div>
    <p class="h2 text-center ">新增新闻</p>
    <form action="./controller/newsMan/news_new_save.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">新闻名称</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="title_en" class="form-label">Title en</label>
            <input type="text" class="form-control" id="title_en" aria-describedby="title_en" name="title_en" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">新闻作者</label>
            <input type="text" class="form-control" id="author" aria-describedby="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="cate_id" class="form-label">新闻名称</label>
            <select type="text" class="form-control" id="cate_id" aria-describedby="cate_id" name="cate_id" required>
                <option value="1">企业新闻</option>
                <option value="2">行业新闻</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">上传小图</label>
            <input class="form-control" type="file" id="formFileB" name="Simg" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">详细内容</label>
            <textarea type="text" class="form-control" id="content" name="content" rows="6" required></textarea>
        </div>
        <div class="mb-3">
            <label for="content_en" class="form-label">Content en</label>
            <textarea type="text" class="form-control" id="content_en" name="content_en" rows="6" required></textarea>
        </div>
        <button type="submit" class="btn btn-danger float-end mt-2 mb-5 w-100">提交</button>
    </form>
</div>