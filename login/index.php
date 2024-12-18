<?php include '../app/config.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=APP_NAME;?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=APP_URL;?>/public/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition login-page bg-white">
<div class="login-box">
  <!-- /.login-logo -->
  <center>
    <video width="200px" autoplay loop muted>
      <source src="https://cdn-icons-mp4.flaticon.com/512/11933/11933440.mp4" type="video/mp4">
      Tu navegador no soporta el formato de video.
    </video>
  </center>

  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b><?=APP_NAME;?></b></a>
    </div>
      <?php 
        session_start();
        if(isset ($_SESSION ['mensaje'])){
          $mensaje = $_SESSION ['mensaje'];
          ?>
          <script>
            Swal.fire({
              position: "top-end",
               icon: "success",
              title: "<?= $mensaje; ?>",
              showConfirmButton: false,
              timer: 4500
            });
          </script>
        <?php
          unset($_SESSION ['mensaje']);
        }
      ?>

    <div class="card-body">
      <p class="login-box-msg"><b>Inicio De Sesión</b></p>

      <form action="controller_ingreso.php" method="POST"> <!-- action="controller_ingreso.php" method="POST" -->
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email"> <!-- name="email" -->
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password"> <!-- name="password" -->
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <hr>

        <div class="input-group mb-3">
          <button class="btn btn-primary btn-block">Ingresar</button>
        </div>

        <!-- <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div> -->
      </form>


      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=APP_URL;?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=APP_URL;?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=APP_URL;?>/public/dist/js/adminlte.min.js"></script>
</body>
</html>