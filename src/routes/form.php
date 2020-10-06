<?php


Route::group(
    [
        'middleware' => config('form.base.middleware'),
        'prefix'     => config('form.base.prefix'),
    ],
    function () {
        Route::get('/', function(){
            echo 'Hello from the Afracode Form Generator package!';
        });
    });
