<?php
// 导入文件
   require_once './dbSql.php';
//   接收参数
  $name=$_POST['name'];
  $price=$_POST['price'];
  $date=$_POST['date'];
  $serial=$_POST['serial'];


 //   生成sql语句
$sql="insert into books(b_name,b_price,b_date,b_serial,b_pic) 
value('$name','$price','$date','$serial','./images/books_sort/这是书.jpg')";
$arr=mysqli_zsg($sql);

  if($arr){   
    
    echo '{ "code":10000, "msg":"ok" }';
    
}else{

    echo '{ "code":10001, "msg":"fail" }';
}


?>