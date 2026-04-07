<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('classes')->insert(
        [
            ['class_name'=>'FYBCA','division'=>'f1'],
            ['class_name'=>'FYBCA','division'=>'f2'],
            ['class_name'=>'SYBCA','division'=>'s1'],
            ['class_name'=>'SYBCA','division'=>'s2'],
            ['class_name'=>'TYBCA','division'=>'t1'],
            ['class_name'=>'TYBCA','division'=>'t2'],

            ['class_name'=>'MCA','division'=>'y1'],
            ['class_name'=>'MCA','division'=>'y2'],
            ['class_name'=>'MCA','division'=>'y3'],
            ['class_name'=>'MCA','division'=>'y4'],

        ]
       ); 
    }
}
