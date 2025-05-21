<?php

namespace Database\Seeders;

use App\Models\chapter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        chapter::create(['title' => 'sistem koordinasi manusia', 'kkm' => 70]);
        chapter::create(['title' => 'alat indra manusia', 'kkm' => 70]);
        chapter::create(['title' => 'hormon manusia', 'kkm' => 70]);
        chapter::create(['title' => 'homeostasis', 'kkm' => 70]);
        chapter::create(['title' => 'evaluasi', 'kkm' => 70]);
    }
}
