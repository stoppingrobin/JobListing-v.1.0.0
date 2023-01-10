<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => $this->faker->numberBetween(1,40),
            'resume' => $this->faker->filePath(),
            'cover_letter' => $this->faker->filePath(),
            'recommendation_1' => $this->faker->filePath(),
            'recommendation_2' => $this->faker->filePath(),
            'recommendation_3' => $this->faker->filePath(),
            'other_file' => $this->faker->filePath(),
            'year_experience' => $this->faker->numberBetween(1,20),
            'experience' => $this->faker->paragraph(2),
            'education' => $this->faker->paragraph(2),
            'websiteUrl' => $this->faker->url(),
        ];
    }
}
