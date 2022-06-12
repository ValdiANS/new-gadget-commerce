<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/login.css') ?>" />
</head>

<body>
  <main>
    <div class="img-container">
      <img src="<?= base_url('assets/img/svg/VGA.svg') ?>" alt="VGA" />
    </div>

    <div class="login-container">
      <form method="post" id="loginForm">
        <h1>Login</h1>
        <div class="alert alert-danger alert-dismissible" role="alert" id="alertLogin" style="margin-top: -10px; margin-bottom: -5px; display: none">
          <div id="message"></div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="input-container">
          <input type="text" name="usermail" class="usermail" id="usermail" placeholder="Username / e-mail address" onkeydown="removeErrorUsermail()" />
          <span id="usermail_error" style="margin-top: -10px; margin-bottom: -10px; display:none;"></span>

          <input type="password" name="password" class="password" id="password" placeholder="Password" onkeydown="removeErrorPassword()" />
          <span id="password_error" style="margin-top: -10px; margin-bottom: -10px; display:none;"></span>
        </div>

        <button type="submit" id="submitLogin">Login</button>

        <p>
          Haven't registered yet?
          <a href="<?= site_url('auth/register') ?>">Create an account here</a>
        </p>
      </form>
    </div>
  </main>
  <?php $this->load->view('partials/js') ?>
  <script>
    function removeErrorUsermail() {
      $('#usermail_error').html('');
    };

    function removeErrorPassword() {
      $('#password_error').html('');
    };
    $("#loginForm").on('submit', function(event) {
      event.preventDefault();
      $.ajax({
        url: '<?= site_url('auth/loginProcess') ?>',
        method: 'post',
        data: $(this).serialize(),
        dataType: 'json',
        beforeSend: function() {
          $('#submitLogin').attr('disabled', 'disabled');
        },
        success: function(data) {
          if (data.error) {
            if (data.usermail_error != '' && data.password_error != '') {
              $('#usermail_error').html(data.usermail_error);
              $('#usermail_error').slideDown(250);
              $('.usermail').addClass('is-invalid');
              $('#password_error').html(data.password_error);
              $('#password_error').slideDown(250);
              $('.password').addClass('is-invalid');
            } else if (data.usermail_error != '') {
              $('#usermail_error').html(data.usermail_error);
              $('#usermail_error').slideDown(250);
              $('.usermail').addClass('is-invalid');
            } else if (data.password_error != '') {
              $('#password_error').html(data.password_error);
              $('#password_error').slideDown(250);
              $('.password').addClass('is-invalid');
            }
            // else {
            //   $('#usermail_error').html('');
            //   $('#password_error').html('');
            // }
          }
          if (data.success_1) {
            $('#usermail_error').html('');
            $('#password_error').html('');
          }
          if (data.error_2) {
            $('#message').html(data.message);
            $('#alertLogin').fadeIn(250);
          }
          if (data.success_2) {
            Swal.fire({
              icon: 'success',
              title: data.message,
              showConfirmButton: false,
              timer: 2500
            }).then(function() {
              window.location = "<?= site_url('dashboard') ?>"
            });
          }
          $('#submitLogin').attr('disabled', false);
        }
      })
    });
  </script>
</body>

</html>