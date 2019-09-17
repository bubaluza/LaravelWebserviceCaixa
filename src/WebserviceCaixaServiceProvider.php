<?php

namespace Freelabois\WebserviceCaixa;

use Illuminate\Support\ServiceProvider;

class WebserviceCaixaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(
            __DIR__.'/config/webservice_caixa.php', 'webservice_caixa'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/config/webservice_caixa.php' => config_path('webservice_caixa.php'),
        ]);
    }
}
