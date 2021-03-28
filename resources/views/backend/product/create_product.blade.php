@extends('backend.layouts.master')

@section('content')

    
                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">Product</a></li>
                            <li><a href="javascript:avoid(0)">Add-product</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

                <div class="row animated fadeInUp">
                    
                    <div class="row"> 

                        <div class="col-sm-12 col-md-8 col-md-offset-2">
                             @include('backend.error_message')
                            <div class="panel b-primary bt-md">
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-xs-6"><h4 class="text-primary">product Add Form</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('product.manage')}}">Manage product</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                                @csrf
                                                
                                               <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Catagory Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control"  name="catagory_id" id="select" >
                                                          <option value="" >Select catagory</option>
                                                          @foreach($catagory as $row)
                                                          <option value="{{$row->id}}"> {{$row->name}}</option>

                                                          @endforeach
                                                          
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="product" class="col-sm-3 control-label">product_name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="product_name"  placeholder="product_name" value="{{old('product_name')}}">
                                                    </div>
                                                </div>

         

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Color Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control"  id="select3" name="color[]" multiple >
                                                            <option value="" >Select color</option>
                                                            @foreach($color as $color)
                                                            <option value="{{$color->color_name}}">{{$color->color_name}}</option>

                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Size Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control"  id="selectsize" name="size[]" multiple >
                                                            <option value="" >Select color</option>
                                                            @foreach($size as $size)
                                                            <option value="{{$size->size_name}}">{{$size->size_name}}</option>

                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="product" class="col-sm-3 control-label">Regular_price</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="regular_price"  placeholder="Enter regular price" value="{{old('regular_price')}}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="product" class="col-sm-3 control-label">Offer_price</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="offer_price"  placeholder="Enter offer price" value="{{old('regular_price')}}">
                                                    </div>
                                                </div>
                                              

                                                <div class="form-group">
                                                    <label for="product" class="col-sm-3 control-label">Discount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="pdiscount"  placeholder=" Enter  discount" value="{{old('pdiscount')}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="product" class="col-sm-3 control-label">Description</label>
                                                    <div class="col-sm-9">
                                                        <input type="textarea"   class="form-control" name="description"  placeholder="Enter product description" value="{{old('description')}}">
                                                    </div>
                                                </div>
                            

                                                 

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">SubImage</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" id="subimage" name="subimage">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" id="image" name="image[]" multiple>
                                                    </div>
                                                </div>

                                        
                                                 <div class="col-md-2 form-group">
                                                       <img src="" id="show" style="width:80px; height: 80px; border:2px solid gray">
                                                </div>
                                              
                                              
                                               
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                        <button type="submit" class="btn btn-primary ">Save product</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                 <!--Select with searching & tagging-->
                <script src="{{asset('/')}}assets/admin/vendor/select2/js/select2.min.js"></script>

                <script type="text/javascript">

            $("#select3").select2({
            placeholder:"select color",
            allowClear: true
            });

             $("#selectsize").select2({
            placeholder:"select size",
            allowClear: true
            });


              $("#select14").select2({
            placeholder:"select size",
            allowClear: true
         });
    
               function readURL(input) {
                    if (input.files && input.files[0]) {
                   var reader = new FileReader();
    
                    reader.onload = function(e) {
                  $('#show').attr('src', e.target.result);
                 }
    
                 reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
               }

              $("#subimage").change(function() {
              readURL(this);
               });
                </script>
@endsection
