
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7"> 
                                    <div class="text-primary p-3">
                                        {{-- <h5 class="text-primary">Welcome</h5> --}}
                                    <center>
                                        <img src=" {{URL::asset($vuser->image)}}" style="width: 200px;height:200px ">
                                    </center>
                                        {{-- <img src="{{('/org_img/'.$vuser->image)}}" alt="" class="img-thumbnail rounded-circle"> --}}
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                   
                                  
                                    {{-- <img src="{{asset('assets\images\profile-img.png')}}" alt="" class="img-fluid"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    {{-- <div class="avatar-md profile-user-wid mb-4">
                                        <img src="{{asset('assets\images\users\avatar-1.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                                    </div> --}}
                                    {{-- <h5 class="font-size-15 text-truncate">অ্যাডমিন</h5> --}}
                                 
                                </div>

                                <div class="col-sm-8">
                                    <div class="pt-4">

                                        <div class="row">
                                            <div class="col-6">
                                                {{-- <h5 class="font-size-15">পদবি:{{$user->department}}</h5>
                                                <p class="text-muted mb-0">ইমেইল:{{$user->email}}</p> --}}
                                            </div>
                                        </div>
                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->


                </div>

                <div class="col-xl-8">
                    <div class="card">
                    <div class="card-body">
                            <h4 class="card-title mb-4">Information</h4>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <th>{{$vuser->name}}</th>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <th>{{$vuser->phone}}</th>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <th>{{$vuser->email}}</th>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
       

</div>

<center>
    @if ($vuser->checkout == null)
        <a href="/visitor/checkout/{{$vuser->id}}" class="btn btn-primary" >check Out</a>
    @endif
    
    
</center>
<hr>
<table id="example" class="table table-striped dt-responsive nowrap w-100">
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Reason</th>
            <th>CheckIn</th>
            {{-- @if ($visitors->checkoutfinal == 0) --}}
            <th>Check Out</th>
            <th>Action</th>
           {{-- @endif
            @if ($visitors->approve == 1 || $visitors->approve == null) --}}
            <th>Approve By</th>
            {{-- @endif
            @if ($visitors->approve == 2)
            <th>Rejected By</th>
            @endif --}}
            
            <th>Status</th>
        </tr>
    </thead>


    <tbody>
       @foreach ($visitorss as $visitors)
           
     
      
        <tr>
            <td>{{$visitors->emp->name}}</td>
            <td>{{$visitors->reason}}</td>
            <td>{{$visitors->checkin}}</td>
            <td>{{$visitors->checkout}}</td>
            @php
            $date=\Carbon\Carbon::now();
            
        @endphp
            @if ($visitors->checkoutfinal == 0 &&  $visitors->checkout > $date)
                
        
            <td>
                @if ($visitors->approve == null &&  $visitors->checkout > $date)
                <a href="/approve/visitor/{{$visitors->id}}" class="btn btn-primary">Aprrove</a>
                <a href="/reject/visitor/{{$visitors->id}}" class="btn btn-danger">Reject</a>
                @endif
                @if ($visitors->approve == 1 &&  $visitors->checkout > $date)
               
                <a href="/reject/visitor/{{$visitors->id}}" class="btn btn-danger">Reject</a>
                @endif
                @if ($visitors->approve == 2 &&  $visitors->checkout > $date)
                <a href="/approve/visitor/{{$visitors->id}}" class="btn btn-primary">Aprrove</a>
            
                @endif
        
        
            </td>
            @else
            <td>
              Not Avaiable
        
        
            </td>
            @endif

           
            <td>{{$visitors->approve_by	}}</td>
            <td>
                @if ($visitors->checkoutfinal == 0 &&  $visitors->checkout > $date)
                <a class="btn btn-success" >lready Check In Now</a>
            @elseif ( $visitors->checkoutfinal == 0 &&  $visitors->checkout <= $date)
            <a class="btn btn-danger" >Already Check Out</a>
            @elseif ($visitors->checkoutfinal == 1)
            <a class="btn btn-danger" >Already Check Out</a>
            @endif
        </td>
        </tr>
        @endforeach
      
    </tbody>
</table>
            </div>
        </div>
    </div>
 </div>
 <script>
    $(function(){
      $(document).on('click','#checkout',function(e){
          e.preventDefault();
          var link = $(this).attr("href");
                    Swal.fire({
                    width: 400,
                    padding: '3em',
                    customClass: 'swal-height',
                    title: 'Are you sure?',
                    icon: 'error',
                      showCancelButton: false,
                      confirmButtonColor: '#3085D6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Checkout Now!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Checkout!',
                          'Visitor Checkout.',
                          'success'
                        )
                      }
                    })
      });
    });
  </script>
@endsection
