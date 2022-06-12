<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/product-detail.css') ?>" />
</head>

<body>
  <?php $this->load->view('partials/topbar') ?>

  <main>
    <section class="product-card-container-container">
      <div class="product-card-container">
        <div class="product-card">
          <div class="img-container">
            <img src="<?= base_url('assets/img/products/') . $detail_product->img ?>" alt="Product Thumbnail" />
          </div>

          <div class="product-card-content">
            <div class="product-content-header-container">
              <div class="product-title">
                <h5 class="product-price">Rp<?= number_format($detail_product->price, 0, ',', '.'); ?></h5>
                <h5 class="product-name"><?= $detail_product->name ?></h5>
              </div>

              <div class="wishlist-img-container">
                <button type="button">
                  <img src="<?= base_url('assets/img/svg/heart-transparent.svg') ?>" alt="Wishlist" />
                </button>
              </div>
            </div>

            <form action="#">
              <button type="submit">Buy</button>
            </form>
          </div>
        </div>

        <div class="seller-card">
          <div class="seller-identity">
            <div class="img-container">
              <img src="<?= base_url('assets/img/users/') . $detail_product->user_img ?>" alt="Profil Pictur">
            </div>

            <div class="seller-identity-content">
              <a href="<?= base_url('views/pages/user-detail.php') ?>">
                <h5 class="seller-name">
                  <?= $detail_product->seller ?>
                </h5>
              </a>

              <h5 class="seller-city"><?= $detail_product->city ?></h5>
            </div>
          </div>

          <p class="seller-total-sales">
            Have sold
            <strong><?= $detail_product->seller_sold ?></strong>
            items
          </p>

          <div class="seller-action">
            <form action="./dashboard/chat.php">
              <button type="submit">Ask Seller</button>
            </form>

            <a href="#">
              <img src="<?= base_url('assets/img/svg/whatsapp-brands.svg') ?>" alt="Whatsapp" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="product-description-container">
      <article>
        <div class="product-detail-info">
          <div>
            <strong>Brand :</strong>
            <?= $detail_product->brand ?>
          </div>

          <div>
            <strong>Stock :</strong>
            <?= $detail_product->stockStatus ?>
          </div>

          <div>
            <strong>Type :</strong>
            <?= $detail_product->type ?>
          </div>

          <div>
            <strong>Added :</strong>
            <?= date_format(date_create($detail_product->date_added), "l, d M Y") ?>
          </div>
        </div>

        <h1>Description</h1>

        <p>
          <?= $detail_product->description ?>
        </p>
      </article>
    </section>
  </main>
</body>

</html>