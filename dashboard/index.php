<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$pegawai = mysqli_query($connection, "SELECT COUNT(*) FROM pegawai");
$total_pegawai = mysqli_fetch_array($pegawai)[0];

?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pegawai</h4>
            </div>
            <div class="card-body">
              <?= $total_pegawai ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>