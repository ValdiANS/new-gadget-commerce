<?php
require_once "../../script/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Buat Akun | Gadget Commerce</title>

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

    <link rel="stylesheet" href="<?= base_url('assets/styles/register.css') ?>" />
  </head>

  <body>
    <main>
      <div class="img-container">
        <img src="<?= base_url('assets/img/smartphone.png') ?>" alt="Smartphone" />
      </div>

      <div class="form-container">
        <form action="#">
          <h1>Buat Akun</h1>

          <div class="input-container">
            <input
              type="email"
              name="email"
              placeholder="Masukkan alamat e-mail"
              required
            />

            <input
              type="text"
              name="name"
              placeholder="Masukkan nama"
              required
            />

            <input
              type="text"
              name="username"
              placeholder="Masukkan nama pengguna"
              required
            />

            <input
              type="password"
              name="password"
              placeholder="Masukkan kata sandi"
              required
            />

            <input
              type="password"
              name="passwordConfirmation"
              placeholder="Masukkan ulang kata sandi"
              required
            />

            <input
              type="text"
              name="city"
              placeholder="Masukkan Kota Asal"
              required
            />
          </div>

          <button type="submit">Daftar</button>

          <p>
            Sudah punya akun?
            <a href="<?= base_url('views/pages/login.php') ?>">Masuk di sini</a>
          </p>
        </form>
      </div>
    </main>
  </body>
</html>
