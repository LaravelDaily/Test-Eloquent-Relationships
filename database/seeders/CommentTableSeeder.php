<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Task;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder
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
            $tasks = Task::all();

            $tasks->each(function (Task $task) {
                $comments = Comment::factory()->count(random_int(1,10))->make();
                $task->comments()->saveMany($comments);
            });

            DB::commit();
        }catch (Exception $exception) {
            DB::rollBack();
            throw new Exception($exception->getMessage());
        }
    }
}
