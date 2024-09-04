<?php
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
    $getKode=$_GET["kode_kelas"];
    $querykelas="DELETE FROM kelas WHERE kode_kelas='$getKode'";
    $resultKelas = mysqli_query($con,$querykelas);
    //$countKelas = mysqli_num_rows($resultKelas);
    if($resultMk){
        echo"<script>alert('Data Kelas Berhasil Dihapus !')</script>";
        echo"<script type='text/javascript'>window.location='kelasView.php'</script>";
    }else{
        echo"<script>alert('Data Gagal Dihapus !')</script>";
        echo"<script type='text/javascript'>window.location='kelasView.php'</script>";
    }
?>