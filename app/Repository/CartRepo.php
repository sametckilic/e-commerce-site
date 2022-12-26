<?php


namespace App\Repository;

use App\Models\cartstable;



class CartRepo implements ICartRepo{

    function all(): object{
        $cart = cartstable::all();
      


        return $cart;
    }


}