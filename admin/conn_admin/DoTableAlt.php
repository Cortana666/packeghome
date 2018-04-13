<?php
  $pdo = new PDO("mysql:local=localhost;dbname=db_ph","root","root");
  $pdo -> query("set names utf8;");
  $id = $_POST['hidden'];
  $sender = $_POST['sender'];
  $status = $_POST['status'];
  $weight = $_POST['weight'];
  $money = $_POST['money'];
  $sql = "update tb_dingdan set sender = '$sender',status = '$status',weight = '$weight',money = '$money' where id = $id";
  // var_dump($sql);die;
  $res = $pdo -> exec($sql);
  if ($res) {
    echo "<script>alert('修改成功!');location='../table.php'</script>";
  }
 ?>
