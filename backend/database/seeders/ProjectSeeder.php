<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use App\Models\Board;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::factory(10)->create()->each(function ($project) {
            // Create 4 boards per project
            $boards = Board::factory(4)->create(['project_id' => $project->id]);

            // Create 10 tickets per board
            $boards->each(function ($board) {
                Ticket::factory(10)->create(['board_id' => $board->id]);
            });
        });
    }
}
