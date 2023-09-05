<?php
include_once '../Model.php';
$model = new Model();
$id = $_REQUEST['id'];
$row = $model->edit($id);

if (isset($_POST['update'])) {
  if (isset($_POST['nama']) && isset($_POST['telepon']) && isset($_POST['email']) && isset($_POST['alamat'])) {
    if (!empty($_POST['nama']) && !empty($_POST['telepon']) && !empty($_POST['email']) && !empty($_POST['alamat'])) {
      $data['id'] = $id;
      $data['nama'] = $_POST['nama'];
      $data['telepon'] = $_POST['telepon'];
      $data['email'] = $_POST['email'];
      $data['alamat'] = $_POST['alamat'];

      $update = $model->update($data);

      if ($update) {
        echo "<script>alert('Data berhasil diupdate')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
      } else {
        echo "<script>alert('Data gagal diupdate')</script>";
      }
    } else {
      echo "<script>alert('Silahkan lengkapi form yang kosong')</script>";
    }
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Edit Data | Mahasiswa</title>
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
              <?php if (!empty($row)) : ?>
                <div class="form-group mx-auto mb-3">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?= $row['nama']; ?>" class="form-control">
                </div>
                <div class="form-group mx-auto mb-3">
                  <label>No. Telepon</label>
                  <input type="number" name="telepon" value="<?= $row['telepon']; ?>" class="form-control">
                </div>
                <div class="form-group mx-auto mb-3">
                  <label>Email</label>
                  <input type="email" name="email" value="<?= $row['email']; ?>" class="form-control">
                </div>
                <div class="form-group mx-auto mb-4">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" class="form-control" rows="3"><?= $row['alamat']; ?></textarea>
                </div>
                <div class="form-group mx-auto mt-5 mb-3">
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                  <a href="./index.php" class="btn btn-secondary ms-3">Kembali</a>
                </div>
              <?php else : ?>
                <script>
                  alert('Data tidak valid, Silahkan ulangi lagi!')
                  window.location.href = 'index.php'
                </script>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>