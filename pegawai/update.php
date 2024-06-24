<?php
session_start();
require_once '../helper/connection.php';

$nip = $_POST['nip'];
$nama_pegawai = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$alamat = $_POST['alamat'];

$query = mysqli_query($connection, "UPDATE pegawai SET nama_pegawai = '$nama_pegawai', jenkel_pegawai = '$jenkel', alamat_pegawai = '$alamat' WHERE nip = '$nip'");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
