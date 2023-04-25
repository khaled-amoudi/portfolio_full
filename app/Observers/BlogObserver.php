<?php

namespace App\Observers;

use App\Models\Blog;
use Illuminate\Support\Facades\Cache;

class BlogObserver
{
    public function saved(Blog $blog)
    {
        $this->caches_to_forget();
    }

    public function deleted(Blog $blog)
    {
        $this->caches_to_forget();
    }


    public function caches_to_forget() {
        // Cache::forget('blogs-view');
        // Cache::forget(function ($key, $value) {
        //     return strpos($key, 'single-blog-view-') === 0;
        // });
    }
}
