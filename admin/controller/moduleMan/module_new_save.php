<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '\admin\controller\conn.php');
// 后台处理数据4步骤

// 1 接收数据

$module = $_POST['module'];
$orderno = $_POST['orderno'];



// 2 验证数据有效性

if (strlen($module) < 1) {
    alert('请输入单页模块名称', '/admin/module_new.php');
    exit;
}

// 3 第三步： 构造SQL语句，将数据写入数据表

$sql = "INSERT INTO `module`(`module`,`orderno`) VALUES('$module','$orderno');";
//var_dump($sql); 检查一下语句，是个好习惯
//php脚本执行这条SQL语句


// 4. 第四步：将执行结果显示出来
$res = $pdo->exec($sql);
// Print the result

!$res ? alert('数据处理失败！', '../../module_new.php') : header('Location: ../../module_list.php');