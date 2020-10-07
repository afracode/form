<?php


Route::group(
    [
        'middleware' => config('base.middleware'),
        'prefix'     => config('base.prefix'),
    ],
    function () {
        Route::get('/', function(){
            echo 'Hello from the Afracode Form Generator package!';
        });
    });
