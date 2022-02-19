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
                            <li>
                                <a href="{{ route('employee.list') }}">
                                   Employee List</a>
                            </li>
                            
                           
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebar2" data-bs-toggle="collapse">
                        <i class="fas fa-user"></i>
                        <span> Department </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar2">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('department.list') }}">
                             
                                   Department List</a>
                            </li>
                            
                           
                            
                           
                        </ul>
                    </div>
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
                                <a href="{{ route('pending.visitor.list') }}">
                                   Visitor List</a>
                            </li>

                           
                           
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
