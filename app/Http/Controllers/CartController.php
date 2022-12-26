<?php

namespace App\Http\Controllers;

use App\Models\cartstable;
use App\Models\products;
use App\Models\orders;



use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        $cart['cart'] = cartstable::all();
        return view('front.cart', $cart);
    }
    public function addToCart(Request $request)
    {

       if (!cartstable::where('productID', $request->input('productID'))->exists()) {
            $cartItem = new cartstable;
            $cartItem->productID = $request->input('productID');
            $cartItem->productQty = $request->input('productQty');
            $cartItem->save();
            $newItem= products::where('id',$request->input('productID'))->get();
            return response()->json(['status' => 'Added to cart.','newItem'=>$newItem]);
       }
        
            return response()->json(['status' => 'Its already added to cart!']);
            
        
    }
    public function deleteCart(Request $request){

       $cartItem = cartstable::where('productID',$request->input('productID'));
       $cartItem->delete();

       return response()->json(['status' => 'Deleted from cart.']);

    }
    public function order(Request $request){

        $cartList = cartstable::all();
        $orderNumber = random_int(1000000,9999999);
        foreach($cartList as $cartItems){
            $orders = new orders;
            $orders->productID = $cartItems->productID;
            $orders->orderNumber = $orderNumber;
            $orders->productQty = $cartItems->productQty;
            $qty = products::where('id',$cartItems->productID)->sum('stock');
            products::where('id',$cartItems->productID)->update(['stock'=>($qty-$cartItems->productQty)]); 
            $orders->address = $request->input('orderAddress');     
            $orders->save();
        }
        foreach($cartList as $cartItems){
            $cartItems->delete();
        }


        return response()->json(['status' => 'Ordered successfully. Your order number is #'.$orderNumber]);


    }
}
