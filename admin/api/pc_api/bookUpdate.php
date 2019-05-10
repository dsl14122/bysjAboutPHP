<?php
// 导入文件
require_once './dbSql.php';
$name=$_POST['name'];
$price=$_POST['price'];
$date=$_POST['date'];
$serial=$_POST['serial'];
$id=$_POST['id'];
// 生成sql语句
$sql="update books set  b_name='$name',b_price='$price',b_date='$date',b_serial='$serial'
       where id=$id";
$arr=mysqli_zsg($sql);

if($arr){   
    
    echo '{ "code":10000, "msg":"ok" }';
    
}else{

    echo '{ "code":10001, "msg":"fail" }';
}



?>