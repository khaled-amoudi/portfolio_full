<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class ProjectObserver
{
    public function saved(Project $blog)
    {
        $this->caches_to_forget();
    }

    public function deleted(Project $blog)
    {
        $this->caches_to_forget();
    }


    public function caches_to_forget() {
        Cache::forget('home-view');
    }
}
