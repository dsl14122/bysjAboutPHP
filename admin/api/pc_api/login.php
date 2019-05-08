<?php
 
require_once "./dbSql.php";

//  获取响应
 $username =$_POST['username'];
 $password=$_POST['password'];

//  生成sql语句
 $sql="select * from admin_user where username='$username' and password='$password'";
 
 //操作数据库
  $arr=mysqli_c($sql);
  
  echo json_encode($arr);
  
  //判断结果
//   if(count($arr)>0){   
//      //开启session
//     session_start();
//     $_SESSION['Users']=$arr[0];
//     echo '{ "code":10000, "msg":"ok" }';
    
// }else{

//     echo '{ "code":10001, "msg":"fail" }';
// }






?>