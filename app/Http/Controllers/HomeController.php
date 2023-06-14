<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public function home()
    {
        $view = Cache::rememberForever('home-view', function () {
            $projects = Project::with('backendProject')->active()->orderBy('order_number', 'asc')->get();
            $data['frontend_projects'] = $projects->where('project_type', 'frontend');
            $data['backend_projects'] = $projects->where('project_type', 'backend');
            $data['uxui_projects'] = $projects->where('project_type', 'uxui');
            return view('home', $data)->render();
        });
        return $view;
    }


    public function blogs()
    {
        $view = Cache::rememberForever('blogs-view', function () {
            $data['blogs'] = Blog::with('tags')->active()->latest()->paginate(20);

            $tags = Tag::withCount('blogs')->get(['name']);
            $data['tags'] = $tags;
            $data['tags_count'] = $tags->count();
            return view('blogs', $data)->render();
        });
        return $view;
    }


    public function blog($slug)
    {
        $view = Cache::remember('single-blog-view-' . $slug, Carbon::now()->addMonth(), function () use ($slug) {

            $data['blog'] = Blog::with('tags')->where('slug', $slug)->active()->firstOrFail();

            $data['latest_blogs'] = Blog::active()->latest()->take(5)->get(['image', 'title', 'slug', 'lang']);

            return view('single_blog', $data)->render();
        });
        return $view;
    }

}
