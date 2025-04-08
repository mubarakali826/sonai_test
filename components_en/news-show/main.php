<?php
$id = $_GET['id'];
$sqlPro = "SELECT * FROM `news` WHERE `id`=$id;";
$row = $pdo->query($sqlPro)->fetch(PDO::FETCH_ASSOC);

// Get next new items
$sqlPrev = "SELECT `id` FROM `news` WHERE `id` < $id ORDER BY `id` DESC LIMIT 1;";
$prevRow = $pdo->query($sqlPrev)->fetch(PDO::FETCH_ASSOC);

// Get Previous new items
$sqlPrev = "SELECT `id` FROM `news` WHERE `id` < $id ORDER BY `id` DESC LIMIT 1;";
$prevRow = $pdo->query($sqlPrev)->fetch(PDO::FETCH_ASSOC);

// Get next new items
$sqlNext = "SELECT `id` FROM `news` WHERE `id` > $id ORDER BY `id` ASC LIMIT 1;";
$nextRow = $pdo->query($sqlNext)->fetch(PDO::FETCH_ASSOC);

?>

<?php
$breadcrumbs = [
    ['text' => 'Home', 'url' => './'],
    ['text' => 'News ', 'url' => '/news.php'],
    ['text' => 'News detail',],
];

@include $componentsPath . "/global/breadcrumb.php"
    ?>



<div class="ts-container-fluid">
    <div class="mb-14">
        <h1 class="ts-fs-32 fw-bold text-black text-center mb-2"><?php echo $row['title_en'] ?></h1>
        <div class="d-flex flex-wrap justify-content-center ts-text-gray-5 text-center ">
            <p>Date: <?php echo $row['intime'] ?></p>
        </div>
        <p class="fw-bold">
            <?php echo $row['content_en'] ?>
        </p>
        <img class="w-100 mb-3" src="assets\images\news\details\<?php echo $row['Simg'] ?>" alt="..." />
    </div>
</div>