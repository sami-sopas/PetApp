<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Conversation;

class ChatList extends Component
{
    public $selectedConversation;
    public $query;

    public function deleteByUser($id)
    {
        //dd($id,decrypt($id));

        //Obtener el id del usuario autenticado y su conversacion
        $userId = Auth()->id();
        $conversation = Conversation::find(decrypt($id));

        //Marcar como eliminadas las conversaciones de ese usuario
        $conversation->messages()->each(function($message) use ($userId){
            if($message->sender_id == $userId){
                $message->update([
                    'sender_deleted_at' => now()
                ]);
            }
            else if($message->receiver_id == $userId){
                $message->update([
                    'receiver_deleted_at' => now()
                ]);
            }
            
        });

        //Verficar si el otro usuario tambien elimino la conversacion
        $receiverAlsoDeleted = $conversation->messages()
            ->where(function ($query) use ($userId) {

                $query->where('sender_id', $userId)
                    ->orWhere('receiver_id', $userId);

            })->where(function ($query) use ($userId){

                $query->whereNull('sender_deleted_at')
                    ->orWhereNull('receiver_deleted_at');
            })->doesntExist();


        //Si el otro usuario tambien elimino la conversacion, eliminarla ahora si completamente
        if($receiverAlsoDeleted){
            $conversation->forceDelete();
        }

        return redirect()->route('chat.index');
            
    }
    

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
