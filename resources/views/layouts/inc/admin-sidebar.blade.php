<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="card" style="margin-top:-5px; margin-left:-11px; background-color:transparent; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; border:none;">
        <img style="width: 120%; margin-top:-16%; margin-left:-11%; margin-bottom:-17%;"
            src="{{asset('assets/images/CMS_ALL_NEW_BLACK.gif')}}" alt="logo" />
        <!-- <span 
            style="text-align:center; margin-bottom:3%; color:#7A7A7A; font-size:16px;">College
            Monitoring System</span> -->
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/form_list')}}">
                <i class="fa fa-list menu-icon"></i>
                <span class="menu-title">Fill-up Form List
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/report')}}">
                <i class="fa fa-bar-chart menu-icon"></i>
                <span class="menu-title">Report
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/register')}}">
                <i class="fa fa-users menu-icon"></i>
                <span class="menu-title">Admin List
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/404')}}">
                <i class="fa fa-fingerprint menu-icon"></i>
                <span class="menu-title">College Access
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/404')}}">
                <i class="fa fa-user menu-icon"></i>
                <span class="menu-title">Profile
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/404')}}">
                <i class="fa fa-key menu-icon"></i>
                <span class="menu-title">Reset Password
                </span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ url('admin/logout') }}">
                <i class="ti-power-off menu-icon fw-bold" style="color:red;"></i>  
                    <span class="menu-title">{{ __('Logout') }}
                </span>
            </a>
        </li>
    </ul>
</nav>
