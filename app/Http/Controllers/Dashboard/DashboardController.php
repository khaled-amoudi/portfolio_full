<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;


class DashboardController extends Controller
{

    public function index() {
        $data['contact_emails'] = Contact::latest()->get();
        return view('dashboard', $data);
    }





    public function forget_cache_home_view() {
        Cache::forget('home-view');

        return to_route('dashboard')->with('success', 'forgot the cahce file "home-view" successfully');
    }

    public function forget_all_caches() {
        Cache::forget('home-view');

        return to_route('dashboard')->with('success', 'forgot all the cahce files successfully');
    }
}
