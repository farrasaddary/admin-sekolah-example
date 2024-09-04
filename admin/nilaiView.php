<?php
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
    $queryNilai="SELECT * FROM nilai";
    $resultNilai=mysqli_query($con,$queryNilai);
    $countNilai=mysqli_num_rows($resultNilai);
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
                <a href="nilaiAdd.php"><input name="add" type="submit" class="buttonadm" value="TAMBAH DATA NILAI"/></a>
                <br>        
                <br>
                <table border="1">
                    <!--TABEL MASTER NILAI-->
                    <tr>
                        <th>NISN</th>
                        <th>NIK</th>
                        <th>SOSIAL EMOSIONAL</th>
                        <th>SENI</th>
                        <th>AGAMA & MORAL</th>
                        <th>FISIK MOTORIK</th>
                        <th>KOGNITIF</th>
                        <th>BAHASA</th>
                        <th>AKSI</th>
                    </tr>
                    <?php
                        if($countNilai>0){
                            while($dataNilai=mysqli_fetch_array($resultNilai)){
                    ?>
                    <tr class="odd">
                        <td class="value"><?php echo"$dataNilai[0]";?></td>
                        <td class="value"><?php echo"$dataNilai[1]";?></td>
                        <td class="value"><?php echo"$dataNilai[2]";?></td>
                        <td class="value"><?php echo"$dataNilai[3]";?></td>
                        <td class="value"><?php echo"$dataNilai[4]";?></td>
                        <td class="value"><?php echo"$dataNilai[5]";?></td>
                        <td class="value"><?php echo"$dataNilai[6]";?></td>
                        <td class="value"><?php echo"$dataNilai[7]";?></td>
                        <td class="value">
                            <a href="nilaiEdit.php?nisn=<?php echo"$dataNilai[0]";?>">Edit</a> |
                            <a href="nilaiDelete.php?nisn=<?php echo"$dataNilai[0]";?>">Hapus</a>
                        </td>
                    </tr>
                    <?php
                            }
                        }else{
                            echo"<tr>
                                    <td colspan='9' align='center' height='20'>
                                    <div>Belum Ada Data Nilai</div></td>
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