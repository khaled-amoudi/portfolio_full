<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Settler;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DataTables;

class DashboardController extends Controller
{

    public function index() {
        $data['contact_emails'] = Contact::latest()->get();
        $data['settlers'] = Settler::latest()->get(['id', 'settler_email', 'settler_ip']);
        // $data['unsafe_contact_ips'] = DB::table('contacts')
        // ->select('user_ip', DB::raw('count(*) as total'), DB::raw('max(created_at) as last_created_at'))
        // ->groupBy('user_ip')
        // ->havingRaw('count(*) > 3')
        // ->orderBy('total', 'asc')
        // ->get();
        return view('dashboard', $data);
    }




    public function forget_cache_home_view() {
        Cache::forget('home-view');

        return to_route('dashboard')->with('success', 'forgot the cahce file "home-view" successfully');
    }
    public function forget_cache_blog_view() {
        Cache::forget('blogs-view');

        $blogs = Blog::get(['slug']);
        foreach ($blogs as $blog) {
            $cacheKey = 'single-blog-view-' . $blog->slug;
            Cache::forget($cacheKey);
        }

        return to_route('dashboard')->with('success', 'forgot the cahce file "blog and blogs views" successfully');
    }
    public function forget_all_caches() {
        Cache::forget('home-view');
        Cache::forget('blogs-view');

        $blogs = Blog::get(['slug']);
        foreach ($blogs as $blog) {
            $cacheKey = 'single-blog-view-' . $blog->slug;
            Cache::forget($cacheKey);
        }

        return to_route('dashboard')->with('success', 'forgot all the cahce files successfully');
    }






    // public $dt_col_conf = [
    //     'addIndexColumn' => true,
    //     'escapeColumns' => true
    // ];
    // public function getDatatableIndex() {
    //     return view('datatable');
    // }
    // public function getDatatable(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = Project::latest()->get();

    //         $dataTable = Datatables::of($data)
    //             ->addColumn('action', function($row){
    //                 $data['id'] = $row->id;
    //                 return view('datatabel-column-actions', $data)->render();
    //                 // $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
    //                 // return $actionBtn;
    //             })
    //             ->rawColumns(['action']) // except the column "action" from escape (buttons, links, ...)
    //             ->make(true);

    //             if ($dt_col_conf['addIndexColumn'] ?? false) {
    //                 $dataTable->addIndexColumn();
    //             }
    //             if ($dt_col_conf['escapeColumns'] ?? false) {
    //                 $dataTable->escapeColumns(['*']);
    //             }

    //         return $dataTable;
    //     }
    // }
}
