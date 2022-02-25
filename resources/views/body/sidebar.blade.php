<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <!-- User box -->
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            @if (auth()->user()->is_admin == 1)
            <ul id="side-menu">
                <li>
                    <a href="/home">
                        <i class="fas fa-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                @php
                    $user = Auth::user();
                @endphp
             

                <li>
                    <a href="#sidebar2" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Organizations </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar2">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.organization') }}">
                             
                                   Add Organization</a>
                            </li>
                            <li>
                                <a href="{{ route('organization.list') }}">
                                   
                                    Organization list</a>
                            </li>
                            <li>
                                <a href="{{ route('organization.admin.list') }}">
                                   
                                    Organization Admin List</a>
                            </li>
                            <li>
                                <a href="{{ route('organization.admin.list') }}">
                                   
                                    Primium Feature</a>
                            </li>
                        </ul>
                    </div>
                </li>
                   
               
              
                </li>
               
             
            
               
            </ul>
            @endif

            @if (auth()->user()->is_admin == 2)
            <ul id="side-menu">
                <li>
                    <a href="/admin/home">
                        <i class="fas fa-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                @php
                    $user = Auth::user();
                @endphp
             

                <li>
                    <a href="#sidebar2" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Branch </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar2">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('branch.list') }}">
                             
                                   Branch List</a>
                            </li>

                            <li>
                                <a href="{{ route('oparetor.list') }}">
                             
                                   Assign Oparetor</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('employee.list') }}">
                                   Employee List</a>
                            </li> --}}
                            
                           
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebar3" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Department </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar3">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('department.list') }}">
                             
                                   Department List</a>
                            </li>
                            
                           
                            
                           
                        </ul>
                    </div>
                </li>

                
                {{-- <li>
                    <a href="#sidebar4" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Employee </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar4">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('employee.list')}}">
                                   Employee List</a>
                            </li>
                            <li>
                                <a href="{{ route('recep.list') }}">
                                    Receptionist List</a>
                            </li>

                           
                           
                        </ul>
                    </div>
                </li>
                 --}}
                <li>
                    <a href="#sidebar5" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Designation </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar5">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('designation.list')}}">
                                    Designation List</a>
                            </li>
                            

                           
                           
                        </ul>
                    </div>
                </li>

              
            </li>
                   
               
              
                </li>
               
             
            
               
            </ul>
            @endif
            @if (auth()->user()->is_admin == 3)
            <ul id="side-menu">
                <li>
                    <a href="/oparetor/home">
                        <i class="fas fa-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                
                @php
                    $user = Auth::user();
                @endphp
             

                <li>
                    <a href="#sidebar2" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Employee </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar2">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('employee.list') }}">
                                   Employee List</a>
                            </li>
                            <li>
                                <a href="{{ route('recep.list') }}">
                                    Receptionist List</a>
                            </li>

                           
                           
                        </ul>
                    </div>
                </li>
          
                   
               
              
                </li>
               
             
            
               
            </ul>
            @endif
            @if (auth()->user()->is_admin == 5)
            <ul id="side-menu">
                <li>
                    <a href="/employee/home">
                        <i class="fas fa-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                @php
                    $user = Auth::user();
                @endphp
             

                <li>
                    <a href="#sidebar2" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Visitor </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar2">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('visitor.list') }}">
                                   Visitor List</a>
                            </li>

                            {{-- <li>
                                <a href="{{ route('pending.visitor.list') }}">
                                 pre  Visitor List</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('history.visitor.list') }}">
                                   Visiting History</a>
                            </li>
                            
                           
                        </ul>
                    </div>
                </li>
                {{-- <li>
                    <a href="#sidebar3" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Locar </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar3">
                        <ul class="nav-second-level">
                           

                            <li>
                                <a href="{{ route('pending.visitor.list') }}">
                                 Locar</a>
                            </li>
                            <li>
                                <a href="{{ route('pending.visitor.list') }}">
                                 Id Card</a>
                            </li>
                           
                        </ul>
                    </div>
                </li> --}}
                <li>
                    <a href="#sidebar4" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Employee </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar4">
                        <ul class="nav-second-level">
                           

                            <li>
                                <a href="{{ route('parmanent.employee.list') }}">
                                 Parmanent Employee</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('pending.visitor.list') }}">
                                 Temp Employee</a>
                            </li> --}}
                           
                        </ul>
                    </div>
                </li>
          
                   
               
              
                </li>
               
             
            
               
            </ul>
            @endif
            @if (auth()->user()->is_admin == 4)
            <ul id="side-menu">
                <li>
                    <a href="/employee/home">
                        <i class="fas fa-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                @php
                    $user = Auth::user();
                @endphp
             

                <li>
                    <a href="#sidebar2" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Visitor </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar2">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.visitor.list') }}">
                                   Visitor List</a>
                            </li>
                            <li>
                                <a href="{{ route('pending.visitor.list') }}">
                                   Pending Visitor List</a>
                            </li>
                            <li>
                                <a href="{{ route('approve.visitor.list') }}">
                                Approved   Visitor List</a>
                            </li>
                            <li>
                                <a href="{{ route('rejected.visitor.list') }}">
                                Rejected   Visitor List</a>
                            </li>
                            <li>
                                <a href="{{ route('pending.visitor.list') }}">
                               Pre Registration Visitor</a>
                            </li>
                        <ul class="nav-second-level">
                           

                           
                           
                        </ul>
                    </div>
                </li>
          
                <li>
                    <a href="#sidebar3" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Parcel Managment </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar3">
                        <ul class="nav-second-level">
                            
                        <ul class="nav-second-level">
                           

                           
                           
                        </ul>
                    </div>
                </li>
           
               
              
                </li>
               
             
            
               
            </ul>
            @endif
           
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
