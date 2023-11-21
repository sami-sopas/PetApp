<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use Livewire\Component;

class ChatBox extends Component
{
    public $selectedConversation;
    public $body;
    public $loadedMessages;

    public function mount()
    {
        $this->loadMessages();
    }

    public function loadMessages()
    {
        $this->loadedMessages = Message::where('conversation_id', $this->selectedConversation->id)->get();
    }

    public function sendMessage()
    {
        //dd($this->body);
        $this->validate([
            'body' => 'required|string'
        ]);

        $createdMessage = Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'sender_id' => auth()->id(),
            'receiver_id' => $this->selectedConversation->getReceiver()->id,
            'body' => $this->body
        ]);

        $this->reset('body');

        //Renderizar el nuevo mensaje
        $this->loadedMessages->push($createdMessage);

        //Actualizar la conversacion
        $this->selectedConversation->updated_at = now();
        $this->selectedConversation->save();

        //Emitir evento para refescar la chatlist
        $this->dispatch('render-chat-list');

        //dd($createdMessage);
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }
}
