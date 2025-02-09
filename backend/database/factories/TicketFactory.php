<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\Board;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition(): array
    {
        return [
            'board_id' => Board::factory(), // Assign ticket to a board
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'status' => fake()->randomElement(['open', 'in_progress', 'closed']),
            'priority' => fake()->randomNumber(3),
        ];
    }
}
