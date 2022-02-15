<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         for($i =1; $i <= 20; $i++ )
         {
            $user_id = rand(8,17);
            Task::create(['name' => 'Some task value', 'users_id' => $user_id]);
        }
    }
}
