<a class="text-decoration-none ts-product-card" href="product-detail.php?id=<?php echo $row['id'] ?>"
    id="product-card-<?php echo $row['id'] ?>">
    <div class="card h-100">
        <img class="w-100" src="./upProSimg/<?php echo $row['Simg'] ?>" class="card-img-top" alt="..." />
        <div class="card-body" style="text-align: center">
            <p class="ts-text-gray-4 mb-2">Applications</p>
            <h5 class="ts-fs-18 fw-bold text-black truncate-line-2 "><?php echo $row['productname'] ?></h5>
            <hr class="my-3" />
            <span class="btn ts-btn-primary w-100 ">QUERY<span>
        </div>
    </div>
</a>