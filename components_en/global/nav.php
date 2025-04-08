<?php
// Language switcher helper
function t($en, $zh) {
    return $_SESSION['lang'] === 'en' ? $en : $zh;
}

$menus = [
    'about-us' => [
        'title' => t('About Us', '关于我们'),
        'items' => [
            [
                'label' => t('Company Profile', '公司简介'),
                'link' => './about-us.php#company-profile-section'
            ],
        ],
    ],
    'products' => [
        'title' => t('Products', '产品中心'),
        'items' => [
            ['label' => t('Product Introduction', '产品介绍'), 'link' => '/sonairacing.com250318/product-introduction.php'],
            ['label' => t('Application Motorcycle', '适用车型'), 'link' => '/sonairacing.com250318/products.php'],
            ['label' => t('Product Inquiry', '产品询价'), 'link' => '/sonairacing.com250318/products-inquiry.php'],
        ],
    ],
    'news' => [
        'title' => t('News', '新闻中心'),
        'items' => [
            ['label' => t('News', '公司新闻'), 'link' => './news.php'],
        ],
    ],
];

$parameter = $_SERVER['QUERY_STRING'];
?>

<div class="ts-nav">
    <div class="ts-nav__top py-2">
        <div class="ts-container-fluid">
            <div class="d-flex flex-wrap gap-3 justify-content-between">
                <div class="mt-1">
                    <a class="ts-contact-details text-decoration-none ts-link-light px-2"
                        href="mailto:sonai_racinga126.com"><?php echo $envelope; ?>
                        sonai_racing@126.com</a>
                </div>
                <div class="d-flex justify-content-between align-items-center gap-2 gap-sm-0">
                    <div class="px-2">
                        <?php include_once $componentsPath . '/global/searchbar.php'; ?>
                    </div>
                    <div class="dropdown language-switcher px-2">
                        <button class="btn d-flex gap-1 p-0 text-white border-0 dropdown-toggle w-100" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if ($_SESSION['lang'] === 'en'): ?>
                                <img src="./assets/images/us.png" alt="English" class="flag-icon"> English
                            <?php else: ?>
                                <img src="./assets/images/cn.png" alt="Chinese" class="flag-icon"> 中文
                            <?php endif; ?>
                            <span class="ms-1"><?php echo $chevronDown; ?></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li class="dropdown-item w-100" data-lang="en">
                                <form class="w-100" action="<?php echo $currentPage; ?>.php?<?php echo $parameter ?>"
                                    method="POST">
                                    <input type="hidden" value="cn" name="lang">
                                    <button class="btn border-0 text-black ts-fs-12 p-0 w-100" type="submit">
                                        <img src="./assets/images/cn.png" alt="Chinese" class="flag-icon"> 中文
                                    </button>
                                </form>
                            </li>

                            <li class="dropdown-item w-100" data-lang="zh">
                                <form class="w-100" action="<?php echo $currentPage; ?>.php?<?php echo $parameter ?>"
                                    method="POST">
                                    <input type="hidden" value="en" name="lang">
                                    <button class="btn border-0 text-black ts-fs-12 p-0 w-100" type="submit">
                                        <img src="./assets/images/us.png" alt="English" class="flag-icon"> English
                                    </button>
                                </form>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ts-nav__main">
        <div class="ts-container-fluid">
            <nav class="navbar ts-navbar navbar-expand-lg w-100">
                <div class="container-fluid px-0">
                    <div class="d-flex align-items-center gap-2">
                        <a class="navbar-brand" href="./">
                            <img class="navbar-brand-icon h-100 my-1" loading="lazy" src="./assets/images/logo.svg"
                                alt="..." />
                        </a>
                    </div>
                    <div class="ts-navbar-button">
                        <span class="ts-navbar-button-desc"></span>
                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler__span"></span>
                            <span class="navbar-toggler__span"></span>
                            <span class="navbar-toggler__span"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul
                            class="navbar-nav py-4 py-lg-0 align-items-start align-items-lg-center ts-navbar-nav ms-auto">
                            <li class="nav-item ps-0">
                                <a class="nav-link <?php if ($currentPage === 'index') echo 'active'; ?>" href="./">
                                    <?= t('Home', '首页') ?>
                                </a>
                            </li>

                            <?php foreach ($menus as $key => $menu): ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?= $currentPage === $key ? 'active' : '' ?>"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= $menu['title'] ?> <?= $chevronDown ?>
                                    </a>
                                    <div class="ts-dropdown-menu dropdown-menu m-0 ts-dropdown-menu-<?php echo $key ?>">
                                        <ul class="list-unstyled">
                                            <?php $itemCount = 0; ?>
                                            <?php foreach ($menu['items'] as $item): ?>
                                                <li>
                                                    <a class="dropdown-item ts-dropdown-item-<?php echo $key ?> <?= $itemCount === 0 ? 'ts-dropdown--active' : '' ?>"
                                                        data-image-set="<?php echo $key ?>"
                                                        data-image="<?= $item['link'] ?>"
                                                        href="<?= $item['link'] ?>">
                                                        <?= $item['label'] ?>
                                                    </a>
                                                </li>
                                                <?php $itemCount++; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </li>
                            <?php endforeach; ?>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 <?php if ($currentPage === 'contact') echo 'active'; ?>"
                                    href="./contact.php">
                                    <?= t('Contact Us', '联系我们') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
