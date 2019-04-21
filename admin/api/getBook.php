<?php
    //接收参数
    $pageIndex=$_GET['pageIndex'];
    $pageSize=$_GET['pageSize'];
   
 //引入接口
 require_once "../../link/linkFunc.php";
 //起始页
 $startPage=($pageIndex-1)*$pageSize;
 //操作数据库
 $sql="  select * from books where b_serial='1' ";

   
$sql2=$sql;
$sql.="limit $startPage,$pageSize ";
$data=mysqli_c($sql);

$count=count(mysqli_c($sql2));
$count = ceil($count / $pageSize);
  $arr= [
    "data"=>$data,
    "count"=>$count
  ];

  echo json_encode($arr);

?>