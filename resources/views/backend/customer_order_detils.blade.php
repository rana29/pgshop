


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- content HEADER -->
<!-- ========================================================= -->

<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<!DOCTYPE html>
<html>
<head>
<title>PG SHOP</title>
</head>
<body>

<div class="container">
  
 <div class="row"> 

    <div class="col-sm-12 col-md-8 col-md-offset-2">

     <div class="panel b-primary bt-md">
        <div class="panel-content">
            <div class="row">
                <div class="col-xs-12 col-md-10">
                    <h4 class="text-success text-center" style="text-align: center;font-size: 28px;font-weight: bold">Customer Order Detils</h4>
                </div>
              
           </div>
           <div class="row ">
            <div class="col-md-10">
                <div class="table-responsive">
                    <table  class=" table table-striped table-hover table-bordered " cellspacing="0" width="100%">
                        <thead>
                          

                            <tr>
                                <th ><img src="{{asset('/')}}assets/frontend/pgimage/pglogo.jpeg" alt="PG Shop" style="width:60px;"><h5>Order No: #{{$order->order_no}}</h5>
                                  Order Date: {{date('d .m .y',strtotime($order->created_at))}}
                                </th>
                                <th style="font-size:14px"><span class="text-success" style="font-size: 18px;color: #FF5733; text-align: center;"> PANJABI GALLERY</span> <br>
                                    Shop#210,(G Floor) Barisal Plaza,<br>
                                    9/7 Secretar Road Fulbaria,<br>
                                    Dhaka, 1000,<br>
                                    phone:0191240066 , <br>
                                    email:razibahmed028@gmail.com. <br>
                                </th>
                               </tr>
                              
                       
                              
                            
                        </thead>
                            <tbody>
                              <tr>
                                <td width="50%">CUSTOMER NAME</td>
                                <td width="50%" style="text-transform: uppercase">{{$order->shipping->name}}</td>
                              </tr>

                               <tr>
                                <td width="50%">MOBILE</td>
                                <td>{{$order->shipping->mobile}}</td>
                              </tr>

                             

                                <tr>
                                <td width="50%">PAYMENT METHOD </td>
                                <td>{{$order->payment->method}}</td>
                              </tr>
                                <tr>
                                <td width="50%">AMOUNT</td>
                                <td>{{$order->payment->amount}} TK</td>
                              </tr>
                                <tr>
                                <td width="50%">ADDRESS</td>
                                <td>{{$order->shipping->address}}</td>
                               </tr>

                               <tr>

                            
                                
                                <td  class="text-center" colspan="2"><span class="text-success" style="font-size: 24px; text-align: center">Product Detils Information</td>
                              </tr>

                              
                             @foreach($order['orderdetils'] as $detils)

                                <tr>
                                <td>IMAGE</td>
                                <td><img src="{{ asset('subimage/'.$detils['product']->subimage)}}" style="width:100px;"> </td>
                              
                               </tr>
                              
                              
                               <tr>
                                <td>PRODUCT NAME</td>
                                <td>{{$detils['product']['product_name']}}</td>
                              
                               </tr>

                               <tr>
                                <td>PRODUCT SIZE</td>
                                <td>{{$detils['size']}}</td>
                              
                               </tr>

                               <tr>
                                 <td>PRODUCT COLOR</td>
                                <td>{{$detils['color']}}</td>
                              
                               </tr>

                               <tr>
                               
                                <td>PRODUCT QUANTITY</td>
                                <td>{{$detils['quantity']}}</td>
                              
                               </tr>

                               <tr>
                               
                                <td>PRODUCT REGULAR PRICE</td>
                                <td>{{$detils['product']['regular_price']}} TK</td>
                              
                               </tr>

                               <tr>

                                <td>PRODUCT OFFER PRICE</td>
                                <td>{{$detils['product']['offer_price']}} TK</td>
                                </tr>

                                <tr>

                                <td>TOTAL PRICE</td>
                                <td>{{$detils['product']['regular_price']*$detils['quantity']}} TK</td>
                                </tr>
                              
                              

                               <tr>

                                <td>DISCOUNT</td>
                                <td>-{{sprintf('%.2f',(($detils['product']['regular_price']-$detils['product']['offer_price'])/$detils['product']['regular_price'])*100)}}% </td>
                              
                               </tr>

                                 </tr>
                                 @php
                                 $total=$detils['product']['offer_price']*$detils['quantity'];

                                 @endphp

                                <td style="font-weight: bold; color:#43B0EF">TOTAL PRICE AFTER DISCOUNT</td>
                                <td style="font-weight: bold; color:#43B0EF">{{$total}} TK</td>
                              
                               </tr>

                              <style type="text/css">
                                .table td{
                                  font-size: 14px;
                                }
                              </style>

                               @endforeach
                            
                             

                          
                                  </tbody>

                                  
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


           <!-- FULL CIRCLE LOADER  -->
    
    <div>
    
    <div>
   


      <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

</div>

</body>
</html>

  


    

     

