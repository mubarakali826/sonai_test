<div class="mb-14"></div>

<section class="ts-applications mb-14">
    <header class="ts-header-container mb-14" data-aos="fade-down" data-aos-once="true">
        <div class="background-text">01</div>
        <div class="content">
            <h1 class="ts-fs-42">
                <span class="ts-text-primary"><?= t('WELCOME TO', '欢迎来到') ?></span> YUSHI
            </h1>
            <p><?= t('Professional Production Of Brake Pads', '专业生产刹车片') ?></p>
        </div>
    </header>

    <div class="ts-container-fluid">
        <div class="swiper welcomeSwiper">
            <div class="swiper-wrapper">
                <!-- slide 1 -->
                <div class="swiper-slide h-auto" data-aos="fade-up" data-aos-once="true">
                    <div class="h-100">
                        <a class="ts-welcome-card text-decoration-none text-black mb-2 w-100 h-100">
                            <div class="ts-welcome-card__header">
                                <img src="./assets/images/home/welcome1.jpg" alt="" srcset="">
                            </div>
                            <div class="p-2 p-sm-4">
                                <h5 class="ts-fs-18 text-uppercase mb-3">
                                    <?= t('New Materials', '新型材料') ?>
                                </h5>
                                <p class="mb-0">
                                    <?= t(
                                        'High Temperature，Waterproof Design,which improves driving safety by 80%.',
                                        '高温防水设计，可提高80%的驾驶安全性。'
                                    ) ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- slide 2 -->
                <div class="swiper-slide h-auto" data-aos="fade-up" data-aos-once="true">
                    <div class="h-100">
                        <a class="ts-welcome-card text-decoration-none text-black mb-2 w-100 h-100">
                            <div class="ts-welcome-card__header">
                                <img src="./assets/images/home/welcome2.jpg" alt="" srcset="">
                            </div>
                            <div class="p-2 p-sm-4">
                                <h5 class="ts-fs-18 text-uppercase mb-3">
                                    <?= t('Triple Authentication', '三重认证') ?>
                                </h5>
                                <p class="mb-0">
                                    <?= t(
                                        'It has been tested by EMARK, SGS, ENAC and other EU professional institutions',
                                        '已通过EMARK、SGS、ENAC等欧盟专业机构测试'
                                    ) ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- slide 3 -->
                <div class="swiper-slide h-auto" data-aos="fade-up" data-aos-once="true">
                    <div class="h-100">
                        <a class="ts-welcome-card text-decoration-none text-black mb-2 w-100 h-100">
                            <div class="ts-welcome-card__header">
                                <img src="./assets/images/home/welcome3.jpg" alt="" srcset="">
                            </div>
                            <div class="p-2 p-sm-4">
                                <h5 class="ts-fs-18 text-uppercase mb-3">
                                    <?= t('New Version Packaging', '新版本包装') ?>
                                </h5>
                                <p class="mb-0">
                                    <?= t(
                                        'Is excellente, standing from others, and most important showing commitment to first class',
                                        '优质包装，脱颖而出，彰显一流品质的承诺'
                                    ) ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative d-flex justify-content-center mt-4">
        <div class="swiper-pagination welcomeSwiper-swiper-pagination position-relative"></div>
    </div>
</section>

<!-- Initialize Swiper -->
<script>
    var welcomeSwiper = new Swiper(".welcomeSwiper", {
        pagination: {
            el: ".welcomeSwiper-swiper-pagination",
            clickable: true,
        },
        slidesPerView: 2,
        spaceBetween: 10,
        breakpoints: {
            991: {
                slidesPerView: 2,
                spaceBetween: 24
            },
            1300: {
                slidesPerView: 3,
                spaceBetween: 24
            }
        }
    });
</script>
