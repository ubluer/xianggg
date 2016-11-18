<?php

use App\Family;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FamilyTest extends TestCase
{
    use DatabaseTransactions;

    public function testCreate()
    {
        Family::create(['name' => '余', 'resume' => '主人公']);
        $this->seeInDatabase('families', ['name' => '余']);
    }

    public function testSoftDelete()
    {
        Family::create(['name' => '余不二', 'resume' => '主人公']);
        $this->seeInDatabase('families', ['name' => '余不二']);

        Family::whereNotNull('name')->delete();
        $this->assertCount(0,Family::all());
        $this->assertCount(1,Family::withTrashed()->whereNotNull('name')->get());

    }
}
