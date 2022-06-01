<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Universitas Sulawesi Barat</title>
  </head>
  <body>
    <center><h1>Data Mahasiswa</h1></center>
    <table>
      <div class="row justify-content-center">
        <div class="col-md-4">
        <form action="./database/proses-simpan.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input name = "nama" type="text" class="form-control" id="name" aria-describedby="name">
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">Nim</label>
    <input name = "nim" type="text" class="form-control" id="nim">
  </div>
   <div class="mb-3">
    <label for="angkatan" class="form-label">Angkatan</label>
    <input name = "angkatan" type="number" class="form-control" id="angkatan" aria-describedby="angkatan">
  </div>
   <div class="mb-3">
    <label for="asal" class="form-label">Asal</label>
    <input name = "asal" type="text" class="form-control" id="asal" aria-describedby="asal">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
    </table>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>