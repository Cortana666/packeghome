<?php
 	$pdo = new PDO("mysql:local=localhost;dbname=db_youme",'root','root');
 	$pdo -> query("set names utf8;");
	$del_id = @$_GET['art_id'];
	$del_time = @$_GET['mes_time'];
	// var_dump($del_id);
	// var_dump($del_time);
	$del = $pdo -> exec("delete from tb_message where art_id = $del_id and mes_time = '$del_time'");

	if($del){
 	echo "<script>alert('删除成功');</script>";
 	echo "<script>window.location.href = '../message.php' ;</script>";
	}else{
 	echo "<script>alert('删除失败');window.location.href = mes.php ;</script>";
 	echo "<script>window.location.href = '../message.php' ;</script>";
	}

 ?>