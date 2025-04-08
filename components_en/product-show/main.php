<div class="ts-sticky-breadcrumb mb-5">
    <?php

    $id = $_GET['id'];
    $sqlPro = "SELECT * FROM `product` WHERE `id`=:id";
    $stmt = $pdo->prepare($sqlPro);
    $stmt->execute(['id' => $id]);
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    $cate_id = isset($_GET['id']) ? $res['cate_id'] : false;

    $breadcrumbs = [
        ['text' => 'Home ', 'url' => './'],
        ['text' => 'Products  ', 'url' => './products.php'],
        ['text' => 'Products detail ',],
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
                <h1 class="ts-fs-26 text-black fw-bold mb-3">Product introduction</h1>
                <ol class="ts-fs-14">
                    <li>Under extreme speed conditions, the brakes are sensitive, comfortable, and noiseless</li>
                    <li>Super high temperature resistance and waterproof performance, fearless of any climbing or wading
                    </li>
                    <li>The normal service life of Suo Nai copper ceramic brake pads has been increased by one to two
                        times
                    </li>
                    <li>Sonar sintered brake pads are noise free and do not damage the disc</li>
                    <li>Passed testing by multiple EU professional institutions such as EMARK, SGS, ENAC, etc</li>
                </ol>
            </header>
            <?php @include $componentsPath . "/contact/form.php" ?>
        </section>

    </div>
</div>