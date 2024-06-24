<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$nip = $_GET['nip'];
$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE nip='$nip'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Detail Pegawai</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <form action="#" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>NIP</td>
                  <td><input class="form-control" type="number" name="nip" size="20" required value="<?= $row['nip'] ?>" readonly></td>
                </tr>
                <tr>
                  <td>Nama Pegawai</td>
                  <td><input class="form-control" type="text" name="nama" size="20" required value="<?= $row['nama_pegawai'] ?>" readonly></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td><input class="form-control" type="text" name="jenkel" size="20" required value="<?= $row['jenkel_pegawai'] ?>" readonly></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td><input class="form-control" type="text" name="alamat" size="20" required value="<?= $row['alamat_pegawai'] ?>" readonly></td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>