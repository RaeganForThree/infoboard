<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function AdminContact(){
        $contacts = Contact::all();
    return view('admin.contact.index', compact('contacts'));
    
      }
      public function AddContact(){
      
        // $contact=Contact::
    return view('admin.contact.create' );
}
public function StoreContact(Request $request){
   
    Contact::insert([
    'address' => $request->address,
    'email' => $request->email,
    'phone' => $request->phone,
    'created_at' => Carbon::now()
    
                ]);
 return Redirect()->route('admin.contact')->with('success','Contact Data Inserted Successfully');
        }

public function Contact(){
    $contacts=DB::table('contacts')->first();
return view('pages.contact', compact('contacts'));

}
}
