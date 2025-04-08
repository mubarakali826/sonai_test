<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'\admin\controller\conn.php');
// 后台处理数据4步骤

// 1 接收数据

$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];


var_dump($name,$email,$content);


// 2 验证数据有效性

if (strlen($email) < 1) {
    alert('请输入单页模块名称', '/admin/message_list.php');
    exit;
}

// 3 第三步： 构造SQL语句，将数据写入数据表

// 1. Define your SQL query with placeholders
$sql = "INSERT INTO `guestbook`(`name`, `email`, `content`) VALUES(:name, :email, :content)";

// 2. Prepare the statement
$stmt = $pdo->prepare($sql);

// 3. Bind values to the placeholders
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':content', $content);

// 4. Execute the statement
$res = $stmt->execute();

// 5. Check the execution result
if (!$res) {
    alert('数据处理失败！', '../../../contact.php');
} else {
    alert('Your request has been recorded, we will contact you shortly', '../../../contact.php');
}


