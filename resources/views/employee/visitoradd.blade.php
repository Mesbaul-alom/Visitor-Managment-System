@extends('./layout_master')

{{-- section id is yeild name --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script> --}}
@section('admin')
    <div class="content-page center">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row" style="padding-top: 50px">
                    <div class="col-12">
                        {{-- <h3>Search Pre Visited</h3>
                        <input type="search" class="form-control" placeholder="visitor if pre visited"> --}}
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                
                                        <input type="text" name="phone" id="phone" placeholder="Search By Phone" class="form-control">
                                      
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                           
                            <form action="{{ route('visitor.store') }}" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    @csrf
                                               
                                                
                                    <div id="task_container">
                                        <div class="single_task">
                                            {{-- <div class="row">
                                                <div class="col-md-5"></div>
                                                <div class="col-md-2">
                                                   
                                                        <label for="">Phone</label>
                                                
                                                        <select type="text" name="phone" class="form-control js-example-basic-single" id="phone">
                                                            <option selected disabled>Select Phone</option>
                                                            @foreach ($vusers as $deparment)
                                                                <option value="{{ $deparment->phone }}">{{ $deparment->phone }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                {{-- <div class="col-md-4">
                                                   
                                                        <label for="">Phone</label>
                                                        <input type="text" name="phone" class="form-control">
                                                   
                                                </div> --}}
                                                <div class="col-md-5"></div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" id="edit_name" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" id="edit_email" class="form-control">
                                                </div>

                                                <div class="col-md-4">
                                                   
                                                    <label for="">Phone</label>
                                                    <input type="text" name="phone" id="edit_phone" class="form-control">
                                               
                                            </div>
                                                
                                             
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="">Gender</label>
                                                    <select name="gender" id="edit_gender" class="form-control">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">Reason</label>
                                                    <input type="text" name="reason" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">Id</label>
                                                    <input type="text" name="id" class="form-control">

                                                </div>

                                            </div>
                                                {{-- <div id="task">
                                                    <div class="single"> --}}
                                                <div class="employeeAddrow row" id="employeeAddrow">

                                                    <div class="row">

                                                    
                                                        
                                                
                                                        <div class="col-md-4 testde" id="department_container">
                                                            <label for="">department</label>
                                                            <select name="department" class="form-control" id="department">
                                                                <option selected disabled>Select Department</option>
                                                                @foreach ($deparments as $deparment)
                                                                    <option value="{{ $deparment->id }}">{{ $deparment->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                        <div class="col-md-4 testem" id="employee_container">
                                                            <label for="">Employee</label>

                                                            <select name="employee[]" required id="employee_0" class="js-example-placeholder-multiple js-states form-control " data-id="0">
                                                                <option selected disabled>select a employee</option>
                                                                {{-- <option value="" disabled>Select Employee</option>
                                                                <option value="" disabled>Select Employee</option> --}}
                                                                
                                                                {{-- @foreach ($employees as $employee)
                                                                    <option value="{{ $employee->id }}">{{ $employee->name }}
                                                                    </option>
                                                                @endforeach --}}

                                                            </select>
                                                        </div>

                                                        
                                                    </div>

                                                    
                                                </div>

                                                <div class="row col-1 mt-2">
                                                    <button id="add_more" class="btn btn-success">Add More</button>
                                                </div>
                                                
                                                <div class="col-md-1">
                                                    {{-- <button type="button" class="btn btn-success" id="addd">+</button> --}}

                                                </div>
                                                    {{-- </div>
                                            </div> --}}


                                            <div class="row">
                                               
                                                {{-- <div class="col-md-4">
                                                    <label for="">Authenticate*(if any)</label>
                                                    <input type="text" name="auth[]" class="form-control">
                                                </div> --}}
                                                {{-- <div class="col-md-4">
                                                    <label for="">Image</label>
                                                    <input type="file" name="image[]" class="form-control">
                                                </div> --}}


                                            </div>
                                            <div class="row">


                                               
                                                <div class="col-md-4">
                                                    <label for="">Check IN</label>
                                                    <input type="datetime-local" name="checkin" class="form-control">

                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">Validation Time(default checkout time)</label>
                                                    <input type="datetime-local" name="checkout" class="form-control">
                                                </div>


                                            </div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Click Image
                                              </button>
                                            
                                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Image Save</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">


                                                            <div class="col-md-5">
                                                                <div id="live_camera"></div>
                                                                <hr/>
                                                                <input type=button value="Take Snapshot" onClick="capture_web_snapshot()">
                                                                <input type="hidden" name="image" class="image-tag">
                                                               
                                                            </div>
                                                            {{-- <div class="col-md-4">
                                                                <label for="">Locar*(if any)</label>
                                                                <input type="text" name="locar[]" class="form-control">
                                                            </div> --}}
                                                            <!-- Button trigger modal -->
            
                                                            <div class="col-md-3">
                                                                <div id="preview"></div>
                                                               
                                                            </div>
                                                            
                                                            {{-- <div class="col-md-12 text-center pakainfo">
                                                                <br/>
                                                                <button class="btn btn-primary pakainfo">Submit</button>
                                                            </div> --}}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                               
                                                              </div>
                                                        </div>
            
                                                    </div>
                                                  
                                                  </div>
                                                </div>
                                              </div>
                                         

                                        </div>
                                    </div>
                                    <hr>
                                    <center style="padding-top:50px">
                                        {{-- <button type="button" class="btn btn-success" id="add_task">+</button> --}}
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
                const {
                    singleTask: singleTaskhtml,
                    task_length
                } = singleTask();
                console.log(task_length, 'this is running');
                task_container.appendChild(singleTaskhtml);
                console.log($(`#employee_${task_length}`))
                $(`#employee_${task_length}`).select2();
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
                                        <option >Male</option>
                                        <option >Female</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Employee</label>

                                    <select name="employee[${single_tasks_length}][]" id="employee_${single_tasks_length}" class="form-control" multiple>
                                        <option value="">Select Employee</option>
                                                        
                                                        @foreach ($employees as $employee)
                                                            <option value="{{ $employee->id }}">{{ $employee->name }}
                                                            </option>
                                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="">department</label>
                                    <select name="department[]" class="form-control" id="">
                                                        <option selected disabled>Select Department</option>
                                                        @foreach ($deparments as $deparment)
                                                            <option value="{{ $deparment->id }}">{{ $deparment->name }}
                                                            </option>
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
                                    <input type="date" name="checkin[]" class="form-control">

                                </div>
                                <div class="col-md-4">
                                    <label for="">Validation Time(default checkout time)</label>
                                    <input type="date" name="checkout[]" class="form-control">
                                </div>


                            </div>
                            <div class="row">


<div class="col-md-2">


</div>
{{-- <div class="col-md-4">
    <label for="">Locar*(if any)</label>
    <input type="text" name="locar[]" class="form-control">
</div> --}}
<div class="col-md-4">
    <div id="live_camera"></div>
    <hr/>
    <input type=button value="Take Snapshot" onClick="capture_web_snapshot()">
    <input type="hidden" name="image[]" class="image-tag">
</div>
<div class="col-md-4">
    <div id="preview"></div>
</div>

<div class="col-md-2">


</div>
{{-- <div class="col-md-12 text-center pakainfo">
    <br/>
    <button class="btn btn-primary pakainfo">Submit</button>
</div> --}}
</div>

                            `;
            singleTask.innerHTML = html;

            return {
                singleTask,
                task_length: single_tasks_length
            };

        }
    </script>
    {{-- <script>
        window.addEventListener('DOMContentLoaded', function() {
            const task= document.getElementById('task');

            //add_task
            const addd = document.getElementById('addd');
            addd.addEventListener('click', function() {
                const {
                    singleTaskk: singleTaskkhtml,
                    task_length
                } = singleTaskk();
                console.log(task_length, 'this is running');
                task.appendChild(singleTaskkhtml);
                console.log($(`#employee_${task_length}`))
                $(`#employee_${task_length}`).select2();
            });


            $(document).on('click', '.remove_task', function(event) {
                const parentElement = event.target.parentElement.parentElement.parentElement;
                if (parentElement && parentElement.classList.contains('single_task')) {
                    task_container.removeChild(parentElement);
                }

            })
        });



        function singleTaskk() {
            const single_tasks_length = document.querySelectorAll('.single').length;
            const singleTaskk = document.createElement('div');
            singleTaskk.classList.add('single');

            let html = `   <div class="col-md-4">
                                                    <label for="">Employee</label>

                                                    <select name="employee[0][]" id="employee_0" class="form-control"
                                                        multiple>
                                                        <option value="">Select Employee</option>
                                                        
                                                        @foreach ($employees as $employee)
                                                            <option value="{{ $employee->id }}">{{ $employee->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                              
                                                <div class="col-md-4">
                                                    <label for="">department</label>
                                                    <select name="department[]" class="form-control" id="">
                                                        <option selected disabled>Select Department</option>
                                                        @foreach ($deparments as $deparment)
                                                            <option value="{{ $deparment->id }}">{{ $deparment->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                            `;
            singleTaskk.innerHTML = html;

            return {
                singleTaskk,
                task_length: single_tasks_length
            };

        }
    </script> --}}
   
@endsection

@push('js')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    var selectCounter = 0;
    $(document).on('change','#phone',(e)=>
    {
        let phone_id = e.target.value;
        $("#edit_phone").val(phone_id);
        // const phone  = document.getElementById('phone');
        // const email   = document.getElementById('email');
        //    const name   = document.getElementById('name');
        //    const gender   = document.getElementById('gender');
           
     
        axios.get(`/getvisitor-list/${phone_id}`)
        .then(response=>{

            const visitor = response?.data?.visitor;
            console.log(visitor.name);
                    if(visitor){
                    $("#edit_name").val(visitor.name);
                    $("#edit_email").val(visitor.email);
                    $("#edit_gender").val(visitor.gender);
                    // $("#edit_image").val(admin.image);
                  
                    }

                
                // phone.value = response.data.visitor.phone;
                //     v_no.value  = response.data.driver.email;
                //      gender.value = response.data.visitor.gender;
                //     name.value  = response.data.visitor.name;
                //     email.value  = response.data.visitor.email;
                    
        })
        .catch(error=>{

        })
    });
</script>
<script>
    var selectCounter = 0;
    $(document).on('change','#department',(e)=>
    {
        let driver_id = e.target.value;
        console.log("mesba");
        // const department   = document.getElementById('employee_0');
        const department=$(e.target).parent().siblings().children('select');
        // .children('#employee_0');
        console.log(department);
    //    const v_no   = document.getElementById('v_no');
    //    console.log(driver_id);
        axios.get(`/employee-list/${driver_id}`)
        .then(response=>{

            // console.log(response);
            var data = response.data.department;
            console.log(data);

            data.forEach(employee => {
                console.log('here',employee.id);
                var s = `<option value="${employee.id }">${employee.name }</option>`;

                $(department).append(s);
            });
            $(department).attr('multiple','multiple');
            intDropDown(department);
            
        })
        .catch(error=>{

        })
    });
</script>



<script>
    function intDropDown(department)
    {

        $(document).ready(function() {
            // $('#employee_0').select2();

            var id = $(department).data(id);
            console.log(id.id);


            $(`#employee_${id.id}`).select2({
                placeholder: {
                    id: '', // the value of the option
                    text: 'Selected Employee'
                },
                allowClear: true
            });
            $(`#employee_${id.id}`).val("");
            $(`#employee_${id.id}`).trigger("change");
        });

    }
</script>



<script>

    $('#add_more').on('click',function(e)
    {
        e.preventDefault();
        selectCounter++;
        // console.log('hrere');
        var departmentClone = $('#department_container').clone();
        // console.log(departmentClone.html());
        var s =  `<div class="row">
                                 
            <div class="col-md-4">
                        ${departmentClone.html()}

                    </div>

                    <div class="col-md-4">
                        <label for="">Employee</label>

                        <select name="employee[]" required id="employee_${selectCounter}" class="js-example-placeholder-multiple js-states form-control " data-id="${selectCounter}">
                            <option selected disabled>select a employee</option>
                        </select>
                    </div>

                   

                    <div class="col-md-1">
                        <button id="delete_employee_contant" class="btn btn-danger">DELETE</button>
                    </div>

                </div>`;
        
        $('#employeeAddrow').append(s);
        

        
    });
</script>

<script>
    $(document).on('click','#delete_employee_contant',function(e)
    {
        e.preventDefault();
        $(this).parent('div').parent('div').remove();
    })
</script>



<script language="JavaScript">
    Webcam.set({
        width: 150,
        height: 150,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    
    Webcam.attach( '#live_camera' );
    
    function capture_web_snapshot() {
        Webcam.snap( function(site_url) {
            $(".image-tag").val(site_url);
            document.getElementById('preview').innerHTML = '<img src="'+site_url+'"/>';
        } );
    }
</script>

<script>
    $(document).ready(function() {
       $('.js-example-basic-single').select2();
   });
   </script>

@endpush