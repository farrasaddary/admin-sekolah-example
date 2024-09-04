<?php
    session_start();
    if(!isset($_SESSION['nik'])){
        header("../../Administrasi_Sekolah/main/loginGuru.php");
    }
?>