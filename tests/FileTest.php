<?php

use App\Family;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Storage;

class FileTest extends TestCase
{
    public function testOpen()
    {
        $file = fopen("/Users/xiang/code/webarch/included files.txt", "r") or die("Unable to open file!");
        echo fread($file,filesize("/Users/xiang/code/webarch/included files.txt"));
        fclose($file);
    }

    public function testStorage(){
        $exists = Storage::disk('local')->exists('file.txt');
        if($exists){
            echo Storage::disk('local')->url('file.txt');
            echo Storage::disk('local')->get('file.txt');
        }
    }
}
