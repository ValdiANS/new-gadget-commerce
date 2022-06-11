let isReviewSectionActive = false;

const seeReviewBtnClickHandler = (event) => {
  const seeReviewBtn = document.querySelector('#seeReviewBtn > b');
  const reviewSection = document.getElementById('reviewSection');

  if (!isReviewSectionActive) {
    seeReviewBtn.innerText = 'Tutup Review';
    reviewSection.classList.remove('d-none');

    isReviewSectionActive = true;

    return;
  }

  seeReviewBtn.innerText = 'Lihat Review';
  reviewSection.classList.add('d-none');
  isReviewSectionActive = false;
};
