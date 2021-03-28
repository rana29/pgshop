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
            <li><a href="javascript:avoid(0)">Manage-product</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">


 <div class="row"> 

    <div class="col-sm-12 col-md-12 col-md-offset-">
     @include('backend.error_message')
     <div class="panel b-primary bt-md">
        <div class="panel-content">
            <div class="row">
                <div class="col-xs-6">
                    <h4 class="text-success">Manage product</h4>
                </div>
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('product.create')}}">Add product</a> 

               </div>
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>product Name</th>
                                <th>Catagory</th>
      
                                <th>Regular price</th>
                                <th>Offer price</th>
                                
                                <th>Image</th>
                                <th>SubImage</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($product as $key=>$row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->product_name}}</td>


                                <td>{{$row->catagory->name}}</td>

                                 

                                
                               
                                <td>{{$row->regular_price}}</td>
                                <td>{{$row->offer_price}}</td>
                                                          
                               

                                <td>
                                  @php($image=json_decode($row->image))
                                  @foreach($image as $image)
                                                            
                                 <img src="{{ asset('product/'.$image)}}" width="35px" height="30">
                                  <!-- <img src="{{ asset('product/'.$row->image)}}" width="50px" height=""> -->
                                  @endforeach
                                </td>

                                <td><img src="{{ asset('subimage/'.$row->subimage)}}" width="35px" height="30"></td>

                                <td> <input type="checkbox"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-size="small" data-onstyle="primary" data-offstyle="danger" 
                                  id="status" data-id="{{$row->id}}" {{($row->status==1)? 'checked':''}}> 
                                </td>
                                

                                <td>              
                                    <a href="javascript:()"  class="btn btn-success btn-xs"><i class="fa fa-pencil" title="Edit"></i></a>

                                    

                                    <a href="{{route('product.delete',$row->id)}}" id="delete" class="btn btn-success btn-xs "><i class="fa fa-trash" title="Delete"></i></a>
                                </td>


                                </tr>

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
    <div class="ml-loader  circle">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  </div>

      </div>


      <script type="text/javascript">
           $(document).on('click','#delete',function(e){
          //alert('hell');
   e.preventDefault();
   var link=$(this).attr("href");
     //alert(link);

  Swal.fire({
  title: 'Are you sure to delete?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    window.location.href=link;
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
});
      </script>
      <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection

