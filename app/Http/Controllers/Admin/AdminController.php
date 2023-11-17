<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index() {

        $users = User::where('role', 'user')->count();
        $admins = User::where('role', 'admin')->count();
        $posts = Pet::count();
        $adoptions = Pet::where('status', 'Adoptado')->count();

        return view('admin.index',compact(
            'users',
            'admins',
            'posts',
            'adoptions'
        ));
    }
    
}
