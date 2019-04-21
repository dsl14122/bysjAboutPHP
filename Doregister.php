<?php
header('content-type:text/html;charset=utf-8;');
//这里是对数据库进行增添操作
//1.引入封装函数
include_once "./link/linkFunc.php";
//2.引入数据
$userName=$_REQUEST['userName'];
$userPwd=$_REQUEST['userPwd'];
//3.执行sql语句
$sql="insert into userinfo(userName,userPwd) value('$userName','$userPwd') ";
 $rows=mysqli_zsg($sql);
//判断
if($rows!=0){
    echo "注册账号成功！，请点击进入<a href='UserLogin.html'>登录</a>页面。";
}else{
  echo "账号或密码格式不正确,请<a href='register.html'>重新注册</a>";
}




?>