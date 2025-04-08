<div class="mb-4 mt-5">
    <a class="ts-news-detail-card  text-decoration-none"
        style="background-image: url(./assets/images/news/details/<?php echo $row['Simg'] ?>);"
        href="news-details.php?id=<?php echo $row['id'] ?>">
        <div class="ts-news-detail-card-content w-100 px-4 py-3">
            <h5 class="ts-fs-18 fw-bold text-white mb-2 truncate-line-2-ii "><?php echo $row['title_en'] ?></h5>
            <div class="ts-text-gray-5 d-flex justify-content-center justify-content-between">
                <p class="mb-0"><?php echo $row['intime'] ?></p>
                <p class="mb-0">view more <?php echo $chevronRight; ?> </p>
            </div>
        </div>
    </a>
</div>