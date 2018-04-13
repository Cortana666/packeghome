<?php
  $pdo = new PDO("mysql:local=localhost;dbname=db_ph","root","root");
  $pdo -> query("set names utf8;");
  $id = $_POST['hidden'];
  $ban = $_POST['ban'];
  $sql = "update tb_user set ban = '$ban' where id = $id";
  $res = $pdo -> exec($sql);
  if ($res) {
    echo "<script>alert('修改成功!');location='../user.php'</script>";
  }
 ?>
