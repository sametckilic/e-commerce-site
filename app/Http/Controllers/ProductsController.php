<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\cartstable;
use App\Repository\ICartRepo;



use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private ICartRepo $cartRepo;

    public function __construct(ICartRepo $cartRepo){
        $this->cartRepo = $cartRepo;
    }
    public function index(){
        
        $products['products'] = Products::all();
        $products['cart'] = $this->cartRepo->all();
        
        return view("front.products",$products);
    }
}
