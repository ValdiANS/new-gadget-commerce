const editProfileBtnClickHandler = (e) => {
  const updateProfilPicBtn = document.getElementById('updateProfilPicBtn');

  const nameInput = document.querySelector(
    '.profil-form-container > form input#name'
  );
  const usernameInput = document.querySelector(
    '.profil-form-container > form input#username'
  );
  const phoneInput = document.querySelector(
    '.profil-form-container > form input#phone'
  );
  const addressInput = document.querySelector(
    '.profil-form-container > form input#address'
  );
  const cityInput = document.querySelector(
    '.profil-form-container > form input#city'
  );
  const emailInput = document.querySelector(
    '.profil-form-container > form input#email'
  );

  const updateBtnContainer = document.getElementById('updateBtnContainer');
  const profileActionBtnContainer = document.querySelector(
    '.profil-form-container > .btn-container'
  );

  updateProfilPicBtn.classList.remove('d-none');

  updateBtnContainer.classList.remove('d-none');
  profileActionBtnContainer.classList.add('d-none');

  nameInput.disabled = false;
  usernameInput.disabled = false;
  phoneInput.disabled = false;
  addressInput.disabled = false;
  cityInput.disabled = false;
  emailInput.disabled = false;
};

const changePasswordBtnClickHandler = (event) => {
  const profilSection = document.getElementById('profilSection');
  const changePasswordSection = document.getElementById(
    'changePasswordSection'
  );

  profilSection.classList.add('d-none');
  changePasswordSection.classList.remove('d-none');
};

const cancelEditBtnClickHandler = (event) => {
  const updateProfilPicBtn = document.getElementById('updateProfilPicBtn');

  const nameInput = document.querySelector(
    '.profil-form-container > form input#name'
  );
  const usernameInput = document.querySelector(
    '.profil-form-container > form input#username'
  );
  const phoneInput = document.querySelector(
    '.profil-form-container > form input#phone'
  );
  const addressInput = document.querySelector(
    '.profil-form-container > form input#address'
  );
  const cityInput = document.querySelector(
    '.profil-form-container > form input#city'
  );
  const emailInput = document.querySelector(
    '.profil-form-container > form input#email'
  );

  const updateBtnContainer = document.getElementById('updateBtnContainer');
  const profileActionBtnContainer = document.querySelector(
    '.profil-form-container > .btn-container'
  );

  updateProfilPicBtn.classList.add('d-none');

  updateBtnContainer.classList.add('d-none');
  profileActionBtnContainer.classList.remove('d-none');

  nameInput.disabled = true;
  usernameInput.disabled = true;
  phoneInput.disabled = true;
  addressInput.disabled = true;
  cityInput.disabled = true;
  emailInput.disabled = true;
};

const changeProfilPhotoClickHandler = (event) => {
  const profilSection = document.getElementById('profilSection');
  const changeProfilPhotoSection = document.getElementById(
    'changeProfilPhotoSection'
  );

  profilSection.classList.add('d-none');
  changeProfilPhotoSection.classList.remove('d-none');

  cancelEditBtnClickHandler();
};

const cancelChangePasswordClickHandler = (event) => {
  const profilSection = document.getElementById('profilSection');
  const changePasswordSection = document.getElementById(
    'changePasswordSection'
  );

  profilSection.classList.remove('d-none');
  changePasswordSection.classList.add('d-none');
};

const cancelChangeProfilPhotoClickHandler = (event) => {
  const profilSection = document.getElementById('profilSection');
  const changeProfilPhotoSection = document.getElementById(
    'changeProfilPhotoSection'
  );

  profilSection.classList.remove('d-none');
  changeProfilPhotoSection.classList.add('d-none');
};

const profilPhotoInputChangeHandler = (event) => {
  const changeProfilePhotoImgThumbnail = document.getElementById(
    'changeProfilePhotoImgThumbnail'
  );

  changeProfilePhotoImgThumbnail.src = URL.createObjectURL(
    event.target.files[0]
  );
};
