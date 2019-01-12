<?php

require_once'./5.config.php';

$link = mysqli_connect(HOST,USER,PASS,BDNAME) or die('链接数据库失败');

mysqli_set_charset($link,'utf8');

$id = $_GET['id'];

$sql = "delete from liuyan where id=".$id;

$res = mysqli_query($link,$sql);

$num = mysqli_affected_rows($link);

// var_dump($num);

if($num){

	header('location:./3.look.php');
}else{

	echo "<script>alert('添加失败！');window.location.href='3.look.php</script>";
}

mysqli_free_result($num);

mysqli_close($link);

















?>