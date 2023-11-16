<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserListInactive extends Component
{
    public $users;
    public $open = false;
    public $userModal;

    public function mount($users)
    {
        $this->users = $users;

    }

    //Mostrar modal con la informacion de la usuario
    public function openModal($userId)
    {
        $this->userModal = User::find($userId);
        $this->open = true;
    }

    public function render()
    {
        return view('livewire.admin.user-list-inactive');
    }
}
