<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Settler;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index() {
        $data['contact_emails'] = Contact::latest()->get();
        $data['settlers'] = Settler::latest()->get(['id', 'settler_email', 'settler_ip']);
        $data['unsafe_contact_ips'] = DB::table('contacts')
        ->select('user_ip', DB::raw('count(*) as total'), DB::raw('max(created_at) as last_created_at'))
        ->groupBy('user_ip')
        ->havingRaw('count(*) > 3')
        ->orderBy('total', 'asc')
        ->get();
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
