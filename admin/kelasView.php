<?php
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
    $querykelas="SELECT * FROM kelas";
    $resultKelas = mysqli_query($con,$querykelas);
    $countKelas = mysqli_num_rows($resultKelas);
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
                <a href="kelasAdd.php"><input name="add" type="submit" class="buttonadm" value="TAMBAH DATA KELAS"/></a>
                    <br><br>
                    <table border="1">
                        <tr>
                            <th>NAMA KELAS</th>
                            <th>KODE KELAS</th>
                            <th>AKSI</th>
                        </tr>
                        <?php
                            if ($countKelas>0){
                                while($dataKls=mysqli_fetch_array($resultKelas)){
                                    #code...
                        ?>
                        <tr class="odd">
                            <td class="value"><?php echo "$dataKls[0]";?></td>
                            <td class="value"><?php echo "$dataKls[1]";?></td>
                            <td class="value">
                                <a href="kelasEdit.php?kode_kelas=<?php echo"$dataKls[1]";?>">Edit</a>
                                <a href="kelasDelete.php?kode_kelas=<?php echo"$dataKls[1]";?>">Hapus</a>
                            </td>
                        </tr>
                        <?php
                                }
                            }else{
                                echo"<tr>
                                        <td colspan='9' align='center' height='20'>
                                        <div>Belum Ada Data Kelas</div></td>
                                    </tr>";
                            }
                            echo"</table>";
                        ?>
                        <a href="guruView.php">&raquo;Report</a>
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


