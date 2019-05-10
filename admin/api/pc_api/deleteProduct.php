<?php
 require_once './dbSql.php';

 $id=$_POST['id'];

 $sql="delete from books where id= $id";

$res=mysqli_zsg($sql);

if($res){   
    
    echo '{ "code":10000, "msg":"ok" }';
    
}else{

    echo '{ "code":10001, "msg":"fail" }';
}



?>