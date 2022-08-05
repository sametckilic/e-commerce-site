<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\cartstable;



use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        
        $products['products'] = Products::all();
        $products['cart'] = cartstable::all();
        
        return view("front.products",$products);
    }
}
