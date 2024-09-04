<?php
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
    $getSiswa=$_GET["nisn"];
    $editSiswa="DELETE FROM siswa WHERE nisn='$getSiswa'";
    $resultSiswa=mysqli_query($con,$editSiswa);
    
    if($resultSiswa){
        echo"<script>alert('Data Siswa Berhasil Dihapus !')</script>";
        echo"<script type='text/javascript'>window.location='siswaView.php'</script>";
    }else{
        echo"<script>alert('Data Gagal Dihapus !')</script>";
        echo"<script type='text/javascript'>window.location='siswaView.php'</script>";
    }
?>