
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
                                        <h5 class="text-primary">Welcome</h5>
                                        <p>{{ Auth::user()->name }}</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('assets\images\profile-img.png')}}" alt="" class="img-fluid">
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
                                            <th>{{$visitors->name}}</th>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <th>{{$visitors->phone}}</th>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <th>{{$visitors->email}}</th>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
       

</div>
<hr>
<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>

            @if ($visitors->approve == 1 || $visitors->approve == null)
            <th>Approve By</th>
            @endif
            @if ($visitors->approve == 2)
            <th>Rejected By</th>
            @endif
        </tr>
    </thead>


    <tbody>
       
      
        <tr>
            <td>{{$visitors->name}}</td>
            <td>{{$visitors->phone}}</td>
            <td>{{$visitors->email}}</td>
            <td>
                @if ($visitors->approve == null)
                <a href="/approve/visitor/{{$visitors->id}}" class="btn btn-primary">Aprrove</a>
                <a href="/reject/visitor/{{$visitors->id}}" class="btn btn-danger">Reject</a>
                @endif
                @if ($visitors->approve == 1)
               
                <a href="/reject/visitor/{{$visitors->id}}" class="btn btn-danger">Reject</a>
                @endif
                @if ($visitors->approve == 2)
                <a href="/approve/visitor/{{$visitors->id}}" class="btn btn-primary">Aprrove</a>
            
                @endif
        
        
            </td>
            <td>{{$visitors->approve_by	}}</td>
        </tr>
      
    </tbody>
</table>
            </div>
        </div>
    </div>
 </div>
 
@endsection
