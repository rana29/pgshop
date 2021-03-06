@extends('backend.layouts.master')

@section('content')

                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">Slider</a></li>
                            <li><a href="javascript:avoid(0)">Create-slider</a></li>
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
                                        <div class="col-xs-6"><h4 class="text-success">slider add Form</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('slider.manage')}}">Manage slider</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('slider.store')}}" enctype="multipart/form-data" >
                                                @csrf

                                                 

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label"> Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="title" id="email2" placeholder="Enter title here" value="{{old('brand')}}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label"> Sub_Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="subtitle" id="email2" placeholder="Enter sub-title here" value="{{old('brand')}}">
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Discount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="discount" id="email2" placeholder="Enter discount here" value="{{old('brand')}}">
                                                    </div>
                                                </div>


                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" id="image" name="image" multiple value="">
                                                    </div>
                                                </div>

                                         
                                               
                                                    <div class="col-md-2 form-group">
                                                       <img src="" id="show" style="width:80px; height: 80px; border:2px solid gray">
                                                    </div>

                                               
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                        <button type="submit" class="btn btn-primary ">Save slider</button>
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


        <!-- code for image preview -->
        <script type="text/javascript">
                    
                    function readURL(input) {
                    if (input.files && input.files[0]) {
                   var reader = new FileReader();
    
                    reader.onload = function(e) {
                  $('#show').attr('src', e.target.result);
                 }
    
                 reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
               }

              $("#image").change(function() {
              readURL(this);
               });
        </script>


@endsection


