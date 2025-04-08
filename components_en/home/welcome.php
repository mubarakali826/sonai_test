<div class="mb-14"></div>

<section class="ts-applications mb-14 ">
    <header class="ts-header-container mb-14" data-aos="fade-down" data-aos-once="true">
        <div class="background-text">01</div>
        <div class="content">
            <h1 class="ts-fs-42"><span class="ts-text-primary"> WELCOME TO </span>YUSHI</h1>
            <p>Professional Production Of Brake Pads</p>
        </div>
    </header>


    <div class="ts-container-fluid">
        <!-- <div class="row row-cols-sm-2 row-cols-lg-4"> -->

        <!-- Swiper -->
        <div class="swiper welcomeSwiper">
            <div class="swiper-wrapper">
                <!-- slide 1 -->
                <div class="swiper-slide h-auto" data-aos="fade-up" data-aos-once="true">
                    <div class="h-100">
                        <a class="ts-welcome-card text-decoration-none text-black mb-2 w-100 h-100">
                            <div class="ts-welcome-card__header">
                                <img src="./assets/images/home/welcome1.jpg" alt="" srcset="">
                            </div>
                            <div class="p-2 p-sm-4 ">
                                <h5 class="ts-fs-18 text-uppercase mb-3">New Materials</h5>
                                <p class="mb-0">High Temperature，Waterproof Design,which improves driving safety by 80%.
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
                            <div class="p-2 p-sm-4 ">
                                <h5 class="ts-fs-18 text-uppercase mb-3">Triple Authentication</h5>
                                <p class="mb-0">It has been tested by EMARK, SGS, ENAC and other EU professional
                                    institutions</p>
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
                            <div class="p-2 p-sm-4 ">
                                <h5 class="ts-fs-18 text-uppercase mb-3">New Version Packaging</h5>
                                <p class="mb-0">Is excellente, standing from others, and most important showing
                                    commitment to first class</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <!-- </div> -->
    </div>
    <div class="position-relative d-flex justify-content-center mt-4">
        <div class="swiper-pagination  welcomeSwiper-swiper-pagination  position-relative "></div>
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