

 @extends('Frontend.components.layout')
   @section('content')
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm">
						<div class="cart-table-container">
							<table class="table table-cart table-responsive">
								<thead>
									<tr>
										
										<th class="product-col">Product</th>
										<th class="price-col">Price</th>
										<th class="qty-col">Color</th>
										<th class="qty-col">Size</th>
										<th class="qty-col">Qty</th>
										<th class="qty-col">Subtotal</th>
										<th class="qty-col">Action</th>
										
									</tr>
								</thead>
								<tbody>
								
								
									
								
									@php

									$items = \Cart::getContent();

									$subTotal = \Cart::getSubTotal();
									$total = \Cart::getTotal();
                                  
                                    $total=0;
									
									@endphp


									@foreach($items as $item)

									<tr class="product-row">
										<td class="product-col">
											<figure class="product-image-container">
												<a href="" class="product-image">
													
													<img src="{{asset('subimage/'.$item->attributes->subimage)}}" alt="product"style="width:150px;">
												</a>
											</figure>
											<h2 class="product-title">
												<a href="" style="font-size: 18px;">{{$item->name}}</a>
											</h2>
										</td>
										<td>{{$item->price}}</td>
										<td>{{$item->attributes->color}}</td>
										<td>{{$item->attributes->size}}</td>
										



								       <form method="post" action="{{route('cart.update')}}">
										@csrf

                                       
									  <input class=" form-control" type="hidden" name="rowId" value="{{$item->id}}">

									  <td>



						              <input class=" form-control text-primary" type="number" name="quantity" value="{{$item->quantity}}" style="width: 70px; height:35px; font-weight: bold; font-size: 18px; border:2px solid gray" id="rana4">

						              <style type="text/css">

						              	@media only screen and (min-width:320px) and (max-width:1000px){
                                    
                                            #rana4{

                                            	border:none;
                                            	width:100%;
                                            	margin-left: 100px;
                                                
                                            }
                                        }
						              	
						              </style>


						               

										</td>
										<td>{{$item->getPriceSum()}}</td>
										<td>
											
											<input type="submit" value="Update" class="btn btn-primary btn-sm" >
											<a href="{{route('cart.delete',$item->id)}}" title="Remove product" class="btn btn-danger btn-sm">Remove</a>
										</td>
											
										
									  </form>
										
									</tr>

									@php

							       $total +=$item->getPriceSum();

							        @endphp

									@endforeach
								
								</tbody>

								<tfoot>
									<tr>
										<td colspan="4" class="clearfix">
											<div class="float-left">
												<a href="{{route('index')}}" class="btn btn-success">Continue Shopping</a>
											</div><!-- End .float-left -->

										
										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->

						
					</div><!-- End .col-lg-8 -->

					

					<div class="col-lg-12">
						<div class="cart-summary">
							<h3>Summary</h3>

							<h4>
								<a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
							</h4>

							

							<table class="table table-totals">
								<tbody>
									<tr>
										<td>Subtotal</td>
										<td>{{$total}} TK</td>
									</tr>

								
								</tbody>
								<tfoot>
									<tr>
										<td>Order Total</td>
										
										<td>{{$subTotal}} TK</td>
									</tr>

								
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href="{{route('customer.shipping')}}" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
								
							</div><!-- End .checkout-methods -->
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
	

@endsection		