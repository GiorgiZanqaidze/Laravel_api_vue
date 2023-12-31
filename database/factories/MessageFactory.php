<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sender_id' => rand(1, 10), // Replace with your actual user IDs range
            'receiver_id' => rand(1, 10), // Replace with your actual user IDs range
            'content' => 'dwdwdwdwdw',
        ];
    }
}
