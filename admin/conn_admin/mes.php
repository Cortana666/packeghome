<?php
  $pdo = new pdo("mysql:host=localhost;dbname=db_youme",'root','root');
  $option = @$_POST['option'];
  $keyword = @$_POST['keywords'];
  if(isset($_POST['sub'])){
	  if($option == ''&&$keyword == ''){
	  	// echo"<script>alert('请选择搜索内容!');</script>";
      $sear = "select tb_message.art_id,headline,message,mes_name,mes_time from tb_message,tb_article where tb_message.art_id = tb_article.art_id";
	  }else if($option == ''){
	  	$sear = "select tb_message.art_id,headline,message,mes_name,mes_time from tb_message,tb_article where 
	  	(tb_message.art_id = tb_article.art_id) and (tb_message.art_id = $keyword or headline = $keyword or mes_name = 
	  	$keyword)";
	  }else if($keyword == ''){
	  	$sear = "select tb_message.art_id,headline,message,mes_name,mes_time from tb_message,tb_article where tb_message.art_id = tb_article.art_id and headline = '$option'";
	  }else{
	  	echo"<script>alert('请选择一个搜索!');</script>";
	  }
  }
  // var_dump($option);
  // var_dump($keyword);
  $res = $pdo->query(@$sear);
 ?>
 	<table class="result-tab" width="100%">
        <tr>
            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
            <th>文章ID</th>
            <th>文章名</th>
            <th>留言</th>
            <th>留言者</th>
            <th>留言时间</th>
            <th>操作</th>
        </tr>
 <?php
  while ($row = @$res->fetch()){
 ?>
 		<tr>
      <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
 			<th><?php echo $row['art_id'];?></th>
 			<th><?php echo $row['headline'];?></th>
 			<th><?php echo $row['message'];?></th>
 			<th><?php echo $row['mes_name'];?></th>
 			<th><?php echo $row['mes_time'];?></th>
 			<th>
<?php 
	$id = $row['art_id'];
  $time = $row['mes_time'];
?>
          <a class="link-del" href="conn_admin/mes_del.php?art_id=<?php echo $id; ?>&mes_time=<?php echo $time;?>">删除</a>
 			</th>
 		</tr>
 <?php
  }
 ?>
 	</table>