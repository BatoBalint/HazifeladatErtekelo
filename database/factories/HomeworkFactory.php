<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student' => User::random(),
            'url' => $this->faker->url(),
            'review' => '',
            'grade' => 0
        ];
    }
}