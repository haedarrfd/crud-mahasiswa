<?php
include_once '../Model.php';
$model = new Model();
$id = $_REQUEST['id'];
$row = $model->getSingleData($id);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Single Data | Mahasiswa</title>
</head>

<body>
  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <?php if (!empty($row)) : ?>
              <h4 class="card-title text-center mb-5">Data Mahasiswa | <?= $row['nama']; ?></h4>
              <h5 class="mb-3">Nama : <?= $row['nama']; ?></h5>
              <h5 class="mb-3">Telepon : <?= $row['telepon']; ?></h5>
              <h5 class="mb-3">Email : <?= $row['email']; ?></h5>
              <h5 class="mb-3">Alamat : <?= $row['alamat']; ?></h5>
            <?php else : ?>
              <script>
                alert('Data tidak valid')
                window.location.href = 'index.php'
              </script>
            <?php endif; ?>
          </div>
        </div>
        <a href="./index.php" class="btn btn-secondary mt-4">Kembali ke halaman utama</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>