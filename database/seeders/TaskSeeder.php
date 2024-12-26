<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            ['por hacer','urgente',now(),true,'1','1','1'],
            ['haciendo','alta',now(),true,'1','1','1'],
            ['hecho','baja',now(),true,'1','1','1'],
            ['por hacer','media',now(),false,'1','1','1'],
        ];

        foreach ($tasks as $task){
            Task::create([
                'status' => $task[0],
                'priority' => $task[1],
                'deathline' => $task[2],
                'notifiable' => $task[3],
                'sentence_id' => $task[4],
                'team_id' => $task[5],
                'project_id' => $task[6],
            ]);
        }
    }
}
