<?php 
header('content-type:text/html;charset=utf-8'); 
function delFile($fpath) { 
    $filesize = array(); 
    $filepath = iconv('gb2312', 'utf-8', $fpath); 
    if (is_dir($fpath)) { 
        if ($dh = opendir($fpath)) { 
            while (($file = readdir($dh)) !== false) { 
                if($file != '.' && $file != '..') { 
                    $filesize[] = delFile($fpath.'/'.$file); 
                } 
            } 
            closedir($dh); 
        } 
        /* 
        * 方便统计目录数 
        */ 
        $filesize['file'] = 0; 
        if(@rmdir($fpath) === true) { 
            echo "<script>alert('缓存文件夹删除成功');location.href='index.php';</script>";
            // echo "{$filepath}................缓存文件夹删除成功<br>\n"; 
        } else { 
            echo "<script>alert('缓存文件夹删除失败');location.href='index.php';</script>";
            // echo "{$filepath}................缓存文件夹删除失败<br>\n"; 
        } 
    } else { 
        if(is_file($fpath)) { 
            $filesize[] = $fsize = filesize($fpath); 
            if(@unlink($fpath) === true) { 
                echo "<script>alert('缓存文件删除成功');location.href='index.php';</script>";
                // echo "{$filepath}...{$fsize}K................缓存文件删除成功<br>\n"; 
            } else { 
                echo "<script>alert('缓存文件删除失败');location.href='index.php';</script>";
                // echo "{$filepath}...{$fsize}K................缓存文件删除失败<br>\n"; 
            } 
        } 
    } 
        return $filesize; 
} 
/* 
* function getArrSum(array &$arr) 数组求和 
* array &$arr 被处理数组 
*/ 
function getArrSum(&$arr) { 
    if(is_array($arr)) { 
    foreach ($arr as &$value) { 
        $value = getArrSum($value); 
    } 
        return array_sum($arr); 
    } else { 
        return $arr; 
    } 
} 

$fpath = 'E:/wamp/www/phpfile/youme/admin/cache'; 
// $filesize = delFile($fpath); 
// $size = getArrSum($filesize); 
// printf('为您节省：%.3fM 空间', $size/(1024*1024)); 
?>