 
 @php
 $prefix=Request::route()->getPrefix();
 $route=Route::current()->getName();
 @endphp


 <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title text-danger" style="font-size: 15px">Admin-Dashbord</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="{{request()->is('dashbord')? 'active-item':''}}"><a  href="{{route('admin.dashbord')}} " class="{{($route=='admin.dashbord')? 'active-item':''}}"><i class="fa fa-home" aria-hidden="true"></i><span class="rana">Dashboard</span></a></li>

                                     <!-- contact us -->

                                     <li class="has-child-item close-item {{request()->is('customer/order*')?'open-item':''}}">
                                    <a href="{{route('admin.customer.order')}}" class="{{($route=='admin.customer.order')? 'active':''}}"><i class="fa fa-cubes" aria-hidden="true"></i><span>Mangae order</span></a>  
                                    </li>


                                     <!--contact -->

                                     <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a href="{{route('contact.manage')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span>Buyer contact</span></a>  
                                    </li>
                                

                                      <!-- slider -->

                                     <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a href="{{route('slider.manage')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span>Manage slider</span></a>  
                                    </li>

                                     <!-- catagory -->

                                     <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a href="{{route('catagory.manage')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span>Manage catagory</span></a>  
                                    </li>


                                     <!-- size -->

                                     <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a href="{{route('size.manage')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span>Manage  size</span></a>  
                                    </li>



                                     <!-- color -->

                                     <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a href="{{route('color.manage')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span>Manage color</span></a>  
                                    </li>


                                     <!-- product -->

                                    <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a href="{{route('product.manage')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span>Manage product</span></a>  
                                    </li>



                                    

                                  
                                   <!--  password change   -->

                                    <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a href="{{route('change.password')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span>Change password</span></a>  
                                    </li>
  

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>