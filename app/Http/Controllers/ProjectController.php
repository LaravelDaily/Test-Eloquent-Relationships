<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
=======
use Illuminate\Http\Request;
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter
<<<<<<< HEAD
        Auth::user()->projects()->sync([
            $request->project_id, [
                "start_date" => $request->start_date
            ]
        ]);
=======
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138

        return 'Success';
    }
}
