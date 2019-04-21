<?php
  header('content-type:text/html;charset=utf-8;');
 //获取参数
 $id=$_GET['id'];

 //引入数据库文件
 require_once "../../link/linkFunc.php";
 //操作数据库
 $sql="select * from books where id='$id'";
 $arr=mysqli_c($sql);
 echo json_encode($arr[0]);
//  if(count($arr)>0 ){
//      var_dump($arr);
//      loc
//  }

?>