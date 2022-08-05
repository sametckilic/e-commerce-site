<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aboutPage;
use App\Models\cartstable;


class AboutController extends Controller
{
    public function index(){
        $about['about'] = aboutPage::where('id',1)->first();
        $about['cart'] = cartstable::all();
        return view("front.about",$about);
    }
}
