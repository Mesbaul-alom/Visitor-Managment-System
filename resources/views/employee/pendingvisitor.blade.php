
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row" style="padding-top: 50px">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Visitors List</h4>
                           

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Employee Name</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                   
                                    @foreach($visitors as $admin)
                                    <tr>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->phone}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->emp->name}}</td>
                                        <td>{{$admin->checkin}}</td>
                                        @if ($admin->checkoutfinal == 1)
                                        <td>{{$admin->checkout}}</td>
                                            @else
                                            <td>Not Checkout</td>
                                        @endif
                                        
                                        <td>
                                     <a href="/details/visitor/{{$admin->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
        </div>
    </div>
 </div>
 
@endsection
