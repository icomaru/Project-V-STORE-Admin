<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" href="assets/img/logo/vlogo.png" type="image/x-icon">

  <title>V Store - Admin</title>
  <!-- bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- font -->
  <link rel="stylesheet" href="assets/font/css/font-awesome.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="index3.html" class="nav-link h4">Selamat Datang, Admin</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <!-- Right navbar links -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <!-- Sidebar -->
      <div class="sidebar">
        <nav>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="index.php" class="nav-link active">
                <i class="fa fa-home" aria-hidden="true"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href="kategori.php" class="nav-link">
                <i class="fa fa-gamepad"></i>
                <p>
                  Game

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="barang.php" class="nav-link">
                <i class="fa fa-money"></i>
                <p>
                  TopUp
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-sign-out"></i>
                <p>
                  Logout

                </p>
              </a>
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
              <h5 class="m-0 text-dark">Dashboard</h5>
            </div><!-- /.col -->
          </div><!-- /.row -->

        </div><!-- /.container-fluid -->
      </div>



      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-12">

              <div class="card">

                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="cat_table" class="table table-dark table-striped table-hover table-bordered border-primary">
                    <thead>
                      <tr class="text-center">
                        <th>ID</th>
                        <th>icon </th>
                        <th>judul</th>
                        <th>developer</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td>1</td>
                        <td><img src="assets/img/valorant.jpg" width="50" height="50"></td>
                        <td>valorant</td>
                        <td>riot</td>

                      </tr>
                      <tr class="text-center">
                        <td>2</td>
                        <td><img src="assets/img/pubgm.jpg" width="50" height="50"></td>
                        <td>pubg</td>
                        <td>tencent</td>

                      </tr>
                      <tr class="text-center">
                        <td>3</td>
                        <td><img src="assets/img/apexx.jpg" width="50" height="50"></td>
                        <td>apex</td>
                        <td>Respawn Entertaimen</td>

                      </tr>
                      <tr class="text-center">
                        <td>4</td>
                        <td><img src="assets/img/aov-m.jpg" width="50" height="50"></td>
                        <td>aov</td>
                        <td>timi, tencent</td>

                      </tr>
                      <tr class="text-center">
                        <td>5</td>
                        <td><img src="assets/img/mobile-legends.jpg" width="50" height="50"></td>
                        <td>mobile legends</td>
                        <td>moonton</td>

                      </tr>
                      <tr class="text-center">
                        <td>6</td>
                        <td><img src="assets/img/free-fire.png" width="50" height="50"></td>
                        <td>free fire</td>
                        <td>garena</td>

                      </tr>
                      <tr class="text-center">
                        <td>7</td>
                        <td><img src="assets/img/genshin-impact.jpg" width="50" height="50"></td>
                        <td>genshin impact</td>
                        <td>mihoyo</td>

                      </tr>
                      <tr class="text-center">
                        <td>8</td>
                        <td><img src="assets/img/codm.jpg" width="50" height="50"></td>
                        <td>CODM</td>
                        <td>Activision</td>

                      </tr>


                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

          </div>
          <!-- /.row -->
        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->


      <footer class="main-footer">
        <p>made by <a href="https://instagram.com/icomarru?igshid=Zjc2ZTc4Nzk=">icomarru</a>

          <br>Born For Gaming</a>
    </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="assets/plugins/moment/moment.min.js"></script>
  <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/dist/js/demo.js"></script>
</body>

</html>