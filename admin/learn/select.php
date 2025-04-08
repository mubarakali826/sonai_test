<?php
/**
 * sql 查询
 * 
 * 
*/

require 'connect.php';
$sql = "SELECT id,uname,age FROM user WHERE id>6 LIMIT 2;";

$res = $pdo->query($sql);

// var_dump($res);

foreach( $res as $row){
    print_r($row);
};

?>