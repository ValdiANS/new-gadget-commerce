<?php
require_once "../../../script/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Wishlist | Gadget Commerce</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
      defer
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
      defer
    ></script>

    <link rel="stylesheet" href="<?= base_url('assets/styles/wishlist.css') ?>" />
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
          <div class="navbar-brand">
            Halo
            <br />
            <strong>User1</strong>
          </div>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                Halo
                <br />
                <strong>User1</strong>
              </h5>

              <button
                type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>

            <div class="offcanvas-body">
              <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="<?= base_url('views/pages/dashboard/dashboard.php') ?>"
                  >
                    Dashboard
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="<?= base_url('views/pages/dashboard/profil.php') ?>"
                  >
                    Profil
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="<?= base_url('views/pages/dashboard/sales.php') ?>"
                  >
                    Sales
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="<?= base_url('views/pages/dashboard/request.php') ?>"
                  >
                    Request
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="<?= base_url('views/pages/dashboard/chat.php') ?>"
                  >
                    Chat
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="<?= base_url('views/pages/dashboard/wishlist.php') ?>"
                  >
                    Wishlist
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="<?= base_url('views/pages/dashboard/riwayat.php') ?>"
                  >
                    Riwayat
                  </a>
                </li>
              </ul>

              <form action="#">
                <button type="submit" class="logout-button">Logout</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section>
        <h1>Wishlist</h1>

        <div class="wishlist-container">
          <div class="wishlist-card-container">
            <div class="card">
              <div class="img-thumbnail-container">
                <img
                  src="<?= base_url('assets/img/product/1.png') ?>"
                  alt="Product Thumbnail"
                />
              </div>

              <div class="card-content">
                <a href="<?= base_url('views/pages/product-detail.php') ?>">
                  <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
                </a>
                <h4 class="product-price">Rp 400.000</h4>

                <h6 class="product-seller">Michael Supratno</h6>
                <small class="product-seller-city">Jakarta</small>
              </div>
            </div>

            <div class="card">
              <div class="img-thumbnail-container">
                <img
                  src="<?= base_url('assets/img/product/1.png') ?>"
                  alt="Product Thumbnail"
                />
              </div>

              <div class="card-content">
                <a href="<?= base_url('views/pages/product-detail.php') ?>">
                  <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
                </a>
                <h4 class="product-price">Rp 400.000</h4>

                <h6 class="product-seller">Michael Supratno</h6>
                <small class="product-seller-city">Jakarta</small>
              </div>
            </div>

            <div class="card">
              <div class="img-thumbnail-container">
                <img
                  src="<?= base_url('assets/img/product/1.png') ?>"
                  alt="Product Thumbnail"
                />
              </div>

              <div class="card-content">
                <a href="<?= base_url('views/pages/product-detail.php') ?>">
                  <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
                </a>
                <h4 class="product-price">Rp 400.000</h4>

                <h6 class="product-seller">Michael Supratno</h6>
                <small class="product-seller-city">Jakarta</small>
              </div>
            </div>

            <div class="card">
              <div class="img-thumbnail-container">
                <img
                  src="<?= base_url('assets/img/product/1.png') ?>"
                  alt="Product Thumbnail"
                />
              </div>

              <div class="card-content">
                <a href="<?= base_url('views/pages/product-detail.php') ?>">
                  <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
                </a>
                <h4 class="product-price">Rp 400.000</h4>

                <h6 class="product-seller">Michael Supratno</h6>
                <small class="product-seller-city">Jakarta</small>
              </div>
            </div>

            <div class="card">
              <div class="img-thumbnail-container">
                <img
                  src="<?= base_url('assets/img/product/1.png') ?>"
                  alt="Product Thumbnail"
                />
              </div>

              <div class="card-content">
                <a href="<?= base_url('views/pages/product-detail.php') ?>">
                  <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
                </a>
                <h4 class="product-price">Rp 400.000</h4>

                <h6 class="product-seller">Michael Supratno</h6>
                <small class="product-seller-city">Jakarta</small>
              </div>
            </div>

            <div class="card">
              <div class="img-thumbnail-container">
                <img
                  src="<?= base_url('assets/img/product/1.png') ?>"
                  alt="Product Thumbnail"
                />
              </div>

              <div class="card-content">
                <a href="<?= base_url('views/pages/product-detail.php') ?>">
                  <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
                </a>
                <h4 class="product-price">Rp 400.000</h4>

                <h6 class="product-seller">Michael Supratno</h6>
                <small class="product-seller-city">Jakarta</small>
              </div>
            </div>

            <div class="card">
              <div class="img-thumbnail-container">
                <img
                  src="<?= base_url('assets/img/product/1.png') ?>"
                  alt="Product Thumbnail"
                />
              </div>

              <div class="card-content">
                <a href="<?= base_url('views/pages/product-detail.php') ?>">
                  <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
                </a>
                <h4 class="product-price">Rp 400.000</h4>

                <h6 class="product-seller">Michael Supratno</h6>
                <small class="product-seller-city">Jakarta</small>
              </div>
            </div>

            <div class="card">
              <div class="img-thumbnail-container">
                <img
                  src="<?= base_url('assets/img/product/1.png') ?>"
                  alt="Product Thumbnail"
                />
              </div>

              <div class="card-content">
                <a href="<?= base_url('views/pages/product-detail.php') ?>">
                  <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
                </a>
                <h4 class="product-price">Rp 400.000</h4>

                <h6 class="product-seller">Michael Supratno</h6>
                <small class="product-seller-city">Jakarta</small>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
