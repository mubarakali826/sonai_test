<h1 class="ts-fs-34 fw-bold ts-text-primary mb-04">安利官网-高端球头摆臂服务制造商-悬挂与转向配件</h1>
<hr class="mb-04" />
<h2 class="ts-fs-28 fw-bold ts-text-primary mb-06">在线留言</h2>
<p class="mb-08">

    您的问题和意见对我们十分宝贵，为了能及时了解您的反馈信息，您可以在线方式提交信息给我们也可以给我们打电话，我们十分愿意通过电话解答您的疑问。 加入德利众，成为我们当中的一员协助客户透过设计解决问题，创造价值。</p>

<?php @include "components" . $checkLang . "/contact/form.php" ?>
<hr class="my-3" />

<section>
    <h2 class="ts-fs-28 fw-bold ts-text-primary mb-06">联系我们</h2>
    <div class="ts-bg-gray-7 p-4">
        <div class="row row-cols-md-3 gap-3 gap-md-0">
            <div>
                <div class="d-flex align-items-center gap-3 bg-white p-3">
                    <div>
                        <img width="60" src="./assets/icons/phone-hexagon.svg" alt="...">
                    </div>
                    <div>
                        <p class="mb-0">联系电话</p>
                        <p class="mb-0">0086-577-65118998</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="d-flex align-items-center gap-3 bg-white p-3">
                    <div>
                        <img width="60" src="./assets/icons/printer.svg" alt="...">
                    </div>
                    <div>
                        <p class="mb-0">联系传真</p>
                        <p class="mb-0">0086-577-65118998</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="d-flex align-items-center gap-3 bg-white p-3">
                    <div>
                        <img width="60" src="./assets/icons/envelope.svg" alt="...">
                    </div>
                    <div>
                        <p class="mb-0">联系邮箱</p>
                        <p class="mb-0">alsale@anli86.com</p>
                    </div>
                </div>
            </div>

        </div>
</section>

<section class="ts-contact-home position-relative">
    <div class="position-relative ts-bg-primary px-5 py-3">
        <div class="d-flex justify-content-center">
            <div class="position-relative overflow-hidden">
                <div>
                    <div class="swiper tsContactMapDetails ">
                        <div class="swiper-wrapper ">
                            <?php
                            // Define an array of image paths
                            $mapsDetails = [
                                '1',
                                '1',
                                '1',
                            ];

                            // Loop through the image paths and generate the HTML
                            foreach ($mapsDetails as $map) {
                                echo '<div class="swiper-slide ts-bg-primary position-relative">';
                                echo '
';
                                echo '
                                        <div class="d-flex justify-content-center  ">
                                        <div class="px-4 px-sm-5 text-white text-center position-relative">
                                        <img style="left:0" class="position-absolute left-0" width="35" src="assets/icons/location.svg" alt="...">
                                            <p class="mb-1">温州安利车辆部件有限公司 </p>
                                            <p class="mb-0">地址: 浙江省温州市瑞安市莘塍街道望海路2555号 </p>
                                        </div>
                                        </div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div>
            <button
                class='btn btn-swiper ts-btn-fill-white p-0 border-0 swiper-button-next btn-swiper--sm  ts-contact-swiper-button-next'>
            </button>
            <button
                class='btn btn-swiper ts-btn-fill-white p-0 border-0 swiper-button-prev btn-swiper--sm  ts-contact-swiper-button-prev'>
            </button>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper tsContactMap ">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <iframe class="w-100" height="355" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    id="gmap_canvas"
                    src="https://maps.google.com/maps?width=639&amp;height=370&amp;hl=en&amp;q=27.79659336376858, 120.68949558906743&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
    </div>

    <div class="swiper-pagination ts-contact-swiper-pagination start-0"></div>
</section>

<!-- Initialize Swiper -->
<script>
var tsContactMap = new Swiper(".tsContactMap", {
    navigation: {
        nextEl: ".ts-contact-swiper-button-next",
        prevEl: ".ts-contact-swiper-button-prev",
    },
    pagination: {
        el: ".ts-contact-swiper-pagination",
        clickable: true
    },
    slidesPerView: 1,
    effect: "fade",

});
var tsContactMapDetails = new Swiper(".tsContactMapDetails", {
    navigation: {
        nextEl: ".ts-contact-swiper-button-next",
        prevEl: ".ts-contact-swiper-button-prev",
    },
    pagination: {
        el: ".ts-contact-swiper-pagination",
        clickable: true
    },
    slidesPerView: 1,
    effect: "fade",

});
</script>