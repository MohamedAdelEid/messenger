<?php

namespace App\Interfaces;
use App\Models\Conversation;

interface MessagesRepositoryInterface
{
    public function index($conversationId);
}