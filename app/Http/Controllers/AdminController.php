<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\aboutPage;
use App\Models\Products;

class AdminController extends Controller
{
    public function index(){

        return view('back.admin');

    }
    public function showContacts(){

        $contact['contact'] = contact::all();


        return view('back.contacts',$contact);
        
    }
    
    public function showAbout(){

        $about['about'] = aboutPage::where('id',1)->first();
        

        return view('back.about',$about);
        
    }
    public function updateAbout(Request $request){
        $about = aboutPage::where('id',1)->first();
        $about->title = $request->title;
        $about->aboutUs = $request->aboutUs;
        $newImageName = time() . '-' . $request->image->getFileName() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        $about->image = $newImageName;
        $about->save();


        return redirect()->route('adminAbout')->with('success','Your About Us Page Updated Successfully.');

    }
    public function showProducts(){
        $products['product'] = Products::all();

        return view('back.allproducts',$products);
    }
    public function showCreateProducts(){

        return view('back.createProducts');
    }
    public function storeProducts(Request $request){

        $products = new Products;
        $products->name = $request->name;
        $products->aboutProduct = $request->aboutProduct;
        $products->price = $request->price;
        $products->stock = $request->stock;
        $newImageName = time() . '-' . $request->coverPhoto->getFileName() . '.' . $request->coverPhoto->extension();
        $request->coverPhoto->move(public_path('images'), $newImageName);
        $products->coverPhoto = $newImageName;
        $products->save();

        return redirect()->route('showProducts')->with('success','Your Product Created Successfully.');

    }

}
