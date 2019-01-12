<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
</head>
<body>
	<center>

		<h2>在线留言板</h2>
		<h3>添加留言</h3>
		<a href="./3.look.php">查看</a>
		<a href="./1.add.php">添加</a>
		<hr width="80%">
		<form action="./2.tianjia.php" method="post">
			
			作者：
			<input type="text" name="title"><br>
			标题：
			<input type="text" name="author"><br>
			内容：
			<input type="text" name="content"><br>

			<input type="submit" value="添加留言">


		</form>

	</center>
</body>
</html>