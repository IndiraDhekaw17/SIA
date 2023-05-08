<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIA | Data Akun</title>

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
          <a href="#" class="d-block"> PT. Trisakti Pilar Persada</a>
          </li>
        </div>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style=" background-color: #302E80; ">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/og.png" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light"><b>SI AKUNTANSI</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar" style=" background-color: #302E80;">


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
                                <a href="{{ url('logout') }}" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt" style="color: white;"></i>
                                    <p class="text-light">Logout</p>
                                </a>
</li>
          </nav>
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

          <div class="row">
            <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                <h2>Data Akun</h2>
              </div>
              <div class="pull-right">
                <a class="btn btn-success" href="{{ route('akuns.create') }}"> Tambah</a>
              </div>
            </div>
          </div>

          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif



          <table class="table table-bordered">
            <thead class="table-info">
              <tr>
                <th>No</th>
                <th>Kode Akun</th>
                <th>Nama Akun</th>
                <th>Saldo Awal</th>
                <th>Saldo Akhir</th>
                <th>Kategori</th>
                <th width="280px">Action</th>
              </tr>
            </thead>
            @foreach ($akuns as $akun)
            <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $akun->kode_akun }}</td>
              <td>{{ $akun->nama_akun }}</td>
              <td>{{ $akun->saldo_awal }}</td>
              <td>{{ $akun->saldo_akhir }}</td>
              <td>{{ $akun->kategori }}</td>
              <td>
                <form action="{{ route('akuns.destroy',$akun->id) }}" method="POST">

                  <a class="btn btn-primary" href="{{ route('akuns.edit',$akun->id) }}">Edit</a>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Hapus</button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"><b>Hapus Data</b></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah anda yakin ingin menghapus data?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-primary">Iya, Hapus</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </td>
            </tr>
            @endforeach
          </table>

          {!! $akuns->links() !!}
        </center>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <center>
    <footer class="main-footer">
      <strong>&copy; 2023 <a>Tim MSIB Sistem Informasi Akuntansi</a>.</strong> All rights reserved.
    </footer>
  </center>

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