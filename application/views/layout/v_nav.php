 <!-- Sidebar -->
 <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://localhost/asuma/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" ><?php echo $this->session->userdata('username')?></a> | <a href=<?php echo base_url('login/logout')?>	>Logout</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		   <li class="nav-item">
            <a href="<?= base_url('admin/dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
		  
		  <li class="nav-item">
            <a href="<?= base_url('admin/dashboard2')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard Prodi
                
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('set_angket/view_dosen')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Set Angket Mhs->Dosen
                
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('set_angket/view_biro')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Set Angket Mhs->Biro
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('report/prodi')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report Instrumen Prodi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('report/dosen')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report Instrumen Dosen</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="<?= base_url('report/biro')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report Instrumen Biro</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col-md-6 -->
         
          <!-- /.col-md-6 -->
    
