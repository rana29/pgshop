
@extends('Frontend.components.layout')
@section('content')

			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page"style="color:#43B7F3; font-size: 22px;">Checkout</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
			

				<ul class="checkout-progress-bar">
					<li class="active">
						<span>Shipping</span>
					</li>
					<li>
						<span>Review &amp; Payments</span>
					</li>
				</ul>
			

						

					

					<div class="col-lg-8 order-lg-first">
						<div class="checkout-payment">
							<h2 class="step-title" style="color:#43B0EF; font-size: 24px;">Shipping Information:</h2>

						

						

	<form method="post" action="{{route('shipping.store')}}">
	@csrf				
 
    <div class="form-group col-md-10">
      <label for="inputEmail4" style="color:#43B7F3">Name</label>
      <input type="name" class="form-control" id="inputEmail4" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group col-md-10">
      <label for="inputEmail4" style="color:#43B7F3">Mobile Number</label>
      <input type="text" class="form-control" id="inputEmail4" name="mobile" placeholder="Enter your number">
    </div>
    <div class="form-group col-md-10">
      <label for="inputEmail4" style="color:#43B7F3">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter your email">
    </div>
    <div class="form-group col-md-10">
      <label for="inputEmail4" style="color:#43B7F3">Address</label>
      <input type="text" class="form-control" id="inputEmail4" name="address" placeholder="Enter your address">
    </div>
 
	</div><!-- End #new-checkout-address -->

							<div class="row">
					     <div class="col-lg-8">
						<div class="checkout-steps-action">
							
							<input type="submit" value="Submit" class="btn btn-primary float-right">
						</div><!-- End .checkout-steps-action -->
					</div><!-- End .col-lg-8 -->
				</div>
 
</form>
						<!-- End .row -->
						</div><!-- End .checkout-payment -->

					</div><!-- End .col-lg-8 -->
				</div><!-- End .row -->
			</div><!-- End .container -->


			<div class="mb-6"></div><!-- margin -->
		


		@endsection