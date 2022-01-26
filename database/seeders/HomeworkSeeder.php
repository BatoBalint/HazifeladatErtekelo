<?php

namespace Database\Seeders;

use App\Models\Homework;
use Illuminate\Database\Seeder;

class HomeworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homework::factory(100)->create();
    }
}
