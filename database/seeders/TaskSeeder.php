<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\Category;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $mahasiswaId = Mahasiswa::pluck('id')->all();
        $categoryId = Category::pluck('id')->all();

        for($i = 0; $i < 50; $i++){
            $task = Task::create([
                'mahasiswa_id' => $faker->randomElement($mahasiswaId),
                'title' => $faker->sentence(),
                'description' => $faker->paragraph()
            ]);

            $categories = $faker->randomElement($categoryId, rand(1, 3));
            $task->categories()->attach($categories);
        }
    }
}