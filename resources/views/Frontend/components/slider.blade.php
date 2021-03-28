
  @php
  $count=0;
  @endphp

 <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach($slider as $key=>$row)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" @if($count==0){ active } @endif></li>
    @endforeach
    
  </ol>
  <div class="carousel-inner">

    @foreach($slider->take(3) as $data)
     <div class="carousel-item @if($loop->first) active @endif">
      <img class="d-block w-100" src="{{asset('slider/'.$data->image)}}" alt="First slide">
    </div>
    @php
    $count++;
    @endphp
    @endforeach

   
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




















           
   

