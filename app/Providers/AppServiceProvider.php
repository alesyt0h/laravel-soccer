<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('mimeurl',
            function($attribute, $value, $parameters, $validator) {
                $finfo = new \finfo(FILEINFO_MIME_TYPE);
                $mimetype = $finfo->buffer(file_get_contents($value));
                return in_array($mimetype, $parameters);
            }, 'The :attribute must be a valid image URL.'
        );

        Validator::replacer('mimeurl',
            function($message, $attribute, $rule, $parameters) {
                return str_replace(':values', implode(', ', $parameters), $message);
            }
        );
    }
}
