<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
    ];

    public function getReceiver()
    {
        if($this->sender_id == auth()->user()->id)
        {
            return User::firstWhere('id', $this->receiver_id);
        }
        else{

            return User::firstWhere('id', $this->sender_id);
        }
    }


    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
