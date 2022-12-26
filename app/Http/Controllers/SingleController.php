<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\cartstable;
use App\Repository\ICartRepo;


class SingleController extends Controller
{
    private ICartRepo $cartRepo;

    public function __construct(ICartRepo $cartRepo){
        $this->cartRepo = $cartRepo;
    }

    public function index($id){
        $product['product'] = Products::where('id',$id)->first();
        $product['cart'] = $this->cartRepo->all();
        return view("front.single_product",$product);
    }
}
