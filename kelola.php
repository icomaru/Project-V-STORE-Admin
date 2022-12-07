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

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo/vlogo.png" alt="" width="50" height="45" class="d-inline-block align-text-top ml-4">
        KELOLA
      </a>
    </div>
  </nav>
  <div class="container">
    <form method="POST" action="proses.php">
      <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label">judul game</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="judul">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="developer" class="col-sm-2 col-form-label">developer</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="developer">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="icon" class="col-sm-2 col-form-label">icon</label>
        <div class="col-sm-10">
          <input class="form-control form-control-lg" id="icon" type="file">
        </div>
      </div>

      <div class="mb-3 row mt-5">
        <div class="col-sm-10">
          <?php
          if (isset($_GET['ubah'])) {
          ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
              simpan
            </button>
          <?php
          } else {
          ?>
            <button type="submit" name="aksi" value="add" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
              Tambahkan
            </button>
          <?php
          }
          ?>
          <a href="index.php" class="btn btn-danger">
            <i class="fa fa-reply" aria-hidden="true"></i>
            kembali
          </a>
        </div>
      </div>
    </form>
  </div>
  <!-- SEARCH FORM -->
  <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <footer class="main-footer">
    <p>made by <a href="https://instagram.com/icomarru?igshid=Zjc2ZTc4Nzk=">icomarru</a>

      <br>Born For Gaming</a>
      </div>
  </footer>
</body>

</html>