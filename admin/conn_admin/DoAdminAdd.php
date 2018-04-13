<?php
  $pdo = new PDO("mysql:local=localhost;dbname=db_ph","root","root");
  $pdo -> query("set names utf8;");
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "insert into tb_admin (username,password) values('$username','$password')";
  $res = $pdo -> exec($sql);
  if ($res) {
    echo "<script>alert('增加管理员成功!');location='../admin.php'</script>";
  }
 ?>
