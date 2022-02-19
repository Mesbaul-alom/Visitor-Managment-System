
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
                <h3 class="header-title">Create Organization</h3>
               </center>
               <hr>
 
                <form method="POST" action="{{url('/store/organization')}}"   class="parsley-examples" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-lg-6" >
                           <div class="mb-3">
                     <label for="userName" class="form-label">Organization Name<span class="text-danger">*</span></label>
                     <input type="text" name="username" value="{{old('username')}}" parsley-trigger="change"  class="form-control" id="userName" />
 
                     @if($errors->has('username'))
                     <div style="color:red"> {{$errors->first('username')}}</div>
                     @endif
 
                 </div>
                 <div class="mb-3">
                     <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
                     <input type="number" name="phone" value="{{old('phone')}}" parsley-trigger="change"  class="form-control" id="phone" />
                     @if($errors->has('phone'))
                     <div style="color:red"> {{$errors->first('phone')}}</div>
                     @endif
                 </div>
                 
             </div>
                    <div class="col-lg-6" >
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email address<span class="text-danger">*</span></label>
                           <input type="email" name="email" parsley-trigger="change" value="{{old('email')}}" class="form-control" id="emailAddress" />
                           @if($errors->has('email'))
                           <div style="color:red"> {{$errors->first('email')}}</div>
        
                           @endif
                           <h5 style="color: red">{{session('msg')}}</h5>
                        </div>
                     <div class="mb-3">
                         <label for="image" class="form-label">File<span class="text-danger">*</span></label>
                         <input type="file" name="image" parsley-trigger="change"   class="form-control" id="image" />
                         @if($errors->has('image'))
                         <div style="color:red"> {{$errors->first('image')}}</div>
                         @endif
                     </div>
                    </div>
 
 
                    <div class="col-lg-12" >
                        <div class="mb-12">
                            <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
                            <textarea name="description" id="" cols="80" rows="5" type="description" name="description" parsley-trigger="change" 
                            value="{{old('description')}}" class="form-control" id="description"></textarea>
  
                           @if($errors->has('description'))
                           <div style="color:red"> {{$errors->first('description')}}</div>
        
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
 