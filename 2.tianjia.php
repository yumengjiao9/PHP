 <?php 

date_default_timezone_set('PRC');

require_once'./5.config.php';

$info = $_POST;

$info['ctime'] = time();

var_dump($info);

$link = mysqli_connect(HOST,USER,PASS,BDNAME) or die('链接数据库失败');

mysqli_set_charset($link,'utf8');

$sql = "insert into liuyan(title,author,content,ctime) values('{$info['title']}','{$info['author']}','{$info['content']}','{$info['ctime']}')";

$res = mysqli_query($link,$sql);


var_dump($res);die();

if($res){

	header('location:./3.look.php');
}else{

	echo "<script>alert('添加失败！');window.location.href='1.add.php</script>";
}

mysqli_free_result($res);

mysqli_close($link);








?>