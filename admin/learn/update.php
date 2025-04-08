<?php
/*
* mysql update 操作
* UPDATEtable_name SET column_name1= new value, column_name2= new value, column_name3= new value....[WHERE Clause]
* 
*/
require 'connect.php';

$sql = "UPDATE user SET age = 45 WHERE id =2;";

$res=$pdo->exec($sql);

$res ? print '更新成功' . $res .'条记录' : print_r($pdo->errorInfo());

?>