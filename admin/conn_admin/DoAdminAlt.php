<?php
  $pdo = new PDO("mysql:local=localhost;dbname=db_ph","root","root");
  $pdo -> query("set names utf8;");
  $id = $_POST['hidden'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "update tb_admin set username = '$username',password = '$password' where id = $id";
  $res = $pdo -> exec($sql);
  if ($res) {
    echo "<script>alert('修改成功!');location='../admin.php'</script>";
  }
 ?>
