<?php

namespace App\Modules\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Modules\Users\Repositories\BillingRepositoryInterface;
use App\Modules\Users\Repositories\BillingRepository;

class BillingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            BillingRepositoryInterface::class,
            BillingRepository::class
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config.php',
            'users'
        );
    }

    public function boot(): void
    {
        $this->loadRoutes();
        $this->loadMigrations();
        $this->publishConfigs();
    }

    protected function loadRoutes(): void
    {
        Route::middleware('api')
            ->prefix('api/billing')
            ->group(__DIR__ . '/../Routes/api.php');

        // Route::middleware('web')
        //     ->group(__DIR__ . '/../Routes/web.php');
    }

    protected function loadMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    protected function publishConfigs(): void
    {
        $this->publishes([
            __DIR__ . '/../config.php' => config_path('billing.php'),
        ], 'config');
    }
}
