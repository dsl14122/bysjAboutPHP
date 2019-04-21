<?php 
    //获取传递过来的id
    $id = $_GET['id'];
    // 导入文件
    require_once "../../link/linkFunc.php";

    //去执行数据库
    $sql = "delete from address where id=$id";

    $res =mysqli_zsg($sql);
    //判断结果
    if($res){

        echo '{ "code":10000, "msg":"ok" }';
    }else{

        echo '{ "code":10001, "msg":"fail" }';
    }
?>