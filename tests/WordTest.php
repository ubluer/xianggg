<?php

class WordTest extends TestCase
{
    public function testReadLine()
    {
        $handler = fopen('/Users/xiang/Documents/common/family.txt', 'r'); //打开文件
        $i = 0;
        while (!feof($handler)) {
            $m[] = fgets($handler); //fgets逐行读取，4096最大长度，默认为1024
            $i++;
            if ($i > 20) {
                break;
            }
        }

        fclose($handler); //关闭文件

//输出文件
        print_r($m);
    }

    private function saveLine($line)
    {

    }
}