<?php
    //session_start();
    include ('../../Administrasi_Sekolah/koneksi/coneksi.php');
?>
<form action="" method="post">
    <table align="center">
        <tr>    
            <th colspan="2" height="40">LOGIN ADMIN</th>
        </tr>
        <tr>    
            <td widht="100">Username</td>
            <td><input type="text" name="username"></td>
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
        $user=$_POST['username'];
        $pas=$_POST['password'];
        $sql=mysqli_query($con,"SELECT * FROM admin WHERE username='$user'
                            AND password='$pas'");
        $cek=mysqli_num_rows($sql);
        if($cek>0){
            $_SESSION['username'] = $_POST['username'];
            //echo "<meta http-equiv=refresh content=0;URL='dosenView.php'>";
            echo"<script type='text/javascript'>window.location='../admin/adminView.php'</script>";
            //echo "<a href='D:/Bahasa/xampp/htdocs/nilaionline/admin/dosenView.php'></a>";
        }else{
            echo "<p align=center><b>Username dan Password salah !</b></p>";
            echo "<meta http-equiv=refresh content=2;URL='loginAdmin.php'>";
            //echo "salah cok";
        }
    }
?>
<a href="loginGuru.php">&raquo;LOGIN KE GURU</a>