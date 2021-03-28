<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PG-SHOP</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="PG - Shop">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('/')}}assets/frontend/asset/images/icons/favicon.ico">
    
 

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('/')}}assets/frontend/asset/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('/')}}assets/frontend/asset/css/style.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/frontend/asset/css/mycustom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/frontend/asset/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/frontend/asset/vendor/simple-line-icons/css/simple-line-icons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
     <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Great+Vibes&family=Norican&family=Tinos&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper">
        <div class="top-notice text-white bg-dark">
            <div class="container text-center">

                
                <h5 class="d-inline-block mb-0 mr-2">Get Up to <b>$40% OFF</b> New-Season Styles</h5>
                <a href="category.html" class="category">MEN</a>
                <a href="category.html" class="category ml-2 mr-3">WOMEN</a>
                <small>* Limited time only</small>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </div><!-- End .container -->
        </div><!-- End .top-notice -->

        

       @include('Frontend.components.header')

        <main class="main">


            <div class="container mb-2">

               



                @yield('content')


        </main><!-- End .main -->

       
       @include('Frontend.components.footer')

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu mb-3">
                    <li class="active"><a href="{{route('index')}}">Home</a></li>
                    <li>
                        
                        <a href="">Categories</a>

                        <ul>
                            @foreach($catagories as $catagory)
                        
                            <li><a href="{{route('catagory_product',$catagory->slug)}}">{{$catagory->name}}</a></li>

                            @endforeach
                           
                          
                        </ul>
                    </li>
                    
                   
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                     <li><a href="{{route('contact')}}">About</a></li>
                    <li><a href="">Our Stores</a></li>
                
                    <li><a href="#">Help &amp; FAQs</a></li>
                    
                </ul>

              
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

 
    <!-- Add Cart Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body add-cart-box text-center">
            <p>You've just added this product to the<br>cart:</p>
            <h4 id="productTitle"></h4>
            <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
            <div class="btn-actions">
                <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{asset('/')}}assets/frontend/asset/js/jquery.min.js"></script>
    <script src="{{asset('/')}}assets/frontend/asset/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/frontend/asset/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="{{asset('/')}}assets/frontend/asset/js/main.min.js"></script>
</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 15:43:54 GMT -->
</html>