const buyBtnClickHandler = (event, { price = 0 }) => {
	const priceInput = document.getElementById("priceInput");

	priceInput.value = price;
};
