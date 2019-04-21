<?php
 header('content-type:text/html;charset=utf-8;');
   //引入函数文件
require_once "../../link/linkFunc.php";
//操作数据库
$sql="select * from address";
$arr=mysqli_c($sql);
echo json_encode($arr);

?>