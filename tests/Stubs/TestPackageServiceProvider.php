<?php

declare(strict_types=1);

namespace Zitkala\Support\Tests\Stubs;

use Zitkala\Support\Providers\PackageServiceProvider;

/**
 * Class     TestPackageServiceProvider
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class TestPackageServiceProvider extends PackageServiceProvider
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /**
     * Package name.
     *
     * @var string
     */
    protected $package = 'package';

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->registerConfig();
    }

    /* -----------------------------------------------------------------
     |  Getters & Setters
     | -----------------------------------------------------------------
     */

    /**
     * Get config folder.
     *
     * @return string
     */
    protected function getConfigFolder(): string
    {
        return realpath($this->getBasePath().DIRECTORY_SEPARATOR.'fixtures'.DIRECTORY_SEPARATOR.'config');
    }
}
