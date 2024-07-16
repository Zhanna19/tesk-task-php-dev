<?php

namespace App\Providers;

use App\Http\Services\DeliveryService;
use App\Http\Services\DeliveryServiceInterface;
use App\Http\Services\NovaPoshtaService;
use App\Http\Services\UkrPoshtaService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(DeliveryServiceInterface::class, function () {
            $deliveryMethod = request()->get('delivery_method');
            if($deliveryMethod == 'NovaPoshta') {
                return new NovaPoshtaService();
            } else if($deliveryMethod == 'UkrPoshta') {
                return new UkrPoshtaService();
            }
            /// etc
            return new NovaPoshtaService();
        });
    }
}
