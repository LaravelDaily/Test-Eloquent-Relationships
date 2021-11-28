<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $users = User::all();
            $users->each(function (User $user) {
                $user->tasks()->saveMany(Task::factory()->count(10)->make());
            });

            Task::factory()->count(10)->create();
            DB::commit();
        }catch (Exception $exception) {
            DB::rollBack();
            throw new Exception($exception->getMessage());
        }
    }
}
