<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIA | Perubahan Modal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<style>
  .container {
    justify-content: center;
  }
</style>

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
                <a href="{{ url('logout') }}" class="nav-link">
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
          <div class="row">
            <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                <h2><b>Laporan Perubahan Modal</b></h2>
              </div>
            </div>
          </div>
        </center>

        <section class="container">
          <table class="table">
            <tr>
              <div class=" row">
                <div class="col-md-12">
                  <label>Periode</label>
                  <input type="month" class="form-control" name="bulan_tahun" placeholder="Bulan dan Tahun">
            </tr>
          </table>

          <table width="935" height="679" border="0" style="margin-left: 100px;">
            <tr>
              <td height="47" colspan="3" bgcolor="#C3C6FF">
                <div align="center"><strong>PT TRISAKTI PILAR PERSADA</strong></div>
              </td>
            </tr>
            <tr>
              <td height="60" colspan="3" bgcolor="#C3C6FF">
                <div align="center"><strong>LAPORAN PERUBAHAN MODAL</strong></div>
              </td>
            </tr>
            <tr>
              <td height="49">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="313" height="53">Modal Awal</td>
              <td width="308">&nbsp;</td>
              <td width="300">Rp200.000.000</td>
            </tr>
            <tr>
              <td height="61">Laba Bersih</td>
              <td>&nbsp;</td>
              <td>Rp57.000.000</td>
            </tr>
            <tr>
              <td height="37">&nbsp;</td>
              <td>&nbsp;</td>
              <td>Rp257.000.000</td>
            </tr>
            <tr>
              <td height="30">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="54"><strong>Prive</strong></td>
              <td>Rp10.000.000</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="42">Laba ditahan</td>
              <td>Rp20.000.000</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="57"><strong>Koreksi</strong></td>
              <td>Rp1.500.000</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="54" bgcolor="#C3C6FF">Total</td>
              <td bgcolor="#C3C6FF">&nbsp;</td>
              <td bgcolor="#C3C6FF">-Rp31.500.000</td>
            </tr>
            <tr>
              <td height="29">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="49" bgcolor="#C3C6FF">Modal Akhir</td>
              <td bgcolor="#C3C6FF">&nbsp;</td>
              <td bgcolor="#C3C6FF">Rp215.500.000</td>
            </tr>
          </table>
        </section>


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