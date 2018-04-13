<?php
    session_start();
    $pdo = new PDO("mysql:host=localhost;dbname=db_youme","root","root");
    $stmt = $pdo->prepare("select username,password from tb_user");
    $pdo ->query("set names utf8;");
    $stmt ->execute();
    if (isset($_POST["login"])) {
        while($arr = $stmt->fetch(PDO::FETCH_ASSOC)){
            if( $_POST['username'] == $arr["username"] ){
                if($_POST['pwd'] == $arr["password"]){
                    $_SESSION["admin"]= $_POST['username'];
                    echo "<script>alert('登陆成功！');location.href='index.php';</script>";
                }else{
                    echo "<script>alert('密码错误！');location.href='login.php';</script>";
                }
            }
        }
        if(!isset($_SESSION["admin"])){
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
                        <input type="text" name="username" value="admin" id="user" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="pwd" value="admin" id="pwd" size="35" class="admin_input_style" />
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
