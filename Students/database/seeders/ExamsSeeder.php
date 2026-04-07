<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ExamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('exams')->insert(
        [
            ['exam_name'=>'CIA-1'],
            ['exam_name'=>'CIA-2'],

            ['exam_name'=>'SEE'],
        ]
       );
    }
}
