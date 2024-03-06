<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' =>$this->faker->name(),
            'image' => '/storage/project/software.startup/tripidkard.png', 
            'description' => $this->faker->paragraph(),
            'service_id' => 1,
        ];
    }
}
