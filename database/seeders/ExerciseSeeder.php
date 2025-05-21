<?php

namespace Database\Seeders;

use App\Models\exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        exercise::create(['title' => 'stimulasi']);
        exercise::create(['title' => 'identifikasi masalah']);
        exercise::create(['title' => 'pengumpulan data']);
        exercise::create(['title' => 'pengolahan data']);
        exercise::create(['title' => 'verfikasi']);
        exercise::create(['title' => 'kesimpulan']);
        exercise::create(['title' => 'kuis']);
        exercise::create(['title' => 'evaluasi']);
    }
}
