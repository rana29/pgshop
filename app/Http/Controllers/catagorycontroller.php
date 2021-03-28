<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;
use Session;
use Str;


class catagorycontroller extends Controller
{
   
    public function create(){

   	  return view('backend.catagory.create_catagory');
    }

   public function store(Request $request){

   	//return $request;

          $request->validate([
          'name'=>'required|unique:catagories,name|min:3',
         ]);

    	 catagory::create([
        	'name'=>$request->name,
        	'slug'=>str::slug($request->name),
        	]);

    	//return $data;
    		Session::flash('success', 'Catagory has added successfully');
   	        return back();
    }



     public function manage(){

      $catagory=Catagory::where('status',1)->orderBy('id','asc')->get();

      //return $catagory;
   	  return view('backend.catagory.manage_catagory',compact('catagory'));
    }


    public function active($id,$status){

    $Catagory=Catagory::find($id);
    $Catagory->status=$status;
    $Catagory->save();
    Session::flash('success', 'Catagory has active successfully');
    return back();

   }

    public function orderactive($id,$status){

    $order=Order::find($id);
    //return $order;
    $order->status=$status;
    $order->save();
    Session::flash('success', 'Order has active successfully');
    return back();

   }

     public function edit($id){

     $catagory=catagory::find($id);
     return view('backend.catagory.edit_catagory',compact('catagory'));
    }




     public function update(request $request,$id){

      //return $request;
        $request->validate([

          'name'=>'required|unique:catagories,name|min:3,id,'.$id,
        ]);
       
        $update=catagory::find($request->id);
       //return $up;
        $update->name=$request->name;
      
        $update->save();
        Session::flash('success', 'catagory has update successfully');
        return redirect()->route('catagory.manage');
   }


    public function delete($id){

      $delete=catagory::find($id);
      $delete->delete();
      Session::flash('success', 'Catagory has delete successfully');
      return back();
  } 
}
