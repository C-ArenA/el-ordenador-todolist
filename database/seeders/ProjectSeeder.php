<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'Proyecto Base',
            'status' => 'por hacer',
            'section' => 'Estudio',
        ]);
    }
}
