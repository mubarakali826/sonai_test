<?php

header('Content-Type:text/html;charset=utf-8');
$conn = mysqli_connect('localhost','mykatipartsv1','xSoSblpe6A0eUHYqzBU','mykatipartsv1') or die('connection is not ok');
mysqli_query($conn,'set names utf8');

// 弹出提示框然后跳转指定的URL

function alert($str,$url){
    echo '<script>window.alert("'.$str.'");location.href="'.$url.'";</script>';
}