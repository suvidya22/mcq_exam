<?php

namespace Database\Seeders;

use App\Models\Option;

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::create([
            'question_id' => '1',
            'option' => 'composer',
            'is_right_option' => 1
        ]);
        Option::create([
            'question_id' => '1',
            'option' => 'php artisan',
            'is_right_option' => 0
        ]); 
        Option::create([
            'question_id' => '1',
            'option' => 'git',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '1',
            'option' => 'CLI',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '2',
            'option' => 'Initialize a Laraval application',
            'is_right_option' => 0
        ]); 
        Option::create([
            'question_id' => '2',
            'option' => 'Call laravel library functions',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '2',
            'option' => 'Load the configuration files',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '2',
            'option' => 'Load laravel classes and models',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '3',
            'option' => 'Laravel Framework code',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '3',
            'option' => 'Assets ',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '3',
            'option' => 'Third-party code',
            'is_right_option' => 0
        ]); 
        Option::create([
            'question_id' => '3',
            'option' => 'Configuration files',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '4',
            'option' => 'execute() and rollback()',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '4',
            'option' => ' save() and update()',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '4',
            'option' => ' run() and delete()',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '4',
            'option' => ' up() and down()',
            'is_right_option' => 0
        ]); 
        Option::create([
            'question_id' => '5',
            'option' => '501',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '5',
            'option' => '200',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '5',
            'option' => '400',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '5',
            'option' => '503',
            'is_right_option' => 0
        ]); 
        Option::create([
            'question_id' => '6',
            'option' => 'Database ',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '6',
            'option' => 'Public',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '6',
            'option' => 'Resources',
            'is_right_option' =>1 
        ]); 
        Option::create([
            'question_id' => '6',
            'option' => 'Storage',
            'is_right_option' => 0
        ]); 
        Option::create([
            'question_id' => '7',
            'option' => ' php artisan clear-compiled',
            'is_right_option' => 0
        ]); 
        Option::create([
            'question_id' => '7',
            'option' => 'php artisan down',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '7',
            'option' => 'php artisan clear-class',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '7',
            'option' => 'php artisan inspire',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '8',
            'option' => 'reuse similar queries',
            'is_right_option' => 0 
        ]); 
        Option::create([
            'question_id' => '8',
            'option' => 'routes queries',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '8',
            'option' => 'seed queries',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '8',
            'option' => 'None of the above',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '9',
            'option' => 'to extend an layout',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '9',
            'option' => 'to include a file',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '9',
            'option' => 'to display the contents of a given section',
            'is_right_option' => 0
        ]); 
        Option::create([
            'question_id' => '9',
            'option' => 'None of the above',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '10',
            'option' => 'setNameAttribute method inside model',
            'is_right_option' => 0
        ]); 
        Option::create([
            'question_id' => '10',
            'option' => 'setNameAttribute method inside controller',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '10',
            'option' => 'setMutator method inside controller',
            'is_right_option' => 1
        ]); 
        Option::create([
            'question_id' => '10',
            'option' => 'None of them',
            'is_right_option' => 1 
        ]);                   
    }
}
