<?php
    if ($_POST) {
        $id_user= $_POST['id_user']; 
        $fullname= $_POST['fullname'];
        $birthday= $_POST['birthday'];
        $address= $_POST['address'];
        $gender= $_POST['gender'];
        $username= $_POST['username'];
        $password= $_POST['password'];

        if (empty ($fullname)) {
            echo "<script> alert ('fullname tidak boleh kosong'); location.href='profile.php' ; </script>";

        } elseif (empty ($username)) {
            echo "<script> alert ('username tidak boleh kosong'); location.href='profile.php' ; </script>";
        } else {
            include "koneksi.php";
            if (empty ($password)) {
                $update= mysqli_query ($koneksi, "UPDATE user SET fullname='".$fullname."', birthday='".$birthday."', gender='".$gender."', address='".$address."', username='".$username."' where id_user = '".$id_user."'") or die (mysqli_error($koneksi));
                if($update){
                    echo "<script> alert ('Sukses update user'); location.href='tampil_user.php' ; </script>";
                }else{
                    echo "<script> alert ('Gagal update user'); location.href='tampil_user.php' ; </script>";
                }
            }else {
                $update= mysqli_query ($koneksi, "UPDATE user SET fullname='".$fullname."',birthday='".$birthday."', gender= '".$gender."', address='".$address."', username='".$username."', password='" .md5 ($password)."' where id_user= '".$id_user."' ") or die (mysqli_error($koneksi));
                if ($update) {
                    echo "<script> alert ('Sukses update user'); location.href='tampil_user.php' ; </script>";  
                }else{
                    echo "<script> alert ('Gagal update user'); location.href='tampil_user.php' ; </script>";
                }
            }
        }
    }
?>