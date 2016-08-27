<?php

namespace MyTailor\Providers;

use Illuminate\Support\ServiceProvider;
class MtServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->bind('MyTailor\Repositories\ShotsRepositoryInterface', 'MyTailor\Repositories\DbShotsRepository');
        $this->app->bind('MyTailor\Repositories\UsersRepositoryInterface', 'MyTailor\Repositories\DbUsersRepository');
        $this->app->bind('MyTailor\Repositories\DesignersRepositoryInterface', 'MyTailor\Repositories\DbDesignersRepository');
    }
}