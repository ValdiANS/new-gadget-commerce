<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/register.css') ?>" />
</head>

<body>
  <main>
    <div class="img-container">
      <img src="<?= base_url('assets/img/smartphone.png') ?>" alt="Smartphone" />
    </div>

    <div class="form-container">
      <form id="registerForm" method="post">
        <h1>Create Account</h1>
        <div class="input-container">
          <input type="text" name="name" placeholder="Masukkan nama" onkeydown="removeErrorName()" />
          <span id="name_error" style="margin-top: -10px; margin-bottom: -10px;"></span>

          <input type="text" name="email" placeholder="Masukkan alamat e-mail" onkeydown="removeErrorEmail()" />
          <span id="email_error" style="margin-top: -10px; margin-bottom: -10px;"></span>

          <input type="text" name="username" placeholder="Masukkan nama pengguna" onkeydown="removeErrorUsername()" />
          <span id="username_error" style="margin-top: -10px; margin-bottom: -10px;"></span>

          <input type="password" name="password" placeholder="Masukkan kata sandi" onkeydown="removeErrorPassword()" />
          <span id="password_error" style="margin-top: -10px; margin-bottom: -10px;"></span>

          <input type="password" name="password2" placeholder="Masukkan ulang kata sandi" onkeydown="removeErrorPassword2()" />
          <span id="password2_error" style="margin-top: -10px; margin-bottom: -10px;"></span>

          <input type="text" name="phone" placeholder="Masukkan nomor hape" onkeydown="removeErrorPhone()" />
          <span id="phone_error" style="margin-top: -10px; margin-bottom: -10px;"></span>

          <input type="text" name="address" placeholder="Masukkan Alamat" onkeydown="removeErrorAddress()" />
          <span id="address_error" style="margin-top: -10px; margin-bottom: -10px;"></span>

          <input type="text" name="city" placeholder="Masukkan Kota Asal" onkeydown="removeErrorCity()" />
          <span id="city_error" style="margin-top: -10px; margin-bottom: -10px;"></span>
        </div>

        <button type="submit">Register</button>

        <p>
          Already have an account?
          <a href="<?= site_url('auth/login') ?>">Login here</a>
        </p>
      </form>
    </div>
  </main>
  <?php $this->load->view('partials/js') ?>
  <script>
    function removeErrorName() {
      $('#name_error').html('');
    };

    function removeErrorEmail() {
      $('#email_error').html('');
    };

    function removeErrorUsername() {
      $('#username_error').html('');
    };

    function removeErrorPassword() {
      $('#password_error').html('');
    };

    function removeErrorPassword2() {
      $('#password2_error').html('');
    };

    function removeErrorPhone() {
      $('#phone_error').html('');
    };

    function removeErrorAddress() {
      $('#address_error').html('');
    };

    function removeErrorCity() {
      $('#city_error').html('');
    };

    $("#registerForm").on('submit', function(event) {
      event.preventDefault();
      $.ajax({
        url: '<?= site_url('auth/registerProcess') ?>',
        method: 'post',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
          if (data.error) {
            if (data.name != '') {
              $('#name_error').html(data.name_error);
              $('#name_error').slideDown(250);
            }
            if (data.email != '') {
              $('#email_error').html(data.email_error);
              $('#email_error').slideDown(250);
            }
            if (data.username != '') {
              $('#username_error').html(data.username_error);
              $('#username_error').slideDown(250);
            }
            if (data.password != '') {
              $('#password_error').html(data.password_error);
              $('#password_error').slideDown(250);
            }
            if (data.password2 != '') {
              $('#password2_error').html(data.password2_error);
              $('#password2_error').slideDown(250);
            }
            if (data.phone != '') {
              $('#phone_error').html(data.phone_error);
              $('#phone_error').slideDown(250);
            }
            if (data.address != '') {
              $('#address_error').html(data.address_error);
              $('#address_error').slideDown(250);
            }
            if (data.city != '') {
              $('#city_error').html(data.city_error);
              $('#city_error').slideDown(250);
            }
          }
          if (data.success) {
            Swal.fire({
              icon: 'success',
              title: data.message,
              showConfirmButton: false,
              timer: 2500
            }).then(function() {
              window.location = "<?= site_url('auth/login') ?>"
            });
          }
          $('#submitLogin').attr('disabled', false);
        }
      })
    });
  </script>
</body>

</html>