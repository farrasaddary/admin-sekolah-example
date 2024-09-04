<?php
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
    include ('../../Administrasi_Sekolah/koneksi/session.php');
    //data guru
    $nik=$_GET['nik'];
    $querGuru="SELECT * FROM guru WHERE nik='$nik'";
    $resultGuru=mysqli_query($con,$querGuru);
    $dataGuru=mysqli_fetch_array($resultGuru);
?>
<h3>SELAMAT DATANG DI MENU GURU <?php echo $dataGuru[1]?></h3>
<hr/></br>
<h3>KELAS <?php echo $dataGuru[2]?></h3>
<!--Tampilan kalau bisa di jadiin satu halaman-->
