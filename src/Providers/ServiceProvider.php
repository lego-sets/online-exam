<?php

namespace OnlineExam\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use LegoCMS\Support\Facades\LegoCMS;

/**
 * class ServiceProvider
 *
 * OnlineExam ServiceProvider.
 *
 * @category ServiceProviders
 * @package  OnlineExam\Providers
 * @author   Basant Besra <besrabasant@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/lego-bricks/online-exam/blob/master/src/Providers/ServiceProvider.php
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Boots application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    /**
     * Registers application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        LegoCMS::addLegoSet('online-exam', [
            'namespace' => "OnlineExam\\",
            'package_root' => __DIR__ . "/../../",
            'routes_dir' => __DIR__ . "/../../routes/"
        ]);
    }
}
