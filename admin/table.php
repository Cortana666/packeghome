<?php
  header("Content-type:text/html;charset=utf8;");
  $pdo = new PDO("mysql:local=localhost;dbname=db_ph","root","root");
  $pdo -> query("set names utf8;");
  $company = @$_POST['company'];
  $res = $pdo -> query("select company from tb_company where id = $company");
  foreach ($res as $key => $value) {
    $company = $value['company'];
  }
  $number = @$_POST['number'];
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.php" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.php">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="">管理员</a></li>
                <li><a href="register.php">修改密码</a></li>
                <li><a href="login.php">退出</a></li>
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
                        <li><a href="design.php"><i class="icon-font">&#xe008;</i>订单管理</a></li>
                        <li><a href="design.php"><i class="icon-font">&#xe005;</i>配送人员管理</a></li>
                        <li><a href="design.php"><i class="icon-font">&#xe006;</i>用户管理</a></li>
                        <li><a href="design.php"><i class="icon-font">&#xe004;</i>管理员管理</a></li>
                        <li><a href="design.php"><i class="icon-font">&#xe033;</i>广告管理</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">订单管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">公司:</th>
                            <td>
                                <select name="company" id="">
                                 <option value="">全部</option>
                                  <?php
                                    $res_c = $pdo -> query("select * from tb_company");
                                    // $row = $res_c -> fetchAll();
                                    // var_dump($row);
                                    foreach ($res_c as $key => $show_c) {
                                      echo "<option value=\"".$show_c['id']."\">".$show_c['company']."</option>";
                                    }
                                   ?>
                                </select>
                            </td>
                            <th width="70">订单号:</th>
                            <td><input class="common-text" placeholder="关键字" name="number" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="conn_admin/art_del_some.php">
                <div class="result-title">
                    <div class="result-list">
                        <a id="batchDel" onclick="document.getElementById('myform').submit();"><i class="icon-font" ></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>类别</th>
                            <th>状态</th>
                            <th>派送员</th>
                            <th>用户</th>
                            <th>重量</th>
                            <th>价格</th>
                            <th>时间</th>
                            <th>订单号</th>
                            <th>操作</th>
                        </tr>
                        <?php
                        if ($company != "" || $number != "") {
                        // echo "<script>alert(\"class\");</script>";
                          if ($company == "") {
                            // echo "<script>alert('下拉为空');</script>";
                            // var_dump(@$class_num);
                            // var_dump($number);
                            $res = $pdo -> query("select * from tb_dingdan where number = $number");
                            $count = $pdo -> query("select count(*) from tb_dingdan where number = $number");
                          }else if($number == ""){
                            // echo "<script>alert('搜索框为空');</script>";
                            $res = $pdo -> query("select * from tb_dingdan where company = '$company'");
                            $count = $pdo -> query("select count(*) from tb_dingdan where company = '$company'");
                          }else {
                            // echo "<script>alert('全不为空');</script>";
                            $res = $pdo -> query("select * from tb_dingdan where company = '$company' and number = $number");
                            $count = $pdo -> query("select count(*) from tb_dingdan where company = '$company' and number = $number");
                            // echo "<script>alert($company);</script>";
                          }
                          foreach ($res as $key => $show) {
                            $show_id = $show['id'];
                            echo "<tr>
                               <td class=\"tc\"><input name=\"id_".$show_id."\" value=\"".$show_id."\" type=\"checkbox\"></td>
                               <td>".$show['id']."</td>
                               <td>".$show['type'].'('.$show['company'].')'."</td>
                               <td>";
                               ?>
                               <?php if($show['status'] == 1){echo '完成';}else{echo '处理中';} ?>
                               <?php
                               echo "</td>
                               <td>".$show['sender']."</td>
                               <td>".$show['receiver']."</td>
                               <td>".$show['weight']."</td>
                               <td>".$show['money']."</td>
                               <td>".$show['time']."</td>
                               <td>".$show['number']."</td>
                               <td>
                                   <a class=\"link-update\" href=\"conn_admin/art_alt.php?id=".$show_id."\">修改</a>
                                   <a class=\"link-del\" href=\"conn_admin/art_del.php?del_id=".$show_id."\">删除</a>
                               </td>
                           </tr>";
                          }
                        }else {
                          $res_s = $pdo -> query("select * from tb_dingdan");
                          $count = $pdo -> query("select count(*) from tb_dingdan");
                          foreach ($res_s as $key => $show) {
                            $show_id = $show['id'];
                            echo "<tr>
                               <td class=\"tc\"><input name=\"id_".$show_id."\" value=\"".$show_id."\" type=\"checkbox\"></td>
                               <td>".$show['id']."</td>
                               <td>".$show['type'].'('.$show['company'].')'."</td>
                               <td>";
                               ?>
                               <?php if($show['status'] == 1){echo '完成';}else{echo '处理中';} ?>
                               <?php
                               echo "</td>
                               <td>".$show['sender']."</td>
                               <td>".$show['receiver']."</td>
                               <td>".$show['weight']."</td>
                               <td>".$show['money']."</td>
                               <td>".$show['time']."</td>
                               <td>".$show['number']."</td>
                               <td>
                                   <a class=\"link-update\" href=\"conn_admin/art_alt.php?id=".$show_id."\">修改</a>
                                   <a class=\"link-del\" href=\"conn_admin/art_del.php?del_id=".$show_id."\">删除</a>
                               </td>
                           </tr>";
                          }
                        }
                         ?>
                    </table>
                    <?php
                      $count_show = $count -> fetch();
                     ?>
                    <div class="list-page"> <?php echo $count_show[0]; ?> 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
