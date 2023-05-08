<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIA | Jurnal Memorial</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="height: 60px">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" style="align-items: center">
      <!-- Navbar Search -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
      </li>
      <center>
      <li class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <a class="image">
          <img src="https://i.ibb.co/g6pM8Tt/tpp.png" class="img-circle" style="margin-top:20px" alt="User Image">
        </a>
        </center>
        <div class="info">
          <a href="#" class="d-block">PT. Trisakti Pilar Persada</a>
        </li>
      </div>
    </ul>
  </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style=" background-color: #302E80; ">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/og.png"  class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light"><b>SI AKUNTANSI</b></span>
    </a>

     <!-- Sidebar -->
     <div class="sidebar">
      <!-- Sidebar user (optional) -->
      
<!-- Sidebar Menu -->
<h5>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" style="color: white;"></i>
              <p class="text-light">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill" style="color: white;"></i>
              <p class="text-light">
                Pencatatan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/akuns/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Akun</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/kliens/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Data Klien</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-open" style="color: white;"></i>
              <p class="text-light">
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/penerimaans/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Penerimaan Kas atau Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/pengeluarans/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Pengeluaran Kas atau Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/memorials/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Jurnal Memorial</p>
                </a>
                <li class="nav-item">
                <a href="{{ url('/penutups/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Jurnal Penutup</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('/bukubesar/index') }}" class="nav-link">
              <i class="nav-icon fas fa-book" style="color: white;"></i>
              <p class="text-light">
                Buku Besar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bookmark" style="color: white;"></i>
              <p class="text-light">
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/keuangans/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Posisi Keuangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/labarugis/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Laba Rugi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/perubahanmodal/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Perubahan Modal</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{ url('/aruskass/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Arus Kas</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link" >
                <i class="nav-icon fas fa-sign-out-alt" style="color: white;"></i> 
                <p class="text-light">Logout</p>
            </a>
            </li>
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
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->

      <center>
        <div class="card card-primary">
            <div class="card-header">
              <h1 class="card-title"><b>TAMBAH DATA</b></h1>
            </div>

            <!-- /.card-header -->
            <!-- form start -->

            @if ($errors->any())
                     <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
              <form action="{{ route('memorials.store') }}" method="POST">
           @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Akun</label>
                  <input type="integer" class="form-control" name="kode_akun" placeholder="Kode Akun">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Debit</label>
                  <input type="decimal" class="form-control" name="debit" placeholder="Debit">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kredit</label>
                  <input type="decimal" class="form-control" name="kredit" placeholder="Kredit">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Akun</label>
                  <input type="text" class="form-control" name="nama_akun" placeholder="Nama Akun">
                </div>

                
              <!-- /.card-body -->

              <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"><b>Tambah Data</b></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah anda yakin ingin menambah data?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                          <button type="submit" class="btn btn-primary">Iya, Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </form>
          </div>

            
    </center>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>&copy; 2023 <a>Tim MSIB Sistem Informasi Akuntansi</a>.</strong> All rights reserved.
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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>