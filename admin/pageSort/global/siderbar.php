<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <div class="text-center">
                    <p>欢迎您,<span><?php echo $_SESSION['flag']; ?></span></p>
                </div>
                <ul class="nav flex-column" id="nanUl">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">
                            <span data-feather="home"></span>
                            首页
                        </a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./contact_submit_list.php">
                            <span data-feather="file"></span>
                            联系请求
                        </a>
                    </li>
                    <!--      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapsepage" role="button"
                            aria-expanded="collapse" aria-controls="collapseExample" onclick="clickOpen(this.href)">
                            <span data-feather="file"></span>
                            公司简介
                        </a>
                    </li>
                    <div class="collapse" id="collapsepage">
                        <ul class="nav flex-column">
                            <li class="nav-item ps-3">
                                <a class="nav-link" href="./page_new.php">
                                    <span data-feather="file-plus"></span>
                                    新增单页
                                </a>
                                <a class="nav-link" href="./page_list.php">
                                    <span data-feather="list"></span>
                                    单页列表
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseAdmin" role="button"
                            aria-expanded="collapse" aria-controls="collapseAdmin" onclick="clickOpen(this.href)">
                            <span data-feather="user"></span>
                            人员管理
                        </a>
                    </li>
                    <div class="collapse" id="collapseAdmin">
                        <ul class="nav flex-column">
                            <li class="nav-item ps-3">
                                <a class="nav-link" href="./user_new.php">
                                    <span data-feather="file-plus"></span>
                                    新增人员
                                </a>
                                <a class="nav-link" href="./user_list.php">
                                    <span data-feather="list"></span>
                                    人员列表
                                </a>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseProduct" role="button"
                            aria-expanded="collapse" aria-controls="collapseExample" onclick="clickOpen(this.href)">
                            <span data-feather="shopping-cart"></span>
                            产品管理
                        </a>
                    </li>
                    <div class="collapse" id="collapseProduct">
                        <ul class="nav flex-column">
                            <li class="nav-item ps-3">
                                <a class="nav-link" href="./product_new.php">
                                    <span data-feather="file-plus"></span>
                                    新增产品
                                </a>
                                <a class="nav-link" href="./product_list.php">
                                    <span data-feather="list"></span>
                                    产品列表
                                </a>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseProductInquiry" role="button"
                            aria-expanded="collapse" aria-controls="collapseExample" onclick="clickOpen(this.href)">
                            <span data-feather="shopping-cart"></span>
                            产品查询
                        </a>
                    </li>
                    <div class="collapse" id="collapseProductInquiry">
                        <ul class="nav flex-column">
                            <li class="nav-item ps-3">
                                <a class="nav-link" href="./product_inquiry_new.php">
                                    <span data-feather="file-plus"></span>
                                    新增产品
                                </a>
                                <a class="nav-link" href="./product_inquiry_list.php">
                                    <span data-feather="list"></span>
                                    产品列表
                                </a>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseCate" role="button"
                            aria-expanded="collapse" aria-controls="collapseCate" onclick="clickOpen(this.href)">
                            <span data-feather="folder"></span>
                            产品分类
                        </a>
                    </li>
                    <div class="collapse" id="collapseCate">
                        <ul class="nav flex-column">
                            <li class="nav-item ps-3">
                                <!-- <a class="nav-link" href="./module_new.php">
                                    <span data-feather="file-plus"></span>
                                    新增一级
                                </a>
                                <a class="nav-link" href="./module_list.php">
                                    <span data-feather="list"></span>
                                    一级列表
                                </a> -->
                                <a class="nav-link" href="./cate_new.php">
                                    <span data-feather="file-plus"></span>
                                    新增二级
                                </a>
                                <a class="nav-link" href="./cate_list.php">
                                    <span data-feather="list"></span>
                                    二级列表
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            客户留言
                        </a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="link"></span>
                            链接管理
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapsenews" role="button"
                            aria-expanded="false" aria-controls="collapseExample" onclick="clickOpen(this.href)">
                            <span data-feather="chevrons-down"></span>
                            新闻管理
                        </a>
                    </li>
                    <div class="collapse" id="collapsenews">
                        <ul class="nav flex-column">
                            <li class="nav-item ps-3">
                                <a class="nav-link" href="news_new.php">
                                    <span data-feather="file-plus"></span>
                                    新闻发布
                                </a>
                                <a class="nav-link" href="news_list.php">
                                    <span data-feather="list"></span>
                                    新闻列表
                                </a>
                            </li>
                        </ul>
                    </div>
                </ul>
                <!-- top sidebar finished -->
                <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>联系我们</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul> -->
            </div>
        </nav>

        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                Link with href
            </a>
        </p>
        <script>
            function clickOpen(href) {
                var str = href;
                var pos = str.search("#");
                sessionStorage.currentPage = "";
                sessionStorage.currentPage = str.substr(pos + 1, href.length)
            }
        </script>