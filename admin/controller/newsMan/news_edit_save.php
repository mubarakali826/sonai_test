<?php

$admin_path = $_SERVER['DOCUMENT_ROOT'] . '/admin';
include_once $admin_path . '/controller/conn.php';

// 后台处理数据4步骤

// 1 接收数据
$id = $_POST['id'];
$title = $_POST['title'];
$title_en = $_POST['title_en'];
$author = $_POST['author'];
$author_en = $_POST['author_en'];
$cate_id = $_POST['cate_id'];
$content = $_POST['content'];
$content_en = $_POST['content_en'];
$Simg = $_FILES['Simg'];

// 查询最大ID号，在文件名中加入ID号
$int = $id;

if ($Simg['name']) {
    $ext = strrchr($Simg['name'], '.'); // 截取最后一个点以及后面的内容，得到文件扩展名
    $filename = time() . 'news' . '0' . $int . $ext;
    move_uploaded_file($Simg['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upNewsImg/' . $filename); // 上传后写入到文件中，必须使用move_upload_file函数
} else {
    $filename = $_POST['old_img'];
}

// var_dump($id,$title,$author,$cate_id,$content,$Simg,$Bimg);

// 2 验证数据有效性
if (strlen($title) < 1 && strlen($content) < 1) {
    echo 'fail: Title and content cannot be empty';
    exit;
}

// 3 第三步： 构造SQL语句，将数据写入数据表
$sql = "UPDATE `news` SET `title` = :title, `title_en` = :title_en, `cate_id` = :cate_id, `author` = :author, `author_en` = :author_en, `content` = :content, `content_en` = :content_en, `Simg` = :filename WHERE `id` = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':title_en', $title_en);
$stmt->bindParam(':cate_id', $cate_id);
$stmt->bindParam(':author', $author);
$stmt->bindParam(':author_en', $author_en);
$stmt->bindParam(':content', $content);
$stmt->bindParam(':content_en', $content_en);
$stmt->bindParam(':filename', $filename);
$stmt->bindParam(':id', $id);

// 4. 第四步：将执行结果显示出来
if ($stmt->execute()) {
    header('Location: ../../news_list.php?id=' . $id);
    exit;
} else {
    echo 'fail: ' . $stmt->errorInfo()[2];
}
?>