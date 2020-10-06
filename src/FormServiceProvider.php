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
    }

    public function configFiles()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/form/base.php', 'form');
    }

    public function routeFiles()
    {
        include __DIR__ . '/routes/form.php';
    }

    public function controllerFiles()
    {

    }

    public function helperFiles()
    {
        require_once __DIR__ . '/helpers.php';
    }

    public function viewFiles()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'form');
    }
}
