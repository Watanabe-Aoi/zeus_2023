<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\RegisterValidator;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // RegisterValidatorクラスをインスタンス化し、利用する処理
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages) {
            return new RegisterValidator($translator, $data, $rules, $messages);
        });
    }
}
