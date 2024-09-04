<?php
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
    $getGuru=$_GET["nik"];
    $editGuru="DELETE FROM guru WHERE nik='$getGuru'";
    $resultGuru=mysqli_query($con,$editGuru);
    
    if($resultGuru){
        echo"<script>alert('Data Guru Berhasil Dihapus !')</script>";
        echo"<script type='text/javascript'>window.location='guruView.php'</script>";
    }else{
        echo"<script>alert('Data Gagal Dihapus !')</script>";
        echo"<script type='text/javascript'>window.location='guruView.php'</script>";
    }
?>