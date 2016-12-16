<?php

namespace TechFrndz\SoaExample\Providers;

use Illuminate\Support\ServiceProvider;
// Add Service File For Business Logic
use TechFrndz\SoaExample\Services\ExampleService;
// Add Database 
use TechFrndz\SoaExample\Repositories\ExampleRepository;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Bind The Contract For Specefic Service File
        $this->app->bind('TechFrndz\SoaExample\Contracts\ExampleContract', function ($app) {
            return new ExampleService(new ExampleRepository());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/../routes.php';
        //$this->app->make('TechFrndz\SoaExample\Controllers\ExampleController');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['TechFrndz\SoaExample\Contracts\ExampleContract'];
    }
}
