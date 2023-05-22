<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Validators\GreetValidator;

class GreetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages){
            return new GreetValidator($translator, $data, $rules, $messages);
        });
    }
}
