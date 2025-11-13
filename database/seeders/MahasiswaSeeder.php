<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 20; $i++){
            \DB::table('mahasiswas')->insert([
                'nim' => $faker->unique()->numerify('#########'),
                'name' => $faker->name,
                'email' => $faker->email,
                'jurusan' => $faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Manajemen Informatika', 'Teknik Komputer'])
            ]);
        }
    }
}
