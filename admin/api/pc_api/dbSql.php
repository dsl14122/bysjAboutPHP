<?php

//函数封装

   //1.增删改
 function mysqli_zsg($sql){
   //a.连接数据库
   $link=mysqli_connect("127.0.0.1","root","root","bysj");
    
   //b.执行sql语句
   mysqli_query($link,$sql);
   
   //c.返回受影响行数
   $rows=mysqli_affected_rows($link);
  
   //d.关闭数据库
   mysqli_close($link);
 
   return $rows;
 
  }

 //2.查
 function mysqli_c($sql){
    //a.连接数据库
    $link=mysqli_connect("127.0.0.1","root","root","bysj");
   
    //b.执行sql语句
    $res= mysqli_query($link,$sql);
    
    //c.返回受影响行数
    $arr=mysqli_fetch_all($res,1);
   
    //d.关闭数据库
    mysqli_close($link);
  
    return $arr;
 }

?>