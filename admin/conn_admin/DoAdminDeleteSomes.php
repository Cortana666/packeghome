<?php
	$pdo = new PDO("mysql:local=localhost;dbname=db_ph",'root','root');
	$pdo->query("set names utf8;");
	$i = 0;
	$sql = "select id from tb_admin";
	$art_id = $pdo->query($sql);
	while($art = $art_id->fetch()){
		$del = @$_POST['id_'.$art[0]];
		if($del != null){
			echo $del;
			$sql = "delete from tb_admin where id = $del";
			$delete = $pdo->exec($sql);
			if (!$delete) {
				echo "<script>alert('删除失败第".$del."条!')</script>";
				echo "<script>window.location=('../admin.php');</script>";
				return;
			}else{
				$i++;
			}
		}
	}
	if($i){
			echo "<script>alert('删除成功!')</script>";
			echo "<script>window.location=('../admin.php');</script>";
		}
?>
