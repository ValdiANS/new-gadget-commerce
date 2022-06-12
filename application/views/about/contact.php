<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/contact.css') ?>" />
</head>

<body>
  <?php $this->load->view('partials/topbar') ?>

  <main>
    <section>
      <h1>Contact</h1>

      <div class="contact-card">
        <strong>No. Telepon</strong>
        : 089685687033
        <br />

        <strong>Email</strong>
        : rangga@upi.edu
        <br />
        <br />
        This project created for educational purposes (Pemrograman Web dan Teknologi Basis Data).
      </div>
    </section>
  </main>
</body>

</html>