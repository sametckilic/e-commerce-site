<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\cartstable;
use App\Repository\ICartRepo;



class MainController extends Controller
{
    private ICartRepo $cartRepo;

    public function __construct(ICartRepo $cartRepo){
        $this->cartRepo = $cartRepo;
    }
    public function index(){
        $products['products']=Products::all();
        $products['cart'] = $this->cartRepo->all();
        return view("front.index",$products);
    }
}
