<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;
use App\catagory;
use App\product;
use App\slider;
use App\contact;
use App\breaking;
use App\color;
use App\size;

class FrontendController extends Controller
{
     public function index(){
    	//$catagories=catagory::where('status',1)->get(); ata golbally share kora ase app service provider
    	
    	//$slider=slider::where('status',1)->get();ata golbally share kora ase app service provider
    	$products=product::where('status',1)->orderBy('id','desc')->paginate(15);
    	

    	
    	return view('Frontend.components.home',compact('products'));
    	
    }


    public function catagory_product($slug){

        $catagories2=catagory::where('status',1)->get();
        $product2=catagory::where('slug',$slug)->pluck('id');
        //return $products;

       $catagory_product=product::with('catagory')->orderBy('id','desc')
      ->where('catagory_id',$product2)
      ->paginate(15);

      //return $product;

    
      return view('Frontend.catagory_product',compact('catagory_product','catagories2'));

    }
  

    public function product_detils($slug){

    $single_product=product::where('slug',$slug)->first();

    //$images=json_decode($single_product->image);
    //array_splice($images,0,0,$single_product->subimage);
   
  	return view('Frontend.components.product_detils',compact('single_product'));
  }


  public function search(Request $request){
       //return $request->search;

       $request=$request->search;

       $products=product::where('product_name','like','%'.$request.'%')
      ->orderBy('id','desc')
      ->paginate(6);
      //return $products;

      $catagory=catagory::get();

      return view('Frontend.search',compact('products','catagory',));
    }






    public function contact(){

    	return view('Frontend.contact');
    }


    public function contact_store(Request $request){

   

          $request->validate([
          'name'=>'required',
          'phone'=>'required',
         ]);

    	 contact::create([
        	'name'=>$request->name,
        	'email'=>$request->email,
        	'phone'=>$request->phone,
        	'description'=>$request->description,
        	
        	]);

    	//return $data;
    		Session::flash('success', 'Contact has added successfully');
   	        return back();
    }

    public function contact_manage(){

    	$contact=contact::get();


    	return view('backend.contact.show_contact',compact('contact'));
    }


      public function contact_delete($id){
      $delete=contact::find($id);
  
   
      $delete->delete();
      Session::flash('success', 'product has delete successfully');
      return back();
  }


  public function breaking(){
  	$breaking=breaking::first();
    //return $breaking;

  	return view('Frontend.components.layout',compact('breaking'));
  }

}
