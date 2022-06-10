let defaultAddImgThumbnailImg = '';
let defaultEditImgThumbnailImg = '';

let editNameValue = '';
let editBrandValue = '';
let editTypeValue = '';
let editPriceValue = 0;
let editImgLinkValue = '';
let editDescriptionValue = '';

const addFileUploadChangeHandler = (e) => {
  const addImgThumbnail = document.getElementById('addImgThumbnail');
  addImgThumbnail.src = URL.createObjectURL(e.target.files[0]);

  const addImgCaption = document.getElementById('addImgCaption');
  addImgCaption.innerText = `File: ${e.target.files[0].name}`;

  console.log(e);
};

const addProductFormResetHandler = (e) => {
  const addImgThumbnail = document.getElementById('addImgThumbnail');
  addImgThumbnail.src = defaultAddImgThumbnailImg;

  const addImgCaption = document.getElementById('addImgCaption');
  addImgCaption.innerText = 'Unggah Gambar Produk';
};

const editProductClickHandler = (
  e,
  {
    name = '',
    brand = '',
    type = '',
    price = 0,
    imgLink = '',
    description = '',
  }
) => {
  // console.log(e);

  const deviceType = {
    Ponsel: '1',
    Laptop: '2',
  };

  defaultEditImgThumbnailImg = imgLink;

  editNameValue = name;
  editBrandValue = brand;
  editTypeValue = type;
  editPriceValue = price;
  editImgLinkValue = imgLink;
  editDescriptionValue = description;

  const editNameInput = document.getElementById('editNameInput');
  const editBrandInput = document.getElementById('editBrandInput');
  const editPriceInput = document.getElementById('editPriceInput');
  const editSelectOptions = document.querySelectorAll(
    '#editSelectInput option'
  );
  const editImgFileInput = document.getElementById('editImgFileInput');
  const editDescriptionTextarea = document.getElementById(
    'editDescriptionInput'
  );

  const editImgThumbnail = document.getElementById('editImgThumbnail');

  editNameInput.value = name;
  editBrandInput.value = brand;
  editPriceInput.value = price;
  editDescriptionTextarea.value = description;
  editImgThumbnail.src = imgLink;

  editSelectOptions[0].selected = false;

  for (let i = 0; i < editSelectOptions.length; i++) {
    if (editSelectOptions[i].value === deviceType[type]) {
      editSelectOptions[i].selected = true;
      break;
    }
  }
};

const editFileUploadChangeHandler = (e) => {
  const editImgThumbnail = document.getElementById('editImgThumbnail');
  editImgThumbnail.src = URL.createObjectURL(e.target.files[0]);

  const editImgCaption = document.getElementById('editImgCaption');
  editImgCaption.innerText = `File: ${e.target.files[0].name}`;

  console.log(e);
};

const editProductFormResetHandler = (e) => {
  e.preventDefault();

  const deviceType = {
    Ponsel: '1',
    Laptop: '2',
  };

  const editNameInput = document.getElementById('editNameInput');
  const editBrandInput = document.getElementById('editBrandInput');
  const editPriceInput = document.getElementById('editPriceInput');
  const editSelectOptions = document.querySelectorAll(
    '#editSelectInput option'
  );
  const editImgFileInput = document.getElementById('editImgFileInput');
  const editDescriptionTextarea = document.getElementById(
    'editDescriptionInput'
  );

  const editImgThumbnail = document.getElementById('editImgThumbnail');
  const editImgCaption = document.getElementById('editImgCaption');

  editNameInput.value = editNameValue;
  editBrandInput.value = editBrandValue;
  editPriceInput.value = editPriceValue;
  editDescriptionTextarea.value = editDescriptionValue;

  editImgThumbnail.src = editImgLinkValue;
  editImgCaption.innerText = 'Unggah Gambar Produk';

  editSelectOptions[0].selected = false;

  for (let i = 0; i < editSelectOptions.length; i++) {
    if (editSelectOptions[i].value === deviceType[editTypeValue]) {
      editSelectOptions[i].selected = true;
      break;
    }
  }
};

const deleteClickHandler = (e, { id = 0, name = '' }) => {
  const deletedProductNameSpan = document.getElementById('deletedProductName');

  deletedProductNameSpan.innerText = name;
};

document.addEventListener('DOMContentLoaded', (e) => {
  defaultAddImgThumbnailImg = document.getElementById('addImgThumbnail').src;
});
