<?php
// 导入文件
require_once './dbSql.php';
$id=$_GET['id'];

// 生成sql语句
$sql="select * from books  where id=$id";
$arr=mysqli_c($sql);

echo json_encode($arr)



?>