<?php

namespace Database\Seeders;

use App\Models\Movement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertMovementSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Movement::insert(['name' => 'Deadlift']);
        Movement::insert(['name' => 'Back Squat']);
        Movement::insert(['name' => 'Bench Press']);
    }
}
