<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catagory;
use App\size;
use App\color;
use App\slider;
use Session;
use Str;
use Image;

class productcontroller extends Controller
{
     public function create(){
     $catagory=catagory::orderBy('id','asc')->get();

     $color=color::orderBy('id','asc')->get();
     //return $color;
     $size=size::orderBy('id','asc')->get();
     //return $size;
     return view('backend.product.create_product',compact('catagory','color','size'));
    }


   



     public function store(Request $request){

     

      $file=[];
      
      if ($request->hasfile('image')){
      
      foreach($request->file('image') as $image){


      $rand=rand(100,100000);
      $ex=$image->getClientOriginalExtension();
      //return $ex;
      $name=$rand.'.'.$ex;
      $location=public_path('product/');
      $upload=$image->move($location,$name);

      $file[]=$name;

        
     }
} 

      
      if ($request->hasfile('subimage')){

      $subimage=$request->file('subimage');
    

      //dd($image);

      $rand=rand(100,1000);
      $ex=$subimage->getClientOriginalExtension();
      $subname=$rand.'.'.$ex;

      //return $name;
      $location=public_path('subimage/');
      $upload=$subimage->move($location,$subname);
      
    }


        


        
          $product=new product();

          $request->validate([
          'product_name'=>'required|min:4',
         ]);


         

        	$product->product_name=$request->product_name;
          $product->slug=str::slug($request->product_name);
        	$product->catagory_id=$request->catagory_id;
        
          
          $product->color_id= $request->color? json_encode($request->color) : '[]';
          $product->size_id= $request->size ? json_encode($request->size) : '[]';
        	$product->regular_price=$request->regular_price;
          $product->offer_price=$request->offer_price;
          $product->offer_price=$request->offer_price;
         
        	$product->pdiscount=$request->pdiscount;
          $product->description=$request->description;
        
        	$product->image=json_encode($file);
          $product->subimage=$subname;
        //return $product;
  
          if($product->save()){
          Session::flash('success', 'product has added successfully');
          return back();
          }else{
            Session::flash('success', 'product add  unsuccessfull');
            return back();
          }    	
    		 
    }


  



     public function manage(){

     $product=product::orderBy('id','desc')->get();
     //return $product;
     //$catagory=catagory::orderBy('id','asc')->get();
     
     //$size=size::orderBy('id','asc')->get();
     //$colors=color::orderBy('id','asc')->get();

      //return $colors;
   	  return view('backend.product.manage_product',compact('product'));
    }


    public function active($id,$status){

    $product=product::find($id);
    $product->status=$status;
    $product->save();
    Session::flash('success', 'product has added successfully');
    return back();

   }

     public function edit($id){

          $product=product::find($id);
          $catagory=catagory::orderBy('id','asc')->get();
          $color=color::orderBy('id','asc')->get();
          $size=size::orderBy('id','asc')->get();
          return view('backend.product.edit_product',compact('product','catagory','color','size'));
    }




     public function update(request $request,$id){

     	 

      $update=product::find($id);
      //dd($update);
      $image=json_decode($update->image);
      if(file_exists('product/'.$update->image)){
      foreach($image as $file){
      unlink(public_path('product/'.$file));
    }

      }

      $update->delete();

      //product::where('$product->id',$id)->delete();

   
      $file=[];
      
    
      
      if ($request->hasfile('image')){
      
      foreach($request->file('image') as $image){


/* echo $image;
 exit;
*/
      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      //return $ex;
      $name=$rand.'.'.$ex;
      $location=public_path('product/');
      $upload=$image->move($location,$name);

      /*Image::make($image)
     
      ->save($location);*/

        $file[]=$name;
       
     }
} 
   
      if ($request->hasfile('subimage')){

         $subimage=$request->file('subimage');
    

      dd($subimage);

      $rand=rand(100,1000);
      $ex=$subimage->getClientOriginalExtension();
      $subname=$rand.'.'.$ex;

      //return $name;
      $location=public_path('subimage/');
      $upload=$subimage->move($location,$subname);
      
    }     

         $product=new product();

          $request->validate([
          'product_name'=>'required|min:2',
         ]);


           

          $product->product_name=$request->product_name;
          $product->slug=str::slug($request->product_name);
          $product->catagory_id=$request->catagory_id;
        
          
          $product->color_id= $request->color? json_encode($request->color) : '[]';
          $product->size_id= $request->size ? json_encode($request->size) : '[]';
          $product->regular_price=$request->regular_price;
          $product->offer_price=$request->offer_price;
          $product->offer_price=$request->offer_price;
         
          $product->pdiscount=$request->pdiscount;
          $product->description=$request->description;
        
          $product->image=json_encode($file);
          $product->subimage=$subname;
        	
          if($update->save() ){

      
          Session::flash('success', 'product has update successfully');
          return back();
          }else{
            Session::flash('success', 'product has not added successfully');
          }
              	
    		 
   

}

      public function delete($id){
      $delete=product::find($id);
      //return $delete->subimage;
      
      $image=json_decode($delete->image);
      foreach($image as $file){

      unlink(public_path('product/'.$file));

   }

      unlink(public_path('subimage/'.$delete->subimage));
      
   
   
      $delete->delete();
      Session::flash('success', 'product has delete successfully');
      return back();
  }


   
}
