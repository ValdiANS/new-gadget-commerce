<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/shop.css') ?>" />
</head>

<body>
  <?php $this->load->view('partials/topbar') ?>

  <main>
    <div class="shop-products-container">
      <div class="search-input-container">
        <form action="#">
          <input type="text" name="search" placeholder="Search..." />

          <button type="submit">
            <img src="<?= base_url('assets/img/svg/search-icon.svg') ?>" alt="Magnifier" />
          </button>
        </form>
      </div>

      <div class="filter-container">
        <select class="form-select" name="filter" aria-label="Default select example">
          <option selected disabled hidden>Filter</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="product-card-container">

        <?php
        $no = 0;
        foreach ($shop as $row) :
          $no++; ?>
          <div class="card">
            <div class="img-thumbnail-container">
              <img src="<?= base_url('assets/img/products/') . $row->img ?>" alt="Product Thumbnail" />
            </div>

            <div class="card-content">
              <a href="<?= site_url('shop/detail/') . $row->sale_id ?>">
                <h5 class="product-name"><?= $row->name ?></h5>
              </a>
              <h4 class="product-price">Rp<?= number_format($row->price, 0, ',', '.'); ?></h4>

              <h6 class="product-seller"><?= $row->seller ?></h6>
              <small class="product-seller-city"><?= $row->city ?></small>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>
</body>

</html>