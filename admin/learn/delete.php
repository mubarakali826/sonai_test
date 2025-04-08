<?php
/*
* sql 删除 DELETE from TABLE_NAME Where clause
*

*/
require 'connect.php';

$sql = "DELETE FROM `user` WHERE `id` =4; ";

$res = $pdo->exec($sql);

!$res ? print_r($pdo->errorInfo()) : print 'successfully delete the number of  '. $res .' item';
?>

