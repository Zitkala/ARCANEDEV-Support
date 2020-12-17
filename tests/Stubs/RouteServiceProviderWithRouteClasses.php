<?php

declare(strict_types=1);

namespace Zitkala\Support\Tests\Stubs;

use Zitkala\Support\Providers\RouteServiceProvider;

/**
 * Class     RouteServiceProviderWithRouteClasses
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class RouteServiceProviderWithRouteClasses extends RouteServiceProvider
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    protected $routesClasses = [
        \Zitkala\Support\Tests\Stubs\PagesRoutes::class,
    ];

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        parent::boot();

        static::bindRouteClasses($this->routesClasses);
    }

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        static::mapRouteClasses($this->routesClasses);

        //
    }
}
