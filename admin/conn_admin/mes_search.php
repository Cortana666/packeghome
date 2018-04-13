<?php 
  $pdo = new pdo("mysql:host=localhost;dbname=db_youme",'root','root');
  $sql = "select DISTINCT headline from tb_article,tb_message where tb_message.art_id = tb_article.art_id";
  $res = $pdo->query($sql);
?>
<form action="message.php" method="post"> 
  <table class="search-tab">
    <tr>
      <th width="120">选择分类:</th>
      <td>
       <select name="option">
        <option></option>
<?php
  while ($row = $res->fetch()) {
?>       
        <option value="<?php echo $row['headline']; ?>"><?php echo $row['headline']; ?></option>
<?php
  }
?>
 
       </select>
      </td>

      <th width="70">关键字:</th>
      <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
      <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
    </tr>
  </table>
</form>

