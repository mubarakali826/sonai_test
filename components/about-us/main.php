<?php
$breadcrumbs = [
    ['text' => '首页', 'url' => './'],
    ['text' => '关于',],
];

@include "components" . $checkLang . "/global/breadcrumb.php"
    ?>


<div class="ts-container-fluid">
    <section class="mb-5" id="company-profile-section">
        <h4 class="ts-fs-28">宇仕简介</h4>
        <hr />
        <div>
            <h5 class="ts-fs-20 fw-bold text-black">
            安徽宇仕制动系统有限公司
            </h5>
            <p class="mb-05">
            宇仕公司创建于1996年，是专业从事汽车、摩托车刹车蹄块、碟刹片的研究、开发、生产制造、销售一体化的企业，并和国内外多家整车厂配套，产品销往亚洲、非洲、美洲等世界各地和国内各省市，年生产总量超过2000万套。本公司技术力量雄厚，致力于产品研发和品牌建设，2013年起，公司成功研发出多种适合市场的新配方，2015年在上海成立研究所，与长沙中南大学和上海华东理工大学开展技术合作，并在同年研发出陶瓷环保1#配方，成功的填补了国内空白，并通过了国家计量测试中心参照IEC6321-2008的标准要求。为了满足市场需求，公司推出“SONAI索耐瑞森”品牌产品，2016年公司通过了SGS检测标准，2016年公司取得了ISO9001:2015质量体系认证，2019年通过了EMARK标准认证，2024年安徽宇仕取得GB/T19001-2016/IS0 9001:2015质量标准认证。为了扩大生产规模和更便捷的满足国内外市场需求，2016年在巴基斯坦成立分公司，为中东市场布局。2017年成立温州宇仕新材料科技有限公司。同年成立泰国分公司主要服务东南亚市场。2019年成立了安徽宇仕制动系统有限公司，2024年完成高度自动化生产车间。
            </p>
            <img class="w-100 mb-06" src="./assets/images/about/20190625100825032503.jpg" class="card-img-top"
                alt="..." />
    </section>
    <section class="mb-5">
        <h4 class="ts-fs-28">发展历史</h4>
        <hr />
        <div>


            <?php

            $timeline = [
                "1996" => "随着中国改革开放的深入，温州的民营经济开始起飞。在这种环境下，瑞安市宇仕电子原厂应运而生。",
                "2005" => "经过十年的积累和努力，我也见到了太多由制动问题引起的安全问题。我深知“跑得快不如刹得住”的道理。公司转型研发和制造制动系统，并成立了福州宇仕机动车附件有限公司。",
                "2010" => "中国大排量摩托车的发展为汽车爱好者提供了可与进口高性能刹车片媲美的新产品。我们开始研发适用于高性能车辆的新配方刹车片，并创立了“SONAI Sonaresen”品牌。",
                "2017" => "海外扩展计划：成立温州宇仕新材料科技有限公司，批量生产高性能陶瓷刹车片，成立巴基斯坦宇仕公司，并开始布局中东市场。",
                "2018" => "收购欧洲DXXXXV公司，推出全面升级的‘SONAI Sonaresen’品牌新产品——SONAI烧结刹车片，开拓欧美市场。",
                "2019" => "成立泰国宇仕公司，深度融入东南亚改装文化。成立安徽宇仕制动系统有限公司，致力于打造高度自动化的生产车间。将新型陶瓷刹车片和烧结刹车片引入中国。",
                "2023" => "安徽宇仕制动系统有限公司已完成并投入使用，满足了不断增长的市场需求。"
            ];

            ?>

            <ul class="list-unstyled">
                <?php foreach ($timeline as $year => $description): ?>
                    <li>
                        <h5 class="ts-fs-20 fw-bold text-black">
                            <span class="ts-circle"></span> <?php echo $year; ?>
                        </h5>
                        <p class="mb-05">
                            <?php echo $description; ?>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
    </section>

    <section class="mb-5" id="product-description-section">
        <h4 class="ts-fs-28"> 陶瓷刹车片</h4>
        <hr />

        <p>索耐铜陶刹车片是有机刹车片的一种是有机刹车片的一种，包含矿物纤维、芳纶纤维和陶瓷纤维，铜陶刹车片更耐用安静，
        在提供卓越刹车性能的同时，尽量减少磨损刹车盘。
        陶瓷刹车片对于普通车友在日常生活中更实用，更耐用。</p>
        <div>
            <img class="w-100 mb-06" src="./assets/images/about/a48d2c4c96982c9d60f72505a065d36.jpg"
                class="card-img-top" alt="..." />

            <p class="mb-05">
               
            </p>
        </div>

        <?php
        $brakeFeatures = [
            [
               "title" => "在紧急情况下，刹车灵敏、舒适且无噪音。",
                "description" => "摩擦系数是任何摩擦材料的最重要性能指标，它与刹车片的制动能力相关。在制动过程中，由于摩擦产生的热量和工作温度的升高，一般刹车片的摩擦材料会受到温度的影响，摩擦系数开始下降。在实际应用中，摩擦会减少，从而降低制动效果。在长途驾驶中，SONAI陶瓷刹车片始终保持在0.45到0.55之间的摩擦系数，确保车辆具有灵敏的制动性能。SONAI陶瓷刹车片的背板具有高温抗性，无需添加过多的金属材料来增加刹车片的散热能力。在制动过程中，没有异常噪音（例如刮擦声），避免了传统金属刹车片与其配对件（即刹车片和刹车盘）之间摩擦引起的金属噪音。"
            ],
            [
                "title" => "2. 极强的高温和防水性能，不畏任何攀爬或涉水。",
                "description" => "SONAI陶瓷刹车片具有极低的热衰减。在高达500°C的温度下，车辆在正常行驶中仍保持94.2%的制动性能，确保良好的制动性能和安全性。SONAI陶瓷刹车片还具有出色的防水衰减性能，即使在雨中浸泡，仍保持95.1%的制动性能，刹车不会打滑，确保安全。"
            ],
            [
                "title" => "3. 陶瓷配方保护您的汽车免受损伤之痛。",
                "description" => "SONAI陶瓷刹车片采用进口铜/高级陶瓷纤维（无石棉）等柔软材料，几乎不会对刹车盘造成显著磨损，克服了传统刹车片的材料缺陷。"
            ],
            [
                "title" => "4. 选择SONAI刹车片，其使用寿命是原厂刹车片的2-3倍。",
                "description" => "SONAI陶瓷刹车片只使用一到两种含静电的粉末作为独特配方材料，而其他材料则采用无静电材料。这样，粉末会随车辆的移动被风带走，不会粘附在刹车盘上，影响其美观。陶瓷刹车片的使用寿命是原厂刹车片的三倍。使用陶瓷刹车片后，刹车盘上不会出现划痕（即刮痕），并且使用其他刹车片造成的原刹车盘上的黑色碳沉积会被清除，延长原刹车盘的使用寿命20%。"
            ],
            [
                "title" => "5. 经过多家欧盟专业机构的测试，如EMARK、SGS、ENAC等。",
                "description" => "SONAI陶瓷刹车片经过了多家欧盟专业机构如EMARK、SGS、ENAC等的严格测试，完全符合进口刹车片的环保和性能双重标准。"
            ]
        ];

        ?>

        


        <ul class="list-unstyled">
            <?php foreach ($brakeFeatures as $feature): ?>
                <li class="mb-4">
                    <h5 class="ts-fs-20 fw-bold ts-text-primary">
                        <?php echo $feature['title']; ?>
                    </h5>
                    <p class="mb-05">
                        <?php echo $feature['description']; ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>

    </section>
    <script>
    $(document).ready(function () {
        // Get the URL fragment
        var fragment = window.location.hash;
        
        // Check if a fragment is present and scroll to it
        if (fragment) {
            $('html, body').animate({
                scrollTop: $(fragment).offset().top
            }, 1000); // Adjust the duration as needed
        }
    });
    </script>
            <!-- 新增：烧结刹车片信息 -->
            <h4 class="ts-fs-28"> 烧结刹车片</h4>
        <hr />

        <p> 烧结刹车片是无机刹车片的一种，包含铜粉、锌粉，铁粉等多种金属粉末，经特殊冶金设备高温高压烧结制成.使用过程中能明显提升制动性能。烧结刹车片对于进阶车友在激烈驾驶和特技玩乐中更有帮助。</p>
        <div>
            <img class="w-100 mb-06" src="./assets/images/about/sintered_brake_pads.jpg" class="card-img-top"
                alt="" />

            <p class="mb-05">
            
            </p>
        </div>

        <?php
        // 新增：烧结刹车片的特点
        $sinteredBrakeFeatures = [
            [
                "title" => "1. 全面采用欧洲标准的生产设备和材料供应商",
                "description" => "由于与欧洲市场的深度合作，所有生产原材料和生产设备均从欧洲进口，确保质量的一致性。"
            ],
            [
                "title" => "2. 在极速情况下，刹车会产生强烈的振动感，这样并不那么舒适。",
                "description" => "双H级制动性能使SONAI烧结刹车片的干预速度和干预力比其他刹车片更快更强。"
            ],
            [
                "title" => "3. 超高温度抗性和同样出色的防水性能",
                "description" => "可以在高达800°C的恶劣工作环境下，不会降低制动性能。确保车辆具有良好的制动性能，以确保安全。"
            ],
            [
                "title" => "4. 大排量主流大贸易车型的首选。",
                "description" => "主流大贸易汽车制造商从设计之初就考虑到这些骑手对制动性能的更极端要求，并在出厂前将烧结刹车片作为标准配置。"
            ],
            [
                "title" => "5. 通过EMARK、SGS、ENAC等多家欧盟专业机构的测试",
                "description" => "经过EMARK、SGS、ENAC等欧洲专业机构的严格测试，与进口烧结刹车片的指标完全可比。"
            ],
            // 可以根据需要添加更多特点
        ];

        ?>


        <ul class="list-unstyled">
            <?php foreach ($sinteredBrakeFeatures as $feature): ?>
                <li class="mb-4">
                    <h5 class="ts-fs-20 fw-bold ts-text-primary">
                        <?php echo $feature['title']; ?>
                    </h5>
                    <p class="mb-05">
                        <?php echo $feature['description']; ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>

    </section>

</div>
</div>