<?php

namespace Database\Seeders;

use App\Models\Question;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'question' => 'Which one is the Laravel command line interface?',
            'type' => '',
            'is_active' => 0
        ]);

        Question::create([
            'question' => 'Bootstrap directory in Laravel is used to',
            'type' => '',
            'is_active' => 0
        ]);

        Question::create([
            'question' => 'The vendor directory contains',
            'type' => '',
            'is_active' => 0
        ]);

        Question::create([
            'question' => 'Which of the following methods are used in Database Migrations classes?',
            'type' => '',
            'is_active' => 0
        ]);

        Question::create([
            'question' => 'What is the HTTP Status Code for your website. When it is down for maintenance?',
            'type' => '',
            'is_active' => 0
        ]);

        Question::create([
            'question' => 'The _______ directory contains your project’s cache, session and log data',
            'type' => '',
            'is_active' => 0
        ]);

        Question::create([
            'question' => 'Which of following command is used to remove the compiled class file in Laravel?',
            'type' => '',
            'is_active' => 0
        ]);

        Question::create([
            'question' => 'Query scope is a feature of Laravel where we can ____',
            'type' => '',
            'is_active' => 0
        ]);

        Question::create([
            'question' => 'In Laravel, @yield used for?',
            'type' => '',
            'is_active' => 0
        ]);

        Question::create([
            'question' => 'How to define an mutator in Laravel?',
            'type' => '',
            'is_active' => 0
        ]);
    }
}
