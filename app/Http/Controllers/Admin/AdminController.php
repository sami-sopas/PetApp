<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {

        //Datos que se muestran en las cards----------------------------------------------------------
        $users = User::where('role', 'user')->count();
        $admins = User::where('role', 'admin')->count();
        $posts = Pet::count();
        $adoptions = Pet::where('status', 'Adoptado')->count();

        //Para el primer chart------------------------------------------------------------------------
        //Obtener los usuarios registrados agrupados por día de la semana

        $usersPerDay = User::select(DB::raw('COUNT(*) as count, DAYNAME(created_at) as day'))
            ->where('role', 'user')
            ->groupBy('day')
            ->get()
            ->pluck('count', 'day');

        // Traducir los nombres de los días al español
        $daysInSpanish = ['Monday' => 'Lunes', 'Tuesday' => 'Martes', 'Wednesday' => 'Miércoles', 'Thursday' => 'Jueves', 'Friday' => 'Viernes', 'Saturday' => 'Sábado', 'Sunday' => 'Domingo'];
        $usersPerDay = $usersPerDay->mapWithKeys(function ($count, $day) use ($daysInSpanish) {
            return [$daysInSpanish[$day] => $count];
        });

        //Calcular promedio de usuarios registrador por la seman
        $totalUsers = $usersPerDay->sum();
        $averageUsersPerWeek = round($totalUsers / 7);

        //Para el segundo chart----------------------------------------------------------------------------



        return view('admin.index', compact(
            'users',
            'admins',
            'posts',
            'adoptions',
            'usersPerDay',
            'averageUsersPerWeek'
        ));
    }
}
