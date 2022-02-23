
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-2"></div>

                <div class="col-xl-8">
                    <div class="card">
                    <div class="card-body">
                            <h4 class="card-title mb-4">Information</h4>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <th>{{$vuser->name}}</th>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <th>{{$vuser->phone}}</th>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <th>{{$vuser->email}}</th>
                                        </tr>
                                        <tr>
                                            <th>Adress</th>
                                            <th>{{$vuser->address}}</th>
                                        </tr>
                                        <tr>
                                            <th>Designation</th>
                                            <th>{{$vuser->	designation}}</th>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
       

</div>
<div class="col-xl-2"></div>

@endsection
