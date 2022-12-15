<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah user</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="setting.css">
</head>
<body>
    <?php
        include "koneksi.php";
        $qry_get_user=mysqli_query($koneksi, "select * from user where id_user ='".$_GET['id_user']."'");
        $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <br></br>
    <div class="container">
        <div class="row content">   
            <div class="col-md-6 mb-3">

            </div>
            <div class="col-md-6">
            <style> @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap'); </style>
                <h3 class="mb-2 text-center">Ubah user</h3>
                <form action="update_user.php" method="POST">
                    <input type="hidden" name="id_user" value="<?=$dt_user ['id_user'] ?>">
                    <div class="row g-3 mb-2">
                        <!-- nama -->
                        <div class="col-md">
                            <label class="form-label">Fullname :</label>
                            <input type="text" name="fullname" value="<?=$dt_user ['fullname'] ?>" placeholder="Masukkan Nama" class="form-control form" required>
                        </div>
                        <!-- tanggal lahir -->
                        <div class="col-md">
                            <label class="form-label">Birth Date :</label>
                            <input type = "date" name="birthday" value="<?=$dt_user ['birthday'] ?>" class="form-control form" required>
                        </div>
                    </div>
                    <div class="row g-3 mb-2">
                        <!-- gender -->
                        <div class="col-md">
                            <label for="gender" class="form-label">Gender :</label>
                            <?php
                                $arr_gender=array('M'=>'Male','F'=>'Female','U'=>'Unknown');
                            ?>
                            <select name="gender" class="form-select form">
                                <option></option>
                                <?php foreach ($arr_gender as $key_gender => $val_gender):
                                    if($key_gender==$data_user['gender']){
                                        $selek="selected";
                                    } else {
                                        $selek="";
                                    }?>
                                    <option value="<?=$key_gender?>"<?=$selek?>><?=$val_gender?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <!-- address -->
                    <div class="mb-2">
                        <label class="form-label">address :</label>
                        <textarea name="address" class="form-control textarea" rows="4" placeholder="Input address" required><?=$dt_user['address']?></textarea>
                    </div>
                    <div class="row g-3 mb-4">
                        <!-- username -->
                        <div class="col-md">
                            <label class="form-label"> Username :</label>
                            <input type = "text" name = "username" value = "<?=$dt_user ['username'] ?>" placeholder="Masukkan Username" class = "form-control form" required>
                        </div>
                        <!-- password -->
                        <div class="col-md"> 
                            <label class="form-label">Password :</label>
                            <input type = "password" name ="password" value ="" placeholder="Masukkan Password" class = "form-control form">
                        </div>
                    </div>
                    <input type = "submit" name ="simpan" value ="Ubah User" class = "btn mb-2">
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>