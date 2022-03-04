
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card">
                    <center>
                        <div class="card-body">
                            @if ($details->approve == null)
                           <a href="/approve/visitor/{{$details->id}}" class="btn btn-primary">Aprrove</a>
                           <a href="/reject/visitor/{{$details->id}}" class="btn btn-danger">Reject</a>
                           @endif
                           @if ($details->approve == 1)
                          
                           <a href="/reject/visitor/{{$details->id}}" class="btn btn-danger">Reject</a>
                           @endif
                           @if ($details->approve == 2)
                           <a href="/approve/visitor/{{$details->id}}" class="btn btn-primary">Aprrove</a>
                       
                           @endif
                       </div>
                    </center>
            </div>
       

</div>
<hr>

            </div>
            <table id="example" class="table table-striped dt-responsive nowrap w-100">
                <thead>
                    <tr>
                        <th>Visitor Name</th>
                        <th>Reason</th>
                        <th>CheckIn</th>
                        {{-- @if ($visitors->checkoutfinal == 0) --}}
                        <th>Check Out</th>
                       
                    </tr>
                </thead>
            
            
                <tbody>
                   @foreach ($visitorss as $visitors)
                       
                 
                  
                    <tr>
                        <td>{{$visitors->name}}</td>
                        <td>{{$visitors->reason}}</td>
                        <td>{{$visitors->checkin}}</td>
                        <td>{{$visitors->checkout}}</td>
                    
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>
        </div>
    </div>
 </div>
 
@endsection
