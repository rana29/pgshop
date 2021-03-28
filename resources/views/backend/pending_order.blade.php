

@extends('backend.layouts.master')

@section('content')

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">customer-pending-order</a></li>
            <li><a href="javascript:avoid(0)">Manage-customer-pending-order</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">


 <div class="row"> 

    <div class="col-sm-12 col-md-10 col-md-offset-1">
     @include('backend.error_message')
     <div class="panel b-primary bt-md">
        <div class="panel-content">
            <div class="row">
                <div class="col-xs-6">
                    <h4 class="text-success">Manage customer-pending-order</h4>
                </div>
              
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bpending-ordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th> Name</th>
                              
                                <th> Phone</th>
                                <th> Method</th>
                                <th> Amount TK</th>
                                <th> Address</th>
                                <th> Status</th>
                               
                                
                             
                  
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                             @foreach($pending-order as $key=>$row)

                               <tr>
                                <td>{{$key+1}}</td>
                                <td style="text-transform: uppercase">{{$row->shipping->name}}</td>
                            
                                <td>{{$row->shipping->mobile}}</td>
                                
                                <td>{{$row->payment->method}}</td>
                                <td>{{$row->payment->amount}}</td>
                                <td>{{$row->shipping->address}}</td>
                                
                                
                                 <td> <input type="checkbox"  data-toggle="toggle" data-on="pending-order Dilivered" data-off="Pending pending-order" data-size="medium" data-onstyle="primary" data-offstyle="danger" 
                                  id="status" data-id="{{$row->id}}" {{$row->status==1? 'checked':''}} > </td>

                                 <td>    
                                   <a href="{{route('delete.pending-order',$row->id)}}" id="delete" class="btn btn-success btn-xs "><i class="fa fa-trash"></i></a> 
                                   <a href="{{route('admin.pending-order.detils',$row->id)}}"  class="btn btn-success btn-xs "><i class="fa fa-eye" title="Detils"></i></a> 
                                
                                    
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

  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">

        


   $('body').on('change','#status',function(){
    
     var id=$(this).attr('data-id');
     //alert(id);

     if(this.checked){
      var status=1;
     }
     else{
      status=0;
     }
     //alert(status);
     $('.circle').show();

     $.ajax({
      url:'/active/'+id+'/'+status,
      method:'get',
      success: function(result){

      $('.circle').hide();
        //console.log(result);
      }

     });
     }); 

  </script>





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

     

