<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('asset/img/logo2.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>catalystswings</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">admin</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashbord  -->
          <li class="nav-item has-treeview">
            <a href="{{url('cli_user')}}" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                DashBoard Pages
                <!-- <i class="right fas fa-angle-left  menu-open"></i> -->
              </p>
            </a>
          </li>
          <!-- End Dashbord  -->
          <!-- Employee manage  -->
          
          <!--End Employee manage  -->
          <!-- manage User -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
              <p>
                Current tender
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('tender.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tender Apply form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Apply History</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End manage User -->
            <!-- Our programe -->
                
            <!--End Our programe -->
            <!-----Order ---->
            
            <!----Logout---->        
              <li class="nav-item">
                <a href="{{url('logout')}}" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
              </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
  </div>
    <!-- /.sidebar -->
</aside>