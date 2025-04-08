<div class="ts-sticky-breadcrumb mb-5">
    <?php

    $id = $_GET['id'];
    $sqlPro = "SELECT * FROM `product` WHERE `id`=:id";
    $stmt = $pdo->prepare($sqlPro);
    $stmt->execute(['id' => $id]);
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    $cate_id = isset($_GET['id']) ? $res['cate_id'] : false;

    $breadcrumbs = [
        ['text' => '首页', 'url' => './'],
        ['text' => '产品', 'url' => './products.php'],
        ['text' => '产品详情',],
    ];
    include_once $componentsPath . '/global/breadcrumb.php';
    ?>

    <?php
    $sqlCount = "SELECT * FROM `product` WHERE 1";
    if ($cate_id > 0) {
        $sqlCount .= " AND cate_id=:cate_id";
    }
    $sqlCount .= " ORDER BY `orderno` ASC";
    $rs = $pdo->prepare($sqlCount);
    $rs->execute(['cate_id' => $cate_id]);
    $count = $rs->rowCount(); // Get the row count directly
    $pageRes = $rs->fetchAll(PDO::FETCH_ASSOC);

    include_once $componentsPath . '/product/products-title-list.php';
    ?>
</div>
<div class="overflow-hidden">
    <div class="ts-container-fluid ">
        <section class="mb-5" data-aos="fade-up" data-aos-once="true">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <img class="w-100 mb-3" src="./upProBimg/<?php echo $res['Bimg'] ?>" alt="" srcset="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <header class="mb-5">
                <h1 class="ts-fs-26 text-black fw-bold mb-3">产品介绍</h1>
                <ol class="ts-fs-14">
                    <li>在极限速度条件下，刹车灵敏、舒适且无噪音</li>
                    <li>超高温耐受性和防水性能，无惧任何爬坡或涉水</li>
                    <li>索奈铜陶瓷刹车片的正常使用寿命增加了一到两倍</li>
                    <li>索奈烧结刹车片无噪音且不损伤刹车盘</li>
                    <li>通过EMARK、SGS、ENAC等多家欧盟专业机构的测试</li>
                </ol>
            </header>
            <?php @include $componentsPath . "/contact/form.php" ?>
        </section>
    </div>
</div>