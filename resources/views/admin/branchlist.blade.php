
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Create</button>
                            </div>
                            <h4 class="header-title">Branch List</h4>
                           

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                   
                                    @foreach($branchs as $admin)
                                    <tr>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->phone}}</td>
                                        <td>{{$admin->address}}</td>
                                        {{-- <td>{{$admin->organization}}</td> --}}
                                        @if ($admin->is_active == 1)
                                        <td > <span class="btn btn-primary">Active</span> </td>
                                        @else
                                           <td>Diactive</td>
                                        @endif

                                        <td>
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
 {{-- add admin modal start --}}
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Branch</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('/branch/add')}}"   class="parsley-examples" enctype="multipart/form-data">
            @csrf
         
          
          <div class="mb-3">
            <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
            <input type="name" name="name" parsley-trigger="change" value="{{old('name')}}" class="form-control" id="name" />
            @if($errors->has('name'))
            <div style="color:red"> {{$errors->first('name')}}</div>
            @endif
          </div>
         
            <div class="mb-3">
                <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
                <input type="number" name="phone" parsley-trigger="change" value="{{old('phone')}}" class="form-control" id="phone" />
                @if($errors->has('phone'))
                <div style="color:red"> {{$errors->first('phone')}}</div>
                @endif
            </div>
            <div class="mb-3">
               
                    <label for="address" class="form-label">Address<span class="text-danger">*</span></label>
                    <input type="address" name="address" parsley-trigger="change" value="{{old('address')}}" class="form-control" id="address" />
                    @if($errors->has('address'))
                    <div style="color:red"> {{$errors->first('address')}}</div>
                    @endif
                  
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comment<span class="text-danger">*</span></label>
                <input type="comment" name="comment" parsley-trigger="change" value="{{old('comment')}}" class="form-control" id="comment" />
                @if($errors->has('address'))
                <div style="color:red"> {{$errors->first('address')}}</div>
                @endif
            </div>
            <hr>

           
           
           
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
 {{-- add admin modal end --}}
 <script>

 </script>
@endsection
