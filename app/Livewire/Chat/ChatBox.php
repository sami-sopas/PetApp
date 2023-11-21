<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use Livewire\Component;

class ChatBox extends Component
{
    public $selectedConversation;
    public $body;
    public $loadedMessages;
    public $paginate_var = 10;

    public function mount()
    {
        $this->loadMessages();
    }

    public function loadMore() : void
    {
        //dd('carga al subir el scroll');
        //Incrementar la cantidad de mensajes
        $this->paginate_var += 10;

        //Cargar los mensajes pero con la nueva cantidad
        $this->loadMessages();

        //Actualizar la altura del chat
        $this->dispatch('update-chat-height');

    }

    public function loadMessages()
    {
        //Obtener el total de mensajes de la conversacion
        $count = Message::where('conversation_id', $this->selectedConversation->id)->count();

        //Obtener solo cierta cantidad de msj (NO TODOS PORQUE NMS PUEDEN SER UN CHINGO)
        $this->loadedMessages = Message::where('conversation_id', $this->selectedConversation->id)
            ->skip($count - $this->paginate_var)
            ->take($this->paginate_var)
            ->get();

            return $this->loadedMessages;
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
