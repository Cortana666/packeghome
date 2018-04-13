<?php
  session_start();
  session_destroy();
  echo "<script>alert('请重新登录！');location.href='login.php';</script>";
?>
