<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function getHome(){
        if(Auth::check()){
            $tasks = Task::all()->where('user_id', Auth::user()->id)->where('done', false);
            
            return view('home')->with('tasks', $tasks);
        }

        return view('home');
    }

    
    public function createTask(Request $request){
        $task = Task::create([
            'name' => $request->input('name'),
            'user_id' => Auth::user()->id
        ]);
        
        return response()->json([
            'id' => $task->id,
            'name' => $request->input('name'),
            'created' => date("Y-m-d")
        ]);
    }
    

    public function completeTask(Request $request){
        $id = $request->id;
        Task::where('id', $id)->update(['done' => true]);

        return response()->json([
            'id' => $id
        ]);
    }
}
