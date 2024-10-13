<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'label',
        'last_message_id'
    ];

    public function participants()
    {
        return $this->belongsToMany(User::class, 'participants')->withPivot([
            'joined_at',
            'role'
        ]);
    }

    public function massages()
    {
        return $this->hasMany(Message::class)->latest();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lastMessage()
    {
        return $this->belongsTo(Message::class, 'last_message_at', 'id')->withDefault();
    }
}
