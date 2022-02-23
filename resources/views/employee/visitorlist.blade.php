
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
                            <div class="text-end">
                            
                               <a href="/visitor/add" class="btn btn-success">Insert</a>
                      
                            </div>
                            <h4 class="header-title">Visitors List</h4>
                           {{-- <center>
                               <h3>Id Card:</h3>
                               <input type="search">
                           </center> --}}

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>V_id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                   
                                    @foreach($visitors as $admin)
                                    <tr>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->phone}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->v_id}}</td>
                                        {{-- @if ($admin->is_active == 1)
                                        <td > <span class="btn btn-primary">Active</span> </td>
                                        @else
                                           <td>Diactive</td>
                                        @endif --}}

                                        <td>
                                     <a href="/view/visitor/{{$admin->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                     <a href="/edit/organization/{{$admin->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="/delete/admin/organization/{{$admin->id}}" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a>
                                   
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
