<?php

namespace Yousef\Responsible\App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Yousef\Responsible\Structure\ResponseAbstractFactory\Response;
use Yousef\Responsible\Structure\ResponseAbstractFactory\JsonResponse;
use Yousef\Responsible\Structure\ResponseAbstractFactory\ViewResponse;

class ResponseAbstractFactoryServiceProviders extends ServiceProvider
{

    public function register()
    {
        parent::register();
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/response.php' => config_path('response.php')
        ]);

        # Abstract Factory Class to render views for(mobile, web application)
        $this->app->bind(
            Response::class, Request::hasHeader(Config::get('response.PARAMETER_NAME_TO_LISTENER'))
                ? JsonResponse::class : ViewResponse::class
        );

    }
}