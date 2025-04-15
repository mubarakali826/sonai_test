<?php
$footerLinks = [
    t('Navigation', '导航') => [
        ['text' => t('Home', '首页'), 'url' => '/index.php'],
        ['text' => t('About Us', '关于我们'), 'url' => '/about-us.php'],
        ['text' => t('Products', '产品'), 'url' => '/products.php'],
        ['text' => t('News', '新闻'), 'url' => '/news.php'],
        ['text' => t('Contact Us', '联系我们'), 'url' => '/contact.php'],
    ],
    t('Categories', '分类') => [
        ['text' => 'Aprilia', 'url' => '/products.php'],
        ['text' => 'Benelli', 'url' => '/products.php'],
        ['text' => 'Bombardier', 'url' => '/products.php'],
        ['text' => 'BWM', 'url' => '/products.php'],
        ['text' => 'Ducati', 'url' => '/products.php'],
    ],
];

$qrCodes = [
    ['src' => './assets/images/7ce8ab53c1310443337dc3e2ff3dd55.jpg', 'label' => 'Instagram'],
];
?>

<!-- <*****************[FOOTER]*****************> -->
<div class="ts-container-fluid">
    <div class="ts-bg-primary" data-aos="fade-right" data-aos-once="true">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3 p-4">
            <div class="d-flex align-items-center gap-3">
                <img width="72" class="icon text-sm-center" src="./assets/icons/customer-support.svg">
                <div class="text-white">
                    <h6 class="mb-1"><?= t('Have Any Questions!', '有任何问题吗？') ?></h6>
                    <p class="ts-fs-20 mb-0"><?= t("DON'T HESITATE TO CONTACT US ANY TIME.", '欢迎随时联系我们。') ?></p>
                </div>
            </div>
            <div>
                <a class="btn btn-outline-light rounded-0" href="./contact.php">
                    <?= t('Contact Us', '联系我们') ?>
                </a>
            </div>
        </div>
    </div>
</div>

<footer class="ts-footer">
    <div class="ts-container-fluid">
        <div class="mx-auto">
            <div class="ts-contact-details-footer-wrapper d-flex px-2" data-aos="fade-left" data-aos-once="true">
                <div class="row row-cols-lg-2 justify-content-between align-items-center gap-3 gap-lg-0 p-4 w-100">
                    <div class="d-flex gap-2 col-lg-6 p-0">
                        <img width="40" class="icon text-sm-center" src="./assets/icons/location.svg">
                        <div>
                            <h6 class="text-white mb-1"><?= t('Address', '地址') ?></h6>
                            <p class="ts-text-gray-5 mb-0">
                                <?= t('No. 2, Zhanqian West Road, Susong Economic Development Zone, Anhui', '安徽宿松经济开发区站前西路2号') ?>
                            </p>
                        </div>
                    </div>
                    <div class="row row-cols-md-2 col-lg-6 p-0">
                        <div class="d-flex justify-content-md-end gap-2">
                            <img width="40" class="icon" src="./assets/icons/envelope.svg">
                            <div class="line footer-detail">
                                <h6 class="text-white mb-1">Email</h6>
                                <p class="ts-text-gray-5 mb-0">sonai_racing@126.com</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-md-end gap-2">
                            <img width="40" class="icon" src="./assets/icons/phone.svg">
                            <div class="line footer-detail">
                                <h6 class="text-white mb-1"><?= t('Call us', '联系我们') ?></h6>
                                <p class="ts-text-gray-5 mb-0">+86 137 5877 5751（MR.Yu）</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ts-footer__main text-lg-start">
                <div class="row gap-4 gap-lg-0">
                    <div class="col-lg-4 d-flex flex-column justify-content-between" data-aos="fade-right"
                        data-aos-once="true">
                        <div>
                            <img height="47" class="ts-img mb-06" src="./assets/images/logo-white.svg" alt="..." />
                            <div class="text-white">
                                <p class="fw-normal mb-04">Anhui Yushi brake System Co., LTD.</p>
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
                                            <a class="ts-fs-16 text-white text-decoration-none" href="#"><?= $header ?></a>
                                        </li>
                                        <?php foreach ($links as $link): ?>
                                            <li>
                                                <a class="ts-footer__link" href="<?= $link['url']; ?>">
                                                    <?= $tsArrowRight; ?>
                                                    <span><?= $link['text']; ?></span>
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
                                <p class="ts-fs-14 text-white mb-2"><?= $qrCode['label']; ?></p>
                                <img width="120" class="mw-100 mb-0" src="<?= $qrCode['src']; ?>" alt="...">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
