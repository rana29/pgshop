<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use App\product;
use App\size;
use App\color;
use Session;


class CartController extends Controller
{
    public function storecart(Request $request){

   //dd($request->all());

    $items = \Cart::getContent();  

	 $product=product::where('id',$request->id)->first();
	 //return $product;
	 $size=size::where('size_name',$request->size)->first();
   //return $size;
	 $color=color::where('color_name',$request->color)->first();
   //return $color;


      
         

          \Cart::add([

            'id'=>$product->id,
            'name'=>$product->product_name,
            'price'=>$product->offer_price,
            'quantity'=>$request->quantity,

            'attributes' => array(
            'image'=>$product->image,  
            'subimage'=>$product->subimage,  
            'pdiscount'=>$product->pdiscount,  
            'color_id'=>$color->id,  
            'color'=>$color->color_name,
            'size_id'=>$size->id,  
            'size'=>$size->size_name  
             

            ),

          




        ]);

           return redirect()->route('cart.show');

    }

    public function showcart(){

    	return view('Frontend.cart');
    }


     public function updatecart(Request $request){

      //dd($request->all());

     \Cart::update($request->rowId, array(
      'quantity' => array(
      'relative' => false,
      'value' => $request->quantity
  ),
));

      return redirect()->route('cart.show');
    }


     public function deletecart($rowId){

      //dd($request->all());

     \Cart::remove($rowId);

      return redirect()->route('cart.show');
    }
}
