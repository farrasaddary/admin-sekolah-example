<?php
    //Code INI ga jadi di pake Pakai yang LOGIN ADMIN saja
    //session_start();
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
?>
<form action="" method="post">
    <table align="center">
        <tr>    
            <th colspan="2" height="40">LOGIN GURU</th>
        </tr>
        <tr>    
            <td widht="100">NIK</td>
            <td><input type="text" name="nik"></td>
        </tr>
        <tr>    
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>    
            <td></td>
            <td><input type="submit" value="Login" name="proseslog"></td>
        </tr>
    </table>
</from>
<?php
    if(isset($_POST['proseslog'])){
        $nik=$_POST['nik'];
        $sql=mysqli_query($con,"SELECT * FROM guru WHERE nik='$nik'
                            AND password='$_POST[password]'");
        $cek=mysqli_num_rows($sql);
        echo "cok";
        if($cek>0){
            $_SESSION['username'] = $_POST['username'];
            //echo "<meta http-equiv=refresh content=0;URL='dosenView.php'>";
            echo"<script type='text/javascript'>window.location='../guru/guruMain.php?=$nik'</script>";
            //echo "<a href='D:/Bahasa/xampp/htdocs/nilaionline/admin/dosenView.php'></a>";
        }else{
            echo "<p align=center><b>Username dan Password salah !</b></p>";
            echo "<meta http-equiv=refresh content=2;URL='loginGuru.php'>";
        }
    }
?>
<a href="loginAdmin.php">&raquo;LOGIN KE ADMIN</a>