<?php
require_once "../../../script/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Sales | Gadget Commerce</title>

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

    <link rel="stylesheet" href="<?= base_url('assets/styles/sales.css') ?>" />

    <script src="<?= base_url('assets/js/sales.js') ?>" defer></script>
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
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="<?= base_url('views/pages/dashboard/sales.php') ?>"
                  >
                    Sales
                  </a>
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

    <!-- Add Product Modal -->
    <div
      class="modal fade"
      id="addProductModal"
      tabindex="-1"
      aria-labelledby="addProductModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <form action="#" onreset="addProductFormResetHandler(event)">
            <div class="form-input-field">
              <input
                type="text"
                name="name"
                id="addNameInput"
                placeholder="Masukkan Nama Produk"
                required
              />

              <input
                type="text"
                name="brand"
                id="addBrandInput"
                placeholder="Masukkan Merek"
                required
              />

              <input
                type="number"
                name="price"
                id="addPriceInput"
                min="0"
                placeholder="Masukkan Harga"
                required
              />

              <div class="select-container">
                <select name="type" id="addSelectInput" required>
                  <option value="" disabled selected hidden>Tipe Produk</option>
                  <option value="1">Ponsel</option>
                  <option value="2">Laptop</option>
                </select>

                <span>&#9660;</span>
              </div>

              <div class="input-file">
                <label for="addImgFileInput">
                  <div class="input-file__img-container">
                    <img
                      id="addImgThumbnail"
                      src="<?= base_url('assets/img/svg/cloud-icon.svg') ?>"
                      alt="Cloud Icon"
                    />
                  </div>

                  <div id="addImgCaption" class="input-file__placeholder">
                    Unggah Gambar Produk
                  </div>
                </label>

                <input
                  type="file"
                  name="image"
                  id="addImgFileInput"
                  accept="image/*"
                  required
                  onchange="addFileUploadChangeHandler(event)"
                />
              </div>

              <textarea
                name="description"
                id="addDescriptionInput"
                rows="4"
                placeholder="Masukan Deskripsi Produk Yang Akan Dijual"
                required
              ></textarea>
            </div>

            <div class="btn-container">
              <button type="reset" class="btn btn-danger">Bersihkan</button>
              <button type="submit" class="btn btn-success">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Edit Product Modal -->
    <div
      class="modal fade"
      id="editProductModal"
      tabindex="-1"
      aria-labelledby="editroductModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <form action="#" onreset="editProductFormResetHandler(event)">
            <div class="form-input-field">
              <input
                type="text"
                name="name"
                id="editNameInput"
                placeholder="Masukkan Nama Produk"
              />

              <input
                type="text"
                name="brand"
                id="editBrandInput"
                placeholder="Masukkan Merek"
              />

              <input
                type="number"
                name="price"
                id="editPriceInput"
                min="0"
                placeholder="Masukkan Harga"
              />

              <div class="select-container">
                <select name="type" id="editSelectInput">
                  <option value="" disabled selected hidden>Tipe Produk</option>
                  <option value="1">Ponsel</option>
                  <option value="2">Laptop</option>
                </select>

                <span>&#9660;</span>
              </div>

              <div class="input-file">
                <label for="addImgFileInput">
                  <div class="input-file__img-container">
                    <img
                      id="editImgThumbnail"
                      src="<?= base_url('assets/img/svg/cloud-icon.svg') ?>"
                      alt="Cloud Icon"
                    />
                  </div>

                  <div id="editImgCaption" class="input-file__placeholder">
                    Unggah Gambar Produk
                  </div>
                </label>

                <input
                  type="file"
                  name="image"
                  id="editImgFileInput"
                  accept="image/*"
                  onchange="editFileUploadChangeHandler(event)"
                />
              </div>

              <textarea
                name="description"
                id="editDescriptionInput"
                rows="4"
                placeholder="Masukan Deskripsi Produk Yang Akan Dijual"
              ></textarea>
            </div>

            <div class="btn-container">
              <button type="reset" class="btn btn-danger">Reset</button>
              <button type="submit" class="btn btn-success">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Delete Product Modal -->
    <div
      class="modal fade"
      id="deleteProductModal"
      tabindex="-1"
      aria-labelledby="deleteProductModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="#" class="delete-form">
            <h1>
              Apakah yakin akan menghapus
              <strong id="deletedProductName"></strong>
              ?
            </h1>

            <div class="btn-container">
              <button
                type="button"
                data-bs-dismiss="modal"
                class="btn btn-danger"
              >
                Tidak
              </button>

              <button type="submit" class="btn btn-success">Iya</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <main>
      <section>
        <h1>
          Dashboard -
          <span>Etalase</span>
        </h1>

        <div class="sales-content-container">
          <div class="sales-table-container table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Produk</th>
                  <th scope="col">Merek</th>
                  <th scope="col">Tipe</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Gambar</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Xiaomi Redmi 5 3/32GB</td>
                  <td>Xiaomi</td>
                  <td>Ponsel</td>
                  <td>400.000</td>
                  <td>
                    <img
                      src="<?= base_url('assets/img/product/1.png') ?>"
                      alt="Xiaomi Redmi 5 3/32GB"
                    />
                  </td>
                  <td>
                    <button
                      name="editButton"
                      class="btn btn-success"
                      data-bs-toggle="modal"
                      data-bs-target="#editProductModal"
                      onclick="editProductClickHandler(
                        event,
                        {
                          name: 'Xiaomi Redmi 5 3/32GB',
                          brand: 'Xiaomi',
                          type: 'Ponsel',
                          price: 400000,
                          imgLink: '../../../assets/img/product/1.png',
                          description: 'Xiaomi Redmi 5 3/32GB Description'
                        }
                      )"
                    >
                      Edit
                    </button>
                    |
                    <button
                      name="deleteButton"
                      class="btn btn-danger"
                      data-bs-toggle="modal"
                      data-bs-target="#deleteProductModal"
                      onclick="deleteClickHandler(
                        event,
                        {
                          id: 1,
                          name: 'Xiaomi Redmi 5 3/32GB'
                        }
                      )"
                    >
                      Hapus
                    </button>
                  </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Samsung A8 4/64</td>
                  <td>Samsung</td>
                  <td>Ponsel</td>
                  <td>570.000</td>
                  <td>
                    <img
                    src="<?= base_url('assets/img/product/2.png') ?>"
                      alt="Samsung A8 4/64"
                    />
                  </td>
                  <td>
                    <button
                      name="editButton"
                      class="btn btn-success"
                      data-bs-toggle="modal"
                      data-bs-target="#editProductModal"
                      onclick="editProductClickHandler(
                        event,
                        {
                          name: 'Samsung A8 4/64',
                          brand: 'Samsung',
                          type: 'Ponsel',
                          price: 570000,
                          imgLink: '../../../assets/img/product/2.png',
                          description: 'Samsung A8 4/64 Description'
                        }
                      )"
                    >
                      Edit
                    </button>
                    |
                    <button
                      name="deleteButton"
                      class="btn btn-danger"
                      data-bs-toggle="modal"
                      data-bs-target="#deleteProductModal"
                      onclick="deleteClickHandler(
                        event,
                        {
                          id: 2,
                          name: 'Samsung A8 4/64'
                        }
                      )"
                    >
                      Hapus
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <button
            name="addButton"
            class="add-button btn btn-success"
            data-bs-toggle="modal"
            data-bs-target="#addProductModal"
          >
            <span>+</span>
            Tambah
          </button>
        </div>
      </section>
    </main>
  </body>
</html>
