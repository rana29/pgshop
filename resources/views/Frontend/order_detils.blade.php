

 @extends('Frontend.components.layout')
   @section('content')
			

			<h1 class="text-center text-success" style="font-size: 52px;">Congratulations!</h1> 
			<h3 class="text-center text-primary" style="font-size:42px;">You have successfully placed </h3>

			<h2 class="text-center text-info"  style="font-size:42px;">Your order.</h2>

			<h4 class="text-center text-success"  style="font-size:32px;">For any information pls call: 01912440066</h4>
			<h4 class="text-center text-success"  style="font-size:22px;">Or Contact Our Address:</h4>

			<address class="text-center" style="font-size:18px; color:#7B7B7B">
				Panjabi Gallery(PG),<br>
				Shop#-210,(G Floor)<br>
				Barisal Plaza, 9/7 Secretary road,<br>
				Fulbaria, Dhaka-1000,<br>
				Email:razibahmed028@gmail.com.com,<br>
				Hotline:01904444513,<br>
				Website:www.pgshopbd.com<br>

			</address>
			
				<a class="btn btn-primary " href="{{route('order.print',$order->id)}}" style="">PRINT YOUR ORDER</a>
			
			
	

@endsection		