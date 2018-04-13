<?php
    if (isset($_POST["login"])) {
        session_start();
        $pdo = new PDO("mysql:host=localhost;dbname=db_ph","root","root");
        $pdo ->query("set names utf8;");
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from tb_admin where username = '$username'";
        $res = $pdo -> query($sql);
        $row = $res -> fetch();
        if ($row) {
          if ($password == $row['password']) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            echo "<script>alert('登陆成功！');location.href='index.php';</script>";
          }else {
            echo "<script>alert('密码错误！');location.href='login.php';</script>";
          }
        }else {
          echo "<script>alert('账户不存在！');location.href='login.php';</script>";
        }
      }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="css/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="" id="user" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password" value="" id="pwd" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="button" name="" tabindex="3" value="注册" class="btn btn-primary" onclick="window.location.href='register.php'"/>
                        <input type="submit" name="login" tabindex="3" value="登陆" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>
