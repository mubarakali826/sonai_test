<section class="ts-hero-home ">
    <!-- Swiper -->
    <div class="swiper tsHeroSwiper ">
        <div class="swiper-wrapper ">
            <?php
            // Define an array of image paths
            $imagePaths = [
                "assets/images/home/banner1.jpg",
                "assets/images/home/banner2.jpg",
                "assets/images/home/banner3.jpg",
                // Add more image paths as needed
            ];
            // Loop through the image paths and generate the HTML
            foreach ($imagePaths as $imagePath) {
                ?>
                <!-- <div class="swiper-slide position-relative" style="background-image: url(./<?php  // echo $imagePath ?>);"> -->
                <div class="swiper-slide position-relative">
                    <img class="w-100" src="./<?php echo $imagePath ?>" alt="...">

                    <!-- <div class="bg-overlay"></div>
                <div class="ts-container-fluid">
                    <div class="row  align-items-center">
                        <div class="col-md-5">
                            <h1 class="ts-fs-60 fw-heavy ts-text-white"> High <span class="ts-text-primary"> Performance
                                </span> </h1>
                            <h1 class="ts-fs-40 fw-medium mb-07 ts-text-white">Motorcycle brake pads</h1>
                            <p class="ts-text-gray-9 mb-10">
                                Over the years, SONAI has been committed to the development and manufacturing of
                                motorcycle brake pads, launched ceramic brake pads and sintered brake pads, and won
                                market recognition with high quality and cost-effective
                            </p>

                        </div>
                        <div class="col-md-7">
                            <img class="w-100" src="./<?php echo $imagePath ?>" alt="...">
                        </div>
                    </div>

                </div> -->
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="swiper-pagination ts-hero-swiper-pagination start-0"></div>
</section>

<!-- Initialize Swiper -->
<script>
    var tsHeroSwiper = new Swiper(".tsHeroSwiper", {
        navigation: {
            nextEl: ".ts-hero-swiper-button-next",
            prevEl: ".ts-hero-swiper-button-prev",
        },
        pagination: {
            el: ".ts-hero-swiper-pagination",
            clickable: true
        },
        slidesPerView: 1,
        // effect: "fade",

    });
</script>