<?php

namespace ThaiLe\FileManager\Providers;

use Illuminate\Support\ServiceProvider;

class MediaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $package_name = "media";
        //routes
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        //view
        $this->loadViewsFrom(__DIR__.'/../../views', $package_name);

        $this->publishes([
            __DIR__.'../../config/media.php' => config_path('ckfinder.php'),
            __DIR__.'../../public' => public_path('js')
        ], 'ckfinder');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
