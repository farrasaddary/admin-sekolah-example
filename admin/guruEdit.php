<?php
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
    $getGuru=$_GET["nik"];
    $editGuru="SELECT * FROM guru WHERE nik='$getGuru'";
    $resultGuru=mysqli_query($con,$editGuru);
    $dataGuru=mysqli_fetch_array($resultGuru);
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
          <h3 class="card-title">Semua Data Kelas</h3>

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
                if (!isset($_POST['submit'])){
            ?>
            <form enctype="multipart/form-data" method ="post">
                <table widht = "100%" border="0">
                    <tr>
                        <td widht="27%">NIK</td>
                        <td widht="4%">:</td>
                        <td widht="69%"><input type="text" name="nik" size="30" value="<?php echo $dataGuru[0]?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td><input type="text" name="nama" size="30" value="<?php echo $dataGuru[1]?>"/></td>
                    </tr>
                    <tr>
                        <td>KODE KELAS</td>
                        <td>:</td>
                        <td>
                            <label>
                                <select name="kode_kelas">
                                    <option value="<?php echo $dataGuru[2]?>"><?php echo $dataGuru[2]?></option>
                                    <?php
                                        $queryKKls = mysqli_query($con, "SELECT * FROM kelas");
                                        while ($dataKKls=mysqli_fetch_array($queryKKls)){
                                    ?>
                                        <option value="<?php echo $dataKKls[1];?>"><?php echo $dataKKls[1];?></option>
                                    <?php } ?>
                                </select>
                            </label><br/>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input id="submit" name="submit" type="submit" value="UBAH"></td>
                    </tr>
                </table>
            </form>
            <?php
                }else{
                    $nik=$_POST["nik"];
                    $nama=$_POST["nama"];
                    $kodeKls=$_POST["kode_kelas"];
                    //input data
                    $updateGuru="UPDATE guru
                                SET nama_guru='$nama',kode_kelas='$kodeKls'
                                WHERE nik='$nik'";
                    $queryGuru=mysqli_query($con,$updateGuru);
                    if($queryGuru){
                        echo"<script>alert('Data Guru Berhasil Dirubah !')</script>";
                        echo"<script type='text/javascript'>window.location='guruView.php'</script>";
                    }else{
                        echo"<script>alert('Data Gagal Dirubah !')</script>";
                        echo"<script type='text/javascript'>window.location='guruView.php'</script>";
                    }
                }
            ?>
        <a href="guruView.php">&raquo;kembali</a>
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
