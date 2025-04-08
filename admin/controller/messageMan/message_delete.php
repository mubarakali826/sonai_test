<?php    
   include_once ($_SERVER['DOCUMENT_ROOT'].'\admin\controller\conn.php');
// 后台处理数据四个步骤
// 第一步：接收数据

$id = $_GET['id'];

// 第二步：验证数据有有效性
if(!is_numeric($id)){
    alert('id值出错','\admin\message_list.php');
    exit;
}
// 第三步：构造SQL语句，将ID作为删除条件，实现删除功能

$sql = "DELETE FROM `guestbook` WHERE `id` = $id";

$res = $pdo->exec($sql);
// 第四步：将执行结果显示出来
!$res ? print_r($pdo->errorInfo()) : alert('删除成功',"/admin/message_list.php");
?>
