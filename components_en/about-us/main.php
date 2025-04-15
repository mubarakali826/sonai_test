<?php
$breadcrumbs = [
    ['text' => t('Home', '首页'), 'url' => './'],
    ['text' => t('About Us', '关于我们')],
];
@include "components_en/global/breadcrumb.php";
?>

<div class="ts-container-fluid">
    <section class="mb-5" id="company-profile-section">
        <h4 class="ts-fs-28"><?= t('COMPANY PROFILE', '公司简介') ?></h4>
        <hr />
        <div>
            <h5 class="ts-fs-20 fw-bold text-black">
                <?= t('Anhui Yushi brake System Co., LTD.', '安徽宇实制动系统有限公司') ?>
            </h5>
            <p class="mb-05">
                <?= t(
                    'was established in 1996 and specializes in the R&D and manufacturing of automobile and motorcycle brake pads and brake pads. It is China\'s largest motorcycle brake pad R&D and production enterprise, with an annual output of more than 16 million sets of brake pads. Since 2013, we have cooperated with well-known universities and research institutes to carry out core technology innovation reforms. Successfully developed an internationally advanced new formula of environmentally friendly and high-performance soluble ceramic friction materials.',
                    '公司成立于1996年，专注于汽车和摩托车刹车片的研发和制造，是中国最大的摩托车刹车片研发和生产企业，年产量超过1600万套。自2013年以来，我们与知名高校和研究机构合作，进行核心技术创新改革，成功研发出国际先进的环保高性能可溶陶瓷摩擦材料新配方。'
                ) ?>
            </p>
            <img class="w-100 mb-06" src="./assets/images/about/20190625100825032503.jpg" alt="..." />
        </div>
    </section>

    <section class="mb-5">
        <h4 class="ts-fs-28"><?= t('Development History', '发展历程') ?></h4>
        <hr />
        <ul class="list-unstyled">
            <?php
            foreach ($timeline as $year => $description): ?>
                <li>
                    <h5 class="ts-fs-20 fw-bold text-black">
                        <span class="ts-circle"></span> <?= $year; ?>
                    </h5>
                    <p class="mb-05"><?= $description; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="mb-5" id="product-description-section">
        <h4 class="ts-fs-28"><?= t('Ceramic Brake Pads', '陶瓷刹车片') ?></h4>
        <hr />
        <p><?= t(
            'Ceramic brake pads are a type of brake pad, including mineral fibers, aramid fibers, and ceramic fibers. Ceramic brake pads are cleaner and quieter, and provide excellent braking performance without wearing dual components.',
            '陶瓷刹车片是一种包含矿物纤维、芳纶纤维和陶瓷纤维的刹车片类型，具有更清洁、更安静的特性，并能提供优异的制动性能，同时减少对制动盘的磨损。'
        ) ?></p>
        <div>
            <img class="w-100 mb-06" src="./assets/images/about/a48d2c4c96982c9d60f72505a065d36.jpg" alt="..." />
            <p class="mb-05">
                <?= t(
                    'was founded in 1996, specializing in the research and development and manufacturing of automotive and motorcycle brake pads and brake shoes. The largest R&D and manufacturing enterprise for motorcycle brake pads in China...',
                    '公司成立于1996年，专注于汽车和摩托车刹车片和刹车蹄的研发与制造，是中国最大的摩托车刹车片研发和制造企业...'
                ) ?>
            </p>
        </div>

        <ul class="list-unstyled">
            <?php foreach ($brakeFeatures as $feature): ?>
                <li class="mb-4">
                    <h5 class="ts-fs-20 fw-bold ts-text-primary"><?= t($feature['title'], $feature['title']) ?></h5>
                    <p class="mb-05"><?= t($feature['description'], $feature['description']) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <h4 class="ts-fs-28"><?= t('Sintered Brake Pads', '烧结刹车片') ?></h4>
    <hr />
    <p><?= t(
        'Sintered brake pads are a type of inorganic brake pads. They contain copper powder, zinc powder, iron powder and other metal powders...',
        '烧结刹车片是一种无机刹车片，包含铜粉、锌粉、铁粉等金属粉末...'
    ) ?></p>
    <div>
        <img class="w-100 mb-06" src="./assets/images/about/sintered_brake_pads.jpg" alt="" />
        <p class="mb-05">
            <?= t(
                'Sintered brake pads can significantly improve braking performance, but will have a certain impact on the brake disc.',
                '烧结刹车片可显著提升制动性能，但对制动盘可能产生一定影响。'
            ) ?>
        </p>
    </div>

    <ul class="list-unstyled">
        
        <?php
        $sinteredBrakeFeatures = $sinteredBrakeFeatures ?? [];
        foreach ($sinteredBrakeFeatures as $feature): ?>
            <li class="mb-4">
                <h5 class="ts-fs-20 fw-bold ts-text-primary"><?= t($feature['title'], $feature['title']) ?></h5>
                <p class="mb-05"><?= t($feature['description'], $feature['description']) ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<script>
    $(document).ready(function () {
        var fragment = window.location.hash;
        if (fragment) {
            $('html, body').animate({
                scrollTop: $(fragment).offset().top
            }, 1000);
        }
    });
</script>
