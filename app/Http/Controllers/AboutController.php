<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aboutPage;
use App\Models\cartstable;
use App\Repository\ICartRepo;


class AboutController extends Controller
{

    private ICartRepo $cartRepo;

    public function __construct(ICartRepo $cartRepo){
        $this->cartRepo = $cartRepo;
    }



    public function index(){
        $about['about'] = aboutPage::where('id',1)->first();
        $about['cart'] = $this->cartRepo->all();
        return view("front.about",$about);
    }
}
