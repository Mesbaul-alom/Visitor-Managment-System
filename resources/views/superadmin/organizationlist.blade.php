
 @extends('./layout_master')

 {{-- section id is yeild name  --}}
 <style>
    .form-select {
        color: white !important;
        background-color: #272e48 !important;
        border-color: rgba(255, 255, 255, 0.12) !important;
    }

    .form-select option {
        color: white !important;
    }

    .toggle {
        margin: 0 0 0 2rem;
        position: relative;
        display: inline-block;
        width: 6rem;
        height: 2.4rem;
    }

    .toggle input {
        display: none;
    }

    .roundbutton {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        background-color: #33455e;
        display: block;
        transition: all 0.3s;
        border-radius: 3.4rem;
        cursor: pointer;
    }

    .roundbutton:before {
        position: absolute;
        content: "";
        height: 1.4rem;
        width: 1.5rem;
        border-radius: 100%;
        display: block;
        left: 0.5rem;
        bottom: 0.5rem;
        background-color: white;
        transition: all 0.3s;
    }

    input:checked+.roundbutton {
        background-color: #7a88e6;
    }

    input:checked+.roundbutton:before {
        transform: translate(2.6rem, 0);
    }

    .bootstrap-tagsinput {
        background: #c6cada;
        width: 100%;
        border: 1px solid rgba(255, 255, 255, 0.12);
        font: #ffffff;
    }
    #wrapper {
    height: 0% !important;
   
}

</style>

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row" style="padding-top: 50px">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">Organization List</h4>

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Deactive/Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                   
                                    @foreach($organizations as $organization)
                                    <tr>
                                        <td>
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                    <img src="{{('/org_img/'.$organization->image)}}" alt="" class="img-thumbnail rounded-circle">
                                                </span>
                                            </div>


                                        </td>
                                        <td>{{substr($organization->name,0,25)}} <br>
                                            {{substr($organization->name,25,40)}}
                                        </td>
                                        <td>{{$organization->phone}}</td>
                                        <td>{{$organization->email}}</td>
                                       <td>
                                        <label class="toggle">
                                            <input id="toggleswitch" type="checkbox" name="shipping"
                                                {{ $organization->is_active== '1' ? 'checked' : '0' }}>
                                            <span class="roundbutton"></span>
                                        </label>
                                       </td>

                                        <td>
                                     <a href="/details/organization/{{$organization->id}}" class="btn  btn-primary"><i class="fas fa-eye"></i></a>
                                     <button type="button" class="btn  btn-primary edit_operator" data-id="{{ $organization->id }}" data-bs-toggle="modal" data-bs-target="#edit_operator_modal" ><i class="fas fa-edit"></i></button>
                                     {{-- <a type="button" class="btn btn-sm btn-success edit_operator" data-toggle="modal"
                                     data-target="#edit_operator_modal"
                                     data-id="{{ $organization->id }}"><i class="fas fa-edit"></i></a> --}}

                                    <a data-id="{{ $organization->id }}"
                                        class="btn  btn-danger delete_organization"><i class="fas fa-trash-alt"></i></a>
                                    {{-- @if ($organization->is_active == 2)
                                    <a href="/delete/organization/{{$organization->id}}" class="btn btn-success" id="delete"><i class="fas fa-arrow-up"></i></a> 
                                    @else
                                    <a href="/delete/organization/{{$organization->id}}" class="btn btn-danger" id="delete"><i class="fas fa-arrow-down"></i></a> 
                                    @endif --}}
                                   
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
 {{-- edit modal --}}
 <div class="modal fade" id="edit_operator_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
 aria-hidden="true">
 <div class="modal-dialog">
     <form action="" id="EditOperatorForm">
         @csrf
         <div class="modal-content">
             <div class="modal-header">
                 <h2>Edit Organization</h2>
             </div>
             <div class="modal-body">
                 <input type="hidden" name="id" id="edit_id">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="form-group">
                             <label for=""> Name</label>
                             <input type="text" class="form-control" name="name" id="edit_name" />
                             <span class="text-danger" id="edit_name_error"></span>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="form-group">
                             <label for="email"> Email</label>
                             <input class="form-control" name="email" id="edit_email" type="text">
                             <span class="text-danger" id="edit_email_error"></span>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="form-group">
                             <label for="edit_password">Phone</label>
                             <input class="form-control" name="phone" id="edit_phone" type="text">
                             <span class="text-danger" id="edit_password_error"></span>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="form-group">
                             <label for="role">Image</label>
                             <input class="form-control" name="image" id="edit_image" type="file">
                            
                         </div>
                     </div>
                 </div>

             </div>
             <div class="modal-footer">
                 {{-- <button type="button" class="btn btn-default" data-dismiss="modal">ফিরিয়ে যান</button> --}}
                 <button type="submit" id="editOperatorButton" class="btn  btn-success success">Update</button>
             </div>
         </div>
     </form>
 </div>

</div>
 {{-- edit modal end --}}

 <script>
      $("#EditOperatorForm").on('submit', (e) => {
            e.preventDefault();
            const id = $("#edit_id").val();
            console.log("mesba");
            const formData = new FormData(e.target);
            
            axios.post(`/organization/update/${id}`, formData)
                .then(response => {
                   
                    const message = response.data.success;
                    Swal.fire(
                        'Success', message, 'success'
                    );
                    console.log(message);
                    $('#edit_operator_modal').modal('hide')
                })
                .catch(error => {
                    if (error.response?.status == 422) {
                        const errors = error.response.data.errors;
                        $('#edit_name_error').text(errors?.name?.[0]);
                        $('#edit_email_error').text(errors?.email?.[0]);
                        $('#edit_password_error').text(errors?.password?.[0]);
                        $('#edit_role_error').text(errors?.role?.[0]);
                    }
                    if (error.response?.status == 404) {
                        Swal.fire(
                            'Error!', error.response?.data.error, 'error'
                        );
                    }
                    if (error.response?.status == 500) {
                        Swal.fire(
                            'Error!', error.response?.data?.error, 'error'
                        );
                    }
                })
        });
 </script>
 <script>
    const edit_operatorButtons = document.querySelectorAll('.edit_operator');
    edit_operatorButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            const id = this.dataset.id;
            axios.get(`/organization/edit/${id}`)
                .then(response => {
                   
                    const admin = response?.data?.admin;
                    if(admin){
                    $("#edit_name").val(admin.name);
                    $("#edit_email").val(admin.email);
                    $("#edit_phone").val(admin.phone);
                    // $("#edit_image").val(admin.image);
                    console.log(admin);
                    $("#edit_id").val(admin.id);
                    }

                })
                .catch(error => {
                    console.log(error);
                    if (error.response?.status == 404) {
                        Swal.fire(
                            'Error!', error.response?.data.error, 'error'
                        );
                    }
                })
        })
    })

   
</script>
  <script>
    window.addEventListener('DOMContentLoaded', function() {
        const delete_opertors = document.querySelectorAll('.delete_organization');
        delete_opertors.forEach(button => {
            button.addEventListener('click', function(event) {
                const id = this.dataset.id;
                if (!confirm('Are You Sure You Want To Delete this')) {
                    Swal.fire(
                        'Success!', "You Data is Safe", 'Success'
                    );
                    return;
                }
                axios.delete(`/organization/delete/${id}`)
                    .then((response) => {
                        Swal.fire(
                            'Success!', response.data.success, 'success'
                        );
                        location.reload();
                    })
                    .catch(error => {
                        console.log(error);
                    })
            });
        })

    })
</script>

<script>
    var input = document.getElementById('toggleswitch');
    var outputtext = document.getElementById('status');

    input.addEventListener('change', function() {
        if (this.checked) {
            outputtext.innerHTML = "1";
        } else {
            outputtext.innerHTML = "0";
        }
    });
</script>

<script>
    function Enableddl(chkddl) {
        var ddl = document.getElementById("DDL");
        ddl.disabled = chkddl.checked ? false : true;
        if (!ddl.disabled) {
            ddl.focus();
        }
    }
</script>
@endsection
