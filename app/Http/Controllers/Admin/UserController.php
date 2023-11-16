<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function active()
    {
        //Recuperar usuarios que esten activos

        $users = User::where('id', '!=', auth()->user()->id)->get();

        return view('admin.users.active',compact('users'));
    }

    public function inactive()
    {
        //Recuperar usuarios que estan con softdelete

        $users = User::onlyTrashed()->get();

        return view('admin.users.inactive',compact('users'));
    }

    public function destroy(User $user)
    {
        //Eliminar usuario
        //$user = User::find($id);
        $user->delete();


        return redirect()->route('users.active')->with('info','El usuario fue dado de baja correctamente');
    }

    public function deleteForever($id)
    {
        $user = User::withTrashed()->find($id);

        $user->forceDelete();

        return redirect()->route('users.inactive')->with('info','El usuario fue eliminado para siempre correctamente');
    }

    public function restore($id)
    {
        //Recuperar usuario
        $user = User::withTrashed()->where('id',$id)->first()->restore();

        return redirect()->route('users.inactive')->with('info','El usuario ' . $user->name . ' fue dado de alta correctamente');
    }
}