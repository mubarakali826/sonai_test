<a class="text-decoration-none mb-4"
    href="./product-inquiry-detail.php?id=<?php echo $row['id'] ?>&cate_id=<?php echo $row['cate_id'] ?>">
    <div class="overflow-hidden">
        <h5 class="ts-fs-18 fw-bold text-black truncate-line-1 mb-2 "><?php echo $row['productname_en'] ?></h5>
        <div class="d-flex align-items-center ">
            <div class="ts-fs-18 fw-bold text-black ts-bg-primary px-3 py-2  ">
                <p class="text-white mb-0"> <?php echo $row['product_code'] ?></p>
            </div>
        </div>
        <img class="w-100 mb-3" src="./upProSimg/<?php echo $row['Simg'] ?>" class="card-img-top" alt="..." />

        <div class="d-flex align-items-center justify-content-center">
            <h6 class="fw-bold ts-text-primary">
                <img width="18" src="./assets/icons/search-red.svg" alt="...">
                Ver todas las aplicaciones
            </h6>
        </div>
    </div>
</a>