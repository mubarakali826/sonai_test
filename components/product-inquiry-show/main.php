<div class="ts-sticky-breadcrumb ">
    <?php

    $id = $_GET['id'];
    $sqlPro = "SELECT * FROM `product_inquries` WHERE `id`=:id";
    $stmt = $pdo->prepare($sqlPro);
    $stmt->execute(['id' => $id]);
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    $cate_id = isset($_GET['id']) ? $res['cate_id'] : false;

    $breadcrumbs = [
        ['text' => '首页', 'url' => './'],
        ['text' => '产品', 'url' => './products-inquiry.php'],
        ['text' => '产品详情',],
    ];
    include_once $componentsPath . '/global/breadcrumb.php';
    ?>

</div>


<div class="mb-2">

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

    include_once $componentsPath . '/product-inquiry/products-title-list.php';
    ?>
</div>
<div class="overflow-hidden">
    <?php include_once $componentsPath . '/product-inquiry/search.php'; ?>

    <div class="ts-container-fluid ">
        <section class="mb-07" data-aos="fade-up" data-aos-once="true">
            <div class="row ">
                <div class="col-lg-12">
                    <div>
                        <img class="w-100 " src="./upProBimg/<?php echo $res['Bimg'] ?>"
                            alt="<?php echo $res['product_details'] ?>">
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="row gap-5 gap-lg-0">
                <div class="col-lg-4" data-aos="fade-right" data-aos-once="true">
                    <div class="ts-bg-primary py-2 text-center mb-3">
                        <h3 class="text-white mb-0">NO.00175</h3>
                    </div>

                    <div class="row row-cols-2  ">
                        <p class="text-center text-black fw-bold mb-0 ">
                            Sonal ceramic
                        </p>
                        <p class="text-center fw-bold text-black mb-0 ">

                            <?php
                            $res['sonai_ceramic'];

                            // Replace literal '\n' with actual newlines
                            $res['sonai_ceramic'] = str_replace('\\n', "\n", $res['sonai_ceramic']);

                            // Display the content with proper newlines in HTML
                            echo nl2br(htmlspecialchars($res['sonai_ceramic'], ENT_QUOTES, 'UTF-8'));
                            ?>
                        </p>
                    </div>
                    <hr class="ts-hr-line-table my-2">
                    <div class="row row-cols-2  ">
                        <p class="text-center text-black fw-bold mb-0 ">
                            Sonal sintered
                        </p>
                        <p class="text-center fw-bold text-black mb-0 ">
                            <?php
                            $res['sonai_sintered'];

                            // Replace literal '\n' with actual newlines
                            $res['sonai_sintered'] = str_replace('\\n', "\n", $res['sonai_sintered']);

                            // Display the content with proper newlines in HTML
                            echo nl2br(htmlspecialchars($res['sonai_sintered'], ENT_QUOTES, 'UTF-8'));
                            ?>
                        </p>
                    </div>
                    <hr class="ts-hr-line-table my-2">
                    <div class="row row-cols-2  ">
                        <p class="text-center text-black fw-bold mb-0 ">
                            EBS
                        </p>
                        <p class="text-center fw-bold text-black mb-0 ">

                            <?php
                            $res['EBS'];

                            // Replace literal '\n' with actual newlines
                            $res['EBS'] = str_replace('\\n', "\n", $res['EBS']);

                            // Display the content with proper newlines in HTML
                            echo nl2br(htmlspecialchars($res['EBS'], ENT_QUOTES, 'UTF-8'));
                            ?>
                        </p>
                    </div>
                    <hr class="ts-hr-line-table my-2">
                    <div class="row row-cols-2  ">
                        <p class="text-center text-black fw-bold mb-0 ">
                            SBS
                        </p>
                        <p class="text-center fw-bold text-black mb-0 ">
                            <?php
                            $res['SBS'];
                            // Replace literal '\n' with actual newlines
                            $res['SBS'] = str_replace('\\n', "\n", $res['SBS']);
                            // Display the content with proper newlines in HTML
                            echo nl2br(htmlspecialchars($res['SBS'], ENT_QUOTES, 'UTF-8'));
                            ?>
                        </p>
                    </div>
                    <hr class="ts-hr-line-table my-2">
                    <div class="row row-cols-2  ">
                        <p class="text-center text-black fw-bold mb-0 ">
                            Brenta
                        </p>
                        <p class="text-center fw-bold text-black mb-0 ">
                            <?php
                            $res['Brenta'];

                            // Replace literal '\n' with actual newlines
                            $res['Brenta'] = str_replace('\\n', "\n", $res['Brenta']);

                            // Display the content with proper newlines in HTML
                            echo nl2br(htmlspecialchars($res['Brenta'], ENT_QUOTES, 'UTF-8'));
                            ?>

                        </p>
                    </div>

                </div>
                <div class="col-lg-8" data-aos="fade-left" data-aos-once="true">
                    <div class="ts-product-table">
                        <?php
                        // Example echoed data
                        $echoed_data = $res['product_details'];

                        // Explode the echoed data into individual segments
                        $rows = explode('/', $echoed_data);

                        // Start building the table HTML
                        $table_html = '<table class="js__editable-table">';
                        $table_html .= '<thead>';
                        $table_html .= '<tr>';
                        $table_html .= '<th>brand</th>';
                        $table_html .= '<th>Description</th>';
                        $table_html .= '<th>Year</th>';
                        $table_html .= '<th>Front brake</th>';
                        $table_html .= '<th>Rear brake</th>';
                        $table_html .= '</tr>';
                        $table_html .= '</thead>';
                        $table_html .= '<tbody>';

                        // Loop through each row segment
                        foreach ($rows as $row) {
                            // Explode each row segment into its components
                            $columns = explode('_', $row);
                            if (count($columns) == 5) { // Ensure we have exactly 5 columns
                                $table_html .= '<tr class="text-black">';
                                $table_html .= '<td class="text-black">' . htmlspecialchars($columns[0], ENT_QUOTES, 'UTF-8') . '</td>';
                                $table_html .= '<td class="text-black">' . htmlspecialchars($columns[1], ENT_QUOTES, 'UTF-8') . '</td>';
                                $table_html .= '<td class="text-black">' . htmlspecialchars($columns[2], ENT_QUOTES, 'UTF-8') . '</td>';
                                // Replace "true" with tick and "false" with cross
                                $table_html .= '<td class="text-black">' . ($columns[3] === 'true' ? '<img width="16" src="./assets/icons/tick.svg" alt="Tick">' : ($columns[3] === 'false' ? 'X' : '&nbsp;')) . '</td>';
                                $table_html .= '<td class="text-black">' . ($columns[4] === 'true' ? '<img width="16" src="./assets/icons/tick.svg" alt="Tick">' : ($columns[4] === 'false' ? 'X' : '&nbsp;')) . '</td>';
                                $table_html .= '</tr>';
                            }
                        }

                        $table_html .= '</tbody>';
                        $table_html .= '</table>';
                        // Display the constructed table HTML
                        echo $table_html;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>