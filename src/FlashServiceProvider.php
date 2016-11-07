<?php

namespace MarcoMdMj\Flash;

use Illuminate\Support\ServiceProvider;

/**
 * Flash Service Provider
 *
 * @package MarcoMdMj\Flash
 */
class FlashServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \MarcoMdMj\Flash\Session\SessionStoreInterface::class,
            \MarcoMdMj\Flash\Session\LaravelSessionStore::class
        );

        $this->app->singleton(FlashService::class);
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'Flash');

        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/MarcoMdMj/Flash')
        ]);
    }

}
