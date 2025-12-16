<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PekerjaanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('en_US');

        $jobs = [
            'Software Engineer',
            'Data Analyst',
            'Project Manager',
            'System Administrator',
            'UI/UX Designer',
            'Web Developer',
            'Mobile App Developer',
            'Database Administrator',
            'Network Engineer',
            'IT Support Specialist',
            'Quality Assurance Engineer',
            'Business Analyst',
            'Product Manager',
            'DevOps Engineer',
            'Cyber Security Analyst',
            'Technical Writer',
            'Cloud Engineer',
            'Backend Developer',
            'Frontend Developer',
            'Machine Learning Engineer',
        ];

        foreach ($jobs as $job) {
            DB::table('pekerjaan')->insert([
                'nama' => $job,
                'deskripsi' => $faker->sentence(8),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
