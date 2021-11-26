<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
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
            User::factory()->count(100)->create();
        }catch (Exception $exception) {
            DB::rollBack();
            throw new Exception($exception->getMessage());
        }
    }
}
