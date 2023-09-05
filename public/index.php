<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Tugas CRUD | Mahasiswa</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 mt-5 text-center">
        <h2>TABEL MAHASISWA</h2>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-6">
        <a href="./create.php" class="btn btn-primary">Tambah Data</a>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 col-md-6 mt-5">
        <table class="table table-striped table-hover text-center">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Telepon</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include_once '../Model.php';
            $model = new Model();
            $rows = $model->getData();
            $no = 1;
            if (!empty($rows)) :
              foreach ($rows as $row) :
            ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $row['nama']; ?></td>
                  <td><?= $row['telepon']; ?></td>
                  <td><?= $row['email']; ?></td>
                  <td><?= $row['alamat']; ?></td>
                  <td>
                    <a href="./singleData.php?id=<?= $row['id']; ?>" class="badge text-bg-primary text-decoration-none">
                      Detail
                    </a>
                    <a href="./edit.php?id=<?= $row['id']; ?>" class="badge text-bg-success text-decoration-none">
                      Edit
                    </a>
                    <a href="./delete.php?id=<?= $row['id']; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('apakah anda yakin')">
                      Delete
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="6">Tidak ada data</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>