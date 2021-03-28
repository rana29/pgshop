<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


  /* auth route*/

    
	Route::get('/admin/login','logincontroller@create')->name('login');
	Route::post('/admin/login','logincontroller@store')->name('store');
	Route::post('/admin/logout','logincontroller@logout')->name('logout');
	
    

	Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){

	Route::get('/dashbord','dashbordcontroller@dashbord')->name('dashbord');


	Route::get('/customer/order','dashbordcontroller@customerorder')->name('customer.order');
	Route::get('/active/{id}/{status}','dashbordcontroller@orderactive')->name('active');


	Route::get('/customer/order/delete','dashbordcontroller@orderdelete')->name('customer.order.delete');
	Route::get('/customer/order/detils/{id}','dashbordcontroller@orderdetils')->name('order.detils');
	
	});


	
	


/*catagory route*/

    Route::prefix('catagory')->middleware('auth')->name('catagory.')->group(function(){

    
	Route::get('/create','catagorycontroller@create')->name('create');
	Route::post('/store','catagorycontroller@store')->name('store');
	Route::get('/manage','catagorycontroller@manage')->name('manage');
	Route::get('/active/{id}/{status}','catagorycontroller@active')->name('active');
	Route::get('/edit/{id}','catagorycontroller@edit')->name('edit');
	Route::post('/update/{id}','catagorycontroller@update')->name('update');
	Route::get('/delete/{id}','catagorycontroller@delete')->name('delete');
	
}); 

   


/*slider route*/

    Route::prefix('slider')->middleware('auth')->name('slider.')->group(function(){

    
	Route::get('/create','slidercontroller@create')->name('create');
	Route::post('/store','slidercontroller@store')->name('store');
	Route::get('/manage','slidercontroller@manage')->name('manage');
	Route::get('/active/{id}/{status}','slidercontroller@active')->name('active');
	Route::get('/edit/{id}','slidercontroller@edit')->name('edit');
	Route::post('/update/{id}','slidercontroller@update')->name('update');
	Route::get('/delete/{id}','slidercontroller@delete')->name('delete');
	
	
}); 




    /*size route*/

Route::prefix('size')->middleware('auth')->name('size.')->group(function(){

    
	Route::get('/create','sizecontroller@create')->name('create');
	Route::post('/store','sizecontroller@store')->name('store');
	Route::get('/manage','sizecontroller@manage')->name('manage');
	Route::get('/active/{id}/{status}','sizecontroller@active')->name('active');
	Route::get('/edit/{id}','sizecontroller@edit')->name('edit');
	Route::post('/update/{id}','sizecontroller@update')->name('update');
	Route::get('/delete/{id}','sizecontroller@delete')->name('delete');
	
}); 

/*color route*/

Route::prefix('color')->middleware('auth')->name('color.')->group(function(){

    
	Route::get('/create','colorcontroller@create')->name('create');
	Route::post('/store','colorcontroller@store')->name('store');
	Route::get('/manage','colorcontroller@manage')->name('manage');
	Route::get('/active/{id}/{status}','colorcontroller@active')->name('active');
	Route::get('/edit/{id}','colorcontroller@edit')->name('edit');
	Route::post('/update/{id}','colorcontroller@update')->name('update');
	Route::get('/delete/{id}','colorcontroller@delete')->name('delete');
	
}); 


/*product route*/

    Route::prefix('product')->middleware('auth')->name('product.')->group(function(){

    
	Route::get('/create','productcontroller@create')->name('create');
	Route::post('/store','productcontroller@store')->name('store');
	Route::get('/manage','productcontroller@manage')->name('manage');
	Route::get('/active/{id}/{status}','productcontroller@active')->name('active');
	Route::get('/edit/{id}','productcontroller@edit')->name('edit');
	Route::post('/update/{id}','productcontroller@update')->name('update');
	Route::get('/delete/{id}','productcontroller@delete')->name('delete');
	Route::get('/detil/{id}','productcontroller@detil')->name('detil');
	
}); 



/* password change route*/
   Route::get('/change/password','passwordchangecontroller@password_change')->name('change.password');
   Route::post('/update/password','passwordchangecontroller@password_update')->name('update.password');
   

 /* Frontend  route*/

 Route::get('/','FrontendController@index')->name('index');
 Route::get('/product/detils/{slug}','FrontendController@product_detils')->name('product.detils');
 Route::get('/product/catagory/{slug}','FrontendController@catagory_product')->name('catagory_product');
 Route::get('/product/search','FrontendController@search')->name('product.search');

 /*contact route*/

 Route::get('/buyer/contact','FrontendController@contact')->name('contact');
 Route::post('/contact/store','FrontendController@contact_store')->name('contact.store');
 Route::get('/contact/manage','FrontendController@contact_manage')->name('contact.manage');
 Route::get('/contact/delete/{id}','FrontendController@contact_delete')->name('contact.delete');
 Route::get('/breaking/news','FrontendController@breaking')->name('breaking');

	

/*CART ROUTE	*/
    Route::get('/cart/show','CartController@showcart')->name('cart.show');
    Route::post('/add-to-cart','CartController@storecart')->name('cart.store');
    Route::post('/update-cart','CartController@updatecart')->name('cart.update');
    Route::get('/delete-cart/{rowId}','CartController@deletecart')->name('cart.delete');
 
   

  /* Customer Controller*/

  Route::get('/customer/shipping','CustomerController@shipping')->name('customer.shipping');
  Route::post('/customer/shipping/store','CustomerController@shippingstore')->name('shipping.store');
  Route::get('/customer/payment','CustomerController@payment')->name('customer.payment');
  Route::post('/customer/payment/store','CustomerController@paymentstore')->name('payment.store');
  Route::get('/customer/order/detils','CustomerController@orderdetils')->name('order.detils');
  Route::get('/delete/{id}','CustomerController@deleteorder')->name('delete.order');
  Route::get('/customer/order/print/{id}','CustomerController@order_print')->name('order.print');


 






    

	
	