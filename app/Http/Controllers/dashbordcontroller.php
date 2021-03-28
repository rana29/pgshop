<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use App\Payment;
use App\Order;
use App\Orderdetils;
use Session;
use DB;

class dashbordcontroller extends Controller
{
  public function dashbord(){
    	return view('backend.dashbord');
    }



    public function customerorder(){

    	        
    	$data['order']=Order::get();
    	

    	
         $data['order']=Order::with('orderdetils')->get();
        

         //dd($data['order']->toArray());
    
    	return view('backend.customerorder',$data);
    	
    }



     public function orderactive($id,$status){

    $order=Order::find($id);
    //return $order;
    $order->status=$status;
    $order->save();
    Session::flash('success', 'Order has active successfully');
    return back();

   }


    public function orderdetils($id){

    	
    	$orderdata=Order::find($id);
    	
        
    	$data['order']=Order::where('id',$orderdata->id)->first();
    	

    	
         $data['order']=Order::with('orderdetils')->where('id',$orderdata->id)->first();
        

         //dd($data['order']->toArray());

    
    	return view('backend.customer_order_detils',$data);

    }

   
  

   

}
