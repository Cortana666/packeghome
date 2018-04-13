<?php
  $pdo = new PDO("mysql:local=localhost;dbname=db_ph","root","root");
  $pdo -> query("set names utf8;");
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $sql = "insert into tb_worker (name,phone) values('$name','$phone')";
  $res = $pdo -> exec($sql);
  if ($res) {
    echo "<script>alert('增加配送人员成功!');location='../sender.php'</script>";
  }
 ?>
