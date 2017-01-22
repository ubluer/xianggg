<?php

class WordTest extends TestCase
{
    public function testReadLine()
    {
        $handler = fopen("/Users/xiang/Documents/common/family.txt", "r"); //打开文件
        $i = 0;
        //代数计数
        $gen = 5;
        //当前派号
        $gen_name = "钦";
        while (!feof($handler)) {
            $i++;
            if ($i > 20) {
                break;
            }
            $line = fgets($handler); //fgets逐行读取，4096最大长度，默认为1024
            if (preg_match("/\S/", $line)) {
                if (preg_match("/曾祖\t祖父\t父亲\t本人/", $line)) {
                    //代数加一
                    $gen++;
                    echo $gen . "代";
                } else if (preg_match("/派字：(\S*)/", $line, $match)) {
                    $gen_name = $match[1];
                    echo $gen_name."\r\n";
                } else if (preg_match("/【.*】/",$line)) {
                    echo $line;
                } else {
                    //内容行
                    $contents = preg_split("/\t/", $line);
                    //获取父亲名称
                    $father = $contents[2];
                    echo "父".$father."\r\n";
                    //个人名称
                    $self = $contents[3];
                    echo "本人".$self."\r\n";
                    $resume = $contents[4];
                    //个人详情
                    $details = preg_split("/  /",$contents[4]);
                    print_r($details);

                }
            }
        }

        fclose($handler); //关闭文件
    }

    private function saveLine($line)
    {

    }
}