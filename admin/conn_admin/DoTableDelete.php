<?php
	$pdo = new PDO("mysql:local=localhost;dbname=db_ph",'root','root');
	$pdo->query("set names utf8;");
	$del_id = $_GET['del_id'];
	// var_dump($del_id);
	$sql = "delete from tb_dingdan where id = $del_id";
	$del = $pdo->exec($sql);
	// $del->exec();
	if($del){
		echo "<script>alert('删除成功!')</script>";
		echo "<script>window.location=('../design.php');</script>";
	}else{
		echo "<script>alert('删除失败!')</script>";
		echo "<script>window.location=('../design.php');</script>";
	}
 ?>
