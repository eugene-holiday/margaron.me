<?php namespace Margaron\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->register('Margaron\Blog\BlogServiceProvider');
    }
}