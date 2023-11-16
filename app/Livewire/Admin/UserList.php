<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public $users;
    public $isAdmin = [];

    public $open = false;
    public $userModal;

    public function mount()
    {
        $this->users = User::where('id', '!=', auth()->user()->id)->get();

        //Mostrar en checkboxes los admins marcados
        foreach ($this->users as $user) {
            $this->isAdmin[$user->id] = $user->role == 'admin';
        }
    }

    //Actualizar rol dependiendo si checkeo o no el checkbox
    public function updateRole($userId, $isChecked)
    {
        $user = User::find($userId);
        $user->role = $isChecked ? 'admin' : 'user';
        $user->save();
    }

    //Mostrar modal con la informacion de la usuario
    public function openModal($userId)
    {
        $this->userModal = User::find($userId);
        $this->open = true;
    }

    public function render()
    {
        return view('livewire.admin.user-list');
    }
}