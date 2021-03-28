<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use App\Payment;
use App\Order;
use App\Orderdetils;
use Session;
use DB;

class CustomerController extends Controller
{
     public function shipping(){

        return view('Frontend.shipping');
    }

     public function shippingstore(Request $request){

     	//dd($request->all());

     	$request->validate([
          'name'=>'required',
          'address'=>'required',
          'mobile'=>'required'
         ]);

     	$shipping=new shipping();

     	$shipping->name=$request->name;
     	$shipping->mobile=$request->mobile;
     	$shipping->email=$request->email;
     	$shipping->address=$request->address;
     	$shipping->save();

     	session::put('shipping_id',$shipping->id);

     

        return redirect()->route('customer.payment');
    }

     public function payment(){
        
        return view('Frontend.payment');
    }



      public function paymentstore(Request $request){

       //dd($request->all());


     DB::transaction(function() use($request) {

     $payment=new Payment();
     $payment->method=$request->method;   
     $payment->amount=$request->amount;   
     $payment->transtion_id=$request->transtion_id;   
     $payment->save();
  
    $order=new Order();
    $order->shipping_id=Session::get('shipping_id');//a id ta shipping a store korae rakha
    $order->payment_id=$payment->id;//oporae payment thakae


    $data=Order::orderBy('id','desc')->first();
    if($data==null){
        $first='0';
        $order_no=$first+1;
    }else{
        $data=Order::orderBy('id','desc')->first()->order_no;
        $order_no=$data+1;
    }

    $order->order_no=$order_no;
    $order->order_total=$request->order_total;
    $order->status=0;
    $order->save();

    
    $items = \Cart::getContent();


    $orderdetils=new Orderdetils();

    foreach($items as $item){

    	$orderdetils->order_id=$order->id;
    	$orderdetils->product_id=$item->id;
        
    	$orderdetils->color=$item->attributes->color;
    	$orderdetils->subimage=$item->attributes->subimage;
    	$orderdetils->size=$item->attributes->size;
    	$orderdetils->quantity=$item->quantity;
    	$orderdetils->save();
    }

    });

    \Cart::clear(); 

   return redirect()->route('order.detils');  

   

}

public function orderdetils(){


    $order=DB::table('orders')->latest('id')->first();
    $shipping=DB::table('shippings')->latest('id')->first();
    //dd($shipping);
    $orderdetils=DB::table('orderdetils')->latest('id')->first();
    //dd($orderdetils);
    
	return view('Frontend.order_detils',compact('order','shipping','orderdetils'));

}







   public function deleteorder($id){

      $delete=Order::find($id);
      $delete->delete();
      Session::flash('success', 'Order has delete successfully');
      return back();
  } 



   public function order_print($id){

        $orderdata=Order::find($id);
        
        
        $data['order']=Order::where('id',$orderdata->id)->first();
        

        
         $data['order']=Order::with('orderdetils')->where('id',$orderdata->id)->first();
        

         //dd($data['order']->toArray());

    
        return view('Frontend.print_order',$data);

  } 


}
