<?php
  $pdo = new PDO("mysql:local=localhost;dbname=db_youme","root","root");
  $pdo -> query("set names utf8;");
  $class_num = $_POST['colId'];
  if ($class_num == '1') {
    $class = "大生活";
  }elseif ($class_num == '2') {
    $class = "光影斑斓";
  }elseif ($class_num == '3') {
    $class = "如是观";
  }
  $headline = $_POST['title'];
  $publisher = $_POST['author'];
  $content = $_POST['content'];
  $res_count = $pdo -> query("select count(*) from tb_article");
  $count = $res_count -> fetch();
  date_default_timezone_set('Asia/Shanghai');
  $up_date = date("Y-m-d");
  // var_dump($up_date);
  // var_dump($count[0]+1);
  // var_dump($headline);
  // var_dump($publisher);
  // var_dump($up_date);
  // var_dump($content);
  // var_dump($class);
  // var_dump($class_num);
    // $sql = "insert into tb_article (art_id,headline,publisher,up_date,content,class,class_num) values('$count[0]+1','$headline','$publisher','$up_date','$content','$class','$class_num')";
    $sql = "insert into tb_article (art_id,headline,publisher,up_date,content,class,class_num) values($count[0]+1,'$headline','$publisher','$up_date','$content','$class','$class_num')";
    $res = $pdo -> exec($sql);
    if ($res) {
      echo "<script>alert('增加文章成功!');location='../design.php'</script>";
    }
 ?>
