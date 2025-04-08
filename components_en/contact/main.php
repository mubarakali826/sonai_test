<?php
$breadcrumbs = [
    ['text' => 'Home', 'url' => './'],
    ['text' => 'Contact Us',],
];

include_once $componentsPath . '/global/breadcrumb.php'
    ?>


<div class="ts-container-fluid">

    <div class="row mb-09 mt-5 ">
        <div class="col-lg-4" data-aos="fade-right" data-aos-once="true">
            <div class=" ts-bg-gray-3 py-5 px-4">
                <h1 class="ts-fs-32 mb-08">Contact Information</h1>
                <div class="mb-4">
                    <p class="fw-bold text-black mb-1">Address</p>
                    <p class="ts-text-gray-2 mb-0">No. 2, Zhanqian West Road, Susong Economic Development Zone, Anhui.
                    </p>
                </div>
                <div class="mb-4">
                    <p class="fw-bold text-black mb-1">Mobile</p>
                    <p class="ts-text-gray-2 mb-0">+86 137 5877 5751 (Mr. Yu)</p>
                </div>
                <div class="mb-4">
                    <p class="fw-bold text-black mb-1">Email</p>
                    <p class="ts-text-gray-2 mb-0">sonai_racing@126.com
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-8" data-aos="fade-left" data-aos-once="true">
            <?php include_once $componentsPath . '/contact/form.php' ?>


        </div>
    </div>



</div>