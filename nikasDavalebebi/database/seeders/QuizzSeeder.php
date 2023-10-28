<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quizzes = [
            [
                'name' => 'Quizz 1',
                'description' => 'description for Quizz 1',
            ],
            [
                'name' => 'Quizz 2',
                'description' => 'description for Quizz 2',
            ],
            [
                'name' => 'Quizz 3',
                'description' => 'description for Quizz 3',
            ],
            [
                'name' => 'Quizz 4',
                'description' => 'description for Quizz 4',
            ],
            [
                'name' => 'Quizz 5',
                'description' => 'description for Quizz 5',
            ],
        ];
    }
}
