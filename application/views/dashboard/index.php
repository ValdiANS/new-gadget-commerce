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
      <h1><?= ucfirst($page); ?></h1>

      <div class="card-container">
        <a href="<?= site_url('sales') ?>" class="card white">
          <h3>Items on sale</h3>

          <h4>
            <?php
            if ($countSellerOnSale == NULL) {
              echo 0;
            } else {
              echo $countSellerOnSale->count;
            }
            ?>
          </h4>
        </a>

        <a href="<?= site_url('transaction/log') ?>" class="card red">
          <h3>Items sold</h3>

          <h4>
            <?php
            if ($countSellerSold == NULL) {
              echo 0;
            } else {
              echo $countSellerSold->count;
            }
            ?>
          </h4>
        </a>

        <a href="<?= site_url('request') ?>" class="card green">
          <h3>Seller Request</h3>

          <h4>
            <?php
            if ($countRequestForSeller == NULL) {
              echo 0;
            } else {
              echo $countRequestForSeller->count;
            }
            ?>
          </h4>
        </a>

        <a href="<?= site_url('request') ?>" class="card gold">
          <h3>Buyer Request</h3>

          <h4>
            <?php
            if ($countRequestForBuyer == NULL) {
              echo 0;
            } else {
              echo $countRequestForBuyer->count;
            }
            ?>
          </h4>
        </a>
      </div>
    </section>
  </main>
</body>

</html>