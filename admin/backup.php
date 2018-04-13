<?php
	require "mydb.php";
	$db= new DbManage;
	@$db->backup();
?>