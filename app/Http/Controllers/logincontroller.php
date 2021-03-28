<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;
use Auth;

class logincontroller extends Controller
{
    
public function create(){
	return view('backend.login');
}


public function store(Request $request){

	$login=$request->validate([
		'email' =>'required|email',
		'password' =>'required'
	]);

	//return $login;
	

	if(Auth()->attempt($login)){
		//return Auth::User();

		//return redirect('/admin/dashbord');
		return redirect()->route('admin.dashbord');

	}else{

	session()->flash('type','danger');
    session()->flash('message','Email or Password is incorrect');	

    return redirect()->back();
	}
	
}


public function logout(){
	auth()->logout();
	return redirect('/admin/login');
}

}


