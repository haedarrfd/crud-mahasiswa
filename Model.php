<?php
class Model
{
  private $hostname = "localhost";
  private $username = "root";
  private $password = "";
  private $db = "users";
  private $conn;

  public function __construct()
  {
    try {
      $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->db);
    } catch (Exception $e) {
      echo 'Connection Failed' . $e->getMessage();
    }
  }

  public function getData()
  {
    $data = [];
    $query = 'SELECT * FROM  mahasiswa';

    if ($sql = $this->conn->query($query)) {
      while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
      }
    }
    return $data;
  }

  public function getSingleData($id)
  {
    $data = [];
    $query = "SELECT * FROM mahasiswa WHERE id = '$id'";

    if ($sql = $this->conn->query($query)) {
      while ($row = $sql->fetch_assoc()) {
        $data = $row;
      }
    }
    return $data;
  }

  public function insert()
  {
    if (isset($_POST['submit'])) {
      if (isset($_POST['nama']) && isset($_POST['telepon']) && isset($_POST['email']) && isset($_POST['alamat'])) {
        if (!empty($_POST['nama']) && !empty($_POST['telepon']) && !empty($_POST['email']) && !empty($_POST['alamat'])) {
          $nama = $_POST['nama'];
          $telepon = $_POST['telepon'];
          $email = $_POST['email'];
          $alamat = $_POST['alamat'];

          $query = "INSERT INTO mahasiswa (nama, telepon, email, alamat) VALUES ('$nama','$telepon','$email','$alamat')";

          if ($sql = $this->conn->query($query)) {
            echo "<script>alert('Data berhasil ditambahkan')</script>";
            echo "<script>window.location.href = 'index.php'</script>";
          } else {
            echo "<script>alert('Data gagal ditambahkan')</script>";
          }
        } else {
          echo "<script>alert('Silahkan lengkapi form yang kosong')</script>";
        }
      }
    }
  }

  public function edit($id)
  {
    $data = [];
    $query = "SELECT * FROM mahasiswa WHERE id = '$id'";

    if ($sql = $this->conn->query($query)) {
      while ($row = $sql->fetch_assoc()) {
        $data = $row;
      }
    }
    return $data;
  }

  public function update($data)
  {
    $query = "UPDATE mahasiswa SET nama='$data[nama]', telepon='$data[telepon]', email='$data[email]', alamat='$data[alamat]' WHERE id='$data[id]'";

    if ($sql = $this->conn->query($query)) {
      return true;
    } else {
      return false;
    }
  }

  public function delete($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id='$id'";

    if ($sql = $this->conn->query($query)) {
      return true;
    } else {
      return false;
    }
  }
}
