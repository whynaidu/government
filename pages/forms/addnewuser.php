<?php
include 'form(api).php';
if (mysqli_num_rows($result)>0){
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/government-master/index.html" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                ?????????????????????????????? 
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
     
          </li>

          <li class="nav-item">

            <a href="pages/forms/governmentform.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                ??????????????????
                <i class="right fas fa-angle-left"></i>
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="/pages/forms/governmentform.html" class="nav-link">
                  <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                  <p >
                    ?????????????????? ?????????
                    <!-- <i class="right fas fa-angle-left"></i> -->
                  </p>
                </a>

              </li>
              <li class="nav-item menu-open">
                <a href="/AdminLTE-3.1.0/pages/tables/data_copy.html" class="nav-link ">
                  <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                  <p >
                    ???????????????
                    <!-- <i class="right fas fa-angle-left"></i> -->
                  </p>
                </a>

              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                ???????????????
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>??????????????? ???</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>??????????????? ???</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>??????????????? ???</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>??????????????? ???</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>??????????????? ???</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>????????????????????? ???????????????</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                ???????????????????????????              
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">



              <li class="nav-item">
                <a href="/pages/forms/websiteuser.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    ??????????????????????????? ???????????????????????????
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="/pages/forms/websiteuser.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    ?????????????????? ?????? ???????????????????????????
                    <i class="right fas fa-angle-left"></i>
                  </p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>?????????????????? ?????????????????????</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">????????????????????? ???????????????</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form   action="form(api).php" method="post" >
                <div class="card-body">
                   <div class="container d-flex "  style="margin-left: -12px;">
                  <div class="form-group col-6">
                    <label for="examplename">?????????</label>
                    <input type="text" class="form-control" id="examplename" name="name" placeholder="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleemail">???-?????????</label>
                    <input type="email" class="form-control " id="exampleemail" name="email" placeholder="">
                  </div>
                
                  </div>
               
					    <div class="container d-flex "  style="margin-left: -12px;">
                 <div class="form-group col-6">
                    <label for="Examplepassword">?????????????????????</label>
                    <!-- <input type="Dropdown" class="form-control" id="Example?????? ?????????????????? ?????? ?????????" placeholder=""> -->
                    <input type="password" class="form-control " name="password" id="examplepassword" placeholder="">
                </select>
                  </div>
					
					<div class="form-group col-6">
                    <label for="Example23">??????????????????????????????????????? ??????????????????</label>
                    <!-- <input type="Textbox" class="form-control" id="Example?????????????????? ??????." placeholder=""> -->
                     <select id="Example23"  class="form-control">
                  <option>?????????????????????</option> 
                  <option>???????????????????????????</option> 
                </select>
                  </div>
                  </div>

                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="save" value="submit">Submit</button>
                </div>
              </form>
            </div>
      

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <p>Developed by <a href="https://tectignis.in">Tectignis It Solution</a></p>>
    </div>
    <strong>Copyright &copy;2022</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>