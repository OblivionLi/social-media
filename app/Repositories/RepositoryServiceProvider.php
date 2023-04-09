<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;
use App\Repositories\News\EloquentNewsRepository;
use App\Repositories\News\NewsRepositoryInterface;
// use App\Repositories\Category\EloquentCategoryRepository;
// use App\Repositories\Category\CategoryRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(NewsRepositoryInterface::class, EloquentNewsRepository::class);
        // $this->app->bind(CategoryRepositoryInterface::class, EloquentCategoryRepository::class);
    }
}
