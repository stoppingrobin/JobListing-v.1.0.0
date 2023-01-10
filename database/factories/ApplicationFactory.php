<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_candidat' => $this->faker->numberBetween(1,20),
            'id_recruteur' => $this->faker->numberBetween(1,20),
            'id_offre' => $this->faker->numberBetween(1,20),
            'answers' => $this->faker->paragraph(2),
            'message_motivation'=> $this->faker->paragraph(4),
            'status' => $this->faker->numberBetween(0,2) ,
            'resume' => $this->faker->filePath(),
            'cover_letter' => $this->faker->filePath(),
            'other_file' => $this->faker->filePath(),
        ];
    }
}
