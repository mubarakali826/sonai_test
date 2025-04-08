<?php
$admin_path = $_SERVER['DOCUMENT_ROOT'] . '/admin';
$SImgPath = $_SERVER['DOCUMENT_ROOT'] . '/upProSimg/';
include_once $admin_path . '/controller/conn.php';

// 后台处理数据4步骤

// 1 接收数据
$title = $_POST['title'];
$title_en = $_POST['title_en'];
$author = $_POST['author'];
$author_en = $_POST['author_en'];
$cate_id = $_POST['cate_id'];
$content = $_POST['content'];
$content_en = $_POST['content_en'];
$Simg = $_FILES['Simg'];

// Dump all received data for debugging
var_dump($title);
var_dump($title_en);
var_dump($author);
var_dump($author_en);
var_dump($cate_id);
var_dump($content);
var_dump($content_en);
var_dump($Simg);

// 2 验证数据有效性
if (strlen($title) < 1 && strlen($content) < 1) {
    echo 'fail: 请输入新闻名称和内容';
    exit;
}

// 查询最大ID号，在文件名中加入ID号
$sql = "SELECT Max(`id`) FROM `news`;";
$rs = $pdo->query($sql);
$rows = $rs->fetch(PDO::FETCH_ASSOC);
$int = intval($rows['Max(`id`)']) + 1;

if ($Simg['name']) {
    $ext = strrchr($Simg['name'], '.'); // 截取最后一个点以及后面的内容，得到文件扩展名
    $filename = time() . 'news' . '0' . $int . $ext;
    if (!move_uploaded_file($Simg['tmp_name'], $SImgPath . $filename)) {
        echo 'fail: 图片上传失败';
        exit;
    }
} else {
    $filename = '';
}

// 3 第三步： 构造SQL语句，将数据写入数据表
$sql = "INSERT INTO `news`(`title`, `title_en`, `cate_id`, `author`, `author_en`, `content`, `content_en`, `Simg`) VALUES(:title, :title_en, :cate_id, :author, :author_en, :content, :content_en, :filename)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':title_en', $title_en);
$stmt->bindParam(':cate_id', $cate_id);
$stmt->bindParam(':author', $author);
$stmt->bindParam(':author_en', $author_en);
$stmt->bindParam(':content', $content);
$stmt->bindParam(':content_en', $content_en);
$stmt->bindParam(':filename', $filename);

// var_dump($sql); // 检查一下语句，是个好习惯

// 4. 第四步：将执行结果显示出来
if ($stmt->execute()) {
    header('Location: ../../news_list.php');
    exit;
} else {
    echo 'fail: ' . $stmt->errorInfo()[2];
}
?>