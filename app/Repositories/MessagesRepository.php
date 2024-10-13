<?php

namespace App\Repositories;
use App\Interfaces\MessagesRepositoryInterface;
use Auth;

class MessagesRepository implements MessagesRepositoryInterface
{
    public function index($conversationId)
    {
        $user = Auth::user();
        $conversation = $user->conversations()->firstOrFail($conversationId);

        return $conversation->massages()->paginate();
    }
}