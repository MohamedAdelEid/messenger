<?php

namespace App\Http\Controllers;

use App\Interfaces\ConversationsRepositoryInterface;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    public $conversationRepository;
    public function __construct(ConversationsRepositoryInterface $conversationRepositoryInterface)
    {
        $this->conversationRepository = $conversationRepositoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
