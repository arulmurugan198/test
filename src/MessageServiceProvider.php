<?php

namespace Nav33d\Message; 

use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes/routes.php';         
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views')
       ]);
        $this->publishes([
        __DIR__.'/migration' => database_path('migrations')
       ]); 
       $this->publishes([
        __DIR__.'/config/navigation.php' => config_path('navigation.php'),
    ]); 

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
