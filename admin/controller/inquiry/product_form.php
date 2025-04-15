<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <p class="h2 text-center">产品查询</p>
    <form action="./controller/inquiry/product_new_save.php" method="POST" enctype="multipart/form-data" id="productForm">
        
        <!-- Main Order Number -->
        <div class="mb-3">
            <label for="order_number" class="form-label fs-5">订单编号</label>
            <input type="number" class="form-control" id="order_number" name="order_number" required>
        </div>

        <!-- Product Info -->
        <div class="mb-3">
            <label for="product_code" class="form-label fs-5">产品代码</label>
            <input type="text" class="form-control" id="product_code" name="product_code" required>
        </div>
        <div class="mb-3">
            <label for="product_id" class="form-label fs-5">产品编号</label>
            <input type="number" class="form-control" id="product_id" name="product_id" required>
        </div>
        <div class="mb-3">
            <label for="sonai_ceramic" class="form-label fs-5">索奈陶瓷</label>
            <input type="text" class="form-control" id="sonai_ceramic" name="sonai_ceramic" required>
        </div>
        <div class="mb-3">
            <label for="sonai_sintered" class="form-label fs-5">索奈烧结</label>
            <input type="text" class="form-control" id="sonai_sintered" name="sonai_sintered" required>
        </div>
        <div class="mb-3">
            <label for="EBC" class="form-label fs-5">EBC</label>
            <input type="text" class="form-control" id="EBC" name="EBC" required>
        </div>
        <div class="mb-3">
            <label for="SBS" class="form-label fs-5">SBS</label>
            <input type="text" class="form-control" id="SBS" name="SBS" required>
        </div>
        <div class="mb-3">
            <label for="Brenta" class="form-label fs-5">布伦塔</label>
            <input type="text" class="form-control" id="Brenta" name="Brenta" required>
        </div>

        <!-- Upload Images -->
        <div class="mb-3">
            <label for="formFileS" class="form-label fs-5">上传小图<span class="fs-6"> 建议尺寸为200*200或300*300</span></label>
            <input class="form-control" type="file" id="formFileS" name="Simg" required>
        </div>
        <div class="mb-3">
            <label for="formFileB" class="form-label fs-5">上传大图<span class="fs-6"> 建议尺寸为600*600或800*1000</span></label>
            <input class="form-control" type="file" id="formFileB" name="Bimg" required>
        </div>

        <!-- Dynamic Details Section -->
        <div class="d-flex justify-content-between align-items-center mb-2">
            <label class="form-label fs-5">产品详情</label>
            <button type="button" class="btn btn-outline-primary btn-sm" id="addDetailCard">+ 添加详情</button>
        </div>
        <div id="detailsContainer"></div>

        <!-- Submit -->
        <button type="submit" class="btn btn-danger float-end mt-4 mb-5 w-100">提交</button>
    </form>
</div>

<!-- Script to Add Detail Cards -->
<script>
    const container = document.getElementById("detailsContainer");
    const addBtn = document.getElementById("addDetailCard");

    let detailIndex = 0;

    addBtn.addEventListener("click", () => {
        const card = document.createElement("div");
        card.className = "card p-3 mb-3 border border-secondary rounded";

        card.innerHTML = `
            <div class="mb-3">
                <label class="form-label">详情订单编号</label>
                <input type="number" class="form-control" name="details[${detailIndex}][order_number]" required>
            </div>
            <div class="mb-3">
                <label class="form-label">品牌</label>
                <input type="text" class="form-control" name="details[${detailIndex}][brand]" required>
            </div>
            <div class="mb-3">
                <label class="form-label">描述</label>
                <textarea rows="2" class="form-control" name="details[${detailIndex}][description]" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">年份</label>
                <input type="number" class="form-control" name="details[${detailIndex}][year]" required>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="details[${detailIndex}][front_brake]" value="1">
                <label class="form-check-label">前刹车</label>
            </div>
            <div class="form-check form-check-inline mb-2">
                <input class="form-check-input" type="checkbox" name="details[${detailIndex}][rear_brake]" value="1">
                <label class="form-check-label">后刹车</label>
            </div>
        `;

        container.appendChild(card);
        detailIndex++;
    });
</script>
