<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function users()
    {
        $users = User::all();

        return response()->json($users);
    }

}
