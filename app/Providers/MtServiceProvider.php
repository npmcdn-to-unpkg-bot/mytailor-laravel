<?php

namespace MyTailor\Providers;

use Illuminate\Support\ServiceProvider;
class MtServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->bind('MyTailor\Repositories\ShotsRepositoryInterface', 'MyTailor\Repositories\DbShotsRepository');
    }
}