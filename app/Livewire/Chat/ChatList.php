<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use Livewire\Attributes\On;

class ChatList extends Component
{
    public $selectedConversation;
    public $query;

    #[On('render-chat-list')]
    public function render()
    {
        $user = auth()->user();

        return view('livewire.chat.chat-list',
            [
                'conversations' => $user->conversations()->latest('updated_at')->get(),   
            ]);
    }
}
