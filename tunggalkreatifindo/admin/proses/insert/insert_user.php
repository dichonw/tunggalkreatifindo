<?php
include "koneksi/koneksi.php";

if(isset($_POST['kirim'])){
    $nm = $_POST ['nama'];
    $email = $_POST ['email'];
    $pass = md5("Padasd0890".md5($_POST ['password']));
    $level = $_POST ['level'];

    $query = "INSERT INTO tabel_user values(NULL,'$nm','$email','$pass', '$level', 'active', NOW())";
    $hasil=mysqli_query($koneksi,$query);
    echo "<script type='text/javascript'>
    window.location.replace('?menu=list_user')
    </script>";
}
?>