  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p>{{Auth::user()->name}}</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
          </div>

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li class="active">
                  <a href="">
                      <i class="fa fa-home"></i> <span>Home</span>
                  </a>
              </li>

              <li>
                  <a href="">
                      <i class="fa fa-file"></i>
                      <span>Approval Permintaan Data</span>
                  </a>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-file"></i>
                      <span>Data Master</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href=""><i class="fa fa-circle-o"></i>Group</a></li>
                      <li><a href=""><i class="fa fa-circle-o"></i>Departement</a></li>
                      <li><a href=""><i class="fa fa-circle-o"></i>Jabatan</a></li>
                      <li><a href=""><i class="fa fa-circle-o"></i>Kategori Permintaan</a></li>
                  </ul>

              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-users"></i>
                      <span>Manajement User</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href=""><i class="fa fa-circle-o"></i>User</a></li>
                      <li><a href=""><i class="fa fa-circle-o"></i>Role</a></li>
                  </ul>

              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>