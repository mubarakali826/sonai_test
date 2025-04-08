<?php
// Get cate_id from the URL if present, otherwise default to 0
$cate_id = isset($_GET['cate_id']) ? htmlspecialchars($_GET['cate_id']) : 0;
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "";
?>

<div>
    <div class="ts-product-title-list px-4 py-2">
        <div class="ts-container-fluid">
            <div class="row gap-2 gap-md-0">
                <div class="col-md-4">
                    <form id="search-form" action="./products-inquiry.php" method="get">
                        <select class="form-select ts-product-select" aria-label="Product select menu"
                            id="product-select" name="cate_id">
                            <!-- Add a "Select All" option -->
                            <option value="all">Select All</option>
                            <?php
                            try {
                                $sql = "SELECT * FROM `productmodals`";
                                $stmt = $pdo->query($sql);
                                $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                $displayedBrands = [];

                                foreach ($brands as $brand) {
                                    if (!in_array($brand['product_name'], $displayedBrands)) {
                                        $displayedBrands[] = $brand['product_name'];
                                        $selected = ($brand['value'] == $cate_id) ? 'selected' : ''; // Check if the current value matches cate_id
                                        ?>
                            <option value="<?php echo htmlspecialchars($brand['value']); ?>" <?php echo $selected; ?>>
                                <?php echo htmlspecialchars($brand['product_name']); ?>
                            </option>
                            <?php
                                    }
                                }
                            } catch (PDOException $e) {
                                echo "Database Error: " . $e->getMessage();
                            }
                            ?>
                        </select>
                </div>
                <div class="col-md-4">
                    <div>
                        <input type="text" class="form-control" placeholder="竞争代码" name="product_id"
                            value="<?php echo $product_id ?>">
                    </div>
                </div>
                <div class="col-md-4 d-md-flex justify-content-end">
                    <button type="submit"
                        class="btn ts-btn-primary fw-bold px-5 d-flex align-items-center gap-2 w-md-down-auto justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.772" height="12.769"
                            viewBox="0 0 12.772 12.769">
                            <path id="Path_40" data-name="Path 40"
                                d="M9.483,10.682a5.93,5.93,0,1,1,1.2-1.2l1.843,1.843a.847.847,0,0,1-1.2,1.2Zm-3.552-.514A4.237,4.237,0,1,0,1.695,5.931,4.237,4.237,0,0,0,5.931,10.168Z"
                                fill="#fff" />
                        </svg>
                        搜索
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get URL parameters
    var urlParams = new URLSearchParams(window.location.search);
    var cateId = urlParams.get('cate_id');

    // If there's a cate_id in the URL, set the corresponding option in the select box
    if (cateId) {
        document.getElementById('product-select').value = cateId;
    }

    // Handle form submission for the "Select All" option
    document.getElementById('search-form').addEventListener('submit', function(event) {
        var selectedValue = document.getElementById('product-select').value;

        // If "Select All" option is chosen, remove the cate_id and product_id from the URL
        if (selectedValue === 'all') {
            event.preventDefault();
            var url = new URL(window.location.href);
            url.searchParams.delete('cate_id');
            url.searchParams.delete('product_id');
            window.location.href = url.href;
        }
    });
});
</script>