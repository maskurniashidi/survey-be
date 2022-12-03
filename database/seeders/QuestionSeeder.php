<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'question' => 'annoying-Enjoyable',
            'category_id' => '1'
        ]);
        Question::create([
            'question' => 'Good-bad',
            'category_id' => '1'
        ]);
        Question::create([
            'question' => 'unlikable-Pleasing',
            'category_id' => '1'
        ]);
        Question::create([
            'question' => 'unpleasant-Pleasant',
            'category_id' => '1'
        ]);
        Question::create([
            'question' => 'attractive-Unattractive',
            'category_id' => '1'
        ]);
        Question::create([
            'question' => 'Friendly-Unfriendly',
            'category_id' => '1'
        ]);
        Question::create([
            'question' => 'Not understandable-Understandable',
            'category_id' => '2'
        ]);
        Question::create([
            'question' => 'Easy to learn-Difficult to learn',
            'category_id' => '2'
        ]);
        Question::create([
            'question' => 'Complicated-Easy',
            'category_id' => '2'
        ]);
        Question::create([
            'question' => 'Clear-Confusing',
            'category_id' => '2'
        ]);
        Question::create([
            'question' => 'Creative-Dull ',
            'category_id' => '3'
        ]);
        Question::create([
            'question' => 'Inventive-Conventional',
            'category_id' => '3'
        ]);
        Question::create([
            'question' => 'Usual-Leading edge',
            'category_id' => '3'
        ]);
        Question::create([
            'question' => 'Conservative-Innovative',
            'category_id' => '3'
        ]);
        Question::create([
            'question' => 'Valuable-Inferior',
            'category_id' => '4'
        ]);
        Question::create([
            'question' => 'Boring-Exciting',
            'category_id' => '4'
        ]);
        Question::create([
            'question' => 'Not interesting-Interesting',
            'category_id' => '4'
        ]);
        Question::create([
            'question' => 'Motivating-Demotivating',
            'category_id' => '4'
        ]);
        Question::create([
            'question' => 'Unpredictable-Predictable ',
            'category_id' => '5'
        ]);
        Question::create([
            'question' => 'Obstructive-Supportive',
            'category_id' => '5'
        ]);
        Question::create([
            'question' => 'Secure-Not secure',
            'category_id' => '5'
        ]);
        Question::create([
            'question' => 'Meets expectations-Does not meet expectations',
            'category_id' => '5'
        ]);
        Question::create([
            'question' => 'Fast-Slow',
            'category_id' => '6'
        ]);
        Question::create([
            'question' => 'Inefficient-Efficient ',
            'category_id' => '6'
        ]);
        Question::create([
            'question' => 'Impractical-Practical ',
            'category_id' => '6'
        ]);
        Question::create([
            'question' => 'Organized-Cluttered ',
            'category_id' => '6'
        ]);
    }
}
