<?php
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
    include('../components/head.php');
?>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
<?php
    include('../components/navbar.php');
    include('../components/sidebar.php');
?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Input Data Kelas</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <?php
                if(!isset($_POST['submit'])){
            ?>
            <form enctype="multipart/form-data" method="post">
                <table widht="100%" border="0">
                    <tr>
                        <td widht="27%">NAMA KELAS</td>
                        <td widht="4%">:</td>
                        <td widht="69%"><input type="text" name="nama_kelas" size="30" placeholder="NAMA KELAS"/></td>
                    </tr>
                    <tr>
                        <td>KODE KELAS</td>
                        <td>:</td>
                        <td><input name="kode_kelas" type="text" id="kode_kelas" placeholder="KODE KELAS"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input id="submit" name="submit" type="submit" value="TAMBAH"></td>
                    </tr>
                </table>
            </form>
            <?php
                }else{
                    $namaKls=$_POST['nama_kelas'];
                    $kodeKls=$_POST['kode_kelas'];

                    //input kelas
                    $insertKelas = "INSERT INTO kelas (nama_kelas, kode_kelas) VALUE('$namaKls','$kodeKls')";
                    $queryKelas = mysqli_query($con, $insertKelas);
                    if ($queryKelas){
                        echo"<script>alert('Data Kelas Berhasil Disimpan !')</script>";
                        echo"<script type='text/javascript'>window.location='kelasView.php'</script>";
                    }else{
                        echo"<script>alert('Data Gagal Disimpan !')</script>";
                        echo"<script type='text/javascript'>window.location='kelasView.php'</script>";
                    }
                }
            ?>
            <a href="kelasView.php">&raquo;KEMBALI</a>
            </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include('../components/footer.php')
  ?>
</div>

<?php
    include('../components/script.php')
  ?>
</body>