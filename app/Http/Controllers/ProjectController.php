<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * @throws Exception
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            auth()->user()->projects()->attach($request->project_id, ['start_date' => now()->toDateString()]);

            DB::commit();
        } catch (Exception $exception){
            DB::rollBack();
            throw new Exception($exception->getMessage());
        }

        return 'Success';
    }
}
