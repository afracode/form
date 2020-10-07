<?php

namespace Afracode\Form;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {

        $this->publishFiles();

        $this->configFiles();

        $this->routeFiles();

        $this->controllerFiles();

        $this->helperFiles();

        $this->viewFiles();

    }


    public function publishFiles()
    {
        $this->publishes([
            __DIR__.'/config/' => config_path('form'),
        ], 'config');

        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations'),
        ], 'migration');

    }

    public function configFiles()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/base.php', 'form');
    }

    public function routeFiles()
    {
        include __DIR__ . '/routes/base.php';
    }

    public function controllerFiles()
    {
//        $this->app->make('Afracode\Form\FormController');
//        $this->app->make('Afracode\Form\FieldController');
//        $this->app->make('Afracode\Form\OptionController');

    }

    public function helperFiles()
    {
        require_once __DIR__ . '/helpers.php';
    }

    public function viewFiles()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views/', 'form');
    }
}
