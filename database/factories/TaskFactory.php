<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(['por hacer', 'haciendo', 'hecho']), // TODO: Crear ENUM
            'priority' => fake()->randomElement(['urgente', 'alta', 'media', 'baja']),
            'deathline' => fake()->dateTimeBetween('now', '+6 week'),
            'notifiable' => fake()->boolean(),
        ];
    }
}
