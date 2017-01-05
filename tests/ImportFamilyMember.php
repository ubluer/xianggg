<?php

/**
 * Created by PhpStorm.
 * User: xiang
 * Date: 01/01/2017
 * Time: 9:02 PM
 */
$handler = fopen('/Users/xiang/Documents/common/family.txt', 'r'); //打开文件

while (!feof($handler)) {
    $m[] = fgets($handler); //fgets逐行读取，4096最大长度，默认为1024
}
