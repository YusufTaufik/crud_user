<?php

    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO user (fullname, username, password) VALUES ('{$fullname}', '{$username}', '".md5($password)."')");

    if ($input) {
        echo "<script>alert('BERHASIL');location.href='home.html';</script>";
    }
    else{
        echo "<script>alert('gagal');location.href='register.html';</script>";
    }
?>