<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use \Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
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
        Validator::extend('checkIsAssigned',            '\App\Libraries\TodosValidator@checkIsAssigned');
        Validator::extend('checkIfPasswordCorrect',     '\App\Libraries\UsersValidator@checkIfPasswordCorrect');
        Validator::extend('password', '\App\Libraries\PasswordValidate@password');
        Validator::extend('checkIsFormatValid', '\App\Libraries\AttachmentValidator@checkIsFormatValid');
    }
}
