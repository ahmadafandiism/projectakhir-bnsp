<?php
session_start();
require_once '../helper/connection.php';

$nip = $_POST['nip'];
$nama_pegawai = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$alamat = $_POST['alamat'];

$query = mysqli_query($connection, "insert into pegawai(nip, nama_pegawai, jenkel_pegawai, alamat_pegawai) value('$nip', '$nama_pegawai', '$jenkel', '$alamat')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ./index.php');
                                            }
