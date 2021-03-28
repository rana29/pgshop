  
   @extends('Frontend.components.layout')
   @section('content')
            
  <div class="row">
                    <div class="col-lg-9">
                        <div class="home-slider owl-carousel owl-theme owl-carousel-lazy mb-2" data-owl-options="{
                            'loop': false,
                            'dots': true,
                            'nav': false
                        }">


                               
                        </div>

   

<div class="row">
    @foreach ($products as $product)
  <div class="col-6 col-sm-4" id="rana">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        @php($image=json_decode($product->image))
                                        
                                       <a id="rana" href="javascript:;">

                                            <img src="{{ asset('subimage/'.$product->subimage)}}" class="image-responsive">
                                        </a>

                                         <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">{{sprintf('%d',(($product->regular_price-$product->offer_price)/$product->regular_price)*100)}}% OFF</div>
                                        </div>

                                          <div class="btn-icon-group">
                                            



                                      <form action="{{route('cart.store')}}" method="post">
                                           @csrf
                                        

                                            
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <div class="cart-design"> <button  type="submit" id="rana"><a href="{{route('product.detils',$product->slug)}}">SHOP NOW</a></button></div>
                                             
                                       



                                      </form>  


                                        </div>
                                        
                                       
                                       
                                         <style type="text/css">

                                            #rana{
                                                position: relative;
                                            }


                                          .cart-design button{
                                                padding: 8px 20px;
                                                border:none;
                                                background-color:#D0021B;
                                                
                                                background-imag: linear-gradient(yellow,white);
                                                position:absolute;
                                                left:50%;
                                                top:50%;
                                                transform:translate(-100%, 370%);
                                                color:white;
                                                border-radius: 4px;
                                                
                                                
                                                                                            
                                               
                                            }

                                          

                                           

                                    @media only screen and (min-width:320px) and (max-width:1100px){
                                    
                                            #rana{
                                                position: relative;
                                            }


                                          .cart-design button{
                                                padding: 3px 10px;
                                                border:none;
                                                background-color:#D0021B;
                                                

                                                position:absolute;
                                                left:50%;
                                                top:50%;
                                                transform:translate(-65%, 300%);
                                                color:white;
                                                border-radius: 4px;
                                                
                                                }
                                                                                            
                                               
                                            


                                }



 
                                        </style> 
                                    </figure>


                                    <div class="product-details">
                                        
                                        <h2 style="font-size: 16px;">
                                            <a class="p-name" href="{{route('product.detils',$product->slug)}}" >{{$product->product_name}}</a>
                                        </h2>
                                       
                                        <div class="price-box">
                                            <span class="old-price">{{$product->regular_price}} TK</span>
                                            <span class="product-price">{{$product->offer_price}} TK</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div>


                            
                               <style type="text/css">

                                .old-price{
                                    margin-left: 100px;
                                }

                                 .p-name {
                                    margin-left: 10px;
                                    font-size: 22px;
                                    color: #0088CC!important;


                        
                                }
                                 @media only screen and (min-width:320px) and (max-width:1100px){
                                 
                                    .old-price{
                                        margin-left:30px;


                                    }
                                     .p-name {
                                    margin-left:10px;
                                }
                                 }  
                               </style>

    @endforeach

    
</div>

{{ $products->links() }}
                       
          
                       

                      

                       

                        <hr class="mt-1 mb-4">

                       <div class="feature-boxes-container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="feature-box px-sm-3 feature-box-simple text-center">
                                        <i class="icon-earphones-alt"></i>
        
                                        <div class="feature-box-content">
                                            <h3 class="m-b-1" style="color: #059862">Customer Support</h3>
                                            <h5 class="m-b-3">Need Assistance?</h5>
        
                                            <p>We are always ready to support our customers.You can contact with us in any time in phone call.</p>
                                        </div><!-- End .feature-box-content -->
                                    </div><!-- End .feature-box -->
                                </div><!-- End .col-md-4 -->
        
                                <div class="col-md-4">
                                    <div class="feature-box px-sm-3 feature-box-simple text-center">
                                        <i class="icon-credit-card"></i>
        
                                        <div class="feature-box-content">
                                            <h3 class="m-b-1" style="color:#BC1F4E">Secured Payment</h3>
                                            <h5 class="m-b-3">Safe & Fast</h5>
        
                                            <p>Our payment method is 100% secure. You can risk free trading with us.</p>
                                        </div><!-- End .feature-box-content -->
                                    </div><!-- End .feature-box -->
                                </div><!-- End .col-md-4 -->
        
                                <div class="col-md-4">
                                    <div class="feature-box px-sm-3 feature-box-simple text-center">
                                        <i class="icon-action-undo"></i>
        
                                        <div class="feature-box-content">
                                            <h3 class="m-b-1" style="color:#FF8000;">Returns</h3>
                                            <h5 class="m-b-3">Easy & Free</h5>

                                            <p>You can return our produts if you find any fault. But must be inform us immediately.</p>
                                        </div><!-- End .feature-box-content -->
                                    </div><!-- End .feature-box -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .feature-boxes-container -->
                    </div><!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                    <aside class="sidebar-home col-lg-3 order-lg-first mobile-sidebar">
                        <div class="side-menu-wrapper text-uppercase mb-2 d-none d-lg-block">
                            <h2 class="side-menu-title bg-gray ls-n-25">Browse Categories</h2>

                            <nav class="side-nav">
                                <ul class="menu menu-vertical sf-arrows">
                                    <li class="active"><a href="index.html"><i class="icon-home"></i>Home</a></li>
                                    
                                    @foreach($catagory  as $catagory)
                                   
                                    
                                    <li><a href="{{route('catagory_product',$catagory->slug)}}"><i class="sicon-users"></i>{{$catagory->name}}</a></li>
                                   @endforeach
                                </ul>
                            </nav>
                        </div><!-- End .side-menu-container -->

                        <div class="widget widget-banners px-5 pb-3 text-center">
                            <div class="owl-carousel owl-theme">
                            
                               <div class="widget widget-banners px-5 pb-3 text-center">
                            <div class="owl-carousel owl-theme">
                                @foreach($slider as $slider)
                                 

                                <div class="banner d-flex flex-column align-items-center">
                                    <h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">Sale</em>Many Item</h3>
                                    <h4 class="sale-text font1 text-uppercase m-b-3" style="color:#FF5733;">{{$slider->discount}}<sup>%</sup><sub>off</sub></h4>
                                    <p style="font-size: 22px; color:#B89300;">{{$slider->title}}</p>
                                    
                                </div><!-- End .banner -->
                                @endforeach
                            

                            </div><!-- End .banner-slider -->
                        </div><!-- End .widget -->

                                
                            

                                <div class="banner d-flex flex-column align-items-center">
                                    <h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">Sale</em>Many Item</h3>
                                    <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                                    <p></p>
                                  
                                </div><!-- End .banner -->

                                <div class="banner d-flex flex-column align-items-center">
                                    <h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">Sale</em>Many Item</h3>
                                    <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    
                                </div><!-- End .banner -->
                            </div><!-- End .banner-slider -->
                        </div><!-- End .widget -->

                        

                      

                            
                        </div><!-- End .widget -->

                        <div class="widget widget-posts post-date-in-media">
                            <div class="owl-carousel owl-theme dots-left dots-m-0" data-owl-options="{
                                'margin': 20
                            }">
                                
                                

                            </div><!-- End .posts-slider -->
                        </div><!-- End .widget -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            @endsection