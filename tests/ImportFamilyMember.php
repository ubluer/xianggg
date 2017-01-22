<?php

use App\Member;

class ImportFamilyMember extends TestCase
{
    public function testReadLine()
    {
        $handler = fopen("/Users/xiang/Documents/common/family.txt", "r"); //打开文件
        $i = 0;
        //代数计数
        $gen = 5;
        //当前派号
        $genName = "钦";
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
                    $genName = $match[1];
                    echo $genName . "\r\n";
                } else if (preg_match("/【.*】/", $line)) {
                    echo $line;
                } else {
                    //内容行
                    $contents = preg_split("/\t/", $line);
                    //获取父亲名称
                    $father = $contents[2];
                    echo "父" . $father . "\r\n";
                    //个人名称
                    $self = $contents[3];
                    echo "本人" . $self . "\r\n";
                    $resume = $contents[4];
                    //个人详情
                    $details = preg_split("/  /", $contents[4]);
                    print_r($details);

                }
            }
        }

        fclose($handler); //关闭文件
    }

    private function saveLine($self, $fatherName, $gen, $genName, $resume, $grandfatherName)
    {
        $member = new Member();
        $member->name = $self;
        $member->family = "余";
        $member->branch = "湖南临湘万库里";
        $member->last_name = "余";
        $member->generation->$gen;
        $member->generation_name = $genName;
        $member->gender = 1;
        //查找父
        $father = Member::where('name', $fatherName);
        if (count($father) == 1) {
            $member->father = $father->id;
        } else if (count($father) > 1) {
            //多个重名时，通过祖父判断
            foreach ($father as $one) {

            }
        }else{

        }
    }
}