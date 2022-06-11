<?php
require_once "../../../script/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Profil | Gadget Commerce</title>

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

    <link rel="stylesheet" href="<?= base_url('assets/styles/profil.css') ?>" />

    <script src="<?= base_url('assets/js/profil.js') ?>" defer></script>
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
                    class="nav-link active"
                    aria-current="page"
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
                    class="nav-link"
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
      <section id="profilSection" class="profil-section">
        <div class="profil-img-container">
          <div class="img-container">
            <img
              src="<?= base_url('assets/img/default-profil-picture.png') ?>"
              alt="Profil Picture"
            />
          </div>

          <button
            id="updateProfilPicBtn"
            class="d-none"
            onclick="changeProfilPhotoClickHandler(event)"
          >
            Ubah Foto
          </button>
        </div>

        <div class="profil-content-container">
          <h1>User1</h1>

          <div class="profil-form-container">
            <form action="#">
              <div class="input-field-container">
                <div class="input-field">
                  <label for="name">Name</label>

                  <input
                    type="text"
                    id="name"
                    name="name"
                    value="Tuan Muda Lord Vinicius"
                    disabled
                  />
                </div>

                <div class="input-field">
                  <label for="username">Username</label>

                  <input
                    type="text"
                    id="username"
                    name="username"
                    value="User1"
                    disabled
                  />
                </div>

                <div class="input-field">
                  <label for="phone">Phone</label>

                  <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="08123456789"
                    disabled
                  />
                </div>

                <div class="input-field">
                  <label for="address">Address</label>

                  <input
                    type="text"
                    id="address"
                    name="address"
                    value="Bandung"
                    disabled
                  />
                </div>

                <div class="input-field">
                  <label for="city">City</label>

                  <input
                    type="text"
                    id="city"
                    name="city"
                    value="Bandung"
                    disabled
                  />
                </div>

                <div class="input-field">
                  <label for="email">Email</label>

                  <input
                    type="email"
                    id="email"
                    name="email"
                    value="tuanmudalordvini007@mail.com"
                    disabled
                  />
                </div>

                <div class="input-field">
                  <label for="dateJoin">Date Joined</label>

                  <input
                    type="date"
                    id="dateJoin"
                    name="dateJoin"
                    value="2022-05-05"
                    disabled
                  />
                </div>
              </div>

              <div id="updateBtnContainer" class="btn-container d-none">
                <button type="submit" class="btn btn-success">
                  Perbarui Profile
                </button>

                <button
                  type="button"
                  class="btn btn-danger"
                  onclick="cancelEditBtnClickHandler(event)"
                >
                  Batal
                </button>
              </div>
            </form>

            <div class="btn-container">
              <button
                type="button"
                id="editProfileBtn"
                class="btn btn-success"
                onclick="editProfileBtnClickHandler(event)"
              >
                Edit Profile
              </button>

              <button
                type="button"
                id="changePasswordBtn"
                class="btn btn-success"
                onclick="changePasswordBtnClickHandler(event)"
              >
                Ganti Password
              </button>
            </div>
          </div>
        </div>
      </section>

      <section
        id="changePasswordSection"
        class="change-password-section d-none"
      >
        <h1>Ubah Password</h1>

        <div class="change-password-form-container">
          <form action="#">
            <div class="input-field-container">
              <div class="input-field">
                <label for="newPassword">
                  <h3>Password Baru</h3>
                </label>

                <input
                  type="password"
                  name="newPassword"
                  id="newPassword"
                  pattern="(?=.*\d)[A-Za-z].{8,}"
                  title="Password Baru"
                />

                <small>
                  Gunakan minimal 8 karakter dengan kombinasi huruf dan angka.
                </small>
              </div>

              <div class="input-field">
                <label for="confirmNewPassword">
                  <h3>Konfirmasi Password Baru</h3>
                </label>

                <input
                  type="password"
                  name="confirmNewPassword"
                  id="confirmNewPassword"
                  title="Konfirmasi Password Baru"
                />
              </div>
            </div>

            <div class="btn-container">
              <button type="submit" class="btn btn-success">
                Simpan Password
              </button>

              <button
                type="button"
                class="btn btn-danger"
                onclick="cancelChangePasswordClickHandler(event)"
              >
                Batal
              </button>
            </div>
          </form>
        </div>
      </section>

      <section
        id="changeProfilPhotoSection"
        class="change-profil-photo-section d-none"
      >
        <div class="change-profil-photo-img-container">
          <div class="img-container">
            <img
              src="<?= base_url('assets/img/default-profil-picture.png') ?>"
              alt="Profil Picture"
              id="changeProfilePhotoImgThumbnail"
            />
          </div>
        </div>

        <div class="change-profil-photo-content-container">
          <h1>User1</h1>

          <div class="change-profil-photo-form-container">
            <form action="#">
              <div class="input-field-container">
                <div class="input-field">
                  <label for="profilImgFile">Pilih Foto</label>
                  <input
                    type="file"
                    id="profilImgFile"
                    name="profilImgFile"
                    onchange="profilPhotoInputChangeHandler(event)"
                  />
                </div>
              </div>

              <div class="btn-container">
                <button type="submit" class="btn btn-success">
                  Simpan Foto
                </button>

                <button
                  type="button"
                  class="btn btn-danger"
                  onclick="cancelChangeProfilPhotoClickHandler(event)"
                >
                  Batal
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
