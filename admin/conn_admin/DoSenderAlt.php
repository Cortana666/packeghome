<?php
  $pdo = new PDO("mysql:local=localhost;dbname=db_ph","root","root");
  $pdo -> query("set names utf8;");
  $id = $_POST['hidden'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $cred = $_POST['cred'];
  $sql = "update tb_worker set name = '$name',phone = '$phone',cred = '$cred' where id = $id";
  $res = $pdo -> exec($sql);
  if ($res) {
    echo "<script>alert('修改成功!');location='../sender.php'</script>";
  }
 ?>
