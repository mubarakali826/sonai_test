<?php
// 传值
$id = $_GET['id'];
// 构造查询语句
$sql = "SELECT * FROM `news` WHERE `id`= $id;";
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
    <p class="h2 text-center ">修改新闻</p>
    <form action="./controller/newsMan/news_edit_save.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="newstitle" class="form-label">新闻名称</label>
            <input type="text" class="form-control" id="title" aria-describedby="newstitle" name="title"
                value="<?php echo $row['title']; ?>">
        </div>
        <div class="mb-3">
            <label for="newstitle" class="form-label">title</label>
            <input type="text" class="form-control" id="title_en" aria-describedby="newstitle_en" name="title_en"
                value="<?php echo $row['title_en']; ?>">
        </div>
        <div class="mb-3">
            <label for="newstitle" class="form-label">新闻分类</label>
            <select type="text" class="form-control" id="cate_id" aria-describedby="cate_id" name="cate_id">
                <option value="1">企业新闻</option>
                <option value="2">行业新闻</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="newstitle" class="form-label">作者</label>
            <input type="text" class="form-control" id="author" aria-describedby="author" name="author"
                value="<?php echo $row['author']; ?>">
        </div>
        <div class="mb-3">
            <label for="newstitle" class="form-label">author en</label>
            <input type="text" class="form-control" id="author_en" aria-describedby="author_en" name="author_en"
                value="<?php echo $row['author_en']; ?>">
        </div>
        <div class="mb-3">
            <label for="newscontent" class="form-label">详细内容</label>
            <textarea type="text" class="form-control" id="content" name="content"
                style="height: 300px;"><?php echo $row['content']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="newscontent" class="form-label">Content</label>
            <textarea type="text" class="form-control" id="content_en" name="content_en"
                style="height: 300px;"><?php echo $row['content_en']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">上传小图</label>
            <img src="../../../upNewsImg/<?php echo $row['Simg'] ?>" class="rounded mx-auto d-block img-thumbnail"
                alt="...">
            <input class="form-control mt-3" type="file" id="formFileS" name="Simg">
            <input type="hidden" name="old_img" value="<?php echo $row['Simg'] ?>">
        </div>
        <button type="submit" class="btn btn-danger float-end mt-2">Save</button>
    </form>
    <script>
        var checkValueIndex = $("#cate_id").children("option").length;
        for (var i = 0; i < checkValueIndex; i++) {
            if ($('#cate_id').children("option").eq(i).val() == <?php echo $row['cate_id']; ?>) {
                $('#cate_id').children("option").eq(i).attr('selected', true)
                    .siblings().attr('selected', false);
            }
        }
    </script>
</div>