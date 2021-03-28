<header class="header">
            <div class="header-top bg-primary text-uppercase">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#" class="pl-0"><img src="{{asset('/')}}assets/frontend/asset/images/flags/en.png" alt="England flag">ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><img src="{{asset('/')}}assets/frontend/asset/images/flags/en.png" alt="England flag">ENG</a></li>
                                    <li><a href="#"><img src="{{asset('/')}}assets/frontend/asset/images/flags/fr.png" alt="France flag">BANGLA</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                    </div><!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto" style="font-size: 12px;">
                        <p class="top-message mb-0 mr-lg-5 pr-3 d-none d-sm-block">Welcome To PG Shop!</p>
                        <div class="header-dropdown dropdown-expanded mr-3">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="">Our Stores</a></li>
                                
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li><a href="#">Help &amp; FAQs</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="https://www.facebook.com/RAR-Express-104268391549419/" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                            <a href="https://www.facebook.com/PG-Panjabicom-100378222012009/" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="https://www.facebook.com/RAR-Express-104268391549419/" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                        </div><!-- End .social-icons -->


                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <style type="text/css">
                .header-right a:hover{
                    color:#FF5733;
                }
            </style>

            <div class="header-middle text-dark">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler mr-2" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <a href="{{route('index')}}" class="logo">
                            <img src="{{asset('/')}}assets/frontend/pgimage/pglogo.jpeg" alt="PG Shop" style="width:70px;">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right w-lg-max pl-2">
                        <div class="header-search header-icon header-search-inline header-search-category w-lg-max mr-lg-4">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="{{route('product.search')}}" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" id="rana2" class="form-control" name="search" placeholder="Search your product here..." required>


                                    
                                  <!-- End .select-custom -->
                                    <button id="rana3" class="btn p-0 icon-search-3" type="submit"></button>
                                    
                                        
                                    
                                </div><!-- End .header-search-wrapper -->

                                <style type="text/css">


                                    @media only screen and (min-width:1000px) {
                                    #rana2{

                                        border:2px solid #FF5733;
                                    border-right: none;
                                    font-size: 16px;

                                    }

                                    #rana3{
                                         border:2px solid #FF5733; 
                                    border-left: none;
                                    color:#FFC300;
                                    font-size: 20px;
                                    background: #FF5733
                                    }
                                }


                                }
                                </style>
                            </form>
                        </div><!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-3 ml-xl-5">
                            <i class="icon-phone-2"></i>
                            <h6 class="pt-1 line-height-1" style="color:#059862;font-size: 14px">Call us now<a href="tel:#" class="d-block text-dark ls-10 pt-1">01912440066</a></h6>
                        </div><!-- End .header-contact -->

                        <a href="{{route('contact')}}" class="header-icon login-link"><i class="icon-user-2"></i></a>

                        <a href="" class="header-icon"><i class="icon-wishlist-2"></i></a>

                                   @php

                                    $items = \Cart::getContent();

                                    $subTotal = \Cart::getSubTotal();
                                    $total = \Cart::getTotal();
                                    $count=\Cart::getContent()->count();
                                   
                                    $total=0;
                                    
                                    @endphp


                                   

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count badge-circle">{{$count}}</span>
                            </a>

                            <div class="dropdown-menu">
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-header">
                                        <span>{{$count}} Items</span>
                                        
                                        <a href="{{route('cart.show')}}" class="float-right">View Cart</a>
                                    </div><!-- End .dropdown-cart-header -->



                             @foreach($items as $item)
                                    
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">{{$item->name}}</a>
                                                </h4>
                                                
                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">{{$item->quantity}} </span>
                                                    x {{$item->price}} TK
                                                </span>
                                            </div><!-- End .product-details -->
                                                
                                            <figure class="product-image-container">
                                                <a href="" class="product-image">
                                                    <img src="{{asset('subimage/'.$item->attributes->subimage)}}" alt="product" width="80" height="80">
                                                </a>
                                                <a href="{{route('cart.delete',$item->id)}}" class="btn-remove icon-cancel" title="Remove Product"></a>
                                            </figure>
                                        </div><!-- End .product -->
                                        
                                       
                                    </div><!-- End .cart-product -->



                                     @php

                                   $total +=$item->getPriceSum();

                                    @endphp

                                 @endforeach
                                    
                                    <div class="dropdown-cart-total">
                                        <span>Total</span>
                                        
                                        <span class="cart-total-price float-right">{{$subTotal}} TK</span>
                                    </div><!-- End .dropdown-cart-total -->
                                    
                                    <div class="dropdown-cart-action">
                                        <a href="{{'checkout'}}" class="btn btn-dark btn-block">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->


                                   

                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        