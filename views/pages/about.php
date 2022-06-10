<?php
require_once "../../script/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>About Us | Gadget Commerce</title>

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

    <link rel="stylesheet" href="<?= base_url('assets/styles/about.css') ?>" />
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
              <a class="nav-link" href="<?= base_url('views/pages/shop.php') ?>">Shop</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle active"
                aria-current="page"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                About
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="<?= base_url('views/pages/contact.php') ?>">Contact</a>
                </li>

                <li>
                  <a class="dropdown-item" href="<?= base_url('views/pages/about.php') ?>">About Us</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('views/pages/dashboard/request.php') ?>" class="nav-link">Request</a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('views/pages/dashboard/wishlist.php') ?>" class="nav-link">Wishlist</a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('views/pages/login.php') ?>" class="nav-link">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <section>
        <h1>About Us</h1>

        <div class="card-container">
          <div class="about-card">
            <div class="img-container">
              <img src="<?= base_url('assets/img/product/4.png') ?>" alt="Developer Image" />
            </div>

            <div class="card-content">
              <h5>Rangga Kalam Sidiq</h5>
              <p>Developer</p>
            </div>
          </div>

          <div class="about-card">
            <div class="img-container">
              <img src="<?= base_url('assets/img/product/4.png') ?>" alt="Developer Image" />
            </div>

            <div class="card-content">
              <h5>Rangga Kalam Sidiq</h5>
              <p>Developer</p>
            </div>
          </div>

          <div class="about-card">
            <div class="img-container">
              <img src="<?= base_url('assets/img/product/4.png') ?>" alt="Developer Image" />
            </div>

            <div class="card-content">
              <h5>Rangga Kalam Sidiq</h5>
              <p>Developer</p>
            </div>
          </div>

          <div class="about-card">
            <div class="img-container">
              <img src="<?= base_url('assets/img/product/4.png') ?>" alt="Developer Image" />
            </div>

            <div class="card-content">
              <h5>Rangga Kalam Sidiq</h5>
              <p>Developer</p>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
