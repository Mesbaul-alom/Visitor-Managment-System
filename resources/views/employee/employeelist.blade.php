
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
                                @if (auth()->user()->is_admin == 2 || auth()->user()->is_admin == 3)
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Create</button>
                           @endif
                            </div>
                            <h4 class="header-title">Employee List</h4>
                           

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Branch</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach($employees as $admin)
                                    <tr>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->phone}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->organization}}</td>
                                        @if ($admin->is_active == 1)
                                        <td > <span class="btn btn-primary">Active</span> </td>
                                        @else
                                           <td>Diactive</td>
                                        @endif

                                        <td>
                                            <a href="/employee/details/{{$admin->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                            @if (auth()->user()->is_admin == 2 || auth()->user()->is_admin == 3)
                                     <a href="/edit/organization/{{$admin->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="/delete/employee/{{$admin->id}}" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a>
                                   @endif
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
          <h5 class="modal-title" id="exampleModalLabel">Employee Assign</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('/employee/branch/add')}}"   class="parsley-examples" enctype="multipart/form-data">
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
                <label for="designation" class="form-label">Designation<span class="text-danger">*</span></label>
                <select name="designation" id="designation" class="form-control" >
                    <option selected disabled>Select designation</option>
                  @foreach ($organization as $org)
                  <option value="{{$org->id}}">{{$org->name}}</option>
                  @endforeach
                    
                 
                  
                </select>
                {{-- <input type="phone" name="phone" parsley-trigger="change" value="{{old('phone')}}" class="form-control" id="phone" /> --}}
                @if($errors->has('organization'))
                <div style="color:red"> {{$errors->first('organization')}}</div>
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
                <textarea name="comment" parsley-trigger="change" value="{{old('comment')}}" class="form-control" id="comment" cols="30" rows="5"></textarea>
                @if($errors->has('address'))
                <div style="color:red"> {{$errors->first('address')}}</div>
                @endif
            </div>
            <hr>

            <div class="mb-3">
                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                    <input type="email" name="email" parsley-trigger="change" value="{{old('email')}}" class="form-control" id="email" />
                    @if($errors->has('email'))
                    <div style="color:red"> {{$errors->first('email')}}</div>
                    @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                <input type="password" name="password" parsley-trigger="change" value="{{old('password')}}" class="form-control" id="password" />
                @if($errors->has('password'))
                <div style="color:red"> {{$errors->first('password')}}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="re-password" class="form-label">Confirm Password<span class="text-danger">*</span></label>
                <input type="re_password" name="re_password" parsley-trigger="change" value="{{old('re_password')}}" class="form-control" id="re_password" />
                @if($errors->has('re_password'))
                <div style="color:red"> {{$errors->first('re_password')}}</div>
                @endif
            </div>
         
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
