<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\slider;
use Auth;
use Session;
use Hash;
use Image;

class slidercontroller extends Controller
{
   public function manage(){
    	$data=slider::orderBy ('id','desc')->get();
    	//return $data;
    	return view('backend.slider.manage_slider',compact('data'));
    }


     public function create(){
    	
    	//return $data;
    	return view('backend.slider.create_slider');
    }


     public function store(Request $request){

      if ($request->hasfile('image')){

      $image=$request->file('image');
    

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('slider/');
      $upload=$image->move($location,$name);
      
    }


     	//return $request;

     	 $request->validate([
          'title'=>'required|unique:users,name|min:4',
         ]);

    	$store=slider::create([
        	'title'=>$request->title,
        	'subtitle'=>$request->subtitle,
          'discount'=>$request->discount,
        	'image'=>$name,
        	]);

    	//return $data;
    		Session::flash('success', 'Slider has added successfully');
   	        return back();
    }

    public function edit($id){

    	$edit=slider::find($id);

    	//return $data;

    	return view('backend.slider.update_slider',compact('edit'));

    }

     public function active($id,$status){

    $slider=slider::find($id);
    $slider->status=$status;
    $slider->save();
    Session::flash('success', 'Catagory has active successfully');
    return back();

   }




     public function update(Request $request,$id){

  	//return $request;

  	  $update=slider::find($id);

  	

  	   if ($request->hasfile('image')){

       $image=$request->file('image');
    
       unlink(public_path('slider/'.$update->image));
      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('slider/');
      $upload=$image->move($location,$name);
      $update->image=$name;
      
    }
    else{
    	$name=$update->image;
    }
  	  

       $request->validate([
  		'title'=>'required|min:3|unique:sliders,id,'.$id, //id dilae same name holae o nibae jodi o unique
  	   ]);
//return $request;
  	    
  	    $update->title=$request->title;
  	    $update->subtitle=$request->subtitle;
    	$update->save();
  
    	session()->flash('success','slider has update successfully');
    	return redirect()->back();

  }




    public function delete($id){

    	$delete=slider::find($id);
      if(file_exists('slider/'.$delete->image)){                            
       unlink(public_path('slider/'.$delete->image));
      }
    	$delete->delete();
      Session::flash('success', 'slider has delete successfully');
      return back(); 
    }
  
}
