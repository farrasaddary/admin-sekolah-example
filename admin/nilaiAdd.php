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
                <form enctype="multipart/form-data" method="post">
                    <table widht="100%" border="0">
                        <tr>
                        <td height="50">NAMA SISWA</td>
                            <td>:</td>
                            <td>
                                <label>
                                    <select name="nisnsiswa">
                                        <option value="">-=PILIH=-</option>
                                        <?php
                                            $query ="SELECT nisn,nama_siswa FROM siswa";
                                            $result = mysqli_query($con,$query);
                                            while ($data = mysqli_fetch_array($result)){
                                                echo "<option value='$data[0]'>$data[1]</option>";
                                            }
                                        ?>
                                    <select>
                                </label><br/>
                            </td>
                        </tr>
                        <tr>
                            <td>SOSIAL EMOSIONAL</td>
                            <td>:</td>
                            <td>
                                <label>
                                    <select name="sos_emo">
                                        <option value="">-=PILIH=-</option>
                                        <option value="bb">BELUM BERKEMBANG</option>
                                        <option value="mb">MULAI BERKEMBANG</option>
                                        <option value="bsh">BERKEMBANG SESUAI HARAPAN</option>
                                        <option value="bsb">BERKEMBANG SANGAT BAIK</option>
                                    <select>
                                </label><br/>
                            </td>            
                        </tr>
                        <tr>
                            <td>SENI</td>
                            <td>:</td>
                            <td>
                                <label>
                                    <select name="seni">
                                        <option value="">-=PILIH=-</option>
                                        <option value="bb">BELUM BERKEMBANG</option>
                                        <option value="mb">MULAI BERKEMBANG</option>
                                        <option value="bsh">BERKEMBANG SESUAI HARAPAN</option>
                                        <option value="bsb">BERKEMBANG SANGAT BAIK</option>
                                    <select>
                                </label><br/>
                            </td>            
                        </tr>
                        <tr>
                            <td>AGAMA & MORAL</td>
                            <td>:</td>
                            <td>
                                <label>
                                    <select name="agama">
                                        <option value="">-=PILIH=-</option>
                                        <option value="bb">BELUM BERKEMBANG</option>
                                        <option value="mb">MULAI BERKEMBANG</option>
                                        <option value="bsh">BERKEMBANG SESUAI HARAPAN</option>
                                        <option value="bsb">BERKEMBANG SANGAT BAIK</option>
                                    <select>
                                </label><br/>
                            </td>            
                        </tr>
                        <tr>
                            <td>FISIK MOTORIK</td>
                            <td>:</td>
                            <td>
                                <label>
                                    <select name="fis_moto">
                                        <option value="">-=PILIH=-</option>
                                        <option value="bb">BELUM BERKEMBANG</option>
                                        <option value="mb">MULAI BERKEMBANG</option>
                                        <option value="bsh">BERKEMBANG SESUAI HARAPAN</option>
                                        <option value="bsb">BERKEMBANG SANGAT BAIK</option>
                                    <select>
                                </label><br/>
                            </td>            
                        </tr>
                        <tr>
                            <td>KOGNITIF</td>
                            <td>:</td>
                            <td>
                                <label>
                                    <select name="kognitif">
                                        <option value="">-=PILIH=-</option>
                                        <option value="bb">BELUM BERKEMBANG</option>
                                        <option value="mb">MULAI BERKEMBANG</option>
                                        <option value="bsh">BERKEMBANG SESUAI HARAPAN</option>
                                        <option value="bsb">BERKEMBANG SANGAT BAIK</option>
                                    <select>
                                </label><br/>
                            </td>            
                        </tr>
                        <tr>
                            <td>BAHASA</td>
                            <td>:</td>
                            <td>
                                <label>
                                    <select name="bahasa">
                                        <option value="">-=PILIH=-</option>
                                        <option value="bb">BELUM BERKEMBANG</option>
                                        <option value="mb">MULAI BERKEMBANG</option>
                                        <option value="bsh">BERKEMBANG SESUAI HARAPAN</option>
                                        <option value="bsb">BERKEMBANG SANGAT BAIK</option>
                                    <select>
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
                            <td><input id="submit" name="submit" type="submit" value="TAMBAH"></td>
                        </tr>
                    </table>
                </form>
                <?php
                    }else{
                        $siswa=$_POST['nisnsiswa'];
                        $sosi=$_POST['sos_emo'];
                        $seni=$_POST['seni'];
                        $agama=$_POST['agama'];
                        $fisikm=$_POST['fis_moto'];
                        $kogni=$_POST['kognitif'];
                        $bahasa=$_POST['bahasa'];
                        //input guru
                        /*$queryGuru="SELECT siswa.nisn,siswa.nama,siswa.kode_kelas,guru.nik,guru.nama_guru,guru.kode_kelas 
                                    FROM siswa JOIN nilai ON nilai.nisn = siswa.nisn JOIN guru ON guru.nik = nilai.nik
                                    WHERE siswa.kode_kelas = guru.kode_kelas";
                        */
                        $querySiswa="SELECT * FROM siswa WHERE nisn=$siswa";
                        $resultSiswa=mysqli_query($con,$querySiswa);
                        $dataSiswa=mysqli_fetch_array($resultSiswa);
                        echo "$dataSiswa[2]";
                        
                        $queryGuru="SELECT * FROM guru WHERE kode_kelas=$dataSiswa[2]";
                        $resultGuru=mysqli_query($con,$queryGuru);
                        $dataGuru=mysqli_fetch_array($resultGuru);
                        
                        $guru=$dataGuru[0];
                        
                        //input data nilai
                        $insertNilai ="INSERT INTO nilai VALUE('$siswa','$guru','$sosi','$seni','$agama','$fisikm','$kogni','$bahasa')";
                        $queryNilai = mysqli_query($con,$insertNilai);
                        if ($queryNilai){
                            echo "<script>alert('Nilai Mahasiswa Berhasi Disimpan !')</script>";
                            echo "<script type='text/javascript'>window.location = 'nilaiView.php'</script>";
                        }else{
                            echo "<script>alert('Nilai Mahasiswa GAGAL Disimpan !')</script>";
                            echo "<script type='text/javascript'>window.location = 'nilaiView.php'</script>";
                        }
                    }
            ?><a href="nilaiView.php">&raquo;KEMBALI</a>
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