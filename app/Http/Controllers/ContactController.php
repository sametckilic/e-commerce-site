<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\cartstable;
use App\Repository\ICartRepo;



class ContactController extends Controller
{
    private ICartRepo $cartRepo;

    public function __construct(ICartRepo $cartRepo){
        $this->cartRepo = $cartRepo;
    }
    public function index(){
        $data['cart'] = $this->cartRepo->all();
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
