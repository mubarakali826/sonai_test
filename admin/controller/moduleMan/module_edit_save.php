<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'\admin\controller\conn.php');
// 后台处理数据4步骤

// 1 接收数据
$id = $_POST['id'];
$module = $_POST['module'];
$module_en = $_POST['module_en'];
$orderno = $_POST['orderno'];


// 2 验证数据有效性

if (strlen($module) < 1) {
    alert('请输入单页模块名称', '../../module_edit.php?id='.$id);
    exit;
}

// 3 第三步： 构造SQL语句，将数据写入数据表

$sql = "UPDATE `module` SET `module` = '$module',`orderno` = '$orderno' ,`module_en` = $module_en WHERE `id` = $id;";
//var_dump($sql); 检查一下语句，是个好习惯
//php脚本执行这条SQL语句


// 4. 第四步：将执行结果显示出来
$res=$pdo->exec($sql);

// Print the result

!$res ? alert('修改失败！','../../module_edit.php?id='.$id) : alert('修改成功！','../../module_list.php');
