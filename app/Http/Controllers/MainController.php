<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\cartstable;


class MainController extends Controller
{
    public function index(){
        $products['products']=Products::all();
        $products['cart'] = cartstable::all();
        return view("front.index",$products);
    }
}
