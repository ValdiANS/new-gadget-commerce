<?php
require_once "../../script/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Product Detail | Gadget Commerce</title>

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

    <link rel="stylesheet" href="<?= base_url('assets/styles/product-detail.css') ?>" />
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
              <a class="nav-link active" aria-current="page" href="<?= base_url('views/pages/shop.php') ?>">
                Shop
              </a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
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
              <a href="<?= base_url('views/pages/login.php') ?>" class="nav-link">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <section class="product-card-container-container">
        <div class="product-card-container">
          <div class="product-card">
            <div class="img-container">
              <img
                src="<?= base_url('assets/img/product/1.png') ?>"
                alt="Product Thumbnail"
              />
            </div>

            <div class="product-card-content">
              <div class="product-content-header-container">
                <div class="product-title">
                  <h5 class="product-price">Rp 400.000</h5>
                  <h5 class="product-name">Xiaomi Redmi 5 3/32GB</h5>
                </div>

                <div class="wishlist-img-container">
                  <button type="button">
                    <img
                      src="<?= base_url('assets/img/svg/heart-transparent.svg') ?>"
                      alt="Wishlist"
                    />
                  </button>
                </div>
              </div>

              <form action="#">
                <button type="submit">Beli</button>
              </form>
            </div>
          </div>

          <div class="seller-card">
            <div class="seller-identity">
              <h5 class="seller-name">Michael Supratno</h5>
              <h5 class="seller-city">Jakarta</h5>
            </div>

            <p class="seller-total-sales">
              Telah menjual
              <strong>19</strong>
              Barang
            </p>

            <div class="seller-action">
              <form action="./dashboard/chat.php">
                <button type="submit">Tanya Penjual</button>
              </form>

              <a href="#">
                <img
                  src="<?= base_url('assets/img/svg/whatsapp-brands.svg') ?>"
                  alt="Whatsapp"
                />
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="product-description-container">
        <article>
          <div class="product-detail-info">
            <div>
              <strong>Merek :</strong>
              Xiaomi
            </div>

            <div>
              <strong>Stok :</strong>
              Tersedia
            </div>

            <div>
              <strong>Tipe :</strong>
              Ponsel
            </div>

            <div>
              <strong>Ditambahkan :</strong>
              14 Januari 2022
            </div>
          </div>

          <h1>Deskripsi</h1>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.

            <br />
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut ducimus
            corrupti odit nam, debitis accusantium explicabo ea minima eos
            totam! Repellat temporibus velit unde ducimus laudantium earum saepe
            distinctio repudiandae ullam impedit et expedita obcaecati fuga
            corrupti iure, libero quidem eaque doloremque ad explicabo? Aut amet
            excepturi neque placeat quos, accusantium maiores sequi unde
            architecto expedita inventore id molestias. Molestias cum ad libero
            consectetur, illo fugit odit, velit facilis omnis esse atque nobis
            voluptas veritatis non adipisci laboriosam deleniti. Nisi a minus
            vel nostrum porro aperiam necessitatibus? Est veniam accusantium
            aliquam, ipsum dicta, beatae animi odio blanditiis quisquam,
            repellat magnam dolore libero temporibus voluptas ut laboriosam enim
            obcaecati aut! Laborum, quae hic. Consequatur inventore magni ab?
            Impedit, ipsa et, commodi maiores recusandae soluta id inventore ad,
            pariatur dolorum enim? Laborum inventore libero, veniam rem nisi
            repellat incidunt? Ea dignissimos aut ducimus earum possimus eos
            doloremque molestiae quasi, natus tempore. Eveniet beatae deleniti
            veniam quasi, nostrum, alias a, neque consequuntur cupiditate
            reprehenderit iste sint totam fugiat assumenda ullam quidem dolorem
            sequi explicabo exercitationem laudantium sit. Sequi a itaque
            dolorem, quod, ipsam quo et consectetur veniam deleniti distinctio
            repudiandae officiis ullam! Animi nobis molestiae non reiciendis ut,
            quas sequi perferendis explicabo cumque asperiores numquam qui ab
            tempore itaque neque sunt exercitationem eos voluptas, esse
            accusamus nam aspernatur. Officia eum repellat temporibus
            praesentium corporis quasi molestias, repudiandae ipsum? Nostrum
            labore placeat similique error, quibusdam distinctio officia
            incidunt molestias iure facilis quos. Impedit aspernatur,
            repellendus voluptas magni autem sequi quo corporis consectetur iste
            tenetur minus similique temporibus nihil, consequatur vel expedita
            praesentium quia eligendi doloremque quas nulla iusto! Nostrum nulla
            nesciunt earum, molestiae deserunt ad sed, aut at minus fugit,
            aspernatur iure magnam praesentium dolore ullam quis quod ea
            officiis maxime dolorum. Perspiciatis delectus enim cumque sapiente
            sed excepturi tenetur, accusantium incidunt consectetur? Veniam?
          </p>
        </article>
      </section>
    </main>
  </body>
</html>
