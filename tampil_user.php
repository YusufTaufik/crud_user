<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil User</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="#">Logo</a>
            <div class="nav-links">
                <ul>
                    <li><a href="tampil_user.php">User</a></li>
                    <li><a href="logout.php" class="btn">Logout</a></li>
                </ul>
            </div>
        </nav>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
               <h3 class="text-center mt-2 mb-3">Data User<h3> 
            </div>
            <div class="card-body">
                <table class="table table-bordered fs-5 fw-light text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Birth Date</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Username</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "koneksi.php";
                            
                                //jika tidak ada keyword pencarian
                                $query_user= mysqli_query($koneksi,"select * from user");

                            while($data_user= mysqli_fetch_array($query_user)) { ?>
                                <tr>
                                    <td><?php echo $data_user["id_user"]; ?></td>
                                    <td><?php echo $data_user["fullname"]; ?></td>
                                    <td><?php echo $data_user["birthday"]; ?></td>
                                    <td><?php echo $data_user["gender"]; ?></td>
                                    <td><?php echo $data_user["address"]; ?></td>
                                    <td><?php echo $data_user["username"]; ?></td>
                                    <td> <a href="profile.php?id_user=<?=$data_user['id_user']?>" class="btn btn-success">Ubah</a> | <a href="hapus_user.php?id_user=<?=$data_user['id_user']?>" onclick="return confirm ('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>