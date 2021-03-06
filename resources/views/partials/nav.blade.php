<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
     <!-- <span class="logo-mini"><b>A</b>LT</span>-->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><h3>E- <span class="tc">Covid-19</span>Support</h3><b></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!--<li class="dropdown messages-menu">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                
                <ul class="menu">
                  <li><
                    <a href="#">
                      <div class="pull-left">
                       
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  
                </ul>
                
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>-->
          
         <!-- <li class="dropdown notifications-menu">
           
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
               
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>-->
          <!-- Tasks Menu -->
          <!--<li class="dropdown tasks-menu">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                
                <ul class="menu">
                  <li>
                    <a href="#">
                      
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      
                      <div class="progress xs">
                        
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>-->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
               <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

                <p>
                  {{ Auth::user()->name }} logged in as {{ Auth::user()->role }}
                  <small>Member since {{ Auth::user()->created_at->diffforHumans() }}</small>
                </p>
              </li>
              <!-- Menu Body -->
             <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li>-->
                  <!-- /.row -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                         </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>

  <!-- side bar-->

   <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
          <p>.</p>
        </div>
        <div class="pull-left info">
          <p><b>{{ Auth::user()->name }}</b></p>
          <!-- Status -->
          <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
        </div>
      </div>

      <!-- search form (Optional) -->
     <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>-->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->

        {{-- Dashboard start --}}

        @if( Auth::user()->role == "doctor")
       <li><a href="{{ route('doctor')}}"><i class="fa fa-window-maximize"></i> <span>Dashboad</span></a></li>
        @endif

        @if( Auth::user()->role == "patient")
       <li><a href="{{ route('patient')}}"><i class="fa fa-window-maximize"></i> <span>Dashboad</span></a></li>
       @endif

       @if( Auth::user()->role == "plasmadonor")
       <li><a href="{{ route('plasmadonor')}}"><i class="fa fa-window-maximize"></i> <span>Dashboad</span></a></li>
       @endif

       @if( Auth::user()->role == "admin")
       <li><a href="{{ route('admin')}}"><i class="fa fa-window-maximize"></i> <span>Dashboad</span></a></li>
       @endif

       {{-- dashboard end --}}

       @if( Auth::user()->role == "admin")
       <li><a href="{{ route('covid.index')}}"><i class="fa fa-plus-square"></i> <span>Covid Update</span></a></li>
        @endif


        @if( Auth::user()->role == "admin")
       <li><a href="{{ route('verify_doctor')}}"><i class="fa fa-plus-square"></i> <span>Verify Doctor</span></a></li>
        @endif

       @if( Auth::user()->role == "doctor" && Auth::user()->is_doctor == "1")
       <li><a href="{{ route('doctor_activity')}}"><i class="fa fa-list-alt"></i> <span>My Activities</span></a></li>
       @endif

       @if( Auth::user()->role == "patient")
       <li><a href="{{ route('patient_activity')}}"><i class="fa fa-list-alt"></i> <span>My Activities</span></a></li>
       @endif

       @if( Auth::user()->role == "patient" || Auth::user()->role == "doctor")
        <li><a href="{{ url('/searchboard') }}"><i class="fa fa-search-minus"></i> <span>Search from symptoms</span></a></li>
        @endif
        
        @if( Auth::user()->role == "patient" || Auth::user()->role == "plasmadonor" || Auth::user()->role == "admin")
        <li><a href="{{ route('plasmaposts.index')}}"><i class="fa fa-clipboard"></i> <span>Plasma Post</span></a></li>
        @endif

        <li><a href="{{ route('profiles.index')}}"><i class="fa fa-user-md"></i> <span>Doctor List</span></a></li>
        
        <li><a href="{{ route('countries.index')}}"><i class="fa fa-globe"></i> <span>Country List</span></a></li>
        
        <li><a href="{{ route('posts.index')}}"><i class="fa fa-stethoscope"></i> <span>Recovery Instructions</span></a></li>

        @if( Auth::user()->role == "patient" || Auth::user()->role == "plasmadonor" || Auth::user()->role == "admin")
        <li><a href="{{ route('plasmaprofiles.index')}}"><i class="fa fa-users"></i> <span>Plasma Donor List</span></a></li>
        @endif

        @if( Auth::user()->role == "patient")
        <li><a href="{{ route('plasmarequests.index')}}"><i class="fa fa-share-square-o"></i> <span>Send Request List</span></a></li>
        @endif

        @if( Auth::user()->role == "plasmadonor")
        <li><a href="{{ route('receive')}}"><i class="fa fa-check-square-o"></i> <span>Plasma Request List</span></a></li>
        @endif
       <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Sickness Type</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>