<!-- Swiper -->
<div class="ts-product-title-list ">
    <div class="swiper prodcutListSwiper">
        <div class="swiper-wrapper">
            <?php
            foreach ($pageRes as $row) {
                if ($cate_id) { ?>
                    <div class="swiper-slide w-auto">
                        <a href="./product-detail.php?id=<?php echo $row['id'] ?>"
                            class="ts-text-gray-4 mb-0 cursor-pointer ts-product-title-list__item text-decoration-none"
                            role="button" id="product-<?php echo $row['id'] ?>" onclick="showProduct(this)">
                            <?php echo $row['productname_en'] ?>
                        </a>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</div>