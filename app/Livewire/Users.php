<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.users',
                    ['users' => User::all()]
        )
        ->layout('layouts.app');
    }
}
