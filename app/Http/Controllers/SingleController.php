<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\cartstable;


class SingleController extends Controller
{
    public function index($id){
        $product['product'] = Products::where('id',$id)->first();
        $product['cart'] = cartstable::all();
        return view("front.single_product",$product);
    }
}
