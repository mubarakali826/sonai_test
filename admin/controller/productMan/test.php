<?php    
   include 'G:\phpstudy\phpstudy_pro\WWW\phpqiye.com\admin\controller\conn.php';
// 后台处理数据四个步骤
// 第一步：接收数据

function checkCate($id){
        $sqlCheck="SELECT * FROM `cate` WHERE `id`=$id;"; 
        global $pdo;
        $res = $pdo->query($sqlCheck)->fetch(PDO::FETCH_ASSOC);
        echo "{$res["module"]}"."/"."{$res["catename"]}";
      }
      
checkCate(3);

?>