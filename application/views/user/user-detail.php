<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/user-detail.css') ?>" />
  <script src="<?= base_url('assets/js/user-detail.js') ?>" defer></script>
</head>

<body>
  <?php $this->load->view('partials/topbar') ?>

  <main>
    <section class="user-section">
      <div class="user-profile-container">
        <div class="img-container">
          <img src="<?= base_url('assets/img/users/') . $detail_user->img ?>" alt="User's Profile Photo" />
        </div>

        <div class="user-profile-content">
          <h3><?= $detail_user->name ?></h3>
          <h4><?= $detail_user->city ?></h4>
          <p>Joined from <?= date_format(date_create($detail_user->date_joined), "l, d M Y") ?></p>
        </div>
      </div>

      <p>
        Have sold
        <strong>
          <?php
          if ($seller_sold == NULL) {
            echo 0;
          } else {
            echo $seller_sold->count ?>
        </strong>
      <?php } ?>
      items
      </p>

      <div class="user-action-container">
        <button id="seeReviewBtn" onclick="seeReviewBtnClickHandler(event)">
          <b>See Reviews</b>
        </button>

        <form action="<?= site_url("chat") ?>" style="display:none;">
          <button type="submit"><b>Ask Seller</b></button>
        </form>

        <a href="#">
          <img src="<?= base_url('assets/img/svg/whatsapp-brands.svg') ?>" alt="Whatsapp Icon" />
        </a>
      </div>
    </section>

    <section id="reviewSection" class="review-section d-none">
      <div class="review-container">
        <?php
        $no = 0;
        foreach ($all_review as $row) :
          $no++; ?>
          <div class="review">
            <div class="img-container">
              <img src="<?= base_url('assets/img/users/') . $row->img ?>" alt="Profile Picture" />
            </div>

            <div class="review-content-container">
              <h5><?= $row->usernameSeller ?></h5>
              <div class="star-and-date">
                <div class="star">
                  <?php
                  if ($row->rating == 5) {
                    echo "★★★★★";
                  } else if ($row->rating == 4) {
                    echo "★★★★";
                  } else if ($row->rating == 3) {
                    echo "★★★";
                  } else if ($row->rating == 2) {
                    echo "★★";
                  } else if ($row->rating == 1) {
                    echo "★";
                  }
                  ?>
                </div>
                <div class="date"><?= date_format(date_create($row->date_selled), "l, d M Y") ?></div>
              </div>
              <div class="product-name"><?= $row->sale ?></div>

              <p><?= $row->description ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </main>
</body>

</html>