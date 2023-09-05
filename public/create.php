<?php
include_once '../Model.php';
$model = new Model();
$insert = $model->insert();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Tambah Data | Mahasiswa</title>
  <style scoped>
    .form-group {
      max-width: 85%;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="card-title text-center mb-4">Tambah Data Mahasiswa</h4>
            <form action="" method="post">
              <div class="form-group mx-auto mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
              </div>
              <div class="form-group mx-auto mb-3">
                <label>No. Telepon</label>
                <input type="number" name="telepon" class="form-control">
              </div>
              <div class="form-group mx-auto mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="form-group mx-auto mb-4">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" rows="3"></textarea>
              </div>
              <div class="form-group mx-auto mt-5 mb-3">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a href="./index.php" class="btn btn-secondary ms-3">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>