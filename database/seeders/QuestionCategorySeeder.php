<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\QuestionCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionCategory::create([
            'category' => 'Attractive',
        ]);
        QuestionCategory::create([
            'category' => 'Perspicuity',
        ]);
        QuestionCategory::create([
            'category' => 'Novelty',
        ]);
        QuestionCategory::create([
            'category' => 'Stimulation',
        ]);
        QuestionCategory::create([
            'category' => 'Dependability',
        ]);
        QuestionCategory::create([
            'category' => 'Efficiency',
        ]);
    }
}
