<?php

	require_once'./5.config.php';

		$link = mysqli_connect(HOST,USER,PASS,BDNAME) or die('链接数据库失败');

		mysqli_set_charset($link,'utf8');

		$id = $_POST['id'];
		echo $id;

		$sql = "update liuyan set author = '{$_POST['author']}',title = '{$_POST['title']}',content = '{$_POST['content']}' where id={$id}";
		var_dump($sql);

		$res = mysqli_query($link,$sql);

		// var_dump($res);

		$num = mysqli_affected_rows($link);
		echo $num;
		if($num){

			header('location:./3.look.php');
		}else{
			echo "<scrtip>alert('修改失败！');window.location.href='3.look.php</script>";
		}

		// mysqli_free_result($res);

		mysqli_close($link);





?>