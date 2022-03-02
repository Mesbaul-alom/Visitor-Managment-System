<div class="navbar-custom">
    
    <div class="container-fluid" >
       
       
        <ul class="list-unstyled topnav-menu float-end mb-0">
           
         
            @php
            $id= auth()->id();
            $id=\App\Models\User::find($id);
            $idd=$id->employee_id;
              $noti=\App\Models\Visitor::where('employee', $idd)->where('approve',Null)->get()->count();
               $notilist=\App\Models\Visitor::where('employee', $idd)->where('approve',Null)->take(5)->get();

               $employee=\App\Models\Employee::where('id', $idd)->first();
             @endphp
            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>
            @if ( $idd == null)
                
            @else
            @if ($employee->employee_role == 1)
            <li>
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"><span style="color: red">{{$noti }}</span> </i>
                    <span class="badge bg-danger rounded-circle noti-icon-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                  



                    <!-- item-->

                    <!-- All-->
                   
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                      
                        @foreach ($notilist as $list)
                        <a class="dropdown-item" href="/pending/application/{{$list->id}}" >{{$list->name}}:{{$list->reason}}</a>
                        @endforeach 
                    </a>
                   
                </div>
            </li>
            @endif
            @endif
          
        
            @php
            $id= auth()->id();
            
              $noti=\App\Models\Visitor::where('recep_id', $id)->whereNotNull('approve')->where('checkoutfinal',null)->get()->count();
               $notilist=\App\Models\Visitor::where('recep_id', $id)->whereNotNull('approve')->where('checkoutfinal',Null)->take(10)->get();

               $employee=\App\Models\Employee::where('id', $idd)->first();
             @endphp
             @if ( $idd == null)
                 
             @else
               @if ($employee->employee_role == 2)
                    <li>
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"><span style="color: red">{{$noti }}</span> </i>
                            <span class="badge bg-danger rounded-circle noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg">
        
                          
        
        
        
                            <!-- item-->
        
                            <!-- All-->
                           
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                              
                                @foreach ($notilist as $list)
                                <a class="dropdown-item" href="/details/recep/visitor/{{$list->id}}" >{{$list->name}}:{{$list->reason}}</a>
                                @endforeach 
                            </a>
                           
                        </div>
                    </li>
                    @else
                   
        
                    @endif 
             @endif
                    

            <li>
               
                    {{-- <a href=""  class="nav-link dropdown-toggle waves-effect waves-light aria-haspopup="false" aria-expanded="false">
                         <i class="fe-box noti-icon"></i>
                        <span  class="badge bg-danger rounded-circle noti-icon-badge"></span>
                    </a> --}}



            </li>

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="../assets/images/users/user-1.jpg" alt="" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        {{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>


                    <a class="dropdown-item notify-item" href=""
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="fe-lock"></i>
                     {{ __('Logout') }}
                 </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </a>




                    <div class="dropdown-divider"></div>


                </div>
            </li>



        </ul>
        <div class="logo-box">
            <a href="/home" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="../assets/images/logo-sm.png" alt="" height="22">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-lg">
                    <img src="../assets/images/logo-dark.png" alt="" height="20">
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>

            <h1 style="color: white" >VMS</h1>
        </div>
      

      
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>



        </ul>
        <div class="clearfix"></div>
    </div>
</div>
