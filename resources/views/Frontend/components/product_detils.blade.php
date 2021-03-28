   
   @extends('Frontend.components.layout')
   @section('content')
            
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">        

            <div class="container">
               
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-md-5 col-offset-2 product-single-gallery">
                            <div class="product-slider-container" style="border: 3px solid gray;">
                                <div class="product-single-carousel owl-carousel owl-theme">
                                    @php($image=json_decode($single_product->image))
                                    @foreach($image as $image)
                                    <div class="product-item" >

                                        <img style="height:300px;"class="product-single-image " src="{{ asset('product/'.$image)}}" data-zoom-image="{{ asset('product/'.$image)}}"/>
                                    </div>
                                    @endforeach
                                  
                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <div class="prod-thumbnail owl-dots" id='carousel-custom-dots'>
                                @php($image1=json_decode($single_product->image))
                                 @foreach($image1 as $image)
                                <div class="owl-dot">
                                    <img src="{{ asset('product/'.$image)}}" style="height:100px;">
                                </div>
                                @endforeach
                                
                                
                                
                            </div>
                        </div><!-- End .product-single-gallery -->



                        <div class="col-md-7 col-offset-2 product-single-gallery">


                                 <form method="post"   action="{{route('cart.store')}}">
                                @csrf

                            <input type="hidden" name="id" value="{{$single_product->id}}">

                        <div class="col-md-7 product-single-details" style="margin-left: 80px;">
                            <h1 style="font-size:24px; color:#0088CC!important; font-weight: bold; ">{{$single_product->product_name}}</h1>
                            <p style="font-size: 14px; ">{{$single_product->description}}</p>
                           

                            <hr class="short-divider">
                            

                            <div class="price-box">
                                <span class="product-price text-success">{{$single_product->offer_price}}.00 TK</span>
                            </div><!-- End .price-box -->

                            <div class="product-desc">
                               
                            </div><!-- End .product-desc -->



                                <div class="product-filters-container">
                                <div class="product-single-filter mb-2">
                                    <label class="text-success" style=" font-size: 14px">Choose Size:</label>
                                    
                                        <select class="text-success" name="size" style="padding: 2px 5px; border:2px solid gary;" required>
                                          @php($size=json_decode($single_product->size_id));  
                                          @foreach($size as  $key=>$size)
                                        <option value="{{$size}}">{{$size}}</option>
                                         @endforeach
                                            
                                            
                                        </select>
                                       
                                       
                            </div><!-- End .product-single-filter -->
                            </div><!-- End .product-filters-container -->

                               



                            <div class="product-filters-container">
                                <div class="product-single-filter mb-2">
                                    <label class="text-info" style=" font-size: 14px">Choose Color:</label>
                                         
                                        
                                        <select class="text-info" name="color" style="padding: 2px 5px; border:2px solid gary;" required>
                                      
                                          @php($color=json_decode($single_product->color_id));
                                          @foreach($color as  $key=>$color)
                                        <option value="{{$color}}">{{$color}}</option>
                                         @endforeach
                                            
                                            
                                        </select>
                                       
                                       
                            </div><!-- End .product-single-filter -->
                            </div><!-- End .product-filters-container -->

                            <hr class="divider">

                            <div class="product-action">
                                <div class="product-single-qty">

                                    <input class="horizontal-quantity form-control" type="text" name="quantity" style="border:2px solid gray;">
                                </div><!-- End .product-single-qty --><br>

                               <!--  <a href="" class="btn btn-dark add-cart icon-shopping-cart" title="Add to Cart">Add to Cart</a> -->
                             <button class="btn btn-primary mt-3 add-cart icon-shopping-cart" style="border-radius:4px ">Add to Cart</button>
                            </div><!-- End .product-action -->

                           </form>
                          
                        </div><!-- End .product-single-gallery -->


                    

                            <hr class="divider mb-1">

                            <div class="product-single-share">
                                <label class="sr-only">Share:</label>

                             

                                
                            </div><!-- End .product single-share -->
                        <!-- End .product-single-details -->
                      </div>
                    </div><!-- End .row -->
                    </div><!-- End .row -->
                


                    
                </div><!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Delivery system</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-more-info" data-toggle="tab" href="#product-more-info-content" role="tab" aria-controls="product-more-info-content" aria-selected="false">Return policy</a>
                        </li>
                      
                       
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <ul>
                                    <li>পণ্য স্টক থাকা সাপেক্ষে ডেলিভারী করা হয়।</li>
                                    <li>ডেলিভারী চার্জ ঢাকায় 60,বাহিরে ১2০ টাকা।</li>
                                    <li> অর্ডারের সম্পূর্ণ মূল্য থেকে ১০০ টাকা অগ্রীম প্রযোজ্য।</li>

                                </ul>
                                
                              
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade fade" id="product-more-info-content" role="tabpanel" aria-labelledby="product-tab-more-info">
                            <div class="product-desc-content">
                                <p>ডেলিভারি ম্যানকে আগে টাকা বুঝিয়ে দিয়ে প্রোডাক্টটি বুঝে নিবেন। ডেলিভারি ম্যান থাকাকালীন প্রোডাক্ট চেক করুন। ডেলিভারি ম্যান চলে আসার পর কোনো অভিযোগ গ্রহণ করা হবে না।.</p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->
                        </div><!-- End .tab-pane -->
                        </div><!-- End .tab-pane -->
                        </div><!-- End .tab-pane -->
                        

   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


    <script type="text/javascript">

        $('body').on('click', '.size-item', function() {
        $(this).toggleClass('active');
        $(this).data('value');
    });
                
       $('body').on('click', '.color-item', function() {
        $(this).toggleClass('active');
        ($(this).data('value'));


    });



     
  </script>                    

     
   
    @endsection



