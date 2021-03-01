<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \packages\UseCase\Product\Index\ProductIndexUseCaseInterface::class,
            \packages\Domain\Application\Product\ProductIndexInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\Product\Get\ProductGetUseCaseInterface::class,
            \packages\Domain\Application\Product\ProductGetInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\Product\Update\ProductUpdateUseCaseInterface::class,
            \packages\Domain\Application\Product\ProductUpdateInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\Product\Store\ProductStoreUseCaseInterface::class,
            \packages\Domain\Application\Product\ProductStoreInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\Product\Remove\ProductRemoveUseCaseInterface::class,
            \packages\Domain\Application\Product\ProductRemoveInteractor::class
        );

        $this->app->bind(
            \packages\Domain\Domain\Product\ProductRepositoryInterface::class,
            \packages\Infrastructure\Product\ProductRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
