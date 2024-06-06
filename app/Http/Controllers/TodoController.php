<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        return view('welcome',[
            'todos' => Todo::query()->where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get()
        ]);
    }

    public function create(Request $request){
        $validate = $request->validate([
           'todo' => 'required'
        ]);

        $todo = Todo::query()->create([
            'user_id' => Auth::id(),
            'title' => $validate['todo']
        ]);

        return redirect('/');
    }
}
