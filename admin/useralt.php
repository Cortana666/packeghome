<?php
    session_start();
    if(isset($_SESSION["username"])){
    }else{
        echo "<script>alert('请登录！');location.href='login.php';</script>";
    }
?>
<?php
  $pdo = new PDO("mysql:local=localhost;dbname=db_ph","root","root");
  $pdo -> query("set names utf8;");
  $id = $_GET['id'];
  $sql = "select * from tb_user where id = $id";
  $res = $pdo -> query($sql);
  $row = $res -> fetch();
 ?>
 <!doctype html>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>后台管理</title>
     <link rel="stylesheet" type="text/css" href="css/common.css"/>
     <link rel="stylesheet" type="text/css" href="css/main.css"/>
     <script type="text/javascript" src="../js/libs/modernizr.min.js"></script>
 </head>
 <body>
   <div class="topbar-wrap white">
       <div class="topbar-inner clearfix">
           <div class="topbar-logo-wrap clearfix">
               <h1 class="topbar-logo none"><a href="index.php" class="navbar-brand">后台管理</a></h1>
               <ul class="navbar-list clearfix">
                   <li><a class="on" href="index.php">首页</a></li>
               </ul>
           </div>
           <div class="top-info-wrap">
               <ul class="top-info-list clearfix">
                   <li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
                   <li><a href="resetpassword.php?id=<?php echo $_SESSION['id']; ?>">修改密码</a></li>
                   <li><a href="logout.php">退出</a></li>
               </ul>
           </div>
       </div>
   </div>
 <div class="container clearfix">
     <div class="sidebar-wrap">
         <div class="sidebar-title">
             <h1>菜单</h1>
         </div>
         <div class="sidebar-content">
             <ul class="sidebar-list">
                 <li>
                     <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                     <ul class="sub-menu">
                         <li><a href="table.php"><i class="icon-font">&#xe008;</i>订单管理</a></li>
                         <li><a href="sender.php"><i class="icon-font">&#xe005;</i>配送人员管理</a></li>
                         <li><a href="user.php"><i class="icon-font">&#xe006;</i>用户管理</a></li>
                         <li><a href="admin.php"><i class="icon-font">&#xe004;</i>管理员管理</a></li>
                         <li><a href="advertisement.php"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                     <ul class="sub-menu">
                         <li><a href="system.php"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                         <li><a href="cleancache.php"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                         <li><a href="backup.php"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                         <li><a href="restore.php"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
     <!--/sidebar-->
     <div class="main-wrap">

         <div class="crumb-wrap">
             <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">订单管理</a><span class="crumb-step">&gt;</span><span>修改订单</span></div>
         </div>
         <div class="result-wrap">
             <div class="result-content">
                 <form action="conn_admin/DoUserAlt.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                   <input type="hidden" name="hidden" value="<?php echo $row['id']; ?>">
                     <table class="insert-tab" width="100%">
                       <tbody>
                           <tr>
                               <th><i class="require-red">*</i>姓名：</th>
                               <td>
                                   <input disabled="true" class="common-text required" id="title" name="username" size="50" value="<?php echo $row['name'] ?>" type="text">
                               </td>
                           </tr>
                           <tr>
                               <th><i class="require-red">*</i>是否封禁：</th>
                               <td>
                                   <select class="" name="ban">
                                     <option value="">请选择</option>
                                     <option <?php if($row['ban'] == 0){echo "selected='selected'";} ?> value="0">否</option>
                                     <option <?php if($row['ban'] == 1){echo "selected='selected'";} ?> value="1">是</option>
                                   </select>
                               </td>
                           </tr>
                           <tr>
                               <th></th>
                               <td>
                                   <input name='sub' class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                   <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                               </td>
                           </tr>
                       </tbody></table>
                 </form>
             </div>
         </div>

     </div>
     <!--/main-->
 </div>
 </body>
 </html>
