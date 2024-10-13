<?php

namespace App\Providers;

use App\Interfaces\ConversationsRepositoryInterface;
use App\Repositories\ConversationsRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        App::bind(ConversationsRepositoryInterface::class, ConversationsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
