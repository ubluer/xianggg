<?php

use App\Member;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MemberTest extends TestCase
{
//    use DatabaseTransactions;

    public function testCreate()
    {
        for ($x=0; $x<=20; $x++) {
            Member::create(['family' => '余','last_name'=>'余','first_name'=>'秋雨'.$x, 'resume' => '主人公']);
        }
        $this->seeInDatabase('members', ['family' => '余']);
    }

    public function testSoftDelete()
    {
        Member::create(['family' => '余','last_name'=>'余','first_name'=>'秋雨', 'resume' => '主人公']);
        $this->seeInDatabase('members', ['name' => '余不二']);

        Member::whereNotNull('name')->delete();
        $this->assertCount(0,Member::all());
        $this->assertCount(1,Member::withTrashed()->whereNotNull('name')->get());

    }
}
