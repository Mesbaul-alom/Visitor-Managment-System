
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
        </div>
    </div>
 </div>
 
@endsection
