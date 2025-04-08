<!-- <div class="mb-4  mb-lg-5">
    <a class="p-0 text-decoration-none d-block" href="news-details.php?id=<?php // echo $row['id']?>">
        <div class="ts-news-card">
            <div class="">
                Production
                <img class="ts-news-card__img" src="./upNewsImg/<?php // echo $row["Simg"] ?>'" alt="..." />
                development
                <img class="ts-news-card__img" src="./assets/images/news/details/<?php // echo $row["Simg"] ?>"
                    alt="..." />
            </div>
            <div class="py-2">
                <h6 class="ts-fs-20 fw-bold ts-text-gray-3 mb-02"><?php // echo $row['title'] ?></h6>
                <p class="ts-text-gray-2 ts-fs-14 mb-2">
                    2023-5-26
                </p>
                <p class="ts-news-card__desc ts-text-gray-2 ts-fs-14 mb-05">
                    <?php // echo mb_substr($row['content'],0,120,'utf-8') ?>
                </p>
                <img width="29" src="./assets/icons/arrow-right-filled.svg" alt="..." />
            </div>
        </div>
    </a>
</div> -->

<div class="mb-4 mt-5">
    <a class="ts-news-detail-card  text-decoration-none"
        style="background-image: url(./assets/images/news/details/<?php echo $row['Simg'] ?>);"
        href="news-details.php?id=<?php echo $row['id'] ?>">
        <div class="ts-news-detail-card-content w-100 px-4 py-3">
            <h5 class="ts-fs-18 fw-bold text-white mb-2 truncate-line-2-ii "><?php echo $row['title'] ?></h5>
            <div class="ts-text-gray-5 d-flex justify-content-center justify-content-between">
                <p class="mb-0"><?php echo $row['intime'] ?></p>
                <p class="mb-0">查看更多 <?php echo $chevronRight; ?> </p>
            </div>
        </div>
    </a>
</div>