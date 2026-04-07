<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('subjects')->insert([
            
            ['subject_name' => 'PHP', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Laravel', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'MySQL', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'HTML', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'CSS', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'JavaScript', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'jQuery', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'AJAX', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Bootstrap', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Tailwind', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'React', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Angular', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Vue', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Node', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Express', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'MongoDB', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'PostgreSQL', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Python', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Django', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Flask', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Ruby', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Rails', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Java', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Spring', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'C++', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'C#', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Go', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Swift', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'Kotlin', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'TypeScript', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'GraphQL', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'REST', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'SOAP', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'JWT', 'created_at' => now(), 'updated_at' => now()],
            ['subject_name' => 'OAuth', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
