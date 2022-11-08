<?php

namespace Painlesscode\Dashcard;


use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class DashcardServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CardManager::class);
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'dash-card');
    }
}
