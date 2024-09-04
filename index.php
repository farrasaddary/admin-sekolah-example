<?php
    //session_start();
    include ('../Administrasi_Sekolah/koneksi/coneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrasi Sekolah | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
    <?php
        if(isset($_POST['proseslog'])){
            $user=$_POST['username'];
            $pas=$_POST['password'];
            $sql=mysqli_query($con,"SELECT * FROM admin WHERE username='$user'
                                AND password='$pas'");
            $cek=mysqli_num_rows($sql);
            if($cek>0){
                $_SESSION['username'] = $_POST['username'];
                //echo "<meta http-equiv=refresh content=0;URL='dosenView.php'>";
                echo"<script type='text/javascript'>window.location='admin/adminView.php'</script>";
                //echo "<a href='D:/Bahasa/xampp/htdocs/nilaionline/admin/dosenView.php'></a>";
            }else{
                echo "<div class='alert alert-danger alert-dismissible mt-4'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h5><i class='icon fas fa-ban'></i> Error!</h5>
                Username dan Password salah !
                </div>";
                echo "<meta http-equiv=refresh content=2;URL='index.php'>";
                //echo "salah cok";
            }
        }
    ?>

  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Administrasi Sekolah</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login Admin</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12 mb-2">
            <input type="submit" class="btn btn-primary btn-block" value="Log In" name="proseslog">
          </div>
          <!-- /.col -->
        </div>
      </form>
      
      <p class="mb-1">
        <a href="loginGuru.php">Login ke guru</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

