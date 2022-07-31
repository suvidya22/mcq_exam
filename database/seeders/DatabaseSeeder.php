<?php

namespace Database\Seeders;
use Database\Seeders\QuestionsTableSeeder;
use Database\Seeders\OptionsTableSeeder;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
       
        $this->call([
            QuestionsTableSeeder::class,
            OptionsTableSeeder::class
        ]);
    }
}
