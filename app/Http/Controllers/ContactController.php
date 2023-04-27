<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    protected $contact_feature_status = true;

    public function store_and_send_contact_mail(Request $request){
        if($this->contact_feature_status == true){
            $request->validate([
                'name' => 'required',
                'email_address' => 'required|email',
                'phone_number' => 'nullable',
                'message' => 'nullable',
                'user_ip' => 'nullable'
            ]);

            $data = [
                'name' => $request->name,
                'email_address' => $request->email_address,
                'phone_number' => $request->phone_number,
                'message' => $request->message,
                'user_ip' => $request->ip() ?? null
            ];

            $contact = Contact::create($data);


            if($contact) {
                Mail::to('khaled.amoudi00@gmail.com')->send(new ContactFormMail($data));
            }

            // redirect the user back to the contact page with a success message
            if(! $contact) {
                return redirect('/#contact')->with('fail', 'OOPS something went wrong, try another way to contact 🫤');
            }
            return redirect('/#contact')->with('success', 'Your message has been sent 🥳');
        } else {
            return redirect('/#contact')->with('fail', 'Sorry, this service is temporarily suspended 🫤, try another way to contact, please.');
        }

    }

    public function delete($id) {
        $deleted = Contact::destroy($id);

        if(!$deleted) {
            return redirect()->route('dashboard')->with('fail', 'Something Went Wrong !');
        }
        return redirect()->route('dashboard')->with('success', 'This Contact Deleted Successfully');

    }
}
