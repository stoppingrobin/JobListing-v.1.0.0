<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_recruiter' => $this->faker->numberBetween(1,40),
            'id_company' => $this->faker->numberBetween(1,40),
            'numberOfPlaces' => $this->faker->numberBetween(1,50),
            'name' => $this->faker->paragraph(1),
            'city' => $this->faker->city,
            'wantedStudyLevel' => $this->faker->randomElement(['Bac+3', 'Bac+4', 'Bac+5']),
            'wantedExperience' => $this->faker->numberBetween(1,4),
            'domain' => $this->faker->randomElement(['It', 'Finance', 'agriculture']),
            'salaryRange' => $this->faker->numberBetween(50000,100000),
            'typeOfWorking'=> $this->faker->randomElement(['Hypride', 'Presentiel', 'Distanciel']),
            'offer_title' => $this->faker->paragraph(1),
            'offer_description' => $this->faker->paragraph(6),
            'recruiter_website' => $this->faker->url,
            'questions' => $this->faker->paragraph(1),
        ];
    }
}
