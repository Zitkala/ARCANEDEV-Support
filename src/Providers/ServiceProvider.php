<?php

declare(strict_types=1);

namespace Zitkala\Support\Providers;

use Zitkala\Support\Providers\Concerns\InteractsWithApplication;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Class     ServiceProvider
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
abstract class ServiceProvider extends IlluminateServiceProvider
{
    /* -----------------------------------------------------------------
     |  Traits
     | -----------------------------------------------------------------
     */

    use InteractsWithApplication;
}
