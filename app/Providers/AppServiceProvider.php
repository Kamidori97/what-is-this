<?php

namespace App\Providers;

use App\Adapters\Presenters\GetUserJsonPresenter;
use App\Adapters\ViewModels\JsonResourceViewModel;
use App\Http\Controllers\GetUserController;
use App\Repositories\UserDatabaseRepository;
use Illuminate\Support\ServiceProvider;
use Src\Applications\User\UseCases\GetUserInputPort;
use Src\Applications\User\UseCases\GetUserInteractor;
use Src\Domains\User\Repositories\UserRepositoryInterface;
use Src\Domains\User\ViewModels\ViewModel;

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
            UserRepositoryInterface::class,
            UserDatabaseRepository::class,
        );

        $this->app
            ->when(GetUserController::class)
            ->needs(GetUserInputPort::class)
            ->give(function ($app) {
                return $app->make(GetUserInteractor::class, [
                    'output' => $app->make(GetUserJsonPresenter::class),
                ]);
            });
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
