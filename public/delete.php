<?php
include_once '../Model.php';
$model = new Model();
$id = $_REQUEST['id'];
$delete = $model->delete($id);

if ($delete) {
  echo "<script>alert('Data berhasil dihapus')</script>";
  echo "<script>window.location.href = 'index.php'</script>";
} else {
  echo "<script>alert('Data gagal dihapus')</script>";
  echo "<script>window.location.href = 'index.php'</script>";
}
