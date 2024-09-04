<?php
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
    //$con=mysqli_connect("localhost","root","","adminsekolah1.0");
    $queryGuru = "SELECT * FROM guru";
    $resultGuru = mysqli_query($con, $queryGuru);
    $countGuru = mysqli_num_rows($resultGuru);
    include('../components/head.php');
?>
    
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
    include('../components/navbar.php');
    include('../components/sidebar.php');
?>
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
          <h3 class="card-title">Semua Data Guru</h3>

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
          <!--Tampilan kalau bisa di jadiin satu halaman-->
            <a href="guruAdd.php"><input name="add" type="submit" class="buttonadm" value="TAMBAH DATA GURU"/></a>
            <br><br>
            <table border="1">
                <!--TABEL MASTER GURU-->
                <tr>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>KODE KELAS</th>
                    <th>AKSI</th>
                </tr>
                <?php
                    if($countGuru>0){
                        while($dataGuru=mysqli_fetch_array($resultGuru)){
                            #code..
                ?>
                <tr class="odd">
                    <td class="value"><?php echo"$dataGuru[0]";?></td>
                    <td class="value"><?php echo"$dataGuru[1]";?></td>
                    <td class="value"><?php echo"$dataGuru[2]";?></td>
                    <td class="value">
                        <a href="guruEdit.php?nik=<?php echo"$dataGuru[0]";?>">Edit</a>|
                        <a href="guruDelete.php?nik=<?php echo"$dataGuru[0]";?>">Hapus</a>
                    </td>
                </tr>
                <?php
                        }
                    }else{
                        echo "<tr>
                                <td colspan='9' align='center' height='20'>
                                <div>Belum Ada Data Guru</div></td>
                            </tr>";
                    }
                    echo "</table>";
                    ?>
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