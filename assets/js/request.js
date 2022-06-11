let activeRequestTable = 'seller';

const toggleRequestTable = (e) => {
  const toggleRequestButton = document.getElementById('toggleRequest');
  const sellerRequest = document.getElementById('sellerRequest');
  const buyerRequest = document.getElementById('buyerRequest');

  if (activeRequestTable === 'seller') {
    buyerRequest.classList.remove('d-none');
    sellerRequest.classList.add('d-none');

    toggleRequestButton.innerHTML =
      'Lihat tawaran sebagai <strong>penjual</strong>';

    activeRequestTable = 'buyer';

    return;
  }

  if (activeRequestTable === 'buyer') {
    sellerRequest.classList.remove('d-none');
    buyerRequest.classList.add('d-none');

    toggleRequestButton.innerHTML =
      'Lihat tawaran sebagai <strong>pembeli</strong>';

    activeRequestTable = 'seller';

    return;
  }
};

const reviewClickHandler = (event, { name = '' }) => {
  const reviewedProductName = document.getElementById('reviewedProductName');

  reviewedProductName.innerText = name;
};
