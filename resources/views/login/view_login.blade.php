
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/')}}plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('/')}}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/')}}dist/css/adminlte.min.css">
</head>
<body>
<!-- <body class="hold-transition login-page"> -->
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          
        
        <div class="row g-0">
        <div class="col-lg-6 d-flex align-items-center" style="background-image:url(https://i.ibb.co/znNyZc7/sia.png);opacity:1;">
        <!-- <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)"> -->
            
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h1 class="mb-4 text-center text-bold shadow-lg"><b>Sistem Informasi Akuntansi</b></h1>
                <h3 class="mb-4"><b>PT. Trisakti Pilar Persada</b></h3>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://i.ibb.co/g6pM8Tt/tpp.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Sistem Informasi Akuntansi</h4>
                </div>
                <p>Silahkan Login Terlebih Dahulu</p>
                <form action="{{ url('login/proses') }}" method="post">
                  @csrf
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Username</label>  
                  <input autofocus type="text" class="form-control
                  @error('username')
                       is-invalid
                    @enderror
                      "placeholder="Username" name="username"> 
        
                  </div>

                   @error('username')
                    <div class="invalid-feedback">
                    {{ $message }}
                   </div>    
                    @enderror

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>  
                  <input type="password" class="form-control
                  @error('password')
                      is-invalid
                   @enderror

                  "placeholder="Password" name="password"> 
                    
                  </div>
                  @error('password')
                    <div class="invalid-feedback">
                   {{ $message }}
                   </div>    
                  @enderror
                  <div class="row">
                    <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
              </div>
                  

                </form>

              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- jQuery -->
<script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
</body>
</html>
