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
		<table border="1px" cellspacing="0">
				<tr>
				<th>ID</th>
				<th>作者</th>
				<th>标题</th>
				<th>内容</th>
				<th>时间</th>
				<th>操作</th>
				</tr>
				<?php
					require_once'./5.config.php';

					$link = mysqli_connect(HOST,USER,PASS,BDNAME) or die('链接数据库失败');

					mysqli_set_charset($link,'utf8');

					$sql = "select * from liuyan";

					$res = mysqli_query($link,$sql);

					$info = mysqli_fetch_all($res,MYSQLI_ASSOC);
					mysqli_free_result($res);

					mysqli_close($link);


					foreach ($info as $key => $v) {
							$time = date('Y-m-d h:i:s' ,$v['ctime']);

							echo "
								<tr>
									<td>{$v['id']}</td>
									<td>{$v['author']}</td>
									<td>{$v['title']}</td>
									<td>{$v['content']}</td>
									<td>{$time}</td>
									<td>
										<a href='./6.xiugai.php?id={$v['id']}'>修改</a>
										<a href='./4.delet.php?id={$v['id']}'>删除</a>
									</td>
								</tr>";
					}

					


				?>
		</table>

	</center>
</body>
</html>