<?php
  $pdo = new PDO("mysql:local=localhost;dbname=db_ph","root","root");
  $pdo -> query("set names utf8;");
  $id = $_POST['hidden'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $newpassword = $_POST['newpassword'];
  $sql = "select * from tb_admin where id = $id";
  $res = $pdo -> query($sql);
  $row = $res -> fetch();
  if ($row['password'] == $password) {
    $sql = "update tb_admin set password = '$newpassword' where id = $id";
    $res = $pdo -> exec($sql);
    if ($res) {
      echo "<script>alert('修改成功!');location='../relogin.php'</script>";
    }
  }else {
    echo "<script>alert('原密码错误，修改失败!');location='../resetpassword.php?id=".$id."'</script>";
  }
 ?>
