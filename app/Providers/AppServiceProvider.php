<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Project;
use App\Observers\BlogObserver;
use App\Observers\ProjectObserver;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blog::observe(BlogObserver::class);
        Project::observe(ProjectObserver::class);
    }
}
