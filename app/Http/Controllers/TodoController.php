<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        return view('welcome',[
            'todos' => Todo::query()->get()->where('user_id', Auth::id())
        ]);
    }
}
