<?php
    session_start();
    $pdo = new PDO("mysql:local=host;dbname=db_youme","root","root");
    if(isset($_POST["submit"])){
        $stmt = $pdo->prepare("select username from tb_user");
        $pdo ->query("set names utf8;");
        $stmt->execute();
        while($rows = $stmt ->fetch(PDO::FETCH_ASSOC) ){
            if($rows["username"] !== $_POST["username"]){
                $_SESSION["user"] == 1;
                if(strlen($_POST["pwd"]) !== 0  || strlen($_POST["pwdsec"]) !== 0){
                    if($_POST["pwd"] == $_POST["pwdsec"]){
                        $stmt = $pdo ->prepare("insert into tb_user values('','$_POST[username]','$_POST[pwd]','')");
                        $pdo->query("set names utf8;");
                        $stmt-> execute();
                        if($stmt->rowcount() >0 ){
                            echo "<script>alert('注册成功');location.href='login.php';</script>";
                        }else{
                            echo "<script>alert('注册失败');location.href='register.php';</script>";
                        }
                    }
                }else{

                }
            }
        }
        if(!isset($_SESSION["user"])){
            echo "<script>alert('用户名已经存在！');location.href='register.php';</script>";
        }
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="css/admin_login.css" rel="stylesheet" type="text/css"/>
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
                        <input type="text" name="username" value="admin" id="user" size="35" class="admin_input_style"/>
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="pwd" value="" id="pwd" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">确认密码：</label>
                        <input type="password" name="pwdsec" value="" id="pwd" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" name="submit" tabindex="3" value="提交" class="btn btn-primary"  style="width:100%;margin:0;"/>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>