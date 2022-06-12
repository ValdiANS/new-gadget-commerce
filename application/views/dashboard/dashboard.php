<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/dashboard.css') ?>" />
</head>

<body>
  <header>
    <?php $this->load->view('partials/sidebar') ?>
  </header>


  <main>
    <section>
      <h1>Dashboard</h1>

      <div class="card-container">
        <a href="<?= base_url('views/pages/dashboard/sales.php') ?>" class="card sales">
          <h3>Barang yang sedang dijual</h3>

          <h4>10</h4>
        </a>

        <a href="<?= base_url('views/pages/dashboard/riwayat.php') ?>" class="card sold">
          <h3>Barang terjual</h3>

          <h4>5</h4>
        </a>

        <a href="<?= base_url('views/pages/dashboard/request.php') ?>" class="card request">
          <h3>Request</h3>

          <h4>8</h4>
        </a>
      </div>
    </section>
  </main>
</body>

</html>