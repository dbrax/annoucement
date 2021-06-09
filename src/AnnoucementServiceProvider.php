<?php
/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github: https://github.com/dbrax/annoucement
 * Email: epmnzava@gmail.com
 * 
 */

namespace Epmnzava\Annoucement;

use Illuminate\Support\ServiceProvider;

class AnnoucementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'annoucement');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'annoucement');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('annoucement.php'),
            ], 'config');


            //publishing migrations here..
            if (!class_exists('CreateUserAnnoucementTable') && !class_exists('CreateAnnoucementTypeTable') && !class_exists('CreateAnnoucementTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_annoucement_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_annoucement_table.php'),
                    __DIR__ . '/../database/migrations/create_annoucement_types_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_annoucement_types_table.php'),
                    __DIR__ . '/../database/migrations/create_user_annoucement_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_user_annoucement_table.php'),


                ], 'migrations');
            }


            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/annoucement'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/annoucement'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/annoucement'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'annoucement');

        // Register the main class to use with the facade
        $this->app->singleton('annoucement', function () {
            return new Annoucement;
        });
    }
}
