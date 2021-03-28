@extends('Frontend.components.layout')


@section('content')


			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page" style="color:#43B0EF; font-size: 18px;">Billing Information</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
					<ul class="checkout-progress-bar">
					<li>
						<span>Payment</span>
					</li>
					<li class="active">
						<span>Review &amp; Payments</span>
					</li>
				</ul>
				<div class="row">

					@php
					 $order_quantity=\Cart::getTotalQuantity()

					@endphp
					

					<div class="col-lg-7">

                       <form method="post" action="{{route('payment.store')}}">
                       	@csrf

                       	<input type="hidden" name="order_total" value="{{$order_quantity}}">

                       <div class="form-group col-md-7">
                        <label  for="name" style="font-size:22px;color:#287EC1">Select Payment Method</label>

                          <div class="input-group">
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="radio" class="custom-control-input" name="method" value="Nagod" id="speprice2" >
                              <label class="custom-control-label" for="speprice2">Nagod</label><span style="margin-left: 20px;" class="text-primary">(01912440066)</span>
                            
                           </div>
                        </div>

                          <div class="input-group">
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="radio" class="custom-control-input" name="method" value="Bkash" id="speprice3" >
                              <label class="custom-control-label" for="speprice3">Bkash</label><span style="margin-left: 20px;" class="text-primary">(01912440066)</span>
                            
                           </div>
                        </div>


                       <div class="input-group">
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="radio" class="custom-control-input" name="method" id="speprice" value="Cash On Delivery">
                              <label class="custom-control-label" for="speprice">Cash On Delivery</label>
                            
                           </div>
                        </div><br><br>

                         <div class="form-group col-md-10">
                        <label for="inputEmail14" >Total Amount</label>
                         <input type="text" class="form-control" id="inputEmail14" name="amount" placeholder="Enter your amount">
                         </div>

                         <div class="form-group col-md-10">
                        <label for="inputEmail4" >Transtion Id</label>
                         <input type="text" class="form-control" id="inputEmail4" name="transtion_id" placeholder="Enter your transtion id">
                         </div>

                        <input type="submit" name="" value="Place Order" class="btn btn-primary float-left">
                     </div>


                  </form>   
                   


					</div><!-- End .col-lg-8 -->

						            

					<div class="col-lg-5">
						<div class="order-summary">
							<h3 style="color:#FF5501; font-weight: bold">Cart Summary</h3>

							   @php
							   $count=\Cart::getContent()->count();
							   @endphp   

							<h4>
								<a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">{{$count}} products in Cart</a>
							</h4>

							<div class="collapse" id="order-cart-section">
								<table class="table table-mini-cart">
									<tbody>

										 @php

									$items = \Cart::getContent();

									$subTotal = \Cart::getSubTotal();
									$total = \Cart::getTotal();
									
                                   
                                    $total=0;
									
									@endphp


									@foreach($items as $item)

										<tr>
											<td class="product-col">
												<figure class="product-image-container">
													<a href="product.html" class="product-image">
														<img src="{{asset('subimage/'.$item->attributes->subimage)}}" alt="product" width="80" height="80">
													</a>
												</figure>
												<div>
													<h2 class="product-title">
														<a href="product.html">{{$item->name}}</a>
													</h2>

													<span class="product-qty">Qty: {{$item->quantity}}</span>
												</div>
											</td>
											<td class="price-col">{{$item->price}} TK</td>
										</tr>

                                     @php

							       $total +=$item->getPriceSum();

							        @endphp

									@endforeach
										
									</tbody>

								</table>
								<span class="text-success">SubTotal : &nbsp</span><span class="float-right">{{$subTotal}} TK</span>
								
							</div><!-- End #order-cart-section -->
						</div><!-- End .order-summary -->


					</div><!-- End .col-lg-4 -->

                                


				</div><!-- End .row -->

				
			    </div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->

			     <script
				  src="https://code.jquery.com/jquery-3.6.0.min.js"
				  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
				  crossorigin="anonymous">
				  	
				  </script>


			<script type="text/javascript">
				
				$('#speprice').click(function(){
   
   //alert('hello');
   
              $('.specialbox').slideToggle();

                });


   $('#speprice2').click(function(){
   
   //alert('hello');
   
   $('.specialbox2').slideToggle();


 
   });
			</script>

@endsection