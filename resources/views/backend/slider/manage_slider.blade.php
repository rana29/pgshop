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
            <li><a href="javascript:avoid(0)">Manage slider</a></li>
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
                    <h4 class="text-success">Manage slider</h4>
                </div>
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('slider.create')}}">Add slider</a> 

               </div>
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>Title</th>
                                <th>Sub_title</th>
                                <th>Discount</th>
                                <th>Image</th>
                                <th>Status</th>
                                <td>Action</td>
                                
                                </tr>
                        </thead>
                        <tbody>

                            @foreach($data as $key =>$row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->subtitle}}</td>
                                <td>{{$row->discount}}</td>
                                <td><img src="{{asset('slider/'.$row->image)}}" style="width:50px"></td>




                               

                                <td>
                                   <input type="checkbox"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-size="small" data-onstyle="primary" data-offstyle="danger" 
                                  id="status" data-id="{{$row->id}}" {{$row->status==1? 'checked':''}}> 
                                </td>

                                <td>
                                    
                                <a href="{{route('slider.edit',$row->id)}}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>


                                               

                                    <a href="{{route('slider.delete',$row->id)}}" id="delete" class="btn btn-success btn-xs "><i class="fa fa-trash"></i></a>


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


      <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->



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
      @endsection