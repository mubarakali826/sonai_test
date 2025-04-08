<?php
$footerLinks = [
    '导航' => [
        ['text' => '首页', 'url' => '/index.php'],
        ['text' => '关于', 'url' => '/about-us.php'],
        ['text' => '产品', 'url' => '/products.php'],
        ['text' => '新闻', 'url' => '/news.php'],
        ['text' => '联系', 'url' => '/contact.php'],
        // ... add other links as required
    ],
    '适用车型' => [
        ['text' => '阿普利亚', 'url' => '/products.php'],
        ['text' => '贝纳利', 'url' => '/products.php'],
        ['text' => '宝马', 'url' => '/products.php'],
        ['text' => '庞巴迪', 'url' => '/products.php'],
        ['text' => '杜卡迪', 'url' => '/products.php'],

        // ... add other links as required
    ],

];

$qrCodes = [
    ['src' => './assets/images/7ce8ab53c1310443337dc3e2ff3dd55.jpg', 'label' => 'Instagram'],
];
?>

<!-- <*****************[FOOTER]*****************> -->
<div class="ts-container-fluid">
    <div class="ts-bg-primary" data-aos="fade-right" data-aos-once="true">
        <div class=" d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3 p-4">
            <div class="d-flex align-items-center gap-3 ">
                <img width="72" class="icon text-sm-center" src="./assets/icons/customer-support.svg">
                <div class="text-white">
                    <h6 class="mb-1">有任何问题！</h6>
                    <p class="ts-fs-20 mb-0">请随时联系我们。
                    </p>
                </div>
            </div>
            <div>
                <a class="btn btn-outline-light rounded-0" href="./contact.php">联系</a>
            </div>
        </div>
    </div>

</div>
<footer class="ts-footer">
    <div class="ts-container-fluid">
        <div class="mx-auto">
            <div class="ts-contact-details-footer-wrapper d-flex px-2" data-aos="fade-left" data-aos-once="true">
                <div class="row  row-cols-lg-2 justify-content-between align-items-center gap-3 gap-lg-0 p-4 w-100">
                    <div class="d-flex gap-2 col-lg-6 p-0">
                        <img width="40" class="icon text-sm-center" src="./assets/icons/location.svg">
                        <div>
                            <h6 class="text-white mb-1">地址</h6>
                            <p class="ts-text-gray-5 mb-0">安徽宿松经济开发区站前西路2号

                            </p>
                        </div>
                    </div>
                    <div class="row row-cols-md-2 col-lg-6 p-0">
                        <div class="d-flex justify-content-md-end gap-2">
                            <img width="40" class="icon" src="./assets/icons/envelope.svg">
                            <div class="line footer-detail">
                                <h6 class="text-white mb-1">邮箱</h6>
                                <p class="ts-text-gray-5 mb-0">sonai_racing@126.com</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-md-end gap-2">
                            <img width="40" class="icon" src="./assets/icons/phone.svg">
                            <div class="line footer-detail">
                                <h6 class="text-white mb-1">电话</h6>
                                <p class="ts-text-gray-5 mb-0">+86 137 5877 5751（余先生）</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts-footer__main text-lg-start">
                <div class="row   gap-4 gap-lg-0">
                    <div class=" col-lg-4 d-flex flex-column justify-content-between" data-aos="fade-right"
                        data-aos-once="true">
                        <div>
                            <div>
                                <img height="47" class="ts-img mb-06" src="./assets/images/logo-white.svg" alt=" ..." />
                            </div>
                            <div class="text-white ">
                                <p class="fw-normal mb-04">安徽宇仕制动系统有限公司</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 ts-footer__2">
                        <div>
                            <div class="d-flex justify-content-around flex-wrap">
                                <?php foreach ($footerLinks as $header => $links): ?>
                                    <ul class="list-unstyled p-0 ts-fs-14 d-flex gap-2 flex-column" data-aos="fade-up"
                                        data-aos-once="true">
                                        <li>
                                            <a class="ts-fs-16 text-white text-decoration-none"
                                                href="#"><?php echo $header; ?></a>
                                        </li>
                                        <?php foreach ($links as $link): ?>
                                            <li>
                                                <a class="ts-footer__link" href="<?php echo $link['url']; ?>">
                                                    <?php echo $tsArrowRight; ?>
                                                    <span>
                                                        <?php echo $link['text']; ?>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-end flex-wrap gap-4" data-aos="fade-left"
                        data-aos-once="true">
                        <?php foreach ($qrCodes as $qrCode): ?>
                            <div class="text-center">
                                <p class="ts-fs-14 text-white mb-2">
                                    <?php echo $qrCode['label']; ?>
                                </p>
                                <img width="120" class="mw-100 mb-0" src="<?php echo $qrCode['src']; ?>" alt="...">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="ts-footer__bottom">
        <div class="ts-container-fluid">
            <div class="ts-text-gray-1 mx-auto d-flex justify-content-between gap-4 flex-wrap">
                <p class="ts-fs-12 text-center mb-0">CopyRight &copy; Copyright: Anhui Yushi brake System Co., LTD. </p>
                <a class="ts-text-gray-1 text-decoration-none" href="www.cnqmp.com">
                    <p class="ts-fs-12 text-center mb-0">Technical support: LBA Advertise</p>
                </a>
            </div>
        </div>
    </div> -->

</footer>