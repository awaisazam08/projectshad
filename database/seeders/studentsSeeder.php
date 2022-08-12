<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([

            'stuName'=>str::random(20),
            'stuClass'=>rand(1,12),
            'created_at'=>date("Y-m-d H-i-s"),
            'updated_at'=>date("Y-m-d H-i-s"),
        ]);
    }
}
