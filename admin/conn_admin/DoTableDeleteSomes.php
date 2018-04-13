<?php
	$pdo = new PDO("mysql:local=localhost;dbname=db_ph",'root','root');
	$pdo->query("set names utf8;");
	// $del_id = $_GET['del_id'];
	// // var_dump($del_id);
	// $sql = "delete from tb_article where art_id = $del_id";
	// $del = $pdo->exec($sql);
	// // $del->exec();
	// if($del){
	// 	echo "<script>alert('删除成功!')</script>";
	// 	echo "<script>window.location=('../design.php');</script>";
	// }else{
	// 	echo "<script>alert('删除失败!')</script>";
	// 	echo "<script>window.location=('../design.php');</script>";
	// }
	// $i = 0;
	// while($_POST['ids']){
	// 	$row_del = array($i++ => $_POST['ids']);
	// }
	// $pieces = explode(" ", $_POST['id_(art_id)']);
	// var_dump($_POST['id_10']);
	$i = 0;
	$sql = "select id from tb_dingdan";
	$art_id = $pdo->query($sql);
	while($art = $art_id->fetch()){
		// var_dump($art);
		// var_dump(@$_POST['id_'.$art[0]]);
		// if(@$_POST['id_'.$art_id[0]] != null){
		// 	echo $_POST['id_'.$art_id[0]];
		// }else{
		// 	echo "!";
		// }
		$del = @$_POST['id_'.$art[0]];
		if($del != null){
			echo $del;
			$sql = "delete from tb_dingdan where id = $del";
			$delete = $pdo->exec($sql);
			if (!$delete) {
				echo "<script>alert('删除失败第".$del."条!')</script>";
				echo "<script>window.location=('../design.php');</script>";
				return;
			}else{

				$i++;
			}
		}


	}
	if($i){
			echo "<script>alert('删除成功!')</script>";
			echo "<script>window.location=('../design.php');</script>";
		}
?>
