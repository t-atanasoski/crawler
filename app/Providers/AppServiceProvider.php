<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (\App\Helpers\FileHelper::getFiles(app_path().'/Database/Models') as $model) {
            $this->app->bind("\App\Database\Interfaces\\{$model}Interface", function() use ($model){
                $class = "\App\Database\Repositories\\{$model}Repository";
                return new $class();
            });
        }
    }
}
