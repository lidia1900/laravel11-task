<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task=new Task();
        $task->title='Task 1';
        $task->description='this is the task 1';
        $task->user_id=1;
        $task->save();       
        
    }
}
