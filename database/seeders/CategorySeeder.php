<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 4; $i++){
            $category = $faker->unique()->randomElement(['Tugas Kuliah', 'Tugas Rumah', 'Tugas Kantor', 'Tugas Urgent']);
            \DB::table('categories')->insert([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }
    }
}
