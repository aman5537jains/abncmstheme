<?php

namespace Aman5537jains\AbnCmsTheme;


use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;

class AbnCmsThemeServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/views', 'AbnCmsTheme');

    }



    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
