<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\cartstable;


class ContactController extends Controller
{
    public function index(){
        $data['cart'] = cartstable::all();
        return view("front.contact",$data);
    }
    public function postContact(Request $request){
      
        $contact = new contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('contact')->with('success','Your Message Sent Successfully.');
    }
    
}
