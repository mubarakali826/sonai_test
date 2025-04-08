<div>
    <p class="h2 text-center ">新闻发布</p>
    <form>
    <div class="mb-3">
        <label for="newstitle" class="form-label">新闻标题</label>
        <input type="text" class="form-control" id="newstitle" aria-describedby="newstitle">
    </div>
    <div class="mb-3">
        <label for="newstype" class="form-label">新闻类型</label>
        <select class="form-select" aria-label="news select">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="newsauth" class="form-label">新闻作者</label>
        <input type="text" class="form-control" id="newsauth">
    </div>
    <div class="mb-3">
        <label for="newscontent" class="form-label">新闻内容</label>
        <textarea type="text" class="form-control" id="newscontent"></textarea>
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>