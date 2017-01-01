<?php
/**
 * Created by PhpStorm.
 * User: xiang
 * Date: 01/12/2016
 * Time: 11:43 PM
 */
$dir = '/Users/xiang/Pictures/2016-12-14';  //要获取的目录
echo "********** 获取目录下所有文件和文件夹 **********\n";
//先判断指定的路径是不是一个文件夹
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        $count = 0;
        while (($file = readdir($dh)) != false) {
            if ((is_dir($dir . '/' . $file)) && $file != '.' && $file != '..' && $file != '.DS_Store') {
                //文件名的全路径 包含文件名
                $time = strtotime($file);
                $date = date("Y-m-d", $time);
                echo $file . ':' . $time . ":" . $date . "\n";
                //重命名
                $result = rename($dir . '/' . $file, $dir . '/' . $date);
                if($result){
                    $count++;
                }
            }
        }
        echo "\n" . $count;
        closedir($dh);
    }
}