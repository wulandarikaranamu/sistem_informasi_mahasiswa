<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style></style>
    <title>UNSULBAR</title>
  </head>
  <body>

    <div class="container col-md-10 mx-auto">
        <div class="card-header bg-dark text-white text-center mb-2 mx-auto">
            <h3>Universitas Sulawesi Barat</h3> <h5>Data Mahasiswa</h5>
        </div>

        <table class="table table-bordered border-dark">
    <thead>
        <tr class="table-dark tabel-bordered border-dark table-striped">
        <th scope="col">Nama</th>
        <th scope="col">Nim</th>
        <th scope="col">Angkatan</th>
        <th scope="col">Asal</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
          include './database/koneksi.php';

          $query = "SELECT * FROM mhs_tb";
          $result = mysqli_query($conn,$query);
          if (mysqli_num_rows($result) > 0) {
            while($data = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $data["nama"] ?></td>
                    <td><?php echo $data["nim"] ?></td>
                    <td><?php echo $data["angkatan"] ?></td>
                    <td><?php echo $data["asal"] ?></td>
                    <td>
                                
                                <button class="btn btn-secondary"><a href="update.php?nim=<?php echo $data["nim"] ?>" class="text-light">Edit</a></button>
                                <button class="btn btn-danger"><a href="delete.php?nim=<?php echo $data['nim'] ?>" class='text-light'>Delete</a></button>
                            </td>
                        </tr>
                    <?php }
                }else {?>
                    <tr>
                        <div class="container bg-primary text-light">
                            <td>Tidak ada Data</td>
                        </div>
                    </tr>
                <?php } ?>
        </table>
    </tbody>
    </table>
    <button class="btn-secondary"><a href="input-data.php" class="text-light">Kembali</a></button>
    <br>
    <br>
    <a href="index.php">beranda</a>
    <br>
    <a href="input-mhs.php">tambah mahasiswa</a>
    <br>
  
</div>


    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>