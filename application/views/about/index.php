<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/about.css') ?>" />
</head>

<body>
  <?php $this->load->view('partials/topbar') ?>

  <main>
    <section>
      <h1>About Us</h1>

      <div class="card-container">
        <div class="about-card">
          <div class="img-container">
            <img src="<?= base_url('assets/img/users/default.png') ?>" alt="Developer Image" />
          </div>

          <div class="card-content">
            <h5>Rangga Kalam Sidiq</h5>
            <p>Developer - 2008752 (R)</p>
          </div>
        </div>

        <div class="about-card">
          <div class="img-container">
            <img src="<?= base_url('assets/img/users/default.png') ?>" alt="Developer Image" />
          </div>

          <div class="card-content">
            <h5>Dhafin Rizqullah Hadiputro</h5>
            <p>Developer - 2000053 (D)</p>
          </div>
        </div>

        <div class="about-card">
          <div class="img-container">
            <img src="<?= base_url('assets/img/users/default.png') ?>" alt="Developer Image" />
          </div>

          <div class="card-content">
            <h5>Rivaldi Agustinus Nugraha Siringoringo</h5>
            <p>Developer - 2004488 (V)</p>
          </div>
        </div>

        <div class="about-card">
          <div class="img-container">
            <img src="<?= base_url('assets/img/users/default.png') ?>" alt="Developer Image" />
          </div>

          <div class="card-content">
            <h5>Sanjaya Wisnu Ramadhan</h5>
            <p>Developer - 2003657 (S)</p>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>