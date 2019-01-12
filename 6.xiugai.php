<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
</head>
<body>
	<center>
	<?php

		require_once'./5.config.php';

		$link = mysqli_connect(HOST,USER,PASS,BDNAME) or die('链接数据库失败');

		mysqli_set_charset($link,'utf8');

		$id = $_GET['id'];

		$sql = "select * from liuyan where id=".$id;

		$res = mysqli_query($link,$sql);

		$info = mysqli_fetch_assoc($res);

		mysqli_free_result($res);

		mysqli_close($link);



?>

		<h2>在线留言板</h2>
		<h3>添加留言</h3>
		<a href="./3.look.php">查看</a>
		<a href="./1.add.php">添加</a>
		<hr width="80%">
		<form action="./7.zhixing.php" method="post">
			<input type="hidden" name="id" value="<?php echo $info['id']  ?>">
			作者：
			<input type="text" name="title" value="<?php echo $info['author'] ?>"><br>
			标题：
			<input type="text" name="author" value="<?php echo $info['title'] ?>"><br>
			内容：
			<input type="text" name="content" value="<?php echo $info['content'] ?>"><br>

			<input type="submit" value="修改留言">


		</form>

	</center>
</body>
</html>

