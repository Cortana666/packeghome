<?php
    require "mydb.php";
    $dir = "./backup/";
	// Open a known directory, and proceed to read its contents
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			$i=0;
			while (($row = readdir($dh)) !== false) {
				if('.' == $row || '..' ==$row){
				continue;
				}
				$arr = array();
				$i++;
				$arr["$i"] = $row;
			} 
			closedir($dh);
		}
	}
	
    $db= new DbManage;
    $sqlfile ='./backup/'."$arr[1]";
    $db->restore($sqlfile);
?>