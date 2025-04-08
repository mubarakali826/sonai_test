<?php
/*
* mysql 输入数据
* insert into table_name(column_name)values()
*/
require 'connect.php';

$sql = "INSERT INTO `user`(`uname`,`age`,`pwd`) VALUES('test3', 25, '57sd545Esfs5sdfs1D');";

//php脚本执行这条SQL语句

$res=$pdo->exec($sql);

// Print the result

!$res ? print_r($pdo->errorInfo()) : print 'successfully insert the number of  '. $res .' item into table, the ID of item is '.$pdo->lastInsertId();

?>