
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
                            <h4 class="header-title">Designation List</h4>
                           

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                   
                                    @foreach($designation as $admin)
                                    <tr>
                                        <td>{{$admin->name}}</td>

                                        <td>
                                     <a href="/edit/designation/{{$admin->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="/delete/admin/designation/{{$admin->id}}" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a>
                                   
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
          <h5 class="modal-title" id="exampleModalLabel">Designation Branch</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('/designation/add')}}"   class="parsley-examples" enctype="multipart/form-data">
            @csrf
         
          
          <div class="mb-3">
            <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
            <input type="name" name="name" parsley-trigger="change" value="{{old('name')}}" class="form-control" id="name" />
            @if($errors->has('name'))
            <div style="color:red"> {{$errors->first('name')}}</div>
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
