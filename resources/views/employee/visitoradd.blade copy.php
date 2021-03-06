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
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>


                                                {{-- <div id="task">
                                                    <div class="single"> --}}
                                                <div class="col-md-4">
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
                                                <div class="col-md-1">
                                                    {{-- <button type="button" class="btn btn-success" id="addd">+</button> --}}

                                                </div>
                                                    {{-- </div>
                                            </div> --}}


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="">Reason</label>
                                                    <input type="text" name="reason[]" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">Authenticate*(if any)</label>
                                                    <input type="text" name="auth[]" class="form-control">
                                                </div>
                                                {{-- <div class="col-md-4">
                                                    <label for="">Image</label>
                                                    <input type="file" name="image[]" class="form-control">
                                                </div> --}}


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

    <script>
        $(document).ready(function() {
            $('#employee_0').select2();
        });
    </script>
    <script language="JavaScript">
        Webcam.set({
            width: 490,
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
@endpush