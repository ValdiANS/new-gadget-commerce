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

    <link rel="stylesheet" href="<?= base_url('assets/styles/request.css') ?>" />

    <script src="<?= base_url('assets/js/request.js') ?>" defer></script>
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
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="<?= base_url('views/pages/dashboard/request.php') ?>"
                  >
                    Request
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/chat.php') ?>">Chat</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/wishlist.php') ?>">Wishlist</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/riwayat.php') ?>">Riwayat</a>
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

    <!-- Review Modal -->
    <div
      class="modal fade"
      id="reviewModal"
      tabindex="-1"
      aria-labelledby="reviewModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <form action="#">
            <h1>Review - <strong id="reviewedProductName">[Nama Produk]</strong></h1>

            <div class="input-field-container">
              <div class="input-field rating">
                <label for="rating">Rating</label>
                
                <div class="select-container">
                  <select name="rating" id="rating" required>
                    <option value="" disabled selected hidden>Rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>

                  <span>&#9660;</span>
                </div>

                <span class="star">★</span>
              </div>

              <div class="input-field review-description">
                <label for="reviewDescription">Review</label>

                <textarea
                  name="reviewDescription"
                  id="reviewDescription"
                  rows="4"
                  placeholder="Masukkan Review"
                  required
                ></textarea>
              </div>
            </div>

            <div class="btn-container">
              <button
                type="reset"
                class="btn btn-danger"
                data-bs-dismiss="modal"
              >
                Batal
              </button>

              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <main>
      <section>
        <div class="section-header">
          <h1>Tawaran</h1>

          <button
            id="toggleRequest"
            class="toggle-request btn btn-success"
            onclick="toggleRequestTable(event)"
          >
            Lihat tawaran sebagai
            <strong>pembeli</strong>
          </button>
        </div>

        <div id="sellerRequest" class="seller-request-content-container">
          <div class="seller-request-table-container table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Penawaran</th>
                  <th scope="col">Pembeli</th>
                  <th scope="col">Produk</th>
                  <th scope="col">Tawaran</th>
                  <th scope="col">Respon</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>8 Januari 2022</td>
                  <td>Firmansyah</td>
                  <td>Asus ROG Strix</td>
                  <td>16.599.000</td>
                  <td>
                    <form action="#">
                      <button type="submit" class="checkmark btn btn-success">
                        &#10003;
                      </button>
                    </form>

                    <form action="#">
                      <button type="submit" class="cross btn btn-danger">
                        &#10006;
                      </button>
                    </form>

                    <form action="<?= base_url('views/pages/dashboard/chat.php') ?>">
                      <button type="submit" class="chat">
                        <img
                          src="<?= base_url('assets/img/svg/chat-icon.svg') ?>"
                          alt="Chat"
                        />
                      </button>
                    </form>
                  </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>9 Januari 2022</td>
                  <td>Firmansyah</td>
                  <td>Asus ROG Strix</td>
                  <td>16.599.000</td>
                  <td>
                    <form action="#">
                      <button type="submit" class="checkmark btn btn-success">
                        &#10003;
                      </button>
                    </form>

                    <form action="#">
                      <button type="submit" class="cross btn btn-danger">
                        &#10006;
                      </button>
                    </form>

                    <form action="<?= base_url('views/pages/dashboard/chat.php') ?>">
                      <button type="submit" class="chat">
                        <img
                          src="<?= base_url('assets/img/svg/chat-icon.svg') ?>"
                          alt="Chat"
                        />
                      </button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div id="buyerRequest" class="buyer-request-content-container d-none">
          <div class="buyer-request-table-container table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Request</th>
                  <th scope="col">Penjual</th>
                  <th scope="col">Produk</th>
                  <th scope="col">Tawaran</th>
                  <th scope="col">Respon</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>8 Januari 2022</td>
                  <td>Hermansyah</td>
                  <td>Asus ROG Strix</td>
                  <td>16.599.000</td>
                  <td>
                    <form action="<?= base_url('views/pages/dashboard/chat.php') ?>">
                      <button type="submit" class="chat">
                        <img
                          src="<?= base_url('assets/img/svg/chat-icon.svg') ?>"
                          alt="Chat"
                        />
                      </button>
                    </form>
                  </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>9 Januari 2022</td>
                  <td>Hermansyah</td>
                  <td>Asus ROG Strix</td>
                  <td>16.599.000</td>
                  <td>
                    <form action="<?= base_url('views/pages/dashboard/chat.php') ?>">
                      <button type="submit" class="chat">
                        <img
                          src="<?= base_url('assets/img/svg/chat-icon.svg') ?>"
                          alt="Chat"
                        />
                      </button>
                    </form>
                  </td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>10 Januari 2022</td>
                  <td>Hermansyah</td>
                  <td>Lenovo Legion</td>
                  <td>12.599.000</td>
                  <td>
                    <button
                      class="btn btn-success"
                      data-bs-toggle="modal"
                      data-bs-target="#reviewModal"
                      onclick="reviewClickHandler(
                        event,
                        {
                          name: 'Lenovo Legion'
                        }
                      )"
                    >
                      Review
                    </button>
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
