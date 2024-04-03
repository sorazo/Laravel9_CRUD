<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //下記コードを記述しましょう。
        DB::table('authors')->insert([
            ['name' => 'Atlas一郎'],
            ['name' => 'Atlas二郎'],
            ['name' => 'Atlas三郎'],
            ['name' => 'Atlas四郎'],
            ['name' => 'Atlas五郎']
        ]);
    }
}
