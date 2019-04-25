<?php
 
require_once "./dbSql.php";

//  获取响应
 $username =$_POST['username'];
 $password=$_POST['password'];

//  生成sql语句
 $sql="select * from admin_user where username='$username' and password='$password'";
 
 //操作数据库
  $res=mysqli_c($sql);
  
  
  //判断结果
  if($res){   
    
    echo '{ "code":10000, "msg":"ok" }';
    
}else{

    echo '{ "code":10001, "msg":"fail" }';
}






?>