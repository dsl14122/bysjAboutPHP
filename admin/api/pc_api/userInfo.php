<?php
  require_once './dbSql.php';

//   生成sql语句
$sql='select * from admin_user order by id desc';
//操作数据库
$arr=mysqli_c($sql);

echo json_encode($arr);

?>