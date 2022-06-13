const buyBtnClickHandler = (event, { price = 0, sale_id }) => {
	const priceInput = document.getElementById("priceInput");
	const saleIDInput = document.getElementById("saleIDInput");

	saleIDInput.value = sale_id;
		priceInput.value = price;
};
