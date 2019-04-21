<?php
  //开启session
  session_start();
  //清除session
  unset($_SESSION["Info"]);
   //跳转到登录页面
   header("location:./UserLogin.html");

?>