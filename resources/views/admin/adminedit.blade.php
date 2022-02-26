
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
                <h3 class="header-title">Edit Organization Admin</h3>
               </center>
               <hr>
 
                <form method="POST" action="{{url('/update/organization/admin/'.$admin->id)}}"   class="parsley-examples" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-lg-6" >
                           <div class="mb-3">
                     <label for="Name" class="form-label">Name<span class="text-danger">*</span></label>
                     <input type="text" name="name" value="{{$admin->name}}" parsley-trigger="change"  class="form-control" id="Name" />
 
                     @if($errors->has('name'))
                     <div style="color:red"> {{$errors->first('name')}}</div>
                     @endif
 
                 </div>
                 <div class="mb-3">
                     <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
                     <input type="number" name="phone" value="{{$admin->phone}}" parsley-trigger="change"  class="form-control" id="phone" />
                     @if($errors->has('phone'))
                     <div style="color:red"> {{$errors->first('phone')}}</div>
                     @endif
                 </div>
                 
             </div>
                    <div class="col-lg-6" >
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email address<span class="text-danger">*</span></label>
                           <input type="email" name="email" parsley-trigger="change" value="{{$admin->email}}"class="form-control" id="emailAddress" />
                           @if($errors->has('email'))
                           <div style="color:red"> {{$errors->first('email')}}</div>
        
                           @endif
                           <h5 style="color: red">{{session('msg')}}</h5>
                        </div>
                     <div class="mb-3">
                         <label for="address" class="form-label">Address<span class="text-danger">*</span></label>
                         <input type="text" name="address" parsley-trigger="change" value="{{$admin->adress}}"  class="form-control" id="address" />
                         @if($errors->has('image'))
                         <div style="color:red"> {{$errors->first('address')}}</div>
                         @endif
                     </div>
                    </div>
 
                    <div class="col-lg-6" >
                        <div class="mb-3">
                            <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                           <input type="password" name="password" parsley-trigger="change" value="{{$admin->password}}"class="form-control" id="emailAddress" />
                           @if($errors->has('password'))
                           <div style="color:red"> {{$errors->first('password')}}</div>
        
                           @endif
                           <h5 style="color: red">{{session('msg')}}</h5>
                        </div>
                     
                    </div>
 
 
                   
 
 
 
 
                    <div class="text-center">
                        <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                        
                    </div>
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
 