
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <form method="POST" action="{{url('/department/update/'.$department->id)}}"   class="parsley-examples" enctype="multipart/form-data">
                @csrf
                <br> <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                          <div class="mb-3">
                        <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                        <input type="text" name="name" parsley-trigger="change" value="{{$department->name}}" class="form-control" id="name" />
                        @if($errors->has('name'))
                        <div style="color:red"> {{$errors->first('name')}}</div>
                        @endif
                    </div>
                        <div class="mb-3">
                            <label for="branch" class="form-label">Branch<span class="text-danger">*</span></label>
                            <select name="branch" id="branch" class="form-control" >
                                <option>{{$department->branch_id}}</option>
                                @foreach ($branchs as $org)
                                <option value="{{$org->id}}">{{$org->name}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                          <center>
                        <button type="submit" class="btn btn-primary">Update</button>
                          </center>
                    </div>
                    <div class="col-md-4"></div>
                   
                   
                </div>
               
    
              
               
                
             
            </div>
            <div class="modal-footer">
            
            </div>
        </form>
            
        </div>
    </div>
 </div>


@endsection
