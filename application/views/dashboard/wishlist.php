<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/wishlist.css') ?>" />
</head>

<body>
  <header>
    <?php $this->load->view('partials/sidebar') ?>
  </header>

  <main>
    <section>
      <h1><?= ucfirst($page) ?></h1>

      <div class="wishlist-container">
        <div class="wishlist-card-container">

          <?php
          if ($wishlists == NULL) { ?>
            <h3 class="text-center">Data is empty</h3>
            <?php } else {
            $no = 0;
            foreach ($wishlists as $row) :
              $no++; ?>
              <div class="card">
                <div class="img-thumbnail-container">
                  <img src="<?= base_url('assets/img/products/') . $row->img ?>" alt="Product Thumbnail" />
                </div>

                <div class="card-content">
                  <a href="<?= site_url('shop/detail/') . $row->sale_id ?>">
                    <h5 class="product-name"><?= $row->sale ?></h5>
                  </a>
                  <h4 class="product-price">Rp<?= number_format($row->price, 0, ',', '.'); ?></h4>

                  <h6 class="product-seller"><?= $row->seller ?></h6>
                  <small class="product-seller-city"><?= $row->city ?></small>
                </div>
              </div>
          <?php endforeach;
          } ?>
        </div>
      </div>
      </div>
    </section>
  </main>
</body>

</html>