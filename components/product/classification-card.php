<div class="mb-4 ts-classification-card">
    <a class="text-decoration-none"
        href="./product-category.php?cate_id=<?php echo $brand['id']; ?>&cate_title=<?php echo urlencode($brand['catename']); ?>&cate_title_en=<?php echo urlencode($brand['catename_en']); ?>">
        <div class="ts-product-category-card bg-white text-center px-4 py-3">
            <div class="truncate-line-2-iii-wrapper">
                <h5 class="ts-fs-18 fw-medium text-black mb-0 lh-md truncate-line-2-iii">
                    <?php echo $brand['catename']; ?>
                </h5>
            </div>
        </div>
    </a>
</div>