<?php
 include_once ($_SERVER['DOCUMENT_ROOT'].'\admin\controller\conn.php');
// 后台处理数据4步骤

// 1 接收数据

$boardname = $_POST['boardname'];
$content = $_POST['content'];


// 2 验证数据有效性

if (strlen($boardname) < 1) {
    alert('请输入单页模块名称', 'page_new.php');
    exit;
}

// 3 第三步： 构造SQL语句，将数据写入数据表

$sql = "INSERT INTO `board`(`boardname`,`content`) VALUES('$boardname', '$content');";
//var_dump($sql); 检查一下语句，是个好习惯
//php脚本执行这条SQL语句


// 4. 第四步：将执行结果显示出来
$res=$pdo->exec($sql);

// Print the result

!$res ? alert('数据处理失败！','../../page_new.php') : alert('新增成功！','../../page_list.php');
