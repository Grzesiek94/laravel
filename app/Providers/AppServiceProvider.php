<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
use Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::macro('field', function ($name, $field, $attributes = [], $value = null) {
            return view('form.field', compact( 'name', 'field', 'attributes', 'value' ) );
        });

        Form::macro('passwd', function ($name, $field, $attributes = []) {
            return view('form.passwd', compact( 'name', 'field', 'attributes', 'value' ));
        });

        Route::macro('rest', function ($name, $controller){
            Route::get($name, [ 'as' => $name.'.index', 'uses' => $controller.'@index' ]);
            Route::get($name.'/create', [ 'as' => $name.'.create', 'uses' => $controller.'@create' ]);
            Route::get($name.'/{'.$name.'}', [ 'as' => $name.'.show', 'uses' => $controller.'@show' ]);
            Route::get($name.'/{'.$name.'}/edit/', [ 'as' => $name.'.edit', 'uses' => $controller.'@edit' ]);

            Route::post($name, [ 'as' => $name.'.store', 'uses' => $controller.'@store' ]);
            Route::get($name.'/{'.$name.'}/delete/', [ 'as' => $name.'.destroy', 'uses' => $controller.'@destroy' ]);
            Route::post($name.'/{'.$name.'}/update/', [ 'as' => $name.'.update', 'uses' => $controller.'@update' ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
