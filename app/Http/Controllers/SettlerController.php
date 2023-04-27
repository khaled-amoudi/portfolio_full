<?php

namespace App\Http\Controllers;

use App\Models\Settler;
use Illuminate\Http\Request;

class SettlerController extends Controller
{
    protected $settler_feature_status = true; // config ممكن اجيبها من ال

    public function store(Request $request){
        if($this->settler_feature_status == true){
            $request->validate([
                'settler_email' => 'required|email',
                'settler_ip' => 'nullable'
            ]);

            $data = [
                'settler_email' => $request->settler_email,
                'settler_ip' => $request->ip() ?? null
            ];

            $settler = Settler::create($data);
            // redirect the user back to the contact page with a success message
            if(!$settler) {
                return redirect()->back()->with('fail', 'Something went wrong, try again please 🫤');
            }
            return redirect()->back()->with('success', 'You are now joined to our club 🥳');
        } else {
            return redirect('/')->back();
        }

    }

    public function delete($id) {
        $deleted = Settler::destroy($id);

        if(!$deleted) {
            return redirect()->route('dashboard')->with('fail', 'Something Went Wrong !');
        }
        return redirect()->route('dashboard')->with('success', 'This Settler Deleted Successfully');
    }
}
