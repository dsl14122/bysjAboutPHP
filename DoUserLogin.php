<?php
header('content-type:text/html;charset=utf-8;');
//引入数据 
  $userName=$_REQUEST['userName'];
  $userPwd=$_REQUEST['userPwd'];

//1.引入函数文件
include_once "./link/linkFunc.php";
//2.执行sql语句-查
$sql="select * from userinfo  where  userName='$userName' and userPwd= '$userPwd'";
   $arr=mysqli_c($sql);
//    var_dump( $arr[0]);
//    return false;
 //判断操作是否成功
 if(count($arr)>0){
   //输入正确，跳转到主页
   header("location:index.php");
    //开启session
    session_start();
     $_SESSION['Info']=$arr[0];
 }else{
     echo "账号或密码错误,请<a href='UserLogin.html'>重新登录</a>";
 }
 






?>