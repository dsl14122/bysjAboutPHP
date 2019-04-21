<?php

//引入接口
require_once "../../link/linkFunc.php";
 //操作数据库
 $sql="  select * from books where isCart='1' ";

 $data=mysqli_c($sql);

 echo json_encode($data);
?>