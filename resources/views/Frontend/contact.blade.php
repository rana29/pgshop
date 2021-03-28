@extends('Frontend.components.layout')
 @section('content')

       
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('index')}}"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
					</ol>
				</div><!-- End .container -->
			</nav>





			<div class="container">


				  @if (Session('success'))
                    <div class="alert bg-primary fade in">
                    	<a href="#" class="close close-info" data-dismiss="alert">×</a>
                    	
                    {{Session('success')}}

                    </div>
                    @endif 
                    

					
				

				<div class="row">
					<div class="col-md-8">
						<h2 class="light-title" style="color:#FF5733;font-weight: bold; font-size: 48px">Write to Us</h2>

						<form action="{{route('contact.store')}}" method="post">
							@csrf
							<div class="form-group required-field">
								<label for="contact-name">Name</label>
								<input type="text" class="form-control" id="contact-name" name="name" required>
							</div><!-- End .form-group -->

							<div class="form-group required-field">
								<label for="contact-email">Email</label>
								<input type="email" class="form-control" id="contact-email" name="email" required>
							</div><!-- End .form-group -->

							<div class="form-group">
								<label for="contact-phone">Phone Number</label>
								<input type="tel" class="form-control" id="contact-phone" name="phone">
							</div><!-- End .form-group -->

							<div class="form-group required-field">
								<label for="contact-message">What’s on your mind?</label>
								<textarea cols="30" rows="1" id="contact-message" class="form-control" name="description" required></textarea>
							</div><!-- End .form-group -->

							<div class="form-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-8 -->

					<div class="col-md-4">
						<h2 class="light-title" style="color:#0088CC;font-weight: bold; font-size: 28px">Contact Details</h2>

						<div class="contact-info">
							<div>
								<i class="icon-phone"></i>
								<p><a href="tel:">01912440066</a></p>
								
							</div>
							<div>
								<i class="icon-mobile"></i>
								<p><a href="tel:">0192440066</a></p>
							
							</div>
							<div>
								<i class="icon-mail-alt"></i>
								<p><a href="mailto:#">razibahmed028@gmail.com</a></p>
								<
							</div>
							<div>
								<i class="icon-skype"></i>
								<p><a href="">pg_skype</a></p>
								
							</div>
						</div><!-- End .contact-info -->
					</div><!-- End .col-md-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

		



			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14618.527734273299!2d90.15374424999999!3d23.653348949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1615095319074!5m2!1sen!2sbd" width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

		


 @endsection  