<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
        public function index()
    {
        $usuario = DB::select('SELECT * from users where cliente = 0');
        return view('users.index', ['users' => $usuario ]);
    }
}
