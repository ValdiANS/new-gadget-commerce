<?php
require_once "../../../script/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Riwayat | Gadget Commerce</title>

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

    <link rel="stylesheet" href="<?= base_url('assets/styles/riwayat.css') ?>" />
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
                  <a class="nav-link" href="<?= base_url('views/pages/shop.php') ?>">Shop</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/dashboard.php') ?>">
                    Dashboard
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/profil.php') ?>">Profil</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/sales.php') ?>">Sales</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/request.php') ?>">Request</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/chat.php') ?>">Chat</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/wishlist.php') ?>">Wishlist</a>
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
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
        <h1>Riwayat</h1>

        <div class="riwayat-content-container">
          <div class="riwayat-table-container table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Penawaran</th>
                  <th scope="col">Pembeli</th>
                  <th scope="col">Produk</th>
                  <th scope="col">Status</th>
                  <th scope="col">Tanggal Respon</th>
                  <th scope="col"></th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>8 Januari 2022</td>
                  <td>Firmansyah</td>
                  <td>Asus ROG Strix</td>
                  <td>Ditolak</td>
                  <td>8 Januari 2022</td>
                  <td>
                    <a
                      href="<?= base_url('views/pages/dashboard/request.php') ?>"
                      data-bs-toggle="tooltip"
                      data-bs-placement="bottom"
                      title="Lihat Detail Transaksi"
                    >
                      &#x22EF;
                    </a>
                  </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>9 Januari 2022</td>
                  <td>Firmansyah</td>
                  <td>Asus ROG Strix</td>
                  <td>Diterima</td>
                  <td>9 Januari 2022</td>
                  <td>
                    <a
                      href="<?= base_url('views/pages/dashboard/request.php') ?>"
                      data-bs-toggle="tooltip"
                      data-bs-placement="bottom"
                      title="Lihat Detail Transaksi"
                    >
                      &#x22EF;
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
