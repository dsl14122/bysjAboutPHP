<?php
  //接收参数
  $nickname=$_POST['nickname'];
  $address=$_POST['address'];
  $street=$_POST['street'];
  $post=$_POST['post'];
  $mobile=$_POST['mobile'];

  //导入文件
  require_once "../../link/linkFunc.php";
  //操作数据库
  $sql="insert into address(ad_nickname,ad_address,ad_street,ad_post,ad_mobile)
                        value('$nickname','$address','$street','$post','$mobile')";
  $res=mysqli_zsg($sql);
  if($res){
    echo '{ "code":10000, "msg":"ok" }';
}else{
    echo '{ "code":10001, "msg":"fail" }';
}

?>