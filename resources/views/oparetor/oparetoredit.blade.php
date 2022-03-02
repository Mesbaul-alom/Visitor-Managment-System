
 @extends('./layout_master')

 {{-- section id is yeild name  --}}
 
 @section('admin')
 
 <div class="content-page center">
    <div class="content">
 
        <!-- Start Content-->
        <div class="container-fluid">
 
 
 <div class="row" style="padding-top: 50px">
     <div class="col-lg-2"></div>
    <div class="col-lg-8">
 
        <div class="card">
            <div class="card-body">
               <center>
                <h3 class="header-title">Edit  Branch</h3>
               </center>
               <hr>
 
                <form method="POST" action="{{url('/update/oparetor/admin/'.$oparetor->id)}}"   class="parsley-examples" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                        <input type="name" name="name" parsley-trigger="change" value="{{$oparetor->name}}" class="form-control" id="name" />
                        @if($errors->has('name'))
                        <div style="color:red"> {{$errors->first('name')}}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
                        <input type="number" name="phone" parsley-trigger="change" value="{{$oparetor->phone}}" class="form-control" id="phone" />
                        @if($errors->has('phone'))
                        <div style="color:red"> {{$errors->first('phone')}}</div>
                        @endif
                   
                </div>
            
                   <div class="mb-3">
                    <label for="branch" class="form-label">Branch<span class="text-danger">*</span></label>
                    <select name="branch" id="branch" class="form-control" >
                        <option selected >{{$oparetor->branch}}</option>
                        @foreach ($branchs as $org)
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
                    <input type="address" name="address" parsley-trigger="change" value="{{$oparetor->address}}" class="form-control" id="address" />
                    @if($errors->has('address'))
                    <div style="color:red"> {{$errors->first('address')}}</div>
                    @endif
                   </div>
               
             
             
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment<span class="text-danger">*</span></label>
                    <input type="comment" name="comment" parsley-trigger="change" value="{{$oparetor->comment}}" class="form-control" id="comment" />
                    @if($errors->has('address'))
                    <div style="color:red"> {{$errors->first('address')}}</div>
                    @endif
                </div>
                <hr>
    
                <div class="mb-3">
                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="email" name="email" parsley-trigger="change" value="{{$oparetor->email}}" class="form-control" id="email" />
                        @if($errors->has('email'))
                        <div style="color:red"> {{$errors->first('email')}}</div>
                        @endif
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                    <input type="password" name="password" parsley-trigger="change" value="{{$oparetor->password}}" class="form-control" id="password" />
                    @if($errors->has('password'))
                    <div style="color:red"> {{$errors->first('password')}}</div>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
                </form>
            </div>
        </div> <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-lg-2"></div>
 </div>
        </div>
    </div>
 </div>
 @endsection
 