<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'\admin\controller\conn.php');


$sql= "SELECT Max(`id`) From `news`;";

$res = $pdo->query($sql);

$row = $res->fetch(PDO::FETCH_ASSOC);
var_dump($row);
echo '<a href="\admin\controller\newsMan\news_delete.php?id='.$row['Max(`id`)'].'" onclick="return delConfirm();""> 删除</a></th>';

?>
<script>

    function delConfirm(){
       var r =  confirm('您确定要删除吗？')
       if(r==true){
           return true;
       }else{
            return false;
       };
    };

</script>
