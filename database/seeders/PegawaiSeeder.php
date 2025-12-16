<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('en_US');
        $pekerjaanIds = DB::table('pekerjaan')->pluck('id')->toArray();
        $totalPegawai = 2500;

        for ($i = 0; $i < $totalPegawai; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            DB::table('pegawai')->insert([
                'pekerjaan_id' => $faker->randomElement($pekerjaanIds),
                'nama' => $gender === 'male' ? $faker->firstNameMale().' '.$faker->lastName() : $faker->firstNameFemale().' '.$faker->lastName(),
                'email' => $faker->unique()->safeEmail(),
                'gender' => $gender,
                'is_active' => $faker->boolean(90),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
