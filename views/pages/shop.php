<?php
require_once "../../script/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Shop | Gadget Commerce</title>

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

    <link rel="stylesheet" href="<?= base_url('assets/styles/shop.css') ?>" />
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-light px-4 bg-transparent">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('') ?>">
          <img src="<?= base_url('assets/img/G.png') ?>" alt="Logo G-Comm" />
          <h1>
            Gadget
            <br />
            Commerce
          </h1>
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="<?= base_url('') ?>"
              >
                Home
              </a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="aboutNavbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                About
              </a>

              <ul class="dropdown-menu" aria-labelledby="aboutNavbarDropdown">
                <li>
                  <a class="dropdown-item" href="<?= base_url('views/pages/contact.php') ?>">
                    Contact
                  </a>
                </li>

                <li>
                  <a class="dropdown-item" href="<?= base_url('views/pages/about.php') ?>">
                    About Us
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="accountNavbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="<?= base_url('assets/img/svg/user-solid.svg') ?>"
                  alt="User Icon"
                  class="user"
                />
              </a>

              <ul class="dropdown-menu" aria-labelledby="accountNavbarDropdown">
                <li>
                  <a class="dropdown-item" href="<?= base_url('views/pages/dashboard/dashboard.php') ?>">
                    Dashboard
                  </a>
                </li>

                <li>
                  <a class="dropdown-item" href="#">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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
          <select
            class="form-select"
            name="filter"
            aria-label="Default select example"
          >
            <option selected disabled hidden>Filter</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>

        <div class="product-card-container">
          <div class="card">
            <div class="img-thumbnail-container">
              <img
                src="<?= base_url('assets/img/product/1.png') ?>"
                alt="Product Thumbnail"
              />
            </div>

            <div class="card-content">
              <a href="<?= base_url('views/pages/product-detail.php')  ?>">
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
                src="<?= base_url('assets/img/product/2.png') ?>"
                alt="Product Thumbnail"
              />
            </div>

            <div class="card-content">
              <a href="<?= base_url('views/pages/product-detail.php')  ?>">
                <h5 class="product-name">Samsung A8 4/64GB</h5>
              </a>
              <h4 class="product-price">Rp 570.000</h4>

              <h6 class="product-seller">GadgetBekas_ID</h6>
              <small class="product-seller-city">Yogyakarta</small>
            </div>
          </div>

          <div class="card">
            <div class="img-thumbnail-container">
              <img
                src="<?= base_url('assets/img/product/3.png') ?>"
                alt="Product Thumbnail"
              />
            </div>

            <div class="card-content">
              <a href="<?= base_url('views/pages/product-detail.php')  ?>">
                <h5 class="product-name">Iphone 12</h5>
              </a>
              <h4 class="product-price">Rp 4.000.000</h4>

              <h6 class="product-seller">SemangatPagi_Store</h6>
              <small class="product-seller-city">Bandung</small>
            </div>
          </div>

          <div class="card">
            <div class="img-thumbnail-container">
              <img
                src="<?= base_url('assets/img/product/4.png') ?>"
                alt="Product Thumbnail"
              />
            </div>

            <div class="card-content">
              <a href="<?= base_url('views/pages/product-detail.php')  ?>">
                <h5 class="product-name">Vivo V20</h5>
              </a>
              <h4 class="product-price">Rp 1.000.000</h4>

              <h6 class="product-seller">Delwyn</h6>
              <small class="product-seller-city">Tangerang</small>
            </div>
          </div>

          <div class="card">
            <div class="img-thumbnail-container">
              <img
                src="<?= base_url('assets/img/product/default.png') ?>"
                alt="Product Thumbnail"
              />
            </div>

            <div class="card-content">
              <a href="<?= base_url('views/pages/product-detail.php')  ?>">
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
                src="<?= base_url('assets/img/product/default.png') ?>"
                alt="Product Thumbnail"
              />
            </div>

            <div class="card-content">
              <a href="<?= base_url('views/pages/product-detail.php')  ?>">
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
                src="<?= base_url('assets/img/product/default.png') ?>"
                alt="Product Thumbnail"
              />
            </div>

            <div class="card-content">
              <a href="<?= base_url('views/pages/product-detail.php')  ?>">
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
                src="<?= base_url('assets/img/product/default.png') ?>"
                alt="Product Thumbnail"
              />
            </div>

            <div class="card-content">
              <a href="<?= base_url('views/pages/product-detail.php')  ?>">
                <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
              </a>
              <h4 class="product-price">Rp 400.000</h4>

              <h6 class="product-seller">Michael Supratno</h6>
              <small class="product-seller-city">Jakarta</small>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
