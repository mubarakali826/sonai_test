<div class="ts-bg-gray-3 pt-5 ">
    <div class="ts-container-fluid  ">
        <div class="mx-auto">
            <div class="ts-container ">
                <div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4  pb-4">
                        <?php
                        try {
                            // SQL query to select all rows from the "cate" table
                            $sql = "SELECT * FROM `cate`";

                            // Prepare and execute the SQL query using your existing PDO connection
                            $stmt = $pdo->query($sql);

                            // Fetch all rows into the $brands array
                            $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            // Now, you can loop through the $brands array using foreach
                            foreach ($brands as $brand) {
                                // Access the columns of each row using $brand['column_name']
                                // Example: echo $brand['cate_name'];
                                include $componentsPath . '/product/classification-card.php';
                            }
                        } catch (PDOException $e) {
                            echo "Database Error: " . $e->getMessage();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>