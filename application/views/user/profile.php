<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/profil.css') ?>" />
  <script src="<?= base_url('assets/js/profil.js') ?>" defer></script>
</head>

<body>
  <header>
    <?php $this->load->view('partials/sidebar') ?>
  </header>

  <main>
    <section id="profilSection" class="profil-section">
      <div class="profil-img-container">
        <div class="img-container">
          <img src="<?= base_url('assets/img/users/') . $user->img ?>" alt="Profil Picture" />
        </div>

        <button id="updateProfilPicBtn" class="d-none" onclick="changeProfilPhotoClickHandler(event)">
          Upload Image
        </button>
      </div>

      <div class="profil-content-container">
        <h1><?= $detail_user->username ?></h1>

        <div class="profil-form-container">
          <form action="user/editprofile" method="post">
            <div class="input-field-container">
              <div class="input-field">
                <label for="name">Name</label>

                <input type="text" id="name" name="name" value="<?= $user->name ?>" disabled />
              </div>

              <div class="input-field">
                <label for="username">Username</label>

                <input type="text" id="username" name="username" value="<?= $detail_user->username ?>" disabled />
              </div>

              <div class="input-field">
                <label for="phone">Phone</label>

                <input type="text" id="phone" name="phone" value="<?= $user->phone ?>" disabled />
              </div>

              <div class="input-field">
                <label for="address">Address</label>

                <input type="text" id="address" name="address" value="<?= $user->address ?>" disabled />
              </div>

              <div class="input-field">
                <label for="city">City</label>

                <input type="text" id="city" name="city" value="<?= $user->city ?>" disabled />
              </div>

              <div class="input-field">
                <label for="email">Email</label>

                <input type="email" id="email" name="email" value="<?= $detail_user->email ?>" disabled />
              </div>

              <div class="input-field">
                <label for="dateJoin">Date Joined</label>

                <input type="date" id="dateJoin" name="dateJoin" value="<?= $user->date_joined ?>" disabled />
              </div>
            </div>

            <div id="updateBtnContainer" class="btn-container d-none">
              <button type="submit" class="btn btn-success">
                Update Profile
              </button>

              <button type="button" class="btn btn-danger" onclick="cancelEditBtnClickHandler(event)">
                Cancel
              </button>
            </div>
          </form>

          <div class="btn-container">
            <button type="button" id="editProfileBtn" class="btn btn-success" onclick="editProfileBtnClickHandler(event)">
              Update Profile
            </button>

            <button type="button" id="changePasswordBtn" class="btn btn-success" onclick="changePasswordBtnClickHandler(event)">
              Change Password
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="changePasswordSection" class="change-password-section d-none">
      <h1>Change Password</h1>

      <div class="change-password-form-container">
        <form action="#">
          <div class="input-field-container">
            <div class="input-field">
              <label for="newPassword">
                <h3>New Password</h3>
              </label>

              <input type="password" name="newPassword" id="newPassword" pattern="(?=.*\d)[A-Za-z].{8,}" title="New Password" />
            </div>

            <div class="input-field">
              <label for="confirmNewPassword">
                <h3>Confirm New Password</h3>
              </label>

              <input type="password" name="confirmNewPassword" id="confirmNewPassword" title="Confirm New Password" />
            </div>
          </div>

          <div class="btn-container">
            <button type="submit" class="btn btn-success">
              Save Password
            </button>

            <button type="button" class="btn btn-danger" onclick="cancelChangePasswordClickHandler(event)">
              Cancel
            </button>
          </div>
        </form>
      </div>
    </section>

    <section id="changeProfilPhotoSection" class="change-profil-photo-section d-none">
      <div class="change-profil-photo-img-container">
        <div class="img-container">
          <img src="<?= base_url('assets/img/users/') . $user->img ?>" alt="Profil Picture" id="changeProfilePhotoImgThumbnail" />
        </div>
      </div>

      <div class="change-profil-photo-content-container">
        <h1><?= $detail_user->username ?></h1>

        <div class="change-profil-photo-form-container">
          <form action="#">
            <div class="input-field-container">
              <div class="input-field">
                <label for="profilImgFile">Choose Image</label>
                <input type="file" id="profilImgFile" name="profilImgFile" onchange="profilPhotoInputChangeHandler(event)" />
              </div>
            </div>

            <div class="btn-container">
              <button type="submit" class="btn btn-success">
                Save Changes
              </button>

              <button type="button" class="btn btn-danger" onclick="cancelChangeProfilPhotoClickHandler(event)">
                Cancel
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
</body>

</html>