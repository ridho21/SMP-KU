<?php

session_start();
require_once 'function/functions.php';

$data['css'] = 'style1.css';
$data['title'] = 'Halaman Utama';

// memanggil file header.php
view('templates/header', $data);

?>

<div class="jumbotron-container">
  <header class="navbar">
    <a href="<?= base_url(); ?>" class="navbar-logo">SMP KU</a>
    <a href="admin/login.php" class="button-purple">Login</a>
  </header>
  <div class="jumbotron-content">
    <h3 class="jumbotron-header">SMP KU</h3>
    <span class="jumbotron-text">SMP KU merupakan sebuah web sederhana yang bertujuan khusus untuk melihat data siswa dan mengelola data siswa</span>
  </div>
</div>

<div class="container-fluid p-3">
  <div class="row m-4">
    <div class="col m-2 box">
      <a href="data_sekolah.php">
        <img src="<?= base_url('assets/images/more/sekolah.png'); ?>" alt="" class="img-fluid" style="width: 300px; height: 220px">
        <a href="data_sekolah.php" class="button-purple float-left mt-5" style="text-decoration: none;">
          <span>Lihat data sekolah</span>
          <i class="fas fa-fw fa-arrow-right ml-1"></i>
        </a>
      </a>
    </div>
    <div class="col m-2 box">
      <a href="data_siswa.php?card">
        <img src="<?= base_url('assets/images/more/siswa.png'); ?>" alt="" class="img-fluid" style="width: 300px; height: 220px">
        <a href="data_siswa.php?button" class="button-purple float-left mt-5" style="text-decoration: none;">
          <span>Lihat data siswa</span>
          <i class="fas fa-fw fa-arrow-right ml-1"></i>
        </a>
      </a>
    </div>
    <div class="col m-2 box">
      <a href="data_spp.php?card">
        <img src="<?= base_url('assets/images/more/spp.png'); ?>" alt="" class="img-fluid" style="width: 300px; height: 220px">
        <a href="data_spp.php?button" class="button-purple float-left mt-5" style="text-decoration: none;">
          <span>Lihat data spp siswa</span>
          <i class="fas fa-fw fa-arrow-right ml-1"></i>
        </a>
      </a>
    </div>
  </div>
</div>

<footer>

</footer>

<?php

$data['javascript'] = 'script.js';


// memanggil file footer.php
view('templates/footer', $data);

?>