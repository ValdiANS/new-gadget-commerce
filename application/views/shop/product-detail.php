<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/product-detail.css') ?>" />

  <script src="<?= base_url('assets/js/product-detail.js') ?>"></script>
</head>

<body>
  <?php $this->load->view('partials/topbar') ?>

  <!-- Buy Product Modal -->
  <div class="modal fade" id="buyProductModal" tabindex="-1" aria-labelledby="buyProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="#" class="buy-product-form">
          <h1>
            Berapa harga yang ingin diajukan?
          </h1>

          <div class="input-field-container">
            <input type="number" name="price" id="priceInput" min="0" placeholder="Masukkan Harga">
          </div>

          <div class="btn-container">
            <button type="button" data-bs-dismiss="modal" class="btn btn-danger">
              Batal
            </button>

            <button type="submit" class="btn btn-success">Beli</button>
          </div>
        </form>
      </div>
    </div>
  </div>

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
              <button type="submit" data-bs-toggle="modal" data-bs-target="#buyProductModal" onclick="buyBtnClickHandler(
                  event,
                  {
                    price: <?= $detail_product->price ?>
                  }
                )">
                Buy
              </button>
            </form>
          </div>
        </div>

        <div class="seller-card">
          <div class="seller-identity">
            <div class="img-container">
              <img src="<?= base_url('assets/img/users/') . $detail_product->user_img ?>" alt="Profil Picture">
            </div>

            <div class="seller-identity-content">
              <a href="<?= site_url('user/detail/') . $detail_product->username ?>">
                <h5 class="seller-name">
                  <?= $detail_product->seller ?>
                </h5>
              </a>

              <h5 class="seller-city"><?= $detail_product->city ?></h5>
            </div>
          </div>

          <p class="seller-total-sales">
            Have sold
            <strong>
              <?php
              if ($detail_product->seller_sold == NULL) {
                echo 0;
              } else {
                echo $detail_product->seller_sold ?>
            </strong>
          <?php } ?>
          items
          </p>

          <div class="seller-action">
            <a
              href="<?= site_url("chat/sale/") . $detail_product->sale_id ?>"
              class="ask-seller-btn"
            >
                Ask Seller
            </a>

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