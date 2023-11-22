<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Conversation;

class SendMessage extends Component
{
    public $userId;

    public function mount($userId)
    {
        $this->userId = $userId;
    }

    public function message($userId)
    {
        $authenticatedUserId = auth()->user()->id;

        //Verificar si la conversacion existe
        $existingConversation = Conversation::where(function ($query) use ($authenticatedUserId,$userId){
            $query->where('sender_id',$authenticatedUserId)
                  ->where('receiver_id',$userId);
        })->orWhere( function ($query) use ($authenticatedUserId,$userId){
            $query->where('sender_id',$userId)
                  ->where('receiver_id',$authenticatedUserId);
        })->first();

        if($existingConversation){
            return redirect()->route('chat',['query' => $existingConversation->id]);
        }

        //Crear conversacion
        $createdConversation = Conversation::create([
            'sender_id' => $authenticatedUserId,
            'receiver_id' => $userId
        ]);

        return redirect()->route('chat',['query' => $createdConversation->id]);
        
    }

    public function render()
    {
        return view('livewire.send-message');
    }
}
