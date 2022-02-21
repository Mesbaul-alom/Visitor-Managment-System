
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row" style="padding-top: 50px">
                <div class="col-12">
                    <h3>Search Pre Visited</h3>
                    <input type="search" class="form-control" placeholder="visitor if pre visited">
                    <div class="card">
                        <form action="{{ route('visitor.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                        @csrf
                           
                                <div id="task_container">
                                    <div class="single_task">
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <label for="">Name</label>
                                                <input type="text" name="name[]" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Email</label>
                                                <input type="text" name="email[]" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Phone</label>
                                                <input type="text" name="phone[]" class="form-control">
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <label for="">Gender</label>
                                                <select name="gender[]" id="" class="form-control">
                                                    <option >Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="">Employee</label>
                                               
                                                <select name="employee[]" id="" class="form-control">
                                                    <option value="">Select Employee</option>
                                                    @foreach ($employees as $employee)
                                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                            <div class="col-md-1">
                                             
                                                <h3 class="btn btn-primary btn-sm">+</h3>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">department</label>
                                                <select name="department[]" class="form-control" id="">
                                                    <option selected disabled>Select Department</option>
                                                    @foreach ($deparments as $deparment)
                                                    <option value="{{$deparment->id}}">{{$deparment->name}}</option>  
                                                    @endforeach
                                                </select>
                                             
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="">Branch(only add for super recipt)</label>
                                                <input type="text" name="branch[]" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Authenticate*(if any)</label>
                                                <input type="text" name="auth[]" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Image</label>
                                                <input type="file" name="image[]" class="form-control">
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="row">
                                            
                                            
                                            <div class="col-md-4">
                                                <label for="">Id</label>
                                                <input type="text" name="id[]" class="form-control">
                                
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Check IN</label>
                                                <input type="datetime-local" name="checkin[]" class="form-control">
                                
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Validation Time(default checkout time)</label>
                                                <input type="datetime-local" name="checkout[]" class="form-control">
                                            </div>
                                
                                            
                                        </div>
                                        <div class="row">
                                            
                                            
                                            <div class="col-md-4">
                                                
                                
                                            </div>
                                            <div class="col-md-4">
                                                    <label for="">Locar*(if any)</label>
                                                <input type="text" name="locar[]" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                  
                                            </div>
                                            
                                        </div>
                            
                            
                            </div>
                        </div>
                        <hr>
                        <center style="padding-top:50px">
                            <button type="button" class="btn btn-success" id="add_task">+</button>
                             <button class="btn btn-primary">Save</button>
                         </center>
                            
                       
                          
                        </div>
                    </form> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
        </div>
    </div>
 </div>


 <script>
    window.addEventListener('DOMContentLoaded', function() {
        const task_container = document.getElementById('task_container');

        //add_task
        const add_task = document.getElementById('add_task');
        add_task.addEventListener('click', function() {
            const singleTaskhtml = singleTask();
            task_container.appendChild(singleTaskhtml);
        });


        $(document).on('click', '.remove_task', function(event) {
            const parentElement = event.target.parentElement.parentElement.parentElement;
            if (parentElement && parentElement.classList.contains('single_task')) {
                task_container.removeChild(parentElement);
            }

        })
    });



    function singleTask() {
        const single_tasks_length = document.querySelectorAll('.single_task').length;
        const singleTask = document.createElement('div');
        singleTask.classList.add('single_task');

        let html = `  <hr>
         <div class="row ">
                                <div class="col-md-4">
                                    <label for="">Name</label>
                                    <input type="text" name="name[]" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Email</label>
                                    <input type="text" name="email[]" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone[]" class="form-control">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-4">
                                    <label for="">Gender</label>
                                    <select name="gender[]" id="" class="form-control">
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Employee</label>
                                   
                                    <select name="employee[]" id="" class="form-control">
                                        <option value="">Abc</option>
                                        <option value="">Xyz</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                 
                                    <h3 class="btn btn-primary btn-sm">+</h3>
                                </div>
                                <div class="col-md-4">
                                    <label for="">department</label>
                                    <input name="department[]" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Branch(only add for super recipt)</label>
                                    <input type="text" name="branch[]" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Authenticate*(if any)</label>
                                    <input type="text" name="auth[]" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Image</label>
                                    <input type="file" name="image[]" class="form-control">
                                </div>
                                
                                
                            </div>
                            <div class="row">
                                
                                
                                <div class="col-md-4">
                                    <label for="">Id</label>
                                    <input type="text" name="id[]" class="form-control">
                    
                                </div>
                                <div class="col-md-4">
                                    <label for="">Check IN</label>
                                    <input type="date" name="checkin[]" class="form-control">
                    
                                </div>
                                <div class="col-md-4">
                                    <label for="">Validation Time(default checkout time)</label>
                                    <input type="date" name="checkout[]" class="form-control">
                                </div>
                    
                                
                            </div>
                            <div class="row">
                                
                                
                                <div class="col-md-4">
                                    
                    
                                </div>
                                <div class="col-md-4">
                                        <label for="">Locar*(if any)</label>
                                    <input type="text" name="locar[]" class="form-control">
                                </div>
                                <div class="col-md-4">
                                   
                               
                           
                                </div>
                                <center>
                                    <button  class="btn btn-danger remove_task mt-4">-</button>
                                </center>
                                
                            </div>
                           
                            `;
        singleTask.innerHTML = html
        return singleTask;
    }
</script>
@endsection
