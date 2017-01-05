<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('members')->insert([
            'family' => '余',
            'branch' => '湖南临湘万库里',
            'last_name' => '余',
            'generation_name' => '朝',
            'family_name' => '兴',
            'generation' => 1,
            'gender' => 1,
            'created_at' =>date("Y-m-d H:i:s")
        ]);
        DB::table('members')->insert([
            'family' => '余',
            'branch' => '湖南临湘万库里',
            'last_name' => '余',
            'generation_name' => '友',
            'family_name' => '福',
            'generation' => 2,
            'gender' => 1,
            'created_at' =>date("Y-m-d H:i:s")
        ]);
        DB::table('members')->insert([
            'family' => '余',
            'branch' => '湖南临湘万库里',
            'last_name' => '余',
            'generation_name' => '定',
            'family_name' => '富',
            'generation' => 3,
            'gender' => 1,
            'created_at' =>date("Y-m-d H:i:s")
        ]);
        DB::table('members')->insert([
            'family' => '余',
            'branch' => '湖南临湘万库里',
            'last_name' => '余',
            'generation_name' => '可',
            'family_name' => '海',
            'generation' => 4,
            'gender' => 1,
            'created_at' =>date("Y-m-d H:i:s")
        ]);
        DB::table('members')->insert([
            'family' => '余',
            'branch' => '湖南临湘万库里',
            'last_name' => '余',
            'generation_name' => '胜',
            'family_name' => '钦',
            'generation' => 5,
            'gender' => 1,
            'created_at' =>date("Y-m-d H:i:s")
        ]);
    }
}
